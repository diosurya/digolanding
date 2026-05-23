<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'DIGOSOFT - Jasa Pembuatan Website, Aplikasi Kasir POS & ERP Terintegrasi')</title>
    <meta name="description" content="@yield('meta_description', 'DIGOSOFT adalah Software House penyedia jasa pembuatan website profesional, aplikasi kasir (POS), sistem ERP retail, dan pengembangan aplikasi mobile Android/iOS custom untuk solusi bisnis Anda.')">
    <meta name="keywords" content="jasa pembuatan website, aplikasi kasir, aplikasi pos, aplikasi erp, aplikasi mobile, software house indonesia, pembuatan aplikasi android, pembuatan aplikasi ios, sistem informasi retail, manajemen stok, digital agency pekalongan, digosoft">
    <meta name="author" content="DIGOSOFT Group">

    <!-- Social Media Meta Tags -->
    @yield('social_meta')
    <meta property="og:title" content="@if(View::hasSection('title')) @yield('title') @else DIGOSOFT - Jasa Pembuatan Website, Aplikasi Kasir POS & ERP Terintegrasi @endif">
    <meta property="og:description" content="@if(View::hasSection('meta_description')) @yield('meta_description') @else DIGOSOFT adalah Software House penyedia jasa pembuatan website profesional, aplikasi kasir (POS), sistem ERP retail, Solusi Jasa Pembuatan Website profesional, Aplikasi Kasir (POS) siap pakai, hingga pengembangan Aplikasi Mobile Custom. @endif">
    <meta property="og:image" content="@if(View::hasSection('og_image')) @yield('og_image') @else {{ asset('template/dist/assets/images/Digosoft.png') }} @endif">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="@if(View::hasSection('title')) @yield('title') @else DIGOSOFT - Jasa Pembuatan Website, Aplikasi Kasir POS & ERP Terintegrasi @endif">
    <meta property="twitter:description" content="@if(View::hasSection('meta_description')) @yield('meta_description') @else DIGOSOFT adalah Software House penyedia jasa pembuatan website profesional, aplikasi kasir (POS), sistem ERP retail, Solusi Jasa Pembuatan Website profesional, Aplikasi Kasir (POS) siap pakai, hingga pengembangan Aplikasi Mobile Custom. @endif">
    <meta property="twitter:image" content="@if(View::hasSection('og_image')) @yield('og_image') @else {{ asset('template/dist/assets/images/Digosoft.png') }} @endif">

    <!-- Favicon -->
    <link rel="icon" href="/template/dist/assets/images/favicon-digosoft.png" type="image/x-icon">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FFFFFF;
            color: #333333;
        }
        [x-cloak] { display: none !important; }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        odoo: {
                            purple: '#0cc0df',
                            teal: '#01A09D',
                            gray: '#F9F9F9',
                        },
                        digo: {
                            cyan: '#0cc0df',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    @stack('css')
</head>
<body class="selection:bg-indigo-500 selection:text-white">

    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
