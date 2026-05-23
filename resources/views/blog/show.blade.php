@extends('layouts.landing')

@section('title', $post->meta_title ?? $post->title . ' - DIGOSOFT')
@section('meta_description', $post->meta_description)

@if($post->featured_image)
    @section('og_image', asset('storage/' . $post->featured_image))
@endif

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
                            <!-- WhatsApp -->
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' - ' . url()->current()) }}" target="_blank" class="w-10 h-10 rounded-full bg-[#25D366]/10 flex items-center justify-center text-[#25D366] hover:bg-[#25D366] hover:text-white transition-all" title="Share ke WhatsApp">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.79 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </a>
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="w-10 h-10 rounded-full bg-[#1877F2]/10 flex items-center justify-center text-[#1877F2] hover:bg-[#1877F2] hover:text-white transition-all" title="Share ke Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-4h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </a>
                            <!-- Twitter / X -->
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-900/10 flex items-center justify-center text-slate-900 hover:bg-slate-900 hover:text-white transition-all" title="Share ke Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-9.56-6.638 9.56H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                            </a>
                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="w-10 h-10 rounded-full bg-[#0A66C2]/10 flex items-center justify-center text-[#0A66C2] hover:bg-[#0A66C2] hover:text-white transition-all" title="Share ke LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
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
