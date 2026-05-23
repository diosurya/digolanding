@extends('layouts.landing')

@section('title', 'DIGOSOFT - Solusi All-in-One untuk Bisnis Anda')

@section('content')
    <!-- SECTION 1: HERO (Odoo Style) -->
    <section class="relative pt-48 pb-20 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-5xl md:text-[80px] font-black text-slate-900 mb-8 leading-[1.05] tracking-tight">
                Bangun Kerajaan Digital Anda, <br>
                <span class="text-digo-cyan italic">Tanpa Batasan.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-500 max-w-4xl mx-auto mb-12 leading-relaxed">
                Solusi <strong>Jasa Pembuatan Website</strong> profesional, <strong>Aplikasi Kasir (POS)</strong> siap pakai, hingga pengembangan <strong>Aplikasi Mobile Custom</strong> (Android & iOS). <br class="hidden md:block">
                Kendali penuh atas bisnis, data, dan profit Anda ada di sini.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 mb-20">
                <a href="/login" class="w-full md:w-auto bg-odoo-teal text-white px-10 py-5 rounded-lg font-bold text-lg hover:opacity-95 transition-all shadow-xl shadow-odoo-teal/20">
                    Coba Produk Gratis
                </a>
                <a href="#custom-dev" class="w-full md:w-auto bg-white border border-slate-300 text-slate-600 px-10 py-5 rounded-lg font-bold text-lg hover:bg-slate-50 transition-all">
                    Konsultasi Projek Custom
                </a>
            </div>

            <!-- Hero Main Visual -->
            <div class="relative max-w-6xl mx-auto">
                <div class="bg-white rounded-[2rem] p-2 md:p-4 shadow-[0_50px_100px_-20px_rgba(0,0,0,0.12)] border border-slate-100">
                    <img src="/template/dist/assets/images/kasir.png" alt="DIGOSOFT POS Ecosystem" class="rounded-[1.5rem] w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: FULL ECOSYSTEM GRID (Odoo Style) -->
    <section id="apps" class="py-20 bg-white border-t border-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Event Banner -->
            <div class="flex justify-center mb-16">
                <a href="https://wa.me/6281331945656" target="_blank" class="inline-flex items-center gap-3 px-6 py-2 bg-slate-50 border border-slate-200 rounded-full hover:bg-slate-100 transition-colors group">
                    <span class="text-[10px] font-black text-white bg-odoo-purple px-2 py-0.5 rounded-md uppercase tracking-wider">Indonesia</span>
                    <span class="text-[11px] font-bold text-slate-600">Digosoft Business Show 2026 - Pekalongan &bull; Jun 10, 2026</span>
                    <span class="text-[11px] font-black text-odoo-purple group-hover:translate-x-1 transition-transform">Daftar &rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-y-12 gap-x-4 mb-20">
                <!-- App 1 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#00A09D] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="book-open-check" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Akuntansi</span>
                </div>
                <!-- App 2 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#714B67] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="library" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Pengetahuan</span>
                </div>
                <!-- App 3 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#E2762E] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="pen-tool" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Tanda Tangan</span>
                </div>
                <!-- App 4 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#017E84] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="users" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">CRM</span>
                </div>
                <!-- App 5 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#212529] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="layout" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Studio</span>
                </div>
                <!-- App 6 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#F06050] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="refresh-cw" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Langganan</span>
                </div>
                <!-- App 7 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="brain-circuit" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">AI</span>
                </div>
                <!-- App 8 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#875A7B] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="shopping-bag" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">POS</span>
                </div>

                <!-- Row 2 -->
                <!-- App 9 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#4A4E69] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="message-square" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Diskusi</span>
                </div>
                <!-- App 10 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#9B59B6] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="file-text" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Dokumen</span>
                </div>
                <!-- App 11 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#2ECC71] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="briefcase" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Project</span>
                </div>
                <!-- App 12 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#34495E] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="clock" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Timesheet</span>
                </div>
                <!-- App 13 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#E67E22] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="map-pin" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Layanan Lapangan</span>
                </div>
                <!-- App 14 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#27AE60] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="calendar" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Planning</span>
                </div>
                <!-- App 15 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#C0392B] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="headset" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Meja Bantuan</span>
                </div>
                <!-- App 16 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#16A085] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="store" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">eCommerce</span>
                </div>

                <!-- Row 3 -->
                <!-- App 17 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#3498DB] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="globe" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Website</span>
                </div>
                <!-- App 18 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#E74C3C] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="mail" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Email Marketing</span>
                </div>
                <!-- App 19 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#D35400] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="shopping-basket" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Purchase</span>
                </div>
                <!-- App 20 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#F39C12] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="boxes" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Inventaris</span>
                </div>
                <!-- App 21 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#7F8C8D] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="factory" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Manufaktur</span>
                </div>
                <!-- App 22 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#2980B9] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="trending-up" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Sales</span>
                </div>
                <!-- App 23 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#8E44AD] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="users-2" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">HR</span>
                </div>
                <!-- App 24 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 bg-[#2C3E50] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="layout-dashboard" class="w-8 h-8 text-white"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-700 uppercase tracking-widest text-center">Dashboard</span>
                </div>
            </div>

            <div class="text-center">
                <h3 class="text-2xl md:text-3xl font-black text-slate-400 mb-8 italic">Bayangkan tanpa Digosoft.</h3>
                <div class="flex justify-center gap-4">
                    <a href="#products" class="bg-odoo-purple text-white px-8 py-4 rounded-xl font-bold hover:opacity-90 transition-all shadow-xl shadow-odoo-purple/20">
                        Lihat semua Aplikasi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: MARKETING QUOTE (The "Why Move" Section) -->
    <section class="py-24 bg-slate-50 border-y border-slate-100 px-6">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white p-12 md:p-20 rounded-[3rem] shadow-sm border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-10 opacity-5">
                    <i data-lucide="quote" class="w-40 h-40"></i>
                </div>
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-8 leading-tight">
                        "Biaya administrasi marketplace semakin mencekik profit? Kini saatnya pembisnis cerdas memiliki platform sendiri."
                    </h2>
                    <p class="text-lg text-slate-500 leading-relaxed mb-10 italic">
                        Tren pasar global menunjukkan pergeseran besar: Brand besar kini memprioritaskan <strong>Direct-to-Consumer (DTC)</strong>. Dengan memiliki Website dan Aplikasi sendiri, Anda tidak hanya menghemat biaya potongan transaksi yang besar, tetapi juga memegang penuh data pelanggan Anda untuk strategi marketing yang jauh lebih efektif dan personal.
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-1 gap-1 bg-odoo-teal rounded-full"></div>
                        <span class="text-xs font-black uppercase tracking-[0.3em] text-slate-400">Insight Bisnis 2026</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: READY-TO-USE PRODUCTS (SaaS) -->
    <section id="products" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6">Aplikasi Kasir & Sistem ERP</h2>    
                    <p class="text-xl text-slate-500 font-medium">Solusi instan <strong>Aplikasi POS</strong> untuk manajemen operasional harian Anda.</p>
                </div>
                <div class="flex gap-4">
                    <span class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-full text-[10px] font-black uppercase tracking-widest">Enterprise Ready</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Smart POS -->
                <div class="group p-10 rounded-[3rem] border border-slate-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <div class="w-16 h-16 bg-odoo-purple rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-odoo-purple/20">
                        <i data-lucide="shopping-bag" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 uppercase">Aplikasi Kasir POS</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed"><strong>Aplikasi Kasir</strong> pintar dengan manajemen stok FIFO dan laporan keuangan <strong>Sistem ERP</strong> otomatis.</p>
                    <a href="/login" class="inline-flex items-center gap-2 text-odoo-purple font-black text-xs uppercase tracking-widest border-b-2 border-odoo-purple/20 pb-1 hover:border-odoo-purple transition-all">Buka Aplikasi <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>

                <!-- Advanced CRM -->
                <div class="group p-10 rounded-[3rem] border border-slate-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <div class="w-16 h-16 bg-odoo-teal rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-odoo-teal/20">
                        <i data-lucide="users" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 uppercase">Sistem CRM & ERP</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed">Kelola database pelanggan, program loyalitas, dan otomasi marketing dalam satu ekosistem <strong>Aplikasi ERP</strong>.</p>
                    <a href="https://crm.digosoft.id" target="_blank" class="inline-flex items-center gap-2 text-odoo-teal font-black text-xs uppercase tracking-widest border-b-2 border-odoo-teal/20 pb-1 hover:border-odoo-teal transition-all">Kunjungi CRM <i data-lucide="external-link" class="w-4 h-4"></i></a>
                </div>

                <!-- Undangan Online -->
                <div class="group p-10 rounded-[3rem] border border-slate-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <div class="w-16 h-16 bg-amber-500 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-amber-500/20">
                        <i data-lucide="mail-open" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 uppercase">Aplikasi Website</h3>        
                    <p class="text-slate-500 mb-8 leading-relaxed">Layanan <strong>Jasa Pembuatan Website</strong> undangan digital profesional dengan fitur RSVP instan.</p>
                    <a href="https://undangan.digosoft.id" target="_blank" class="inline-flex items-center gap-2 text-amber-600 font-black text-xs uppercase tracking-widest border-b-2 border-amber-500/20 pb-1 hover:border-amber-500 transition-all">Buat Undangan <i data-lucide="external-link" class="w-4 h-4"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: SOFTWARE HOUSE & CUSTOM SERVICES -->
    <section id="custom-dev" class="py-32 bg-odoo-gray overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-24">
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 mb-6 uppercase tracking-tighter">Software House <br> Jasa Pembuatan Website</h2>
                <p class="text-xl text-slate-500 max-w-3xl mx-auto italic">Wujudkan visi teknologi Anda dengan <strong>Jasa Pembuatan Website</strong> dan <strong>Aplikasi Mobile</strong> dari tim developer ahli kami.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Service 1: Softwarehouse & Custom Dev -->
                <div class="p-10 rounded-[3rem] bg-white border border-slate-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="w-14 h-14 bg-indigo-100 rounded-2xl flex items-center justify-center mb-8">   
                        <i data-lucide="smartphone" class="w-7 h-7 text-indigo-600"></i>
                    </div>
                    <h3 class="text-3xl font-black text-slate-900 mb-4 uppercase tracking-tighter">Aplikasi Mobile</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed italic">Kami spesialis dalam pengembangan <strong>Aplikasi Mobile (iOS & Android)</strong> berbasis <strong>Flutter</strong>, serta <strong>Jasa Pembuatan Website</strong> Company Profile yang elegan.</p>
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">iOS App</span>
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">Android App</span>
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">Flutter Tech</span>
                    </div>
                </div>

                <!-- Service 2: E-commerce & Ticketing -->
                <div class="p-10 rounded-[3rem] bg-white border border-slate-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="w-14 h-14 bg-rose-100 rounded-2xl flex items-center justify-center mb-8">     
                        <i data-lucide="store" class="w-7 h-7 text-rose-600"></i>
                    </div>
                    <h3 class="text-3xl font-black text-slate-900 mb-4 uppercase tracking-tighter">Commerce & Ticketing</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed italic">Ekspansi bisnis Anda ke ranah online dengan E-commerce yang powerfull atau kelola Pemesanan Tiket secara digital dengan integrasi real-time.</p>  
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">E-commerce</span>
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">Ticketing System</span>
                    </div>
                </div>

                <!-- Service 3: Shipping Integration -->
                <div class="p-10 rounded-[3rem] bg-blue-50 border border-blue-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                            <i data-lucide="truck" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Shipping Integration</h3>
                    </div>
                    <p class="text-slate-600 mb-8 leading-relaxed italic">Terhubung otomatis dengan berbagai ekspedisi nasional. Cek ongkir, cetak label pengiriman, dan tracking paket langsung dari satu dashboard.</p>   
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-blue-100 shadow-sm">JNE Express</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-blue-100 shadow-sm">J&T Cargo</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-blue-100 shadow-sm">SiCepat</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[9px] font-black uppercase tracking-widest text-slate-500 border border-blue-100 shadow-sm">Anteraja</span>
                    </div>
                </div>

                <!-- Service 4: Payment Methods -->
                <div class="p-10 rounded-[3rem] bg-emerald-50 border border-emerald-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                            <i data-lucide="credit-card" class="w-7 h-7 text-emerald-600"></i>
                        </div>
                        <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tighter">Payment Gateway</h3>
                    </div>
                    <p class="text-slate-600 mb-8 leading-relaxed italic">Terima pembayaran dari berbagai channel. Dukungan penuh untuk QRIS, Virtual Account, Kartu Kredit, hingga E-Wallet terpopuler.</p>
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[8px] font-black uppercase tracking-widest text-emerald-600 border border-emerald-100 shadow-sm">QRIS</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-emerald-100 shadow-sm">BCA VA</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-emerald-100 shadow-sm uppercase">GoPay</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-emerald-100 shadow-sm uppercase">ShopeePay</span>
                    </div>
                </div>

                <!-- Service 5: SEO FOCUS -->
                <div class="lg:col-span-2 p-10 rounded-[4rem] bg-slate-900 text-white border border-slate-800 hover:shadow-2xl transition-all flex flex-col md:flex-row items-center gap-12 relative overflow-hidden">      
                    <div class="absolute top-0 right-0 p-20 opacity-5">
                        <i data-lucide="search" class="w-60 h-60"></i>
                    </div>
                    <div class="md:w-2/3 relative z-10">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-odoo-teal/20 text-odoo-teal text-[10px] font-black uppercase tracking-widest mb-6">
                            <i data-lucide="bar-chart-big" class="w-3.5 h-3.5"></i> Digital Visibility        
                        </div>
                        <h3 class="text-4xl md:text-5xl font-black mb-6 leading-tight uppercase tracking-tighter">Fokus pada SEO <br> & Ranking</h3>
                        <p class="text-lg text-slate-400 mb-8 leading-relaxed italic">
                            Kami tidak hanya membangun website yang indah, tapi juga website yang "terlihat" oleh calon pelanggan Anda di mesin pencari. Optimalisasi struktur data dan performa tinggi adalah standar wajib kami.
                        </p>
                        <div class="flex flex-wrap gap-6">
                            <div class="flex items-center gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-odoo-teal"></i>
                                <span class="text-sm font-bold uppercase tracking-widest">Organic Traffic</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-odoo-teal"></i>
                                <span class="text-sm font-bold uppercase tracking-widest">High Core Web Vitals</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 text-odoo-teal"></i>
                                <span class="text-sm font-bold uppercase tracking-widest">Semantics Markup</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/3 flex justify-center relative z-10">
                        <div class="w-40 h-40 rounded-full border-8 border-odoo-teal/20 flex items-center justify-center relative">
                            <div class="w-28 h-28 rounded-full bg-odoo-teal flex items-center justify-center animate-pulse">
                                <i data-lucide="rocket" class="w-12 h-12 text-white"></i>
                            </div>
                            <div class="absolute -top-4 -right-4 w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-lg transform rotate-12">
                                <span class="text-slate-900 font-black text-xs">#1</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 5: STATS -->
    <section class="py-24 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div>
                <p class="text-5xl font-black text-odoo-purple mb-2">120+</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Brands Active</p> 
            </div>
            <div>
                <p class="text-5xl font-black text-odoo-purple mb-2">850+</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Daily Branches</p>
            </div>
            <div>
                <p class="text-5xl font-black text-odoo-purple mb-2">99.9%</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Uptime Trust</p>  
            </div>
            <div>
                <p class="text-5xl font-black text-odoo-purple mb-2">GPS</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">HR Verification</p>
            </div>
        </div>
    </section>

    <!-- SECTION 6: FINAL CTA (Slate Dark) -->
    <section class="py-32 px-6 bg-slate-900 relative overflow-hidden">
        <div class="max-w-4xl mx-auto text-center relative z-10 text-white">
            <h2 class="text-4xl md:text-6xl font-black mb-10 leading-tight tracking-tighter">Mulai miliki platform Anda sekarang.</h2>
            <p class="text-xl text-white/70 mb-16 italic font-medium">Beralih dari ketergantungan marketplace ke kemandirian digital yang lebih menguntungkan.</p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="/login" class="w-full md:w-auto bg-odoo-teal text-white px-12 py-5 rounded-lg font-bold text-xl hover:scale-105 transition-all shadow-2xl shadow-black/20">
                    Aktivasi Trial Gratis
                </a>
                <a href="https://wa.me/6281331945656" target="_blank" class="w-full md:w-auto bg-white/10 text-white border border-white/20 px-12 py-5 rounded-lg font-bold text-xl hover:bg-white/20 transition-all">      
                    Konsultasi Projek
                </a>
            </div>
        </div>
        <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -top-40 -left-40 w-[400px] h-[400px] bg-odoo-teal/10 rounded-full blur-3xl"></div>
    </section>
@endsection
