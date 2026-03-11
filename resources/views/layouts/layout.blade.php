<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Pawland</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<script src="{{ asset('js/script.js') }}" defer></script>
<script src="{{ asset('js/navigation.js') }}" defer></script>

<body>
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
