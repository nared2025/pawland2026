// Navigation script for updating login/logout links
// NOTE: This project uses Laravel session auth and Blade @auth.
// This file is kept to avoid runtime JS errors from legacy code.

function updateNavigation() {
    // No-op: navigation is rendered server-side in Blade.
}

// // Logout function
// async function logout() {
//     if (!confirm('คุณต้องการออกจากระบบหรือไม่?')) {
//         return;
//     }
    
//     try {
//         const response = await fetch('../php/logout.php');
//         const data = await response.json();
        
//         if (data.success) {
//             window.location.href = 'index.html';
//         }
//     } catch (error) {
//         console.error('Error:', error);
//         window.location.href = 'index.html';
//     }
// }

// Update navigation on page load
document.addEventListener('DOMContentLoaded', updateNavigation);
