<!DOCTYPE html>
<html lang="th">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TN98QSPW');</script>
<!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="AR4QtV64lP8-DjeE3fnEsMelUFTYACYcONFFBpzyyTU" />

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DY3D87SJ91"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DY3D87SJ91');
</script>

    <title>@yield('title') | Pawland</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<script src="{{ asset('js/script.js') }}" defer></script>
<script src="{{ asset('js/navigation.js') }}" defer></script>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TN98QSPW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <div class="logo">🐾 Pawland</div>
                    <ul class="nav-links">
                        <li><a class="{{ request()->routeIs('photos.home') ? 'active' : '' }}" href="{{ route('photos.home') }}">🏠 หน้าแรก</a></li>
                        <li><a class="{{ request()->routeIs('photos.index') ? 'active' : '' }}" href="{{ route('photos.index') }}">🛍️ สินค้า</a></li>
                        <li><a class="{{ request()->routeIs('photos.about') ? 'active' : '' }}" href="{{ route('photos.about') }}">ℹ️ เกี่ยวกับเรา</a></li>
                        <li><a class="{{ request()->routeIs('photos.contact') ? 'active' : '' }}" href="{{ route('photos.contact') }}">📧 ติดต่อ</a></li>
                        @auth
                            @if (optional(auth()->user())->role === 'admin')
                                <li><a class="{{ request()->routeIs('photos.create') ? 'active' : '' }}" href="{{ route('photos.create') }}">📦จัดการสินค้า</a></li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="nav-link">
                                        🚪 ออกจากระบบ
                                    </button>
                                </form>
                            </li>
                        @else
                            <li><a class="{{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">🔐 เข้าสู่ระบบ</a></li>
                            <li><a class="{{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">📝 สมัครสมาชิก</a></li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div>
        @yield('content')
    </div>
    <div>
        @include('layouts.footer')
    </div>
</body>

</html>
