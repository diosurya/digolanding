<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.blog.index', compact('posts'));
    }

    public function checkSlug(Request $request)
    {
        $slug = Str::slug($request->slug);
        $id = $request->id;

        $exists = Post::where('slug', $slug)
            ->when($id, function ($query, $id) {
                return $query->where('id', '!=', $id);
            })
            ->exists();

        return response()->json(['exists' => $exists, 'slug' => $slug]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|max:255|unique:posts,slug',
                'content' => 'required',
                'featured_image' => 'nullable|image|max:2048',
                'meta_title' => 'nullable|max:255',
                'meta_description' => 'nullable',
            ]);

            $validated['user_id'] = Auth::id();
            $validated['is_published'] = $request->has('is_published');
            
            if ($validated['is_published']) {
                $validated['published_at'] = now();
            }

            if ($request->hasFile('featured_image')) {
                $path = $request->file('featured_image')->store('posts', 'public');
                $validated['featured_image'] = $path;
            }

            Post::create($validated);

            return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil disimpan!');
        } catch (\Exception $e) {
            Log::error('Blog Store Error: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Gagal menyimpan artikel: ' . $e->getMessage());
        }
    }

    public function edit(Post $blog)
    {
        return view('admin.blog.edit', ['post' => $blog]);
    }

    public function update(Request $request, Post $blog)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|max:255|unique:posts,slug,' . $blog->id,
                'content' => 'required',
                'featured_image' => 'nullable|image|max:2048',
                'meta_title' => 'nullable|max:255',
                'meta_description' => 'nullable',
            ]);

            $validated['is_published'] = $request->has('is_published');

            if ($validated['is_published'] && !$blog->published_at) {
                $validated['published_at'] = now();
            }

            if ($request->hasFile('featured_image')) {
                // Delete old image if exists
                if ($blog->featured_image) {
                    Storage::disk('public')->delete($blog->featured_image);
                }
                $path = $request->file('featured_image')->store('posts', 'public');
                $validated['featured_image'] = $path;
            }

            $blog->update($validated);

            return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error('Blog Update Error: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Gagal memperbarui artikel: ' . $e->getMessage());
        }
    }

    public function destroy(Post $blog)
    {
        try {
            if ($blog->featured_image) {
                Storage::disk('public')->delete($blog->featured_image);
            }
            $blog->delete();
            return redirect()->route('admin.blog.index')->with('success', 'Artikel berhasil dihapus!');
        } catch (\Exception $e) {
            Log::error('Blog Destroy Error: ' . $e->getMessage());
            return back()->with('error', 'Gagal menghapus artikel: ' . $e->getMessage());
        }
    }
}
