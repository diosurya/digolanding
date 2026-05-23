@extends('layouts.admin.app')

@section('title', 'Blog Posts')

@section('content')
<div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden">
    <div class="p-8 flex flex-col md:flex-row justify-between items-center gap-4 border-b border-slate-50">
        <div>
            <h3 class="text-xl font-black text-slate-900">Daftar Artikel</h3>
            <p class="text-sm text-slate-500 font-medium">Kelola semua konten blog Anda di sini.</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="inline-flex items-center gap-2 bg-indigo-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-600/20 text-sm">
            <i data-lucide="plus" class="w-4 h-4"></i> Tulis Artikel Baru
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50/50">
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Artikel</th>
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Status</th>
                    <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Tanggal</th>
                    <th class="px-8 py-5 text-right text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @forelse($posts as $post)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-12 rounded-lg bg-slate-100 flex-shrink-0 overflow-hidden border border-slate-200">
                                    @if($post->featured_image)
                                        <img src="{{ asset('storage/' . $post->featured_image) }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center">
                                            <i data-lucide="image" class="w-5 h-5 text-slate-300"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="max-w-xs md:max-w-md">
                                    <p class="text-sm font-black text-slate-900 truncate">{{ $post->title }}</p>
                                    <p class="text-xs text-slate-400 font-medium truncate">{{ $post->slug }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            @if($post->is_published)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-600 text-[10px] font-black uppercase tracking-widest">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                    Published
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-100 text-slate-500 text-[10px] font-black uppercase tracking-widest">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    Draft
                                </span>
                            @endif
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-xs font-bold text-slate-600">{{ $post->published_at ? $post->published_at->format('d M Y') : '-' }}</p>
                            <p class="text-[10px] text-slate-400 font-medium">{{ $post->published_at ? $post->published_at->format('H:i') : '' }}</p>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('blog.show', $post->slug) }}" target="_blank" class="p-2 text-slate-400 hover:text-indigo-600 transition-all" title="View">
                                    <i data-lucide="eye" class="w-5 h-5"></i>
                                </a>
                                <a href="{{ route('admin.blog.edit', $post) }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-all" title="Edit">
                                    <i data-lucide="edit-3" class="w-5 h-5"></i>
                                </a>
                                <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 transition-all" title="Delete">
                                        <i data-lucide="trash-2" class="w-5 h-5"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-8 py-20 text-center">
                            <div class="flex flex-col items-center">
                                <div class="w-20 h-20 rounded-full bg-slate-50 flex items-center justify-center mb-4">
                                    <i data-lucide="newspaper" class="w-10 h-10 text-slate-200"></i>
                                </div>
                                <p class="text-slate-400 font-bold italic">Belum ada artikel yang dibuat.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($posts->hasPages())
        <div class="px-8 py-6 border-t border-slate-50 bg-slate-50/30">
            {{ $posts->links() }}
        </div>
    @endif
</div>
@endsection
