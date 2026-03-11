@extends('layouts.layout')
@section('title', 'ติดต่อ')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <div class="contact-hero">
        <div class="contact-hero-content">
            <h1>📞 ติดต่อเรา</h1>
            <p>เราพร้อมตอบคำถามของคุณ</p>
        </div>
    </div>

    <div class="container contact-main">
        <div class="contact-cards">
            <div class="info-card">
                <div class="card-icon">📍</div>
                <h3>ที่อยู่</h3>
                <p>123/45 ถนนเพชรบุรี<br>แขวงมักกะสัน เขตราชเทวี<br>กรุงเทพฯ 10400</p>
            </div>
            <div class="info-card">
                <div class="card-icon">📞</div>
                <h3>เบอร์โทรศัพท์</h3>
                <p><a href="tel:0812345678">08-1234-5678</a><br>
                    <a href="tel:029876543">02-987-6543</a>
                </p>
            </div>
            <div class="info-card">
                <div class="card-icon">📧</div>
                <h3>อีเมล</h3>
                <p><a href="mailto:info@petfoodparadise.com">info@petfoodparadise.com</a><br>
                    <a href="mailto:support@petfoodparadise.com">support@petfoodparadise.com</a>
                </p>
            </div>
            <div class="info-card">
                <div class="card-icon">⏰</div>
                <h3>เวลาทำการ</h3>
                <p>จันทร์ - ศุกร์: 9:00 - 18:00<br>
                    เสาร์ - อาทิตย์: 10:00 - 17:00</p>
            </div>
        </div>

        <div class="contact-form-section">
            <div class="form-container">
                <div class="form-header">
                    <h2>ส่งข้อความถึงเรา</h2>
                    <p>กรุณากรอกแบบฟอร์มด้านล่าง เราจะตอบกลับโดยเร็วที่สุด</p>
                </div>
                <form id="contactForm" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>ชื่อ-นามสกุล *</label>
                            <input type="text" placeholder="ชื่อ-นามสกุล" required>
                        </div>
                        <div class="form-group">
                            <label>อีเมล *</label>
                            <input type="email" placeholder="อีเมล" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>เบอร์โทรศัพท์ *</label>
                            <input type="tel" placeholder="เบอร์โทรศัพท์" required>
                        </div>
                        <div class="form-group">
                            <label>หัวข้อ *</label>
                            <select required>
                                <option value="">เลือกหัวข้อ</option>
                                <option>สอบถามข้อมูลสินค้า</option>
                                <option>สอบถามการจัดส่ง</option>
                                <option>ปัญหาการใช้งาน</option>
                                <option>ข้อเสนอแนะ</option>
                                <option>อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>ข้อความ *</label>
                        <textarea placeholder="ข้อความของคุณ..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">📨 ส่งข้อความ</button>
                </form>
            </div>

            <div class="social-container">
                <h3>💬 ช่องทางติดต่ออื่นๆ</h3>
                <div class="social-grid">
                    <a href="https://line.me/ti/p/~petfoodparadise" target="_blank" class="social-card line">
                        <div class="social-icon">📱</div>
                        <div class="social-info">
                            <div class="social-name">Line</div>
                            <div class="social-id">@petfoodparadise</div>
                        </div>
                    </a>
                    <a href="https://facebook.com/pawland" target="_blank" class="social-card facebook">
                        <div class="social-icon">👍</div>
                        <div class="social-info">
                            <div class="social-name">Facebook</div>
                            <div class="social-id">pawland</div>
                        </div>
                    </a>
                    <a href="https://instagram.com/petfoodparadise" target="_blank" class="social-card instagram">
                        <div class="social-icon">📷</div>
                        <div class="social-info">
                            <div class="social-name">Instagram</div>
                            <div class="social-id">@petfoodparadise</div>
                        </div>
                    </a>
                </div>

                <div class="response-time">
                    <div class="response-icon">⏱️</div>
                    <div class="response-text">
                        <strong>เวลาตอบกลับ</strong>
                        <p>ปกติ 1-2 ชั่วโมง ช่วงเวลาทำการ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('ขอบคุณที่ติดต่อเรา! เราจะตอบกลับโดยเร็วที่สุด');
            this.reset();
        });
    </script>

@endsection
