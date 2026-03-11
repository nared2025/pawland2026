const products = [
    // สุนัข พันธุ์ใหญ่
    {
        id: 1,
        image: 'assets/dogs/si.jpg',
        name: 'ไซบีเรียน ฮัสกี้',
        category: 'dog',
        price: 18900,
        desc: 'ขนสวย ซนหนักมาก เหมาะกับผู้ที่ชอบวิ่ง 🐕',
    },
    {
        id: 2,
        image: 'assets/dogs/den.jpg',
        name: 'โกลเด้น เรทรีฟเวอร์',
        category: 'dog',
        price: 16500,
        desc: 'เป็นกันเอง รักษาง่าย สำหรับครอบครัวแม่ลูก 🐕',
    },
    {
        id: 3,
        image: 'assets/dogs/chao.jpg',
        name: 'เชาเชา',
        category: 'dog',
        price: 19900,
        desc: 'ลิ้นสีดำ ดูมาก ศักดิ์สิทธิ์และมีเสน่ห์ 🐕',
    },
    {
        id: 4,
        image: 'assets/dogs/bull.jpg',
        name: 'อเมริกัน บูลด็อก',
        category: 'dog',
        price: 15000,
        desc: 'หน้าเดินชำรุด แต่ใจดี รักการเล่นสนุก 🐕',
    },
    {
        id: 5,
        image: 'assets/dogs/pit.jpg',
        name: 'พิทบูล',
        category: 'dog',
        price: 17000,
        desc: 'แข็งแรง กล้าหาญ ต้องการฝึกสอนอย่างสม่ำเสมอ 🐕',
    },
    {
        id: 6,
        image: 'assets/dogs/rot.jpg',
        name: 'ร็อทไวเลอร์',
        category: 'dog',
        price: 16000,
        desc: 'ฉลาด สัตย์ซื่อ รักษาบ้านดี เหมาะกับครอบครัว 🐕',
    },
    {
        id: 7,
        image: 'assets/dogs/bang.jpg',
        name: 'บางแก้ว',
        category: 'dog',
        price: 25000,
        desc: 'พันธุ์สุนัขไทย แข็งแรง เหมาะกับสภาวะอากาศร้อน 🐕',
    },
    {
        id: 8,
        image: 'assets/dogs/nard.jpg',
        name: 'เซนต์เบอร์นาร์ด',
        category: 'dog',
        price: 22000,
        desc: 'ตัวใหญ่ใจดี รักเด็ก ต้องการพื้นที่กว้าง 🐕',
    },
    {
        id: 9,
        image: 'assets/dogs/ger.jpg',
        name: 'เยอรมัน เชพเพิร์ด',
        category: 'dog',
        price: 14000,
        desc: 'ฉลาด ซื่อสัตย์ รักษาบ้านแบบสายหน้า 🐕',
    },
    {
        id: 10,
        image: 'assets/dogs/sa.jpg',
        name: 'ซามอยด์',
        category: 'dog',
        price: 20000,
        desc: 'ขนขาวสวย ยิ้มน่ารัก เป็นกันเอง 🐕',
    },
    {
        id: 11,
        image: 'assets/dogs/thai.jpg',
        name: 'ไทยหลังอาน',
        category: 'dog',
        price: 12000,
        desc: 'พันธุ์สุนัขไทยแท้ แข็งแรง ลำตัวกำไล 🐕',
    },
    // สุนัข พันธุ์เล็ก
    {
        id: 12,
        image: 'assets/dogssmall/pom.jpg',
        name: 'ปอม (ปอมเมอเรเนียน)',
        category: 'dog',
        price: 8900,
        desc: 'ขนฟูฟ่า ร่าเริง เหมาะสำหรับห้องเก็บ🐶',
    },
    {
        id: 13,
        image: 'assets/dogssmall/chi.jpg',
        name: 'ชิวาว่า',
        category: 'dog',
        price: 7500,
        desc: 'ตัวเล็ก ช่างซน หูใหญ่ บ้านเล็ก นอนกกได้ 🐶',
    },
    {
        id: 14,
        image: 'assets/dogssmall/mall.jpg',
        name: 'มอลทีส',
        category: 'dog',
        price: 9500,
        desc: 'ขนยาวสีขาว น่ารัก ขี้อ้อน ต้องการแปรงขน 🐶',
    },
    {
        id: 15,
        image: 'assets/dogssmall/york.jpg',
        name: 'ยอร์คเชียร์ เทอร์เรีย',
        category: 'dog',
        price: 8500,
        desc: 'ขนยาว หน้าชาญฉลาด เหมาะให้เล่น 🐶',
    },
    {
        id: 16,
        image: 'assets/dogssmall/chi.jpg',
        name: 'ชิสุ (Shih Tzu)',
        category: 'dog',
        price: 7000,
        desc: 'ขนสวย หน้าราบ อ่อนโยน เป็นกันเอง 🐶',
    },
    {
        id: 17,
        image: 'assets/dogssmall/dus.jpg',
        name: 'ดัชชุน',
        category: 'dog',
        price: 6500,
        desc: 'ลำตัวยาว ขาสั้น อัจฉริยะและจอม ต้องการการดูแลพิเศษ 🐶'
    },
    {
        id: 18,
        image: 'assets/dogssmall/pus.jpg',
        name: 'พูดเดิ้ล ทอย',
        category: 'dog',
        price: 9000,
        desc: 'ฉลาด ขนม่วง ต้องการแปรงขนสม่ำเสมอ 🐶',
    },
    {
        id: 19,
        image: 'assets/dogssmall/pug.jpg',
        name: 'ปั๊ก',
        category: 'dog',
        price: 6800,
        desc: 'หน้าน่ารัก ตัวเล็ก ชอบการนอน 🐶',
    },
    {
        id: 20,
        image: 'assets/dogssmall/va.jpg',
        name: 'คาวาเลียร์ คิงชาร์ลส์ สแปเนียล',
        category: 'dog',
        price: 10500,
        desc: 'กลมน่ารัก ขี้อ้อน หูยาวสวย ใจดี 🐶',
    },
    {
        id: 21,
        image: 'assets/dogssmall/gi.jpg',
        name: 'เวลส์ คอร์กี้',
        category: 'dog',
        price: 11000,
        desc: 'ขาสั้น ตัวแรง ฉลาด 🐶',
    },
    {
        id: 22,
        image: 'assets/dogssmall/pa.jpg',
        name: 'พาปิยง (Papillon)',
        category: 'dog',
        price: 9500,
        desc: 'หูบิน ฉลาด ชอบการเล่นกีฬา ต้องการออกกำลังกาย 🐶',
    },
    {
        id: 23,
        image: 'assets/dogssmall/se.jpg',
        name: 'บิชง ฟริเซ่',
        category: 'dog',
        price: 8000,
        desc: 'ขนฟูสีขาว ร่าเริง เก๋ไก่ เหมาะกับการแสดง 🐶',
    },
    // แมว พันธุ์ต่างๆ
    {
        id: 24,
        image: 'assets/cats/perone.jpg',
        name: 'เปอร์เซีย (Persian)',
        category: 'cat',
        price: 16500,
        desc: 'ขนยาว หน้ากลม อ่อนโยน ต้องการแปรงขนสม่ำเสมอ 🐱',
    },
    {
        id: 25,
        image: 'assets/cats/koonone.jpg',
        name: 'เมนคูน (Maine Coon)',
        category: 'cat',
        price: 18900,
        desc: 'ตัวใหญ่ ขนหนา เจ้าแบบแมว ใจดี 🐱',
    },
    {
        id: 26,
        image: 'assets/cats/gorone.jpg',
        name: 'เบงกอล (Bengal)',
        category: 'cat',
        price: 21500,
        desc: 'ลายเสือสวย ว่องไว ปราดเปรื่อง ชอบการเล่น 🐱',
    },
    {
        id: 27,
        image: 'assets/cats/kurtone.jpg',
        name: 'อเมริกันเคิร์ล (American Kurt)',
        category: 'cat',
        price: 12800,
        desc: 'ตัวเล็ก ฉลาด ขี้อ้อน ใจดี 🐱',
    },
    {
        id: 28,
        image: 'assets/cats/scotone.jpg',
        name: 'สก็อตติช โฟลด์ (Scottish Fold)',
        category: 'cat',
        price: 14900,
        desc: 'หูพับน่ารัก หน้าโล่ง ขี้อ้อน ใจดี 🐱'
    },
    {
        id: 29,
        image: 'assets/cats/fikone.jpg',
        name: 'สฟิงซ์ (Sphynx)',
        category: 'cat',
        price: 19800,
        desc: 'ไม่มีขน อุ่นใจ ต้องการการดูแลพิเศษ 🐱'
    },
    {
        id: 30,
        image: 'assets/cats/shotone.jpg',
        name: 'บริทิช ช็อตแอร์ (British Shorthair)',
        category: 'cat',
        price: 14200,
        desc: 'ขนหนาแน่น สีเทา น่ารัก สุขภาพแข็งแรง 🐱',
    },
    {
        id: 31,
        image: 'assets/cats/vione.jpg',
        name: 'วิเชียรมาศ (Wichien Maat)',
        category: 'cat',
        price: 17500,
        desc: 'ขนสั้น ฉลาดและซื่อสัตย์ แมวมงคลไทยแท้ 🐱',
    },
    {
        id: 32,
        image: 'assets/cats/meganshotone.jpg',
        name: 'อเมริกัน ช็อตแอร์ (American Shorthair)',
        category: 'cat',
        price: 13500,
        desc: 'ขาสั้น ตัวเล็ก น่ารัก ว่องไว 🐱',
    },
    {
        id: 33,
        image: 'assets/cats/ragone.jpg',
        name: 'เรกดอล (Ragdoll)',
        category: 'cat',
        price: 16200,
        desc: 'ลุคคุณหนู ขนยาว นุ่มสวย น่ารัก 🐱',
    },
    {
        id: 34,
        image: 'assets/cats/maneeone.jpg',
        name: 'ขาวมณี (Khao Manee)',
        category: 'cat',
        price: 15300,
        desc: 'ขนสั้น ขาวนวล ฉลาด ขี้เล่น 🐱',
    },
        {
        id: 35,
        image: 'assets/cats/swatone.jpg',
        name: 'สีสวาด (Si Sawat)',
        category: 'cat',
        price: 15300,
        desc: 'ขนสั้น สีสวย สุดฉลาด 🐱'
    },
    //accessories สุนัข
    {
        id: 36,
        image: 'assets/accessdogs/gad.jpg',
        name: 'ของเล่นเชือกกัด (สุนัข)',
        category: 'dog-accessory',
        price: 129,
        desc: 'เชือกกัดเสริมฟัน ลดความเครียด เล่นเพลิน 🪢',
    },
    {
        id: 37,
        image: 'assets/accessdogs/ball.jpg',
        name: 'ลูกบอลยางเด้ง (สุนัข)',
        category: 'dog-accessory',
        price: 99,
        desc: 'ลูกบอลยางเด้ง ทนทาน เหมาะกับสายวิ่ง ⚽'
    },
    {
        id: 38,
        image: 'assets/accessdogs/pedigree.jpg',
        name: 'อาหารเพดดีกรี (สุนัข)',
        category: 'dog-food',
        price: 99,
        desc: 'อาหารเพดดีกรี 🍖 สำหรับสุนัขทุกช่วงวัย',
    },
    {
        id: 39,
        image: 'assets/accessdogs/chappibigdogs.jpg',
        name: 'อาหารชัปปี้ (สุนัข)',
        category: 'dog-food',
        price: 99,
        desc: 'อาหารชัปปี้ 🍖 สำหรับสุนัขทุกช่วงวัย',
    },
    {
        id: 40,
        image: 'assets/accessdogs/shampoo.jpg',
        name: 'แชมพู (สุนัข)',
        category: 'dog-accessory',
        price: 99,
        desc: 'แชมพูสำหรับสุนัข 🛁 ทำความสะอาดได้ลึกซึ้ง',
    },
    {
        id: 41,
        image: 'assets/accessdogs/guard.jpg',
        name: 'สเปย์กำจัดเห็บมัด (สุนัข)',
        category: 'dog-accessory',
        price: 99,
        desc: 'สเปย์กำจัดเห็บมัด ปลอดภัยต่อสุนัข 🧴',
    },

    //accessories แมว
    {
        id: 42,
        image: 'assets/accesscats/bet.jpg',
        name: 'ที่นอนนุ่มสบาย (แมว)',
        category: 'cat-accessory',
        price: 89,
        desc: 'ที่นอนนุ่มสบาย สำหรับแมวที่ชอบนอนหลับ 🛏️',
    },
        {
        id: 43,
        image: 'assets/accesscats/charm.jpg',
        name: 'ชามใส่อาหาร (แมว)',
        category: 'cat-accessory',
        price: 89,
        desc: 'ชามใส่อาหาร สำหรับแมวที่ชอบกินอาหาร 🥣'
    },
        {
        id: 44,
        image: 'assets/accesscats/eatcat.jpg',
        name: 'อาหารพรีเมี่ยม (แมว)',
        category: 'cat-food',
        price: 89,
        desc: 'อาหารพรีเมี่ยม สำหรับแมวที่ต้องการอาหารคุณภาพสูง 🍖'
    },
        {
        id: 45,
        image: 'assets/accesscats/select.jpg',
        name: 'อาหารตราซีเล็ก (แมว)',
        category: 'cat-food',
        price: 89,
        desc: 'อาหารซีเล็ก สำหรับแมวที่ต้องการอาหารคุณภาพสูง 🍖'
    },
        {
        id: 46,
        image: 'assets/accesscats/sai.jpg',
        name: 'สายคล้องคอ (แมว)',
        category: 'cat-accessory',
        price: 89,
        desc: 'สายคล้องคอ จูงได้ สำหรับแมวที่ชอบเดินเล่น 🐾',
    },
        {
        id: 47,
        image: 'assets/accesscats/move.jpg',
        name: 'กระเป๋า (แมว)',
        category: 'cat-accessory',
        price: 89,
        desc: 'กระเป๋าสำหรับแมว สะดวกในการพาแมวไปเที่ยวหรือไปหาหมอ 🎒'
    },
    {
        id: 48,
        image: 'assets/accesscats/water.jpg',
        name: 'น้ำพุน้ำทานได้ (แมว)',
        category: 'cat-accessory',
        price: 79,
        desc: 'น้ำพุสำหรับแมว ดึงดูดความสนใจของแมว 🧊'
    }
];

let cart = [];
let wishlist = [];
let currentCategory = 'all';
let searchQuery = '';

// localStorage cart management
function saveCart() {
    localStorage.setItem('petfoodCart', JSON.stringify(cart));
}

function loadCart() {
    const saved = localStorage.getItem('petfoodCart');
    cart = saved ? JSON.parse(saved) : [];
    updateCartCount();
}

function saveWishlist() {
    localStorage.setItem('petfoodWishlist', JSON.stringify(wishlist));
}

function loadWishlist() {
    const saved = localStorage.getItem('petfoodWishlist');
    wishlist = saved ? JSON.parse(saved) : [];
}

function updateCartCount() {
    const count = cart.reduce((sum, item) => sum + item.quantity, 0);
    const cartCountEl = document.getElementById('cartCount');
    if (!cartCountEl) return; // หน้าแรกไม่มีตะกร้า
    cartCountEl.textContent = count;
}

function renderCartItems() {
    const cartItemsContainer = document.getElementById('cartItems');
    
    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<div class="empty-cart">ตะกร้าว่างเปล่า</div>';
        document.getElementById('cartTotal').textContent = '฿0';
        return;
    }
    
    let total = 0;
    cartItemsContainer.innerHTML = cart.map(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;
        return `
            <div class="cart-item">
                <div class="cart-item-image">${item.emoji}</div>
                <div class="cart-item-info">
                    <div class="cart-item-name">${item.name}</div>
                    <div class="cart-item-desc">${item.desc}</div>
                    <div class="cart-item-price">฿${item.price}</div>
                </div>
                <div class="cart-item-quantity">
                    <button class="qty-btn" onclick="decreaseQuantity(${item.id})">−</button>
                    <input type="number" value="${item.quantity}" readonly class="qty-input">
                    <button class="qty-btn" onclick="increaseQuantity(${item.id})">+</button>
                </div>
                <div class="cart-item-total">฿${itemTotal}</div>
                <button class="cart-item-remove" onclick="removeFromCart(${item.id})">🗑️</button>
            </div>
        `;
    }).join('');
    
    document.getElementById('cartTotal').textContent = `฿${total}`;
}

function increaseQuantity(productId) {
    const item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity++;
        saveCart();
        renderCartItems();
        updateCartCount();
    }
}

function decreaseQuantity(productId) {
    const item = cart.find(item => item.id === productId);
    if (item && item.quantity > 1) {
        item.quantity--;
        saveCart();
        renderCartItems();
        updateCartCount();
    }
}

function removeFromCart(productId) {
    const index = cart.findIndex(item => item.id === productId);
    if (index > -1) {
        const itemName = cart[index].name;
        cart.splice(index, 1);
        saveCart();
        renderCartItems();
        updateCartCount();
        showNotification(`ลบ ${itemName} ออกจากตะกร้า`);
    }
}

function renderProducts(category = 'all', searchTerm = '') {
    const grid = document.getElementById('productsGrid');
    let filteredProducts = category === 'all' 
        ? products 
        : products.filter(p => p.category === category);
    
    // Search filter
    if (searchTerm.trim()) {
        filteredProducts = filteredProducts.filter(p => 
            p.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
            p.desc.toLowerCase().includes(searchTerm.toLowerCase())
        );
    }
    
    if (filteredProducts.length === 0) {
        grid.innerHTML = '<div style="grid-column: 1/-1; text-align: center; padding: 3rem; color: #795548; font-size: 1.1rem;">ไม่พบสินค้า</div>';
        return;
    }
    
    grid.innerHTML = filteredProducts.map(product => {
        const isWishlisted = wishlist.includes(product.id);
        const ratingStars = '⭐'.repeat(Math.floor(product.rating)) + (product.rating % 1 >= 0.5 ? '✨' : '');
        
        return `
            <div class="product-card">
                ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
                <button class="wishlist-btn ${isWishlisted ? 'active' : ''}" onclick="toggleWishlist(${product.id})">
                    ${isWishlisted ? '❤️' : '🤍'}
                </button>

                <div class="product-image">
                   ${product.image 
                     ? `<img src="../${product.image}" alt="${product.name}">`:''}
                </div>
                <div class="product-info">
                    <div class="product-name">${product.name}</div>
                    <div class="product-rating">${ratingStars} ${product.rating}</div>
                    <div class="product-desc">${product.desc}</div>
                    <div class="product-price">฿${product.price}</div>
                    <button class="add-to-cart" onclick="addToCart(${product.id})">
                        เพิ่มลงตะกร้า
                    </button>
                </div>
            </div>
        `;
    }).join('');
}

function toggleWishlist(productId) {
    const index = wishlist.indexOf(productId);
    if (index > -1) {
        wishlist.splice(index, 1);
        showNotification('ลบออกจากรายการโปรด');
    } else {
        wishlist.push(productId);
        showNotification('เพิ่มลงรายการโปรด ❤️');
    }
    saveWishlist();
    renderProducts(currentCategory, searchQuery);
}

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ ...product, quantity: 1 });
    }
    
    saveCart();
    updateCartCount();
    
    const cartBtn = document.getElementById('cartBtn');
    cartBtn.style.transform = 'scale(1.2)';
    setTimeout(() => {
        cartBtn.style.transform = 'scale(1)';
    }, 200);
    
    // Show notification
    showNotification(`เพิ่ม ${product.name} ลงตะกร้าแล้ว!`);
}

function showNotification(message) {
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #8d6e63 0%, #6d4c41 100%);
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(109, 76, 65, 0.3);
        z-index: 1000;
        animation: slideIn 0.3s ease;
    `;
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 2000);
}

document.addEventListener('DOMContentLoaded', function() {
    loadCart();
    loadWishlist();
    
    // Search input
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            searchQuery = e.target.value;
            renderProducts(currentCategory, searchQuery);
        });
    }
    
    // Tab buttons
    const tabBtns = document.querySelectorAll('.tab-btn');
    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentCategory = this.dataset.category;
                renderProducts(currentCategory);
            });
        });
        renderProducts();
    }

    // Cart button
    const cartBtn = document.getElementById('cartBtn');
    if (cartBtn) {
        cartBtn.addEventListener('click', function() {
            renderCartItems();
            document.getElementById('cartModal').classList.add('show');
        });
    }

    // Cart close button
    const cartCloseBtn = document.getElementById('cartCloseBtn');
    if (cartCloseBtn) {
        cartCloseBtn.addEventListener('click', function() {
            document.getElementById('cartModal').classList.remove('show');
        });
    }

    // Clear cart button
    const clearCartBtn = document.getElementById('clearCartBtn');
    if (clearCartBtn) {
        clearCartBtn.addEventListener('click', function() {
            if (cart.length === 0) {
                alert('ตะกร้าว่างเปล่าแล้ว');
                return;
            }
            if (confirm('คุณแน่ใจหรือว่าต้องการล้างตะกร้า?')) {
                cart = [];
                saveCart();
                renderCartItems();
                updateCartCount();
                showNotification('ล้างตะกร้าแล้ว');
            }
        });
    }

    // Checkout button
    const checkoutBtn = document.getElementById('checkoutBtn');
    if (checkoutBtn) {
        checkoutBtn.addEventListener('click', function() {
            if (cart.length === 0) {
                alert('ตะกร้าว่างเปล่า');
                return;
            }
            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            alert(`ขอบคุณที่สั่งซื้อ!\n\nรวม: ฿${total}\n\nเราจะติดต่อคุณในเร็วๆนี้`);
            cart = [];
            saveCart();
            renderCartItems();
            updateCartCount();
            document.getElementById('cartModal').classList.remove('show');
            showNotification('สั่งซื้อสำเร็จ!');
        });
    }

    // Close modal when clicking outside
    const cartModal = document.getElementById('cartModal');
    if (cartModal) {
        cartModal.addEventListener('click', function(e) {
            if (e.target === cartModal) {
                cartModal.classList.remove('show');
            }
        });
    }

    // Hero slider (หน้าแรก)
    const heroSlider = document.querySelector('.hero-slider');
    if (heroSlider) {
        const slides = heroSlider.querySelectorAll('.hero-slide');
        const dotsContainer = document.querySelector('.hero-dots');
        const toggleBtn = document.querySelector('.hero-toggle');
        let currentIndex = 0;
        let autoSlideTimer = null;
        let pointerDownX = null;
        let pointerDownY = null;
        let isDragging = false;
        let isPaused = false;

        function createDots() {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = '';
            slides.forEach((_, index) => {
                const dot = document.createElement('button');
                dot.className = 'hero-dot' + (index === currentIndex ? ' active' : '');
                dot.type = 'button';
                dot.setAttribute('aria-label', `สไลด์ที่ ${index + 1}`);
                dot.addEventListener('click', () => goToSlide(index, false));
                dotsContainer.appendChild(dot);
            });
        }

        function updateActiveSlide() {
            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === currentIndex);
            });
            if (dotsContainer) {
                const dots = dotsContainer.querySelectorAll('.hero-dot');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
        }

        function goToSlide(index, fromAuto = false) {
            if (index < 0) {
                currentIndex = slides.length - 1;
            } else if (index >= slides.length) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }
            updateActiveSlide();
            if (!fromAuto) {
                restartAutoSlide();
            }
        }

        function nextSlide(fromAuto = false) {
            goToSlide(currentIndex + 1, fromAuto);
        }

        function prevSlide(fromAuto = false) {
            goToSlide(currentIndex - 1, fromAuto);
        }

        function startAutoSlide() {
            // กันการสร้าง interval ซ้อน
            stopAutoSlide();
            if (isPaused) return;
            autoSlideTimer = setInterval(() => nextSlide(true), 5000);
        }

        function stopAutoSlide() {
            if (autoSlideTimer) {
                clearInterval(autoSlideTimer);
                autoSlideTimer = null;
            }
        }

        function restartAutoSlide() {
            stopAutoSlide();
            startAutoSlide();
        }

        // Init
        if (slides.length > 0) {
            createDots();
            updateActiveSlide();
            startAutoSlide();
        }

        function updateToggleUi() {
            if (!toggleBtn) return;
            toggleBtn.textContent = isPaused ? '▶' : '❚❚';
            toggleBtn.setAttribute('aria-label', isPaused ? 'เล่นการเลื่อนอัตโนมัติ' : 'หยุดการเลื่อนอัตโนมัติ');
        }

        if (toggleBtn) {
            updateToggleUi();
            toggleBtn.addEventListener('click', () => {
                isPaused = !isPaused;
                if (isPaused) {
                    stopAutoSlide();
                } else {
                    startAutoSlide();
                }
                updateToggleUi();
            });
        }

        // Swipe / drag to slide (mobile + desktop)
    heroSlider.addEventListener('pointerdown', (e) => {

    // ถ้าคลิกปุ่มหรือ link ให้ทำงานปกติ
    if (e.target.closest('a, button')) return;

    heroSlider.setPointerCapture?.(e.pointerId);

    pointerDownX = e.clientX;
    pointerDownY = e.clientY;
    isDragging = true;
    stopAutoSlide();
});

        heroSlider.addEventListener('pointermove', (e) => {
            if (!isDragging || pointerDownX === null || pointerDownY === null) return;
            // ถ้าลากแนวตั้งมากกว่าแนวนอน ให้ปล่อยไป (เลื่อนหน้า)
            const dx = e.clientX - pointerDownX;
            const dy = e.clientY - pointerDownY;
            if (Math.abs(dy) > Math.abs(dx) && Math.abs(dy) > 10) {
                // ยอมให้ scroll ธรรมชาติ
                isDragging = false;
                pointerDownX = null;
                pointerDownY = null;
                startAutoSlide();
            }
        });

        heroSlider.addEventListener('pointerup', (e) => {
            if (pointerDownX === null || !isDragging) {
                startAutoSlide();
                return;
            }
            const dx = e.clientX - pointerDownX;
            const threshold = 60;

            isDragging = false;
            pointerDownX = null;
            pointerDownY = null;

            if (dx > threshold) {
                prevSlide(false);
            } else if (dx < -threshold) {
                nextSlide(false);
            }
            startAutoSlide();
        });

        heroSlider.addEventListener('pointercancel', () => {
            isDragging = false;
            pointerDownX = null;
            pointerDownY = null;
            startAutoSlide();
        });

        // pause autoplay when tab hidden
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopAutoSlide();
            } else {
                startAutoSlide();
            }
        });
    }

    // Form validation for contact form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const inputs = contactForm.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], select, textarea');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#d84315';
                } else {
                    input.style.borderColor = '#d7ccc8';
                }
            });
            
            if (!isValid) {
                alert('กรุณากรอกข้อมูลทั้งหมด');
                return;
            }
            
            // Email validation
            const emailInput = contactForm.querySelector('input[type="email"]');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                alert('อีเมลไม่ถูกต้อง');
                emailInput.style.borderColor = '#d84315';
                return;
            }
            
            // Phone validation
            const phoneInput = contactForm.querySelector('input[type="tel"]');
            const phoneRegex = /^[0-9\-\s]{10,}$/;
            if (!phoneRegex.test(phoneInput.value)) {
                alert('เบอร์โทรศัพท์ไม่ถูกต้อง');
                phoneInput.style.borderColor = '#d84315';
                return;
            }
            
            // Success
            alert('ขอบคุณที่ติดต่อเรา! เราจะตอบกลับโดยเร็วที่สุด');
            contactForm.reset();
            inputs.forEach(input => input.style.borderColor = '#d7ccc8');
        });
    }
});

// Add animations
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
