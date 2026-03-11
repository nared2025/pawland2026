// // Admin login script

// document.addEventListener('DOMContentLoaded', () => {
//     const form = document.getElementById('adminLoginForm');
//     if (!form) return;

//     form.addEventListener('submit', async (e) => {
//         e.preventDefault();
//         clearErrors();

//         const username = document.getElementById('adminUsername').value.trim();
//         const password = document.getElementById('adminPassword').value;
//         const messageEl = document.getElementById('adminMessage');

//         if (!username) {
//             showError('adminUsername', 'กรุณากรอกชื่อผู้ใช้แอดมิน');
//             return;
//         }
//         if (!password) {
//             showError('adminPassword', 'กรุณากรอกรหัสผ่าน');
//             return;
//         }

//         const submitBtn = form.querySelector('button[type=\"submit\"]');
//         submitBtn.disabled = true;
//         submitBtn.textContent = 'กำลังเข้าสู่ระบบ...';

//         try {
//             const res = await fetch('../php/admin_login.php', {
//                 method: 'POST',
//                 headers: { 'Content-Type': 'application/json' },
//                 body: JSON.stringify({ username, password })
//             });
//             const data = await res.json();

//             if (data.success) {
//                 messageEl.textContent = 'เข้าสู่ระบบแอดมินสำเร็จ กำลังเปลี่ยนหน้า...';
//                 messageEl.className = 'message show success';
//                 setTimeout(() => {
//                     window.location.href = 'admin-dashboard.html';
//                 }, 800);
//             } else {
//                 messageEl.textContent = data.message || 'เข้าสู่ระบบไม่สำเร็จ';
//                 messageEl.className = 'message show error';
//                 submitBtn.disabled = false;
//                 submitBtn.textContent = 'เข้าสู่ระบบแอดมิน';
//             }
//         } catch (err) {
//             console.error(err);
//             messageEl.textContent = 'เกิดข้อผิดพลาด กรุณาลองใหม่';
//             messageEl.className = 'message show error';
//             submitBtn.disabled = false;
//             submitBtn.textContent = 'เข้าสู่ระบบแอดมิน';
//         }
//     });
// });

