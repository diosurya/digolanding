@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-8">
    <!-- Welcome Section -->
    <div class="bg-indigo-600 rounded-[2.5rem] p-10 text-white relative overflow-hidden shadow-2xl shadow-indigo-600/20">
        <div class="relative z-10">
            <h3 class="text-3xl font-black mb-2 leading-tight">Selamat Datang, {{ auth()->user()->name }}!</h3>
            <p class="text-indigo-100 font-medium max-w-xl italic">Senang melihat Anda kembali. Kelola ekosistem digital Digosoft dengan mudah melalui dashboard kontrol ini.</p>
        </div>
        <div class="absolute top-0 right-0 p-12 opacity-10 pointer-events-none">
            <i data-lucide="sparkles" class="w-60 h-60"></i>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
            <div class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <i data-lucide="newspaper" class="w-6 h-6 text-indigo-600"></i>
            </div>
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Total Artikel</p>
            <h4 class="text-3xl font-black text-slate-900">{{ \App\Models\Post::count() }}</h4>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
            <div class="w-14 h-14 bg-emerald-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <i data-lucide="check-circle" class="w-6 h-6 text-emerald-600"></i>
            </div>
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Published</p>
            <h4 class="text-3xl font-black text-slate-900">{{ \App\Models\Post::where('is_published', true)->count() }}</h4>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
            <div class="w-14 h-14 bg-amber-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <i data-lucide="file-edit" class="w-6 h-6 text-amber-600"></i>
            </div>
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Draft</p>
            <h4 class="text-3xl font-black text-slate-900">{{ \App\Models\Post::where('is_published', false)->count() }}</h4>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all group">
            <div class="w-14 h-14 bg-rose-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                <i data-lucide="users" class="w-6 h-6 text-rose-600"></i>
            </div>
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Total Admin</p>
            <h4 class="text-3xl font-black text-slate-900">{{ \App\Models\User::count() }}</h4>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Posts Section -->
        <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-slate-900 uppercase tracking-tighter italic">Artikel Terbaru</h3>
                <a href="{{ route('admin.blog.index') }}" class="text-xs font-black text-indigo-600 uppercase tracking-widest hover:text-indigo-700">Lihat Semua</a>
            </div>
            
            <div class="space-y-4">
                @forelse(\App\Models\Post::latest()->take(5)->get() as $post)
                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-indigo-100 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-slate-200 overflow-hidden flex-shrink-0">
                            @if($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <i data-lucide="image" class="w-5 h-5 text-slate-300"></i>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-bold text-slate-900 truncate group-hover:text-indigo-600 transition-colors">{{ $post->title }}</p>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        <a href="{{ route('admin.blog.edit', $post) }}" class="p-2 text-slate-400 hover:text-indigo-600 transition-all">
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                @empty
                    <p class="text-slate-400 italic text-center py-10">Belum ada artikel.</p>
                @endforelse
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="bg-slate-900 rounded-[2.5rem] p-10 text-white relative overflow-hidden shadow-2xl shadow-black/20">
            <div class="absolute top-0 right-0 p-12 opacity-5 pointer-events-none">
                <i data-lucide="zap" class="w-40 h-40"></i>
            </div>
            <h3 class="text-xl font-black mb-8 uppercase tracking-tighter italic relative z-10">Aksi Cepat</h3>
            
            <div class="grid grid-cols-2 gap-4 relative z-10">
                <a href="{{ route('admin.blog.create') }}" class="flex flex-col items-center justify-center p-6 rounded-3xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-500/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i data-lucide="plus-circle" class="w-6 h-6 text-indigo-400"></i>
                    </div>
                    <span class="text-xs font-black uppercase tracking-widest text-white">Tulis Blog</span>
                </a>

                <a href="{{ route('profile.edit') }}" class="flex flex-col items-center justify-center p-6 rounded-3xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i data-lucide="settings" class="w-6 h-6 text-amber-400"></i>
                    </div>
                    <span class="text-xs font-black uppercase tracking-widest text-white">Profil</span>
                </a>

                <a href="/" target="_blank" class="flex flex-col items-center justify-center p-6 rounded-3xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i data-lucide="globe" class="w-6 h-6 text-emerald-400"></i>
                    </div>
                    <span class="text-xs font-black uppercase tracking-widest text-white">Website</span>
                </a>

                <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full flex flex-col items-center justify-center p-6 rounded-3xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all group">
                        <div class="w-12 h-12 rounded-2xl bg-rose-500/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i data-lucide="power" class="w-6 h-6 text-rose-400"></i>
                        </div>
                        <span class="text-xs font-black uppercase tracking-widest text-white">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
