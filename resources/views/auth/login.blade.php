@extends('layouts.layout')
@section('title', 'เข้าสู่ระบบแอดมิน')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <script src="{{ asset('js/auth.js') }}" defer></script>
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-header">
                    <h1>🔐 เข้าสู่ระบบ</h1>
                    <!-- <p>สำหรับจัดการสินค้า</p> -->
                    {{-- <p>สำหรับจัดการสินค้าและโปรโมชันหลังบ้าน</p> --}}
                </div>
                @if (session('status'))
                    <div class="message success">{{ session('status') }}</div>
                @endif
                <form class="auth-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="adminUsername">อีเมล:</label>
                        <input type="email" id="adminUsername" name="email" required autocomplete="username"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="error-message" id="adminUsernameError">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="adminPassword">รหัสผ่าน:</label>
                        <div class="password-wrapper">
                            <input type="password" id="adminPassword" name="password" required
                                autocomplete="current-password">
                            <button type="button" class="toggle-password"
                                onclick="togglePassword('adminPassword')">👁️</button>
                        </div>
                        @error('password')
                            <span class="error-message" id="adminPasswordError">{{ $message }}</span>
                        @enderror

                    </div>
                    <button type="submit" class="btn-auth btn-primary">
                        เข้าสู่ระบบ
                    </button>

                    <div class="auth-links">
                        <p>
                            ยังไม่มีบัญชี?
                            <a href="{{ route('register') }}">สมัครสมาชิก</a>
                        </p>
                    </div>
                </form>


                <div id="adminMessage" class="message"></div>
            </div>
        </div>

    @endsection
