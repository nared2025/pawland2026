@extends ('layouts.layout')
@section('title', 'สินค้า')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <div class="container" id="products">
        <h2 class="section-title">สินค้าของเรา</h2>
        <style>
            .products-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 1.2rem;
                padding: 1rem;
            }

            .product-card {
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                display: flex;
                flex-direction: column;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                position: relative;
            }

            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            .product-card img {
                width: 100%;
                height: 180px;
                object-fit: cover;
            }

            .product-info {
                padding: 0.8rem 1rem;
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .product-name {
                font-weight: bold;
                font-size: 1rem;
                color: #333;
            }

            .product-desc {
                font-size: 0.9rem;
                color: #666;
                height: 40px;
                overflow: hidden;
            }

            .product-price {
                font-weight: bold;
                color: #ff5f6d;
            }

            .add-to-cart {
                margin-top: auto;
                background: #ff5f6d;
                color: #fff;
                border: none;
                padding: 0.5rem 0;
                border-radius: 6px;
                cursor: pointer;
                transition: background 0.2s ease;
            }

            .add-to-cart:hover {
                background: #e04e57;
            }

            .wishlist-btn {
                position: absolute;
                top: 8px;
                right: 8px;
                background: transparent;
                border: none;
                font-size: 1.2rem;
                cursor: pointer;
                transition: transform 0.15s ease, color 0.15s ease;
            }

            .wishlist-btn.active {
                color: #e0245e;
                transform: scale(1.1);
            }
        </style>
        @php
            $typeNames = [
                'Food_dog' => 'อาหารน้องสุนัข',
                'Food_cat' => 'อาหารน้องแมว',
                'Dog_nail_clippers' => 'กรรไกรตัดเล็บสุนัข',
                'Cat_litter' => 'ทรายแมว',
                'Comb' => 'หวี',
                'Collar' => 'ปลอกคอ',
                'Leash' => 'สายจูง',
                'Dog_bowl' => 'ชามอาหารสุนัข',
                'Dog_cage' => 'กรงสุนัข',
                'Pet_shirt' => 'เสื้อสัตว์เลี้ยง',
                'Pet_pad' => 'แผ่นรองซับ',
                'Shampoo' => 'แชมพูสัตว์เลี้ยง',
                'Dog_toothbrush' => 'แปรงสีฟันสุนัข',
                'Toys_dog' => 'ของเล่นสุนัข',
                'Cat_condo' => 'คอนโดแมว',
                'Cat_bag' => 'กระเป๋าแมว',
                'Toys_cat' => 'ของเล่นแมว',
            ];
        @endphp
        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input" placeholder="🔎 ค้นหาสินค้า...">
        </div>

        <div class="category-tabs">
            <button class="tab-btn active" data-category="all">ทั้งหมด</button>
            @foreach ($types as $type)
                <button class="tab-btn" data-category="{{ $type }}">
                    {{ $typeNames[$type] ?? $type }}
                </button>
            @endforeach
        </div>

        <div class="products-grid">
            @foreach ($products as $item)
                <div class="product-card"
                    data-id="{{ $item->id }}"
                    data-category="{{ $item->type }}"
                    data-name="{{ $item->name }}"
                    data-price="{{ $item->price }}">
                    <button class="wishlist-btn" onclick="toggleWishlist({{ $item->id }}, this)">🤍</button>

                    <img src="{{ asset($item->image_url) }}" alt="{{ $item->name }}">

                    <div class="product-info">
                        <h3 class="product-name">{{ $item->name }}</h3>
                        <p class="product-desc">{{ $item->description }}</p>
                        <p class="product-price">{{ number_format($item->price, 2) }} บาท</p>
                        <button class="add-to-cart" onclick="addToCart({{ $item->id }}, this)">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="cart" id="cartBtn" aria-label="ตะกร้าสินค้า">
            🛒
            <span class="cart-count" id="cartCount">0</span>
        </div>

        <!-- Cart Modal -->
        <div class="cart-modal" id="cartModal">
            <div class="cart-modal-content">
                <div class="cart-modal-header">
                    <h2>ตะกร้าสินค้า</h2>
                    <button class="cart-close-btn" id="cartCloseBtn">&times;</button>
                </div>
                <div class="cart-modal-body">
                    <div class="cart-items" id="cartItems">
                        <!-- Cart items will be rendered here -->
                    </div>
                </div>
                <div class="cart-modal-footer">
                    <div class="cart-summary">
                        <div class="summary-row">
                            <span>ราคารวม:</span>
                            <span id="cartTotal">฿0</span>
                        </div>
                    </div>
                    <div class="cart-actions">
                        <button class="btn btn-secondary" id="clearCartBtn">ล้างตะกร้า</button>
                        <button class="btn btn-primary" id="checkoutBtn">ไปชำระเงิน</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab-btn');
            const searchInput = document.getElementById('searchInput');
            const products = Array.from(document.querySelectorAll('.product-card'));

            // --- ฟิลเตอร์ตามหมวดหมู่ ---
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    const category = tab.dataset.category.toLowerCase();
                    const keyword = searchInput.value.toLowerCase();

                    products.forEach(prod => {
                        const prodCat = prod.dataset.category.toLowerCase();
                        const name = prod.dataset.name.toLowerCase();
                        const inCategory = (category === 'all' || prodCat === category);
                        const matchSearch = !keyword || name.includes(keyword);
                        prod.style.display = inCategory && matchSearch ? 'block' : 'none';
                    });
                });
            });

            // --- ค้นหาชื่อสินค้าแบบ real-time ---
            searchInput.addEventListener('input', () => {
                const keyword = searchInput.value.toLowerCase();
                const currentCategory = document.querySelector('.tab-btn.active').dataset.category.toLowerCase();

                products.forEach(prod => {
                    const name = prod.dataset.name.toLowerCase();
                    const prodCat = prod.dataset.category.toLowerCase();
                    const inCategory = (currentCategory === 'all' || prodCat === currentCategory);
                    const matchSearch = !keyword || name.includes(keyword);
                    prod.style.display = inCategory && matchSearch ? 'block' : 'none';
                });
            });

            // --- ตะกร้าสินค้า & หัวใจ ---
            const cart = [];
            const wishlist = new Set();

            const cartBtn = document.getElementById('cartBtn');
            const cartModal = document.getElementById('cartModal');
            const cartCloseBtn = document.getElementById('cartCloseBtn');
            const cartItemsEl = document.getElementById('cartItems');
            const cartCountEl = document.getElementById('cartCount');
            const cartTotalEl = document.getElementById('cartTotal');
            const clearCartBtn = document.getElementById('clearCartBtn');
            const checkoutBtn = document.getElementById('checkoutBtn');

            function renderCart() {
                if (!cartItemsEl || !cartTotalEl || !cartCountEl) return;

                if (cart.length === 0) {
                    cartItemsEl.innerHTML = '<div class="empty-cart">ตะกร้าว่างเปล่า</div>';
                    cartTotalEl.textContent = '฿0.00';
                    cartCountEl.textContent = '0';
                    return;
                }

                let total = 0;
                cartItemsEl.innerHTML = cart.map(item => {
                    const line = item.price * item.quantity;
                    total += line;
                    return `
                        <div class="cart-item">
                            <div class="cart-item-info">
                                <div class="cart-item-name">${item.name}</div>
                                <div class="cart-item-meta">฿${item.price.toFixed(2)} × ${item.quantity}</div>
                            </div>
                            <div class="cart-item-total">฿${line.toFixed(2)}</div>
                        </div>
                    `;
                }).join('');

                cartTotalEl.textContent = `฿${total.toFixed(2)}`;
                const count = cart.reduce((sum, i) => sum + i.quantity, 0);
                cartCountEl.textContent = count.toString();
            }

            function findProductData(id) {
                const card = products.find(p => Number(p.dataset.id) === Number(id));
                if (!card) return null;
                return {
                    id: Number(card.dataset.id),
                    name: card.dataset.name,
                    price: Number(card.dataset.price) || 0,
                };
            }

            function addToCartInternal(productId) {
                const data = findProductData(productId);
                if (!data || !data.price) return;

                const existing = cart.find(i => i.id === data.id);
                if (existing) {
                    existing.quantity += 1;
                } else {
                    cart.push({ ...data, quantity: 1 });
                }
                renderCart();
            }

            function toggleWishlistInternal(productId, buttonEl) {
                if (wishlist.has(productId)) {
                    wishlist.delete(productId);
                    if (buttonEl) {
                        buttonEl.classList.remove('active');
                        buttonEl.textContent = '🤍';
                    }
                } else {
                    wishlist.add(productId);
                    if (buttonEl) {
                        buttonEl.classList.add('active');
                        buttonEl.textContent = '❤️';
                    }
                }
            }

            // เปิด/ปิด modal ตะกร้า
            if (cartBtn && cartModal) {
                cartBtn.addEventListener('click', () => {
                    renderCart();
                    cartModal.classList.add('show');
                });
            }

            if (cartCloseBtn && cartModal) {
                cartCloseBtn.addEventListener('click', () => {
                    cartModal.classList.remove('show');
                });
            }

            if (clearCartBtn) {
                clearCartBtn.addEventListener('click', () => {
                    if (!cart.length) return;
                    if (!confirm('ต้องการล้างตะกร้าสินค้าหรือไม่?')) return;
                    cart.length = 0;
                    renderCart();
                });
            }

            if (checkoutBtn) {
                checkoutBtn.addEventListener('click', () => {
                    if (!cart.length) {
                        alert('ตะกร้าสินค้ายังว่างอยู่');
                        return;
                    }
                    const total = cart.reduce((sum, i) => sum + i.price * i.quantity, 0);
                    alert(`ขอบคุณที่สั่งซื้อ!\n\nยอดรวม: ฿${total.toFixed(2)}`);
                    cart.length = 0;
                    renderCart();
                    if (cartModal) {
                        cartModal.classList.remove('show');
                    }
                });
            }

            // เผยฟังก์ชันให้ onclick ใช้งาน
            window.addToCart = function (id, btn) {
                addToCartInternal(Number(id));
            };

            window.toggleWishlist = function (id, btn) {
                toggleWishlistInternal(Number(id), btn);
            };

            // initial state
            renderCart();
        });
    </script>
