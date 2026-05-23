@extends('layouts.landing')

@section('title', $post->meta_title ?? $post->title . ' - DIGOSOFT')
@section('meta_description', $post->meta_description)

@section('content')
    <article class="pt-32 pb-20 px-6">
        <div class="max-w-4xl mx-auto">
            <header class="mb-12">
                <div class="flex items-center gap-4 mb-6">
                    <span class="px-4 py-1 bg-indigo-50 text-indigo-600 rounded-full text-xs font-black uppercase tracking-widest">Berita</span>
                    <span class="text-sm text-slate-400 font-bold uppercase tracking-widest">{{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-slate-900 mb-8 leading-tight">{{ $post->title }}</h1>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-slate-200 rounded-full flex items-center justify-center">
                        <i data-lucide="user" class="w-6 h-6 text-slate-400"></i>
                    </div>
                    <div>
                        <p class="text-sm font-black text-slate-900">{{ $post->user->name }}</p>
                        <p class="text-xs text-slate-500 font-bold uppercase tracking-widest">Penulis</p>
                    </div>
                </div>
            </header>

            @if($post->featured_image)
                <div class="mb-12 rounded-[2.5rem] overflow-hidden shadow-2xl">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto">
                </div>
            @endif

            <div class="prose prose-lg prose-slate max-w-none prose-headings:font-black prose-headings:text-slate-900 prose-p:leading-relaxed prose-p:text-slate-600 prose-strong:text-slate-900">
                {!! $post->content !!}
            </div>

            <footer class="mt-20 pt-12 border-t border-slate-100">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="flex items-center gap-4">
                        <span class="text-xs font-black text-slate-400 uppercase tracking-widest">Bagikan:</span>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-all"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-all"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-all"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                        </div>
                    </div>
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 bg-slate-900 text-white px-8 py-4 rounded-xl font-bold hover:opacity-90 transition-all">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali ke Blog
                    </a>
                </div>
            </footer>
        </div>
    </article>
@endsection

@push('css')
<style>
    /* Basic prose styles if tailwind-typography is not available */
    .prose img { border-radius: 1.5rem; margin: 2rem 0; }
    .prose h2 { font-size: 2.25rem; margin-top: 3rem; margin-bottom: 1.5rem; }
    .prose h3 { font-size: 1.875rem; margin-top: 2.5rem; margin-bottom: 1.25rem; }
</style>
@endpush
