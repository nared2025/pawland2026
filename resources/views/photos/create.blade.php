@extends('layouts.layout')
@section('title', 'จัดการสินค้า')
@section('content')


    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <style>
        .admin-layout {
            max-width: 1360px;
            margin: 2rem auto 4rem;
            padding: 0 2rem;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .admin-title {
            font-size: 1.8rem;
            color: #5d4037;
        }

        .admin-badge {
            padding: 0.4rem 0.9rem;
            border-radius: 999px;
            background: #efebe9;
            color: #6d4c41;
            font-size: 0.85rem;
        }

        .admin-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            gap: 2.25rem;
        }

        .admin-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            padding: 1.5rem 1.75rem;
        }

        .admin-card h2 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #6d4c41;
        }

        .admin-form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .admin-form-grid .full {
            grid-column: 1 / -1;
        }

        .admin-form-actions {
            margin-top: 1.25rem;
            display: flex;
            gap: 0.75rem;
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.92rem;
        }

        .admin-table th,
        .admin-table td {
            padding: 0.7rem 0.75rem;
            border-bottom: 1px solid #efebe9;
            text-align: left;
            vertical-align: middle;
        }

        .admin-table th {
            font-weight: 600;
            color: #6d4c41;
            background: #f5f0ec;
            white-space: nowrap;
        }

        .admin-table tbody tr:hover {
            background: #fdf7f3;
        }

        .admin-table .product-image-cell {
            width: 70px;
        }

        .admin-table th.col-id {
            width: 60px;
            text-align: center;
        }

        .admin-table th.col-image {
            width: 90px;
            text-align: center;
        }

        .admin-table th.col-name {
            min-width: 220px;
        }

        .admin-table th.col-type {
            min-width: 150px;
        }

        .admin-table th.col-price,
        .admin-table th.col-stock {
            min-width: 90px;
            text-align: right;
        }

        .admin-table th.col-actions {
            min-width: 130px;
            text-align: center;
        }

        .admin-table td.col-id,
        .admin-table td.col-image,
        .admin-table td.col-actions {
            text-align: center;
        }

        .admin-table td.col-name,
        .admin-table td.col-type {
            white-space: nowrap;
        }

        .admin-table td.col-price,
        .admin-table td.col-stock {
            text-align: right;
            white-space: nowrap;
        }

        .admin-product-thumb {
            width: 56px;
            height: 56px;
            border-radius: 10px;
            overflow: hidden;
            background: #efebe9;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
        }

        .admin-product-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .admin-tag {
            display: inline-block;
            padding: 0.15rem 0.55rem;
            border-radius: 999px;
            font-size: 0.78rem;
            background: #efebe9;
            color: #6d4c41;
        }

        .admin-actions button {
            border: none;
            background: none;
            cursor: pointer;
            font-size: 0.9rem;
            padding: 0.1rem 0.25rem;
        }

        .admin-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
            justify-content: center;
            align-items: center;
        }

        .admin-actions .danger {
            color: #c62828;
        }

        .admin-actions .primary {
            color: #6d4c41;
        }

        .admin-empty {
            text-align: center;
            padding: 1.5rem;
            color: #8d6e63;
            font-size: 0.95rem;
        }

        .admin-status {
            margin-top: 0.75rem;
            font-size: 0.86rem;
            color: #6d4c41;
        }

        .admin-status span {
            font-weight: 600;
        }

        @media (max-width: 900px) {
            .admin-layout {
                padding: 0 1.25rem;
            }
        }
    </style>
    </head>

    <body>
        <div class="admin-layout">
            <div class="admin-header">
                <div>
                    {{-- <div class="admin-title">จัดการสินค้า & โปรโมชัน</div> --}}
                    <div class="admin-title">จัดการสินค้า</div>
                    <div class="admin-status">สวัสดีคุณ <span id="adminName">{{$user}}</span></div>
                </div>
                <div class="admin-badge">Backoffice</div>
            </div>

            <div class="admin-grid">
                <div class="admin-card">
                    <h2>เพิ่ม / แก้ไขสินค้า</h2>
                    <form id="productForm"
                        action="{{ isset($product) ? route('photos.update', $product->id) : route('photos.store') }}"
                        method="POST" enctype="multipart/form-data">

                        @csrf

                        @isset($product)
                            @method('PUT')
                        @endisset

                        @csrf
                        <div class="admin-form-grid">
                            <div class="form-group">
                                <label for="pName">ชื่อสินค้า *</label>
                                <input
                                    type="text"
                                    id="pName"
                                    name="name"
                                    value="{{ old('name', $product->name ?? '') }}"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="pPrice">ราคา (บาท) *</label>
                                <input
                                    type="number"
                                    id="pPrice"
                                    step="0.01"
                                    min="0"
                                    name="price"
                                    value="{{ old('price', $product->price ?? '') }}"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="pStock">สต็อก *</label>
                                <input
                                    type="number"
                                    id="pStock"
                                    min="0"
                                    name="stock"
                                    value="{{ old('stock', $product->stock ?? '') }}"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="pType">ประเภท *</label>
                                <select id="pType" name="type" required>
                                    <option value="" disabled {{ old('type', $product->type ?? '') === '' ? 'selected' : '' }}>เลือกประเภท</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type }}"
                                            {{ old('type', $product->type ?? '') === $type ? 'selected' : '' }}>
                                            {{ $typeNames[$type] ?? $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group full">
                                <label for="description">รายละเอียดสินค้า</label>
                                <textarea id="description" name="description">{{ old('description', $product->description ?? '') }}</textarea>
                            </div>
                            <div class="form-group full">
                                <label for="pImage">ลิงก์รูปภาพ (URL หรือ path)</label>
                                <input type="file" id="pImage" name="image" accept="image/*"
                                    placeholder="ตัวอย่าง: assets/dog-food-1.jpg">
                            </div>
                        </div>
                        <input type="hidden" id="pId">
                        <div class="admin-form-actions">
                            <button type="submit" class="btn-auth btn-primary" id="saveProductBtn">บันทึกสินค้า</button>
                            <button type="button" class="btn-auth btn-secondary" id="resetProductBtn">ล้างฟอร์ม</button>
                        </div>
                        <div id="adminFormMessage" class="message" style="margin-top:1rem;"></div>
                    </form>
                </div>

                <div class="admin-card">
                    <h2>รายการสินค้า</h2>
                    <div style="overflow-x:auto;">
                        <table class="admin-table" id="productsTable">
                            <thead>
                                <tr>
                                    <th class="col-id">รหัส</th>
                                    <th class="col-image">รูป</th>
                                    <th class="col-name">ชื่อ</th>
                                    <th class="col-type">ประเภท</th>
                                    <th class="col-price">ราคา</th>
                                    <th class="col-stock">สต็อก</th>
                                    <th class="col-actions">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody id="productsTbody">
                                <?php $i = 1; ?>
                                @forelse ($products as $item)
                                    <tr>
                                        <td class="col-id">{{ $i++ }}</td>
                                        <td class="product-image-cell col-image">
                                            <div class="admin-product-thumb">
                                                @if ($item->image)
                                                <img src="{{ asset($item->image_url) }}" alt="{{ $item->name }}">
                                                @else
                                                    <span>🐾</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="col-name">{{ $item->name }}</td>
                                        <td class="col-type">{{ $item->type }}</td>
                                        <td class="col-price">{{ number_format($item->price, 2) }}</td>
                                        <td class="col-stock">{{ $item->stock }}</td>
                                        <td class="col-actions">
                                            <div class="admin-actions">
                                                <a href="{{ route('photos.edit', $item->id) }}"
                                                    class="btn-auth btn-primary btn-sm">แก้ไข</a>
                                                <form action="{{ route('photos.destroy', $item->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-auth btn-danger btn-sm"
                                                        onclick="return confirm('ยืนยันการลบสินค้านี้?')">ลบ</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="admin-empty">ไม่มีสินค้า</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/admin.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('productForm');
                const resetBtn = document.getElementById('resetProductBtn');
                const formMessage = document.getElementById('adminFormMessage');

                if (form && resetBtn) {
                    resetBtn.addEventListener('click', function () {
                        form.reset();
                        const idInput = document.getElementById('pId');
                        if (idInput) {
                            idInput.value = '';
                        }
                        if (formMessage) {
                            formMessage.textContent = '';
                            formMessage.className = 'message';
                        }
                    });
                }
            });
        </script>
    @endsection
