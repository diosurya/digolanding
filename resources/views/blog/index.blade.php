@extends('layouts.landing')

@section('title', 'Blog - DIGOSOFT')

@section('content')
    <section class="pt-32 pb-20 px-6 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">Blog & Berita</h1>
                <p class="text-lg text-slate-500">Update terbaru seputar teknologi dan bisnis dari DIGOSOFT.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($posts as $post)
                    <article class="bg-white rounded-[2rem] overflow-hidden border border-slate-100 hover:shadow-xl transition-all group">
                        @if($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-slate-200 flex items-center justify-center">
                                <i data-lucide="image" class="w-12 h-12 text-slate-400"></i>
                            </div>
                        @endif
                        <div class="p-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-full text-[10px] font-black uppercase tracking-widest">Berita</span>
                                <span class="text-xs text-slate-400 font-bold uppercase tracking-widest">{{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                            </div>
                            <h2 class="text-xl font-black text-slate-900 mb-4 group-hover:text-digo-cyan transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h2>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-3">
                                {{ Str::limit(strip_tags($post->content), 120) }}
                            </p>
                            <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center gap-2 text-digo-cyan font-black text-xs uppercase tracking-widest group">
                                Baca Selengkapnya <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-20">
                        <p class="text-slate-400 italic">Belum ada postingan blog.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-16">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection
