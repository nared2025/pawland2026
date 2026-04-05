@extends('layouts.layout')
@section('title', 'Sitemap')
@section('content')
<style>
  .sitemap-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 3rem 1.5rem 4rem;
    min-height: 100vh;
  }

  .page-title {
    font-family: 'Prompt', sans-serif;
    font-size: 1rem;
    font-weight: 500;
    color: #6b6a63;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    margin-bottom: 2.5rem;
  }

  /* ── Legend ── */
  .legend {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 22px;
    margin-top: 3rem;
    padding: 1rem 1.5rem;
    border: 0.5px solid #2c2c2a;
    border-radius: 12px;
  }
  .leg-item {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 0.72rem;
    color: #6b6a63;
    font-family: 'Sarabun', sans-serif;
  }
  .leg-dot {
    width: 11px; height: 11px;
    border-radius: 3px;
    flex-shrink: 0;
    border: 0.5px solid;
  }
</style>

<div class="sitemap-wrap">
  <p class="page-title">🐾 Pawland — Sitemap</p>

  <!--
    Layout (px):
    viewBox  : 0 0 1100 600
    Columns  : x-centres at 110, 280, 460, 640, 820   gap ~170px
    Row 0 (root)   : y 20–72   (h 52)
    Row 1 (L1)     : y 140–200 (h 60)   gap from row0 bottom = 68px
    Row 2 (L2)     : y 270–324 (h 54)   gap from row1 bottom = 70px
    Row 3 (L3)     : y 390–434 (h 44)   gap from row2 bottom = 66px
  -->
  <svg width="100%" viewBox="0 0 1200 500"
       xmlns="http://www.w3.org/2000/svg"
       style="max-width:1200px; overflow:visible;">

    <defs>
      <marker id="arr" viewBox="0 0 10 10" refX="8" refY="5"
              markerWidth="5" markerHeight="5" orient="auto-start-reverse">
        <path d="M2 1L8 5L2 9" fill="none" stroke="context-stroke"
              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </marker>
    </defs>

    <!-- ══════════ CONNECTORS ══════════ -->

    <!-- root (cx=550) → horizontal bar at y=120 -->
    <line x1="550" y1="72"  x2="550" y2="120" stroke="#3d3d3a" stroke-width="1.5" marker-end="url(#arr)"/>
    <line x1="110" y1="120" x2="820" y2="120" stroke="#3d3d3a" stroke-width="1"/>
    <!-- verticals to L1 (x = 110, 280, 460, 640, 820) -->
    <line x1="110" y1="120" x2="110" y2="140" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="280" y1="120" x2="280" y2="140" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="460" y1="120" x2="460" y2="140" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="640" y1="120" x2="640" y2="140" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="820" y1="120" x2="820" y2="140" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>

    <!-- หน้าแรก (cx=110) → admin (dashed curve) -->
    <path d="M 110 200 Q 90 240 60 270" stroke="#3d3d3a" stroke-width="1"
          stroke-dasharray="5 4" fill="none" marker-end="url(#arr)"/>

    <!-- admin (cx=60) → เพิ่ม/ลบ -->
    <line x1="60" y1="336" x2="60" y2="360" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="10"  y1="360" x2="150" y2="360" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="10"  y1="360" x2="10"  y2="378" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="150" y1="360" x2="150" y2="378" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>

    <!-- สินค้า (cx=280) → หมวดหมู่/ตะกร้า -->
    <line x1="280" y1="200" x2="280" y2="248" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="190" y1="248" x2="370" y2="248" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="190" y1="248" x2="190" y2="270" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="370" y1="248" x2="370" y2="270" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>

    <!-- บัญชีผู้ใช้ (cx=820) → login/register -->
    <line x1="820" y1="200" x2="820" y2="248" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="740" y1="248" x2="900" y2="248" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="740" y1="248" x2="740" y2="270" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="900" y1="248" x2="900" y2="270" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>

    <!-- login (cx=740) → ลืมรหัส/รีเซ็ต -->
    <line x1="740" y1="330" x2="740" y2="360" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="660" y1="360" x2="820" y2="360" stroke="#3d3d3a" stroke-width="1"/>
    <line x1="660" y1="360" x2="660" y2="378" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>
    <line x1="820" y1="360" x2="820" y2="378" stroke="#3d3d3a" stroke-width="1" marker-end="url(#arr)"/>

    <!-- register (cx=900) → ยืนยันอีเมล (curve) -->
    <path d="M 900 330 Q 960 350 1000 378" stroke="#3d3d3a" stroke-width="1"
          fill="none" marker-end="url(#arr)"/>


    <!-- ══════════ NODES ══════════ -->

    <!-- ROOT  cx=550  y=20..72 -->
    <g>
      <rect x="480" y="20" width="140" height="52" rx="10"
            fill="#085041" stroke="#5dcaa5" stroke-width="0.5"/>
      <text x="550" y="42" text-anchor="middle" dominant-baseline="central"
            fill="#9fe1cb" font-family="'Prompt',sans-serif" font-size="14" font-weight="500">🐾 Pawland</text>
      <text x="550" y="60" text-anchor="middle" dominant-baseline="central"
            fill="#5dcaa5" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">pawland.com</text>
    </g>

    <!-- L1 หน้าแรก  cx=110 -->
    <g>
      <rect x="46" y="140" width="128" height="60" rx="10"
            fill="#3c3489" stroke="#afa9ec" stroke-width="0.5"/>
      <text x="110" y="162" text-anchor="middle" dominant-baseline="central"
            fill="#cecbf6" font-family="'Prompt',sans-serif" font-size="13" font-weight="500">🏠 หน้าแรก</text>
      <text x="110" y="183" text-anchor="middle" dominant-baseline="central"
            fill="#afa9ec" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">home.blade</text>
    </g>

    <!-- L1 สินค้า  cx=280 -->
    <g>
      <rect x="216" y="140" width="128" height="60" rx="10"
            fill="#3c3489" stroke="#afa9ec" stroke-width="0.5"/>
      <text x="280" y="162" text-anchor="middle" dominant-baseline="central"
            fill="#cecbf6" font-family="'Prompt',sans-serif" font-size="13" font-weight="500">🛍️ สินค้า</text>
      <text x="280" y="183" text-anchor="middle" dominant-baseline="central"
            fill="#afa9ec" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">products.blade</text>
    </g>

    <!-- L1 เกี่ยวกับเรา  cx=460 -->
    <g>
      <rect x="396" y="140" width="128" height="60" rx="10"
            fill="#3c3489" stroke="#afa9ec" stroke-width="0.5"/>
      <text x="460" y="162" text-anchor="middle" dominant-baseline="central"
            fill="#cecbf6" font-family="'Prompt',sans-serif" font-size="13" font-weight="500">ℹ️ เกี่ยวกับเรา</text>
      <text x="460" y="183" text-anchor="middle" dominant-baseline="central"
            fill="#afa9ec" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">about.blade</text>
    </g>

    <!-- L1 ติดต่อ  cx=640 -->
    <g>
      <rect x="576" y="140" width="128" height="60" rx="10"
            fill="#3c3489" stroke="#afa9ec" stroke-width="0.5"/>
      <text x="640" y="162" text-anchor="middle" dominant-baseline="central"
            fill="#cecbf6" font-family="'Prompt',sans-serif" font-size="13" font-weight="500">📞 ติดต่อ</text>
      <text x="640" y="183" text-anchor="middle" dominant-baseline="central"
            fill="#afa9ec" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">contact.blade</text>
    </g>

    <!-- L1 บัญชีผู้ใช้  cx=820 -->
    <g>
      <rect x="746" y="140" width="148" height="60" rx="10"
            fill="#633806" stroke="#ef9f27" stroke-width="0.5"/>
      <text x="820" y="162" text-anchor="middle" dominant-baseline="central"
            fill="#fac775" font-family="'Prompt',sans-serif" font-size="13" font-weight="500">🔐 บัญชีผู้ใช้</text>
      <text x="820" y="183" text-anchor="middle" dominant-baseline="central"
            fill="#ef9f27" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">auth group</text>
    </g>

    <!-- L2 จัดการสินค้า (admin)  cx=60 -->
    <g>
      <rect x="-8" y="270" width="132" height="66" rx="10"
            fill="#0c447c" stroke="#85b7eb" stroke-width="0.5"/>
      <text x="60" y="292" text-anchor="middle" dominant-baseline="central"
            fill="#b5d4f4" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">📦 จัดการสินค้า</text>
      <text x="60" y="315" text-anchor="middle" dominant-baseline="central"
            fill="#85b7eb" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">create.blade</text>
      <!-- admin badge -->
      <rect x="84" y="261" width="46" height="17" rx="8" fill="#e8703a"/>
      <text x="107" y="270" text-anchor="middle" dominant-baseline="central"
            fill="#fff" font-family="'Prompt',sans-serif" font-size="8" font-weight="700">ADMIN</text>
    </g>

    <!-- L2 หมวดหมู่  cx=190 -->
    <g>
      <rect x="132" y="270" width="116" height="54" rx="10"
            fill="#085041" stroke="#5dcaa5" stroke-width="0.5"/>
      <text x="190" y="290" text-anchor="middle" dominant-baseline="central"
            fill="#9fe1cb" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">🗂️ หมวดหมู่</text>
      <text x="190" y="310" text-anchor="middle" dominant-baseline="central"
            fill="#5dcaa5" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">tab filter</text>
    </g>

    <!-- L2 ตะกร้า  cx=370 -->
    <g>
      <rect x="312" y="270" width="116" height="54" rx="10"
            fill="#085041" stroke="#5dcaa5" stroke-width="0.5"/>
      <text x="370" y="290" text-anchor="middle" dominant-baseline="central"
            fill="#9fe1cb" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">🛒 ตะกร้าสินค้า</text>
      <text x="370" y="310" text-anchor="middle" dominant-baseline="central"
            fill="#5dcaa5" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">cart modal</text>
    </g>

    <!-- L2 เข้าสู่ระบบ  cx=740 -->
    <g>
      <rect x="672" y="270" width="136" height="60" rx="10"
            fill="#712b13" stroke="#f09976" stroke-width="0.5"/>
      <text x="740" y="292" text-anchor="middle" dominant-baseline="central"
            fill="#f5c4b3" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">🔑 เข้าสู่ระบบ</text>
      <text x="740" y="313" text-anchor="middle" dominant-baseline="central"
            fill="#f09976" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">login.blade</text>
    </g>

    <!-- L2 สมัครสมาชิก  cx=900 -->
    <g>
      <rect x="832" y="270" width="136" height="60" rx="10"
            fill="#712b13" stroke="#f09976" stroke-width="0.5"/>
      <text x="900" y="292" text-anchor="middle" dominant-baseline="central"
            fill="#f5c4b3" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">📝 สมัครสมาชิก</text>
      <text x="900" y="313" text-anchor="middle" dominant-baseline="central"
            fill="#f09976" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">register.blade</text>
    </g>

    <!-- L3 เพิ่ม  cx=10 -->
    <g>
      <rect x="-36" y="378" width="92" height="50" rx="10"
            fill="#0c447c" stroke="#85b7eb" stroke-width="0.5"/>
      <text x="10" y="398" text-anchor="middle" dominant-baseline="central"
            fill="#b5d4f4" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">➕ เพิ่ม</text>
      <text x="10" y="417" text-anchor="middle" dominant-baseline="central"
            fill="#85b7eb" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">add / edit</text>
    </g>

    <!-- L3 ลบ  cx=150 -->
    <g>
      <rect x="104" y="378" width="92" height="50" rx="10"
            fill="#0c447c" stroke="#85b7eb" stroke-width="0.5"/>
      <text x="150" y="398" text-anchor="middle" dominant-baseline="central"
            fill="#b5d4f4" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">🗑️ ลบ</text>
      <text x="150" y="417" text-anchor="middle" dominant-baseline="central"
            fill="#85b7eb" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">delete</text>
    </g>

    <!-- L3 ลืมรหัส  cx=660 -->
    <g>
      <rect x="604" y="378" width="112" height="50" rx="10"
            fill="#2c2c2a" stroke="#5f5e5a" stroke-width="0.5"/>
      <text x="660" y="398" text-anchor="middle" dominant-baseline="central"
            fill="#b4b2a9" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">🔓 ลืมรหัส</text>
      <text x="660" y="417" text-anchor="middle" dominant-baseline="central"
            fill="#888780" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">forgot-password</text>
    </g>

    <!-- L3 รีเซ็ต  cx=820 -->
    <g>
      <rect x="764" y="378" width="112" height="50" rx="10"
            fill="#2c2c2a" stroke="#5f5e5a" stroke-width="0.5"/>
      <text x="820" y="398" text-anchor="middle" dominant-baseline="central"
            fill="#b4b2a9" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">🔄 รีเซ็ตรหัส</text>
      <text x="820" y="417" text-anchor="middle" dominant-baseline="central"
            fill="#888780" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">reset-password</text>
    </g>

    <!-- L3 ยืนยันอีเมล  cx=1000 -->
    <g>
      <rect x="936" y="378" width="128" height="50" rx="10"
            fill="#2c2c2a" stroke="#5f5e5a" stroke-width="0.5"/>
      <text x="1000" y="398" text-anchor="middle" dominant-baseline="central"
            fill="#b4b2a9" font-family="'Prompt',sans-serif" font-size="12" font-weight="500">✉️ ยืนยันอีเมล</text>
      <text x="1000" y="417" text-anchor="middle" dominant-baseline="central"
            fill="#888780" font-family="'Sarabun',sans-serif" font-size="10" font-weight="300">verify-email</text>
    </g>

  </svg>

  <!-- ── Legend ── -->
  <div class="legend">
    <div class="leg-item">
      <span class="leg-dot" style="background:#3c3489; border-color:#afa9ec;"></span>
      หน้าหลัก
    </div>
    <div class="leg-item">
      <span class="leg-dot" style="background:#085041; border-color:#5dcaa5;"></span>
      ฟีเจอร์ย่อย
    </div>
    <div class="leg-item">
      <span class="leg-dot" style="background:#633806; border-color:#ef9f27;"></span>
      auth group
    </div>
    <div class="leg-item">
      <span class="leg-dot" style="background:#712b13; border-color:#f09976;"></span>
      login / register
    </div>
    <div class="leg-item">
      <span class="leg-dot" style="background:#2c2c2a; border-color:#5f5e5a;"></span>
      password reset
    </div>
    <div class="leg-item">
      <span class="leg-dot" style="background:#0c447c; border-color:#85b7eb;"></span>
      admin only 🔒
    </div>
    <div class="leg-item" style="gap:6px;">
      <svg width="22" height="12">
        <line x1="0" y1="6" x2="22" y2="6" stroke="#3d3d3a" stroke-width="1.5" stroke-dasharray="4 3"/>
      </svg>
      ต้อง login ก่อน
    </div>
  </div>

</div>
@endsection