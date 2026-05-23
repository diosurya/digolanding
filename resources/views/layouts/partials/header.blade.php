<nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md py-4 px-6 md:px-12 flex justify-between items-center border-b border-slate-100">
    <a href="/" class="flex items-center space-x-2 group">
        <div class="w-40 flex items-center justify-center">
            <img src="/template/dist/assets/images/Digosoft-black.png" alt="Logo">
        </div>
    </a>
    <div class="hidden md:flex space-x-10 font-bold text-sm text-slate-600">
        <a href="/" class="hover:text-digo-cyan transition {{ request()->is('/') ? 'text-digo-cyan' : '' }}">
            Aplikasi
        </a>
        <a href="#" class="hover:text-digo-cyan transition">
            Fitur
        </a>
        <a href="/#pricing" class="hover:text-digo-cyan transition">
            Harga
        </a>
        <a href="/blog" class="hover:text-digo-cyan transition {{ request()->is('blog*') ? 'text-digo-cyan' : '' }}">
            Blog
        </a>
    </div>
    <div class="flex items-center gap-4">
        <a href="/login" class="bg-odoo-teal hover:opacity-90 text-white px-6 py-2.5 rounded-lg font-bold transition shadow-lg shadow-odoo-teal/20 text-xs uppercase tracking-wider">
            Mulai Sekarang
        </a>
    </div>
</nav>
