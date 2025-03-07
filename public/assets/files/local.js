// Khi trang đã tải xong
document.addEventListener('DOMContentLoaded', function() {
    // Lấy nút scroll to top
    const scrollTopButton = document.querySelector('.scroll-top');
    
    // Thêm sự kiện click cho nút
    scrollTopButton.addEventListener('click', function(e) {
      e.preventDefault();
      
      // Cuộn mượt lên đầu trang
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
    
    // Hiển thị/ẩn nút khi cuộn
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        scrollTopButton.style.display = 'flex';
      } else {
        scrollTopButton.style.display = 'none';
      }
    });
  });