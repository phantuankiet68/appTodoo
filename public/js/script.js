// // Get references to the body and the toggle button
// const toggleButton = document.getElementById('theme-toggle');
// const body = document.body;

// // Check if the user has a preferred theme stored in localStorage
// const currentTheme = localStorage.getItem('theme');
// if (currentTheme === 'dark') {
//     body.classList.add('dark-mode');
//     toggleButton.textContent = 'Switch to Light Mode';
// }

// // Toggle theme on button click
// toggleButton.addEventListener('click', () => {
//     body.classList.toggle('dark-mode');

//     // Update button text based on the current theme
//     if (body.classList.contains('dark-mode')) {
//         toggleButton.textContent = 'Switch to Light Mode';
//         localStorage.setItem('theme', 'dark');
//     } else {
//         toggleButton.textContent = 'Switch to Dark Mode';
//         localStorage.setItem('theme', 'light');
//     }
// });

document.querySelector('.btn-event').addEventListener('click', function() {
    var formEvent = this.querySelector('.formEvent');
    formEvent.classList.toggle('active');
});

// script.js

// // Hàm đếm ngược từ 24 giờ
// function startCountdown() {
//     // Khởi tạo thời gian bắt đầu là 24 giờ (24 * 60 * 60 giây)
//     let totalSeconds = 24 * 60 * 60;
    
//     // Lấy phần tử hiển thị thời gian
//     const countdownElement = document.getElementById("countdown");

//     // Cập nhật thời gian mỗi giây
//     const interval = setInterval(() => {
//         // Tính toán số giờ, phút, và giây còn lại
//         let hours = Math.floor(totalSeconds / 3600);
//         let minutes = Math.floor((totalSeconds % 3600) / 60);
//         let seconds = totalSeconds % 60;

//         // Đảm bảo hiển thị 2 chữ số cho giờ, phút, và giây
//         hours = hours < 10 ? '0' + hours : hours;
//         minutes = minutes < 10 ? '0' + minutes : minutes;
//         seconds = seconds < 10 ? '0' + seconds : seconds;

//         // Hiển thị thời gian trên trang web
//         countdownElement.innerHTML = `${hours}:${minutes}:${seconds}`;

//         // Giảm tổng số giây
//         totalSeconds--;

//         // Dừng đếm ngược khi hết giờ
//         if (totalSeconds < 0) {
//             clearInterval(interval);
//             countdownElement.innerHTML = "Time's Up!";
//         }
//     }, 1000); // Cập nhật mỗi 1000ms (1 giây)
// }

// // Bắt đầu đếm ngược khi trang được tải
// window.onload = startCountdown;
