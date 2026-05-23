<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') - DIGOSOFT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        digo: {
                            cyan: '#0cc0df',
                            dark: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    @stack('css')
</head>
<body class="h-full overflow-hidden" x-data="{ sidebarOpen: false }">
    <div class="flex h-screen bg-gray-50">
        <!-- Sidebar -->
        <div :class="sidebarOpen ? 'block' : 'hidden'" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden" @click="sidebarOpen = false"></div>

        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-72 transition duration-300 transform bg-digo-dark lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex flex-col h-full">
                <!-- Sidebar Header (Logo) -->
                <div class="flex items-center justify-center h-20 px-6 bg-digo-dark border-b border-slate-800">
                    <img src="/template/dist/assets/images/Digosoft.png" alt="Digosoft Logo" class="h-10">
                </div>

                <!-- Navigation Links -->
                <nav class="flex-1 overflow-y-auto mt-6 px-4 space-y-2">
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-bold transition-colors duration-200 rounded-xl {{ request()->routeIs('dashboard') ? 'bg-digo-cyan text-white shadow-lg shadow-digo-cyan/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                        <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3"></i>
                        Dashboard
                    </a>

                    <div class="pt-4 pb-2">
                        <span class="px-4 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Manajemen Konten</span>
                    </div>

                    <a href="{{ route('admin.blog.index') }}" class="flex items-center px-4 py-3 text-sm font-bold transition-colors duration-200 rounded-xl {{ request()->routeIs('admin.blog.*') ? 'bg-digo-cyan text-white shadow-lg shadow-digo-cyan/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                        <i data-lucide="newspaper" class="w-5 h-5 mr-3"></i>
                        Blog Posts
                    </a>

                    <div class="pt-4 pb-2">
                        <span class="px-4 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Pengaturan</span>
                    </div>

                    <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 text-sm font-bold transition-colors duration-200 rounded-xl {{ request()->routeIs('profile.*') ? 'bg-digo-cyan text-white shadow-lg shadow-digo-cyan/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                        <i data-lucide="user-cog" class="w-5 h-5 mr-3"></i>
                        Profile Settings
                    </a>

                    <a href="/" target="_blank" class="flex items-center px-4 py-3 text-sm font-bold text-slate-400 transition-colors duration-200 rounded-xl hover:bg-slate-800 hover:text-white">
                        <i data-lucide="external-link" class="w-5 h-5 mr-3"></i>
                        Lihat Website
                    </a>
                </nav>

                <!-- Sidebar Footer (User) -->
                <div class="p-4 bg-slate-900">
                    <div class="flex items-center p-2 rounded-xl bg-slate-800/50">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                        <div class="ml-3 overflow-hidden">
                            <p class="text-xs font-black text-white truncate">{{ auth()->user()->name }}</p>
                            <p class="text-[10px] text-slate-400 truncate">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}" class="mt-4">
                        @csrf
                        <button type="submit" class="flex items-center w-full px-4 py-2 text-xs font-black text-rose-400 hover:bg-rose-500/10 hover:text-rose-500 rounded-lg transition-all uppercase tracking-widest">
                            <i data-lucide="log-out" class="w-4 h-4 mr-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Header -->
            <header class="flex items-center justify-between px-6 py-4 bg-white border-b border-slate-200 lg:py-4">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-slate-500 focus:outline-none lg:hidden">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                    <div class="ml-4 lg:ml-0">
                        <h2 class="text-xl font-black text-slate-900">@yield('title', 'Admin Dashboard')</h2>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button class="flex items-center text-slate-400 hover:text-indigo-600 transition-all">
                        <i data-lucide="bell" class="w-6 h-6"></i>
                    </button>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 rounded-2xl flex items-center gap-3">
                        <i data-lucide="check-circle" class="w-5 h-5 text-emerald-500"></i>
                        <span class="text-sm font-bold">{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 p-4 bg-rose-50 border border-rose-100 text-rose-700 rounded-2xl flex items-center gap-3">
                        <i data-lucide="alert-circle" class="w-5 h-5 text-rose-500"></i>
                        <span class="text-sm font-bold">{{ session('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
