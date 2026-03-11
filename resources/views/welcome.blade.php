@extends('layouts.layout')
@section('title', 'หน้าแรก')
@section('content')
    <section class="hero hero--nike" id="home">
        <div class="hero-pattern"></div>

        <div class="hero-slider">
            <div class="hero-slide active">
                <div class="hero-media">
                    <img src="../assets/pawland-hero-welcome.png" alt="" loading="eager" decoding="async">
                </div>
                <div class="hero-overlay">
                    <div class="hero-inner">
                        <div class="hero-badge">🐾 ร้านสัตว์เลี้ยงคุณภาพ #1</div>
                        <h1>ยินดีต้อนรับสู่ <span class="highlight">Pawland</span></h1>
                        <p class="hero-subtitle">สุนัขและแมวสุขภาพดี กับบริการที่ยอดเยี่ยม<br>พร้อมส่งตรงถึงบ้านทั่วประเทศ
                        </p>
                        <div class="btn-group">
                            <a href="products.html" class="btn btn-primary">🛍️ เลือกซื้อสินค้า</a>
                            <a href="contact.html" class="btn btn-secondary">💬 ติดต่อเรา</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="stat-number">500+</div>
                                <div class="stat-label">สินค้า</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">5,000+</div>
                                <div class="stat-label">ลูกค้าพึงพอใจ</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">10+</div>
                                <div class="stat-label">ปีประสบการณ์</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-slide hero-slide--promo">
                <div class="hero-media">
                    <img src="../assets/pawland-promo-hero.png" alt="โปรโมชันพิเศษ ส่งฟรีเมื่อครบ ฿1,000 ลดเพิ่ม 10%"
                        loading="lazy" decoding="async">
                </div>
                <a class="hero-overlay hero-overlay--click" href="products.html" aria-label="ดูโปรโมชั่น"></a>
            </div>

            <div class="hero-slide">
                <div class="hero-media">
                    <img src="../assets/pawland-hero-weekly-deal.png" alt="" loading="lazy" decoding="async">
                </div>
                <div class="hero-overlay">
                    <div class="hero-inner">
                        <div class="hero-badge">🔥 ดีลประจำสัปดาห์</div>
                        <h1>โปรเด็ดสำหรับน้องหมา & น้องแมว<br><span class="highlight">ลดสูงสุด 30%</span></h1>
                        <p class="hero-subtitle">อัปเดตสินค้าลดราคาใหม่ทุกสัปดาห์<br>ของมีจำนวนจำกัด รีบเลย!</p>
                        <div class="btn-group">
                            <a href="products.html" class="btn btn-primary">🛍️ ไปดูสินค้าลดราคา</a>
                            <a href="contact.html" class="btn btn-secondary">💬 สอบถามโปร</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-controls">
                <div class="hero-dots" aria-label="ตัวเลือกสไลด์"></div>
                <button class="hero-toggle" type="button" aria-label="หยุดการเลื่อนอัตโนมัติ">❚❚</button>
            </div>
        </div>

        <div class="hero-scroll">
            <div class="scroll-indicator">↓</div>
        </div>
    </section>

    <div class="container">
        <section class="features-section">
            <h2 class="section-title">✨ คุณสมบัติของเรา</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🏥</div>
                    <h3>สุขภาพที่ดี</h3>
                    <p>ตรวจสุขภาพโดยสัตวแพทย์อย่างครบถ้วน</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📜</div>
                    <h3>เอกสารครบครัน</h3>
                    <p>ทุกตัวมีใบสูติบัตรและใบรับรอง</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🚚</div>
                    <h3>ส่งด่วน</h3>
                    <p>ส่งถึงบ้านทั่วประเทศอย่างปลอดภัย</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⭐</div>
                    <h3>บริการเยี่ยม</h3>
                    <p>ให้คำแนะนำการเลี้ยง 24 ชั่วโมง</p>
                </div>
            </div>
        </section>

        <<section class="browse-section">
            <div class="section-header">
                <h2 class="section-title">🐾 เลือกดูตามประเภท</h2>
                <p class="section-subtitle">ค้นหาสิ่งที่คุณต้องการได้ง่ายๆ</p>
            </div>

            <div class="browse-grid">

                <a href="{{ route('products.index', ['category' => 'Food_dog']) }}" class="browse-card dog-card">
                    <div class="browse-icon">🐕</div>
                    <h3>อาหารสุนัข</h3>
                    <p>อาหารสำหรับน้องสุนัข</p>
                    <span class="browse-link">ดูสินค้า →</span>
                </a>

                <a href="{{ route('products.index', ['category' => 'Food_cat']) }}" class="browse-card cat-card">
                    <div class="browse-icon">🐱</div>
                    <h3>อาหารแมว</h3>
                    <p>อาหารสำหรับน้องแมว</p>
                    <span class="browse-link">ดูสินค้า →</span>
                </a>

                <a href="{{ route('products.index', ['category' => 'Toys_dog']) }}" class="browse-card food-card">
                    <div class="browse-icon">🎾</div>
                    <h3>ของเล่นสุนัข</h3>
                    <p>ของเล่นสำหรับสุนัข</p>
                    <span class="browse-link">ดูสินค้า →</span>
                </a>

                <a href="{{ route('products.index', ['category' => 'Toys_cat']) }}" class="browse-card toy-card">
                    <div class="browse-icon">🧶</div>
                    <h3>ของเล่นแมว</h3>
                    <p>ของเล่นสำหรับแมว</p>
                    <span class="browse-link">ดูสินค้า →</span>
                </a>

            </div>
            </section>

            <section class="promo-banner">
                <div class="promo-content">
                    <div class="promo-icon">🎉</div>
                    <div class="promo-text">
                        <h3>โปรโมชั่นพิเศษ!</h3>
                        <p>ซื้อครบ 1,000 บาท ส่งฟรีทั่วประเทศ + รับส่วนลดเพิ่ม 10%</p>
                    </div>
                    <a href="products.html" class="btn-promo">ดูโปรโมชั่น</a>
                </div>
            </section>

            <section class="testimonials-section">
                <div class="section-header">
                    <h2 class="section-title">💬 รีวิวจากลูกค้า</h2>
                    <p class="section-subtitle">เสียงจากผู้ที่ไว้วางใจเรา</p>
                </div>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"สินค้าคุณภาพ ส่งเร็ว และมีแพทย์คอยให้คำแนะนำ ใจดีมาก!
                            ลูกหมาอยู่ดีมีเล่น"
                        </p>
                        <p class="testimonial-author">- น้องเกศ (เลี้ยง Shiba Inu)</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"ลูกหมาจากที่นี่แข็งแรง เจริญเติบโตดี แนะนำเพื่อนทุกคน!
                            บริการหลังขายดีครับ"</p>
                        <p class="testimonial-author">- คุณสมศรี (เลี้ยง Golden Retriever)</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"ลูกแมวสวยหลากหลาย อาหารก็ดี ส่งถึงหน้าบ้านอย่างปลอดภัย เจอแม่ค้าดี!"
                        </p>
                        <p class="testimonial-author">- คุณอนิรุธ (เลี้ยง Scottish Fold)</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"ลูกสุนัขเลี้ยงมาหลายเดือน แข็งแรง เว้นจนนึกว่าเลี้ยงเองเลย!
                            ติดใจมากครับ"
                        </p>
                        <p class="testimonial-author">- คุณวิทยา (เลี้ยง Pomeranian)</p>
                    </div>

                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"บริการเก่ง คำแนะนำละเอียด อาหารของหมาแนะนำดีจริง ๆ
                            ไม่ไปที่ไหนอีกแล้ว!"
                        </p>
                        <p class="testimonial-author">- คุณนวพร (เลี้ยง British Shorthair)</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"ไปเยี่ยมชมปลูกพันธุ์ด้วย สะอาด ดูแลสัตว์ดี น่าไว้ใจ!
                            จึงซื้อจากที่นี่ครับ"
                        </p>
                        <p class="testimonial-author">- คุณสุธัศน์ (เลี้ยง Husky)</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"ลูกแมวอายุเหมาะดี ร่าเริง ส่งมากับความรักและใจดีของเจ้าของ แนะนำเลย!"
                        </p>
                        <p class="testimonial-author">- คุณศรีประภา (เลี้ยง Maine Coon)</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"ของเล่นและอาหารคุณภาพสูง ส่งรวดเร็ว ราคายุติธรรม ไม่แพงตามคาด!"</p>
                        <p class="testimonial-author">- คุณชัยวัฒน์ (เลี้ยง Corgi)</p>
                    </div>
                    <div class="testimonial-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">"ติดต่อถาม แตะกลับเร็ว เอาใจใส่ใหญ่เลย! อยากติดตามข้อมูลเพิ่มเติมได้ 24
                            ชั่วโมง"</p>
                        <p class="testimonial-author">- คุณณัฐวุฒิ (เลี้ยง Dachshund)</p>
                    </div>
                </div>
            </section>

            <section class="cta-section">
                <div class="cta-content">
                    <h2>พร้อมเริ่มต้นการเดินทางกับสัตว์เลี้ยงตัวใหม่แล้วหรือยัง?</h2>
                    <p>ค้นหาสัตว์เลี้ยงที่ใช่สำหรับคุณ หรือติดต่อเราสำหรับคำแนะนำ</p>
                    <div class="cta-buttons">
                        <a href="{{ route('photos.index') }}" class="btn btn-primary btn-large">🛍️ ดูสินค้าทั้งหมด</a>
                        <a href="{{ route('photos.contact') }}" class="btn btn-secondary btn-large">💬 ติดต่อเรา</a>
                    </div>
                </div>
            </section>
    </div>
    </div>
@endsection
