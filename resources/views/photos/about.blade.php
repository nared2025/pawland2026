@extends('layouts.layout')
@section('title', 'เกี่ยวกับเรา')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <div class="about-hero">
        <div class="about-hero-content">
            <h1>🐾 เกี่ยวกับเรา</h1>
            <p>ยินดีต้อนรับสู่ Pawland</p>
        </div>
    </div>

    <div class="container about-main">
        <div class="about-intro">
            <div class="intro-image">
                <div class="image-placeholder">🐶</div>
            </div>
            <div class="intro-text">
                <h2>ยินดีต้อนรับสู่ Pawland</h2>
                <p>เราคือร้านค้าที่เชี่ยวชาญด้านสัตว์เลี้ยงครบวงจร มีประสบการณ์มากกว่า 10 ปี
                    ในการดูแลและจำหน่ายสินค้าคุณภาพสำหรับสัตว์เลี้ยงที่คุณรัก</p>
                <p>เราได้รับความเชื่อถือจากลูกค้าหลายพันคน ที่สั่งซื้อสินค้าและบริการจากเราอย่างต่อเนื่อง
                    เพราะคุณภาพของสินค้า บริการที่ดี และราคาที่เหมาะสม</p>
            </div>
        </div>

        <div class="stats-section">
            <div class="stat-card">
                <div class="stat-icon">📅</div>
                <div class="stat-number">10+</div>
                <div class="stat-label">ปีประสบการณ์</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">😊</div>
                <div class="stat-number">5,000+</div>
                <div class="stat-label">ลูกค้าพึงพอใจ</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">📦</div>
                <div class="stat-number">500+</div>
                <div class="stat-label">สินค้าหลากหลาย</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⏰</div>
                <div class="stat-number">24/7</div>
                <div class="stat-label">บริการตลอด</div>
            </div>
        </div>

        <div class="features-section">
            <h2 class="section-title">🌟 ทำไมต้องเลือกเรา?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">✨</div>
                    <h3>สินค้าคุณภาพ</h3>
                    <p>คัดสรรสินค้าจากแบรนด์ชั้นนำทั้งในและต่างประเทศ ทุกสินค้าเป็นแบรนด์ที่เชื่อถือได้</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>ราคายุติธรรม</h3>
                    <p>ราคาที่เหมาะสมกับคุณภาพที่คุณได้รับ มักมีโปรโมชั่นเพิ่มเติมทั้งปี</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🚚</div>
                    <h3>จัดส่งรวดเร็ว</h3>
                    <p>บริการจัดส่งทั่วประเทศ ส่งฟรีเมื่อซื้อครบ 1,000 บาท ส่งได้ทุกวัน</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💬</div>
                    <h3>คำปรึกษาฟรี</h3>
                    <p>ทีมงานมืออาชีพพร้อมให้คำแนะนำการเลี้ยงดูสัตว์เลี้ยงของคุณ</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3>รับประกันสุขภาพ</h3>
                    <p>สัตว์เลี้ยงทุกตัวมีใบรับรองสุขภาพครบถ้วน ตรวจสอบโดยสัตวแพทย์</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🐾</div>
                    <h3>รักษาอย่างดี</h3>
                    <p>สัตว์เลี้ยงทั้งหมดได้รับการดูแลที่ดี มีสิ่งแวดล้อมที่เหมาะสม</p>
                </div>
            </div>
        </div>

        <div class="mission-section">
            <div class="mission-content">
                <h2>💚 พันธกิจของเรา</h2>
                <p>เรามุ่งมั่นที่จะเป็นส่วนหนึ่งในการดูแลสัตว์เลี้ยงของคุณให้มีสุขภาพแข็งแรง มีความสุข
                    และได้รับการดูแลที่ดีที่สุด ด้วยผลิตภัณฑ์คุณภาพและบริการที่ใส่ใจ</p>
                <p>วิสัยทัศน์ของเราคือการเป็นหนึ่งในร้านค้าสัตว์เลี้ยงที่ดีที่สุดในประเทศ ที่ให้บริการ
                    และผลิตภัณฑ์ที่คุณภาพสูง</p>
            </div>
            <div class="mission-image">
                <div class="image-placeholder">🎯</div>
            </div>
        </div>
    </div>
@endsection
