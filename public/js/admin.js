// // Admin dashboard logic

// document.addEventListener('DOMContentLoaded', () => {
//     const nameEl = document.getElementById('adminName');
//     const logoutLink = document.getElementById('adminLogoutLink');
//     const productsTbody = document.getElementById('productsTbody');
//     const form = document.getElementById('productForm');
//     const formMessage = document.getElementById('adminFormMessage');
//     const resetBtn = document.getElementById('resetProductBtn');

//     // เช็ค session แอดมิน
//     (async () => {
//         try {
//             const res = await fetch('../php/admin_check_session.php');
//             const data = await res.json();
//             if (!data.logged_in) {
//                 window.location.href = 'admin-login.html';
//                 return;
//             }
//             if (nameEl) {
//                 nameEl.textContent = data.admin.full_name || data.admin.username;
//             }
//             loadProducts();
//         } catch (err) {
//             console.error(err);
//             window.location.href = 'admin-login.html';
//         }
//     })();

//     if (logoutLink) {
//         logoutLink.addEventListener('click', async (e) => {
//             e.preventDefault();
//             try {
//                 await fetch('../php/admin_logout.php');
//             } finally {
//                 window.location.href = 'admin-login.html';
//             }
//         });
//     }

//     async function loadProducts() {
//         if (!productsTbody) return;
//         productsTbody.innerHTML = '<tr><td colspan="6" class="admin-empty">กำลังโหลดข้อมูล...</td></tr>';
//         try {
//             const res = await fetch('../php/admin_products.php?action=list');
//             const data = await res.json();
//             if (!data.success) {
//                 productsTbody.innerHTML = `<tr><td colspan="6" class="admin-empty">${data.message || 'โหลดข้อมูลไม่สำเร็จ'}</td></tr>`;
//                 return;
//             }
//             if (!data.products || data.products.length === 0) {
//                 productsTbody.innerHTML = '<tr><td colspan="6" class="admin-empty">ยังไม่มีสินค้า</td></tr>';
//                 return;
//             }
//             productsTbody.innerHTML = data.products.map((p, index) => `
//                 <tr data-id="${p.id}">
//                     <td>${index + 1}</td>
//                     <td>${p.name}</td>
//                     <td><span class="admin-tag">${p.type}</span></td>
//                     <td>฿${Number(p.price).toFixed(2)}</td>
//                     <td>${p.stock}</td>
//                     <td class="admin-actions">
//                         <button class="primary" data-action="edit">แก้ไข</button>
//                         <button class="danger" data-action="delete">ลบ</button>
//                     </td>
//                 </tr>
//             `).join('');
//         } catch (err) {
//             console.error(err);
//             productsTbody.innerHTML = '<tr><td colspan="6" class="admin-empty">เกิดข้อผิดพลาดในการโหลดข้อมูล</td></tr>';
//         }
//     }

//     if (form) {
//         form.addEventListener('submit', async (e) => {
//             e.preventDefault();
//             formMessage.className = 'message';
//             formMessage.textContent = '';

//             const id = document.getElementById('pId').value || null;
//             const name = document.getElementById('pName').value.trim();
//             const price = parseFloat(document.getElementById('pPrice').value);
//             const stock = parseInt(document.getElementById('pStock').value || '0', 10);
//             const type = document.getElementById('pType').value;
//             const image = document.getElementById('pImage').value.trim() || null;

//             if (!name || !type || isNaN(price)) {
//                 formMessage.textContent = 'กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน';
//                 formMessage.className = 'message show error';
//                 return;
//             }

//             const action = id ? 'update' : 'create';
//             const payload = { action, id, name, price, stock, type, image };

//             const submitBtn = document.getElementById('saveProductBtn');
//             submitBtn.disabled = true;
//             submitBtn.textContent = 'กำลังบันทึก...';

//             try {
//                 const res = await fetch('../php/admin_products.php', {
//                     method: 'POST',
//                     headers: { 'Content-Type': 'application/json' },
//                     body: JSON.stringify(payload)
//                 });
//                 const data = await res.json();
//                 if (data.success) {
//                     formMessage.textContent = 'บันทึกข้อมูลสำเร็จ';
//                     formMessage.className = 'message show success';
//                     form.reset();
//                     document.getElementById('pId').value = '';
//                     loadProducts();
//                 } else {
//                     formMessage.textContent = data.message || 'บันทึกข้อมูลไม่สำเร็จ';
//                     formMessage.className = 'message show error';
//                 }
//             } catch (err) {
//                 console.error(err);
//                 formMessage.textContent = 'เกิดข้อผิดพลาดในการบันทึกข้อมูล';
//                 formMessage.className = 'message show error';
//             } finally {
//                 submitBtn.disabled = false;
//                 submitBtn.textContent = 'บันทึกสินค้า';
//             }
//         });
//     }

//     if (resetBtn && form) {
//         resetBtn.addEventListener('click', () => {
//             form.reset();
//             document.getElementById('pId').value = '';
//             formMessage.textContent = '';
//             formMessage.className = 'message';
//         });
//     }

//     if (productsTbody) {
//         productsTbody.addEventListener('click', async (e) => {
//             const btn = e.target.closest('button');
//             if (!btn) return;

//             const tr = btn.closest('tr');
//             const id = tr?.getAttribute('data-id');
//             if (!id) return;

//             if (btn.dataset.action === 'edit') {
//                 const cells = tr.querySelectorAll('td');
//                 document.getElementById('pId').value = id;
//                 document.getElementById('pName').value = cells[1].textContent.trim();
//                 document.getElementById('pType').value = tr.querySelector('.admin-tag').textContent.trim();
//                 document.getElementById('pPrice').value = Number(cells[3].textContent.replace('฿','')).toFixed(2);
//                 document.getElementById('pStock').value = cells[4].textContent.trim();
//                 window.scrollTo({ top: 0, behavior: 'smooth' });
//             } else if (btn.dataset.action === 'delete') {
//                 if (!confirm('คุณต้องการลบสินค้านี้หรือไม่?')) return;
//                 try {
//                     const res = await fetch('../php/admin_products.php', {
//                         method: 'POST',
//                         headers: { 'Content-Type': 'application/json' },
//                         body: JSON.stringify({ action: 'delete', id })
//                     });
//                     const data = await res.json();
//                     if (data.success) {
//                         loadProducts();
//                     } else {
//                         alert(data.message || 'ลบสินค้าไม่สำเร็จ');
//                     }
//                 } catch (err) {
//                     console.error(err);
//                     alert('เกิดข้อผิดพลาดในการลบสินค้า');
//                 }
//             }
//         });
//     }
// });

