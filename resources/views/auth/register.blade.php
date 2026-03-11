@extends('layouts.layout')
@section('title', 'หน้าแรก')
@section('content')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h1>🐾 สมัครสมาชิก</h1>
            <p>สร้างบัญชีใหม่เพื่อเริ่มต้นการช้อปปิ้ง</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="auth-form">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="name">ชื่อผู้ใช้ *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">อีเมล *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="password">รหัสผ่าน *</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" required>
                        <button type="button" class="toggle-password" onclick="togglePassword('password')">👁️</button>
                    </div>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">ยืนยันรหัสผ่าน *</label>
                    <div class="password-wrapper">
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                        <button type="button" class="toggle-password" onclick="togglePassword('password_confirmation')">👁️</button>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-auth btn-primary">
                สมัครสมาชิก
            </button>

            <div class="auth-links">
                <p>มีบัญชีอยู่แล้ว?
                    <a href="{{ route('login') }}">เข้าสู่ระบบ</a>
                </p>
            </div>

        </form>
    </div>
</div>
    <script src="{{ asset('js/auth.js') }}" defer></script>
@endsection