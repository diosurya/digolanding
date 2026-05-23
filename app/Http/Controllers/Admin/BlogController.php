<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:posts,slug',
            'content' => 'required',
            'featured_image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['is_published'] = $request->has('is_published');
        
        if ($validated['is_published'] && !$request->published_at) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('posts', 'public');
            $validated['featured_image'] = $path;
        }

        Post::create($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $blog)
    {
        return view('admin.blog.edit', ['post' => $blog]);
    }

    public function update(Request $request, Post $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:posts,slug,' . $blog->id,
            'content' => 'required',
            'featured_image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'is_published' => 'nullable|boolean',
        ]);

        $validated['is_published'] = $request->has('is_published');

        if ($validated['is_published'] && !$blog->published_at) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('posts', 'public');
            $validated['featured_image'] = $path;
        }

        $blog->update($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Post deleted successfully.');
    }
}
