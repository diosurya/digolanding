@extends('layouts.landing')

@section('title', 'DIGOSOFT - Solusi All-in-One untuk Bisnis Anda')

@section('content')
    <!-- SECTION 1: HERO (Odoo Style) -->
    <section class="relative pt-32 pb-16 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-black text-slate-900 mb-6 leading-[1.1] tracking-tight">
                Bangun Kerajaan Digital Anda, <br>
                <span class="text-digo-cyan italic">Tanpa Batasan.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-500 max-w-3xl mx-auto mb-10 leading-relaxed">
                Solusi <strong>Jasa Pembuatan Website</strong> profesional, <strong>Aplikasi Kasir (POS)</strong> siap pakai, hingga pengembangan <strong>Aplikasi Mobile Custom</strong> (Android & iOS). <br class="hidden md:block">
                Kendali penuh atas bisnis, data, dan profit Anda ada di sini.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 mb-10">
                <a href="#custom-dev" class="w-full md:w-auto bg-odoo-teal text-white px-8 py-4 rounded-lg font-bold text-base hover:opacity-95 transition-all shadow-xl shadow-odoo-teal/20">
                    Konsultasi Projek Custom
                </a>
                <a href="https://wa.me/6281331945656" target="_blank" class="w-full md:w-auto bg-white border border-slate-300 text-slate-600 px-8 py-4 rounded-lg font-bold text-base hover:bg-slate-50 transition-all">
                    Hubungi WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION 2: FULL ECOSYSTEM GRID (Odoo Style) -->
    <section id="apps" class="py-16 bg-white border-t border-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Event Banner -->
            <div class="flex justify-center mb-12">
                <a href="https://wa.me/6281331945656" target="_blank" class="inline-flex items-center gap-3 px-6 py-2 bg-slate-50 border border-slate-200 rounded-full hover:bg-slate-100 transition-colors group">
                    <span class="text-[10px] font-black text-white bg-odoo-purple px-2 py-0.5 rounded-md uppercase tracking-wider">Indonesia</span>
                    <span class="text-[11px] font-bold text-slate-600">Digosoft Business Show 2026 - Pekalongan &bull; Jun 10, 2026</span>
                    <span class="text-[11px] font-black text-odoo-purple group-hover:translate-x-1 transition-transform">Daftar &rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-y-8 gap-x-4 mb-16">
                <!-- App 1 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#00A09D] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="book-open-check" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Akuntansi</span>
                </div>
                <!-- App 2 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#714B67] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="library" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Pengetahuan</span>
                </div>
                <!-- App 3 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#E2762E] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="pen-tool" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Tanda Tangan</span>
                </div>
                <!-- App 4 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#017E84] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="users" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">CRM</span>
                </div>
                <!-- App 5 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#212529] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="layout" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Studio</span>
                </div>
                <!-- App 6 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#F06050] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="refresh-cw" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Langganan</span>
                </div>
                <!-- App 7 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="brain-circuit" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">AI</span>
                </div>
                <!-- App 8 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#875A7B] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="shopping-bag" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">POS</span>
                </div>

                <!-- Row 2 -->
                <!-- App 9 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#4A4E69] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="message-square" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Diskusi</span>
                </div>
                <!-- App 10 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#9B59B6] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="file-text" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Dokumen</span>
                </div>
                <!-- App 11 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#2ECC71] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="briefcase" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Project</span>
                </div>
                <!-- App 12 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#34495E] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="clock" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Timesheet</span>
                </div>
                <!-- App 13 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#E67E22] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Layanan Lapangan</span>
                </div>
                <!-- App 14 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#27AE60] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="calendar" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Planning</span>
                </div>
                <!-- App 15 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#C0392B] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="headset" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">Meja Bantuan</span>
                </div>
                <!-- App 16 -->
                <div class="flex flex-col items-center group cursor-pointer">
                    <div class="w-14 h-14 bg-[#16A085] rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform mb-3">
                        <i data-lucide="store" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-[9px] font-black text-slate-700 uppercase tracking-widest text-center">eCommerce</span>
                </div>
            </div>

            <div class="text-center">
                <h3 class="text-xl md:text-2xl font-black text-slate-400 mb-6 italic">Bayangkan tanpa Digosoft.</h3>
                <div class="flex justify-center gap-4">
                    <a href="#products" class="bg-odoo-purple text-white px-6 py-3 rounded-xl font-bold hover:opacity-90 transition-all shadow-xl shadow-odoo-purple/20 text-sm">
                        Lihat semua Aplikasi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: MARKETING QUOTE -->
    <section class="py-20 bg-slate-50 border-y border-slate-100 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 md:p-16 rounded-[2.5rem] shadow-sm border border-slate-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5">
                    <i data-lucide="quote" class="w-24 h-24"></i>
                </div>
                <div class="relative z-10">
                    <h2 class="text-2xl md:text-3xl font-black text-slate-900 mb-6 leading-tight">
                        "Biaya administrasi marketplace semakin mencekik profit? Kini saatnya pembisnis cerdas memiliki platform sendiri."
                    </h2>
                    <p class="text-base md:text-lg text-slate-500 leading-relaxed mb-8 italic">
                        Tren pasar global menunjukkan pergeseran besar: Brand besar kini memprioritaskan <strong>Direct-to-Consumer (DTC)</strong>. Dengan memiliki Website dan Aplikasi sendiri, Anda tidak hanya menghemat biaya potongan transaksi yang besar, tetapi juga memegang penuh data pelanggan Anda untuk strategi marketing yang jauh lebih efektif dan personal.
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-1 gap-1 bg-odoo-teal rounded-full"></div>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400">Insight Bisnis 2026</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: READY-TO-USE PRODUCTS -->
    <section id="products" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4">Aplikasi Kasir & Sistem ERP</h2>    
                    <p class="text-lg text-slate-500 font-medium">Solusi instan <strong>Aplikasi POS</strong> untuk manajemen operasional harian Anda.</p>
                </div>
                <div class="flex gap-4">
                    <span class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-full text-[9px] font-black uppercase tracking-widest">Enterprise Ready</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Smart POS -->
                <div class="group p-8 rounded-[2.5rem] border border-slate-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <div class="w-14 h-14 bg-odoo-purple rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-odoo-purple/20">
                        <i data-lucide="shopping-bag" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 uppercase">Aplikasi Kasir POS</h3>
                    <p class="text-sm text-slate-500 mb-6 leading-relaxed"><strong>Aplikasi Kasir</strong> pintar dengan manajemen stok FIFO dan laporan keuangan <strong>Sistem ERP</strong> otomatis.</p>
                    <a href="https://pos.digosoft.id" target="_blank" class="inline-flex items-center gap-2 text-odoo-purple font-black text-[10px] uppercase tracking-widest border-b-2 border-odoo-purple/20 pb-1 hover:border-odoo-purple transition-all">Buka Aplikasi <i data-lucide="external-link" class="w-3.5 h-3.5"></i></a>
                </div>

                <!-- Advanced CRM -->
                <div class="group p-8 rounded-[2.5rem] border border-slate-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <div class="w-14 h-14 bg-odoo-teal rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-odoo-teal/20">
                        <i data-lucide="users" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 uppercase">Sistem CRM & ERP</h3>
                    <p class="text-sm text-slate-500 mb-6 leading-relaxed">Kelola database pelanggan, program loyalitas, dan otomasi marketing dalam satu ekosistem <strong>Aplikasi ERP</strong>.</p>
                    <a href="https://crm.digosoft.id" target="_blank" class="inline-flex items-center gap-2 text-odoo-teal font-black text-[10px] uppercase tracking-widest border-b-2 border-odoo-teal/20 pb-1 hover:border-odoo-teal transition-all">Kunjungi CRM <i data-lucide="external-link" class="w-4 h-4"></i></a>
                </div>

                <!-- Undangan Online -->
                <div class="group p-8 rounded-[2.5rem] border border-slate-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all">
                    <div class="w-14 h-14 bg-amber-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-amber-500/20">
                        <i data-lucide="mail-open" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 uppercase">Aplikasi Website</h3>        
                    <p class="text-sm text-slate-500 mb-6 leading-relaxed">Layanan <strong>Jasa Pembuatan Website</strong> undangan digital profesional dengan fitur RSVP instan.</p>
                    <a href="https://creative.digosoft.id/" target="_blank" class="inline-flex items-center gap-2 text-amber-600 font-black text-[10px] uppercase tracking-widest border-b-2 border-amber-500/20 pb-1 hover:border-amber-500 transition-all">Buat Undangan <i data-lucide="external-link" class="w-3.5 h-3.5"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: SOFTWARE HOUSE -->
    <section id="custom-dev" class="py-24 bg-odoo-gray overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-4 uppercase tracking-tighter">Software House & <br> Jasa Pembuatan Website</h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto italic">Wujudkan visi teknologi Anda dengan <strong>Aplikasi Mobile</strong> dan <strong>Jasa Pembuatan Website</strong> dari tim developer ahli kami.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- Service 1 -->
                <div class="p-8 rounded-[2.5rem] bg-white border border-slate-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="w-12 h-12 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6">   
                        <i data-lucide="smartphone" class="w-6 h-6 text-indigo-600"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-3 uppercase tracking-tighter">Aplikasi Mobile</h3>
                    <p class="text-sm text-slate-500 mb-6 leading-relaxed italic">Kami spesialis dalam pengembangan <strong>Aplikasi Mobile (iOS & Android)</strong> berbasis <strong>Flutter</strong>, serta <strong>Jasa Pembuatan Website</strong> Company Profile yang elegan.</p>
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">iOS App</span>
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">Android App</span>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="p-8 rounded-[2.5rem] bg-white border border-slate-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="w-12 h-12 bg-rose-100 rounded-2xl flex items-center justify-center mb-6">     
                        <i data-lucide="store" class="w-6 h-6 text-rose-600"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-3 uppercase tracking-tighter">Commerce & Ticketing</h3>
                    <p class="text-sm text-slate-500 mb-6 leading-relaxed italic">Ekspansi bisnis Anda ke ranah online dengan E-commerce yang powerfull atau kelola Pemesanan Tiket secara digital dengan integrasi real-time.</p>  
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">E-commerce</span>
                        <span class="px-3 py-1.5 bg-slate-50 rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-slate-100">Ticketing</span>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="p-8 rounded-[2.5rem] bg-blue-50 border border-blue-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                            <i data-lucide="truck" class="w-6 h-6 text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter">Shipping</h3>
                    </div>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed italic">Terhubung otomatis dengan berbagai ekspedisi nasional. Cek ongkir, cetak label pengiriman, dan tracking paket.</p>   
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-blue-100 shadow-sm">JNE / J&T</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[8px] font-black uppercase tracking-widest text-slate-500 border border-blue-100 shadow-sm">SiCepat</span>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="p-8 rounded-[2.5rem] bg-emerald-50 border border-emerald-100 hover:shadow-xl transition-all flex flex-col">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                            <i data-lucide="credit-card" class="w-6 h-6 text-emerald-600"></i>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter">Payment</h3>
                    </div>
                    <p class="text-sm text-slate-600 mb-6 leading-relaxed italic">Terima pembayaran dari berbagai channel. Dukungan penuh untuk QRIS, Virtual Account, dan E-Wallet.</p>
                    <div class="mt-auto flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[7px] font-black uppercase tracking-widest text-emerald-600 border border-emerald-100 shadow-sm">QRIS</span>
                        <span class="px-3 py-1.5 bg-white rounded-xl text-[7px] font-black uppercase tracking-widest text-slate-500 border border-emerald-100 shadow-sm">E-Wallet</span>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="lg:col-span-2 p-8 rounded-[3rem] bg-slate-900 text-white border border-slate-800 hover:shadow-2xl transition-all flex flex-col md:flex-row items-center gap-8 relative overflow-hidden">      
                    <div class="absolute top-0 right-0 p-10 opacity-5">
                        <i data-lucide="search" class="w-40 h-40"></i>
                    </div>
                    <div class="md:w-2/3 relative z-10">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-odoo-teal/20 text-odoo-teal text-[9px] font-black uppercase tracking-widest mb-4">
                            <i data-lucide="bar-chart-big" class="w-3 h-3"></i> Digital Visibility        
                        </div>
                        <h3 class="text-3xl md:text-4xl font-black mb-4 leading-tight uppercase tracking-tighter">Fokus pada SEO <br> & Ranking</h3>
                        <p class="text-base text-slate-400 mb-6 leading-relaxed italic">
                            Kami tidak hanya membangun website yang indah, tapi juga website yang "terlihat" oleh calon pelanggan Anda di mesin pencari. Optimalisasi struktur data dan performa tinggi adalah standar wajib kami.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-4 h-4 text-odoo-teal"></i>
                                <span class="text-[10px] font-bold uppercase tracking-widest">Organic Traffic</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-4 h-4 text-odoo-teal"></i>
                                <span class="text-[10px] font-bold uppercase tracking-widest">High Core Web Vitals</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/3 flex justify-center relative z-10">
                        <div class="w-32 h-32 rounded-full border-8 border-odoo-teal/20 flex items-center justify-center relative">
                            <div class="w-20 h-20 rounded-full bg-odoo-teal flex items-center justify-center animate-pulse">
                                <i data-lucide="rocket" class="w-10 h-10 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 5: STATS -->
    <section class="py-16 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="text-4xl font-black text-odoo-purple mb-1">120+</p>
                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em]">Brands Active</p> 
            </div>
            <div>
                <p class="text-4xl font-black text-odoo-purple mb-1">850+</p>
                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em]">Daily Branches</p>
            </div>
            <div>
                <p class="text-4xl font-black text-odoo-purple mb-1">99.9%</p>
                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em]">Uptime Trust</p>  
            </div>
            <div>
                <p class="text-4xl font-black text-odoo-purple mb-1">GPS</p>
                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em]">HR Verification</p>
            </div>
        </div>
    </section>

    <!-- SECTION 6: FINAL CTA -->
    <section class="py-24 px-6 bg-slate-900 relative overflow-hidden">
        <div class="max-w-4xl mx-auto text-center relative z-10 text-white">
            <h2 class="text-3xl md:text-5xl font-black mb-8 leading-tight tracking-tighter">Mulai miliki platform Anda sekarang.</h2>
            <p class="text-lg text-white/70 mb-12 italic font-medium">Beralih dari ketergantungan marketplace ke kemandirian digital yang lebih menguntungkan.</p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="https://wa.me/6281331945656" target="_blank" class="w-full md:w-auto bg-odoo-teal text-white px-10 py-4 rounded-lg font-bold text-lg hover:scale-105 transition-all shadow-2xl shadow-black/20">
                    Konsultasi Projek Gratis
                </a>
            </div>
        </div>
        <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute -top-40 -left-40 w-[400px] h-[400px] bg-odoo-teal/10 rounded-full blur-3xl"></div>
    </section>
@endsection
