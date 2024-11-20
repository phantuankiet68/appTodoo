

document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.slider-home', {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination', 
            clickable: true, 
            dynamicBullets: true
        },

        navigation: {
            nextEl: '.swiper-button-next',  
            prevEl: '.swiper-button-prev', 
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            620: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const triggers = document.querySelectorAll('.trigger');
  
    // Thêm sự kiện click cho từng trigger
    triggers.forEach((trigger) => {
      trigger.addEventListener('click', function () {
        const index = Array.from(triggers).indexOf(this);
  
        // Lấy tất cả các hàng trong bảng
        const rows = document.querySelectorAll('tbody tr');
        
        // Duyệt qua các hàng và hiển thị hàng tương ứng
        rows.forEach((row, rowIndex) => {
          if (rowIndex === index) {
            if (row.classList.contains('hidden')) {
              row.classList.remove('hidden');
              row.classList.add('visible');
            } else {
              row.classList.remove('visible');
              row.classList.add('hidden');
            }
          }
        });
  
        // Toggle trạng thái "active" của trigger
        this.classList.toggle('active');
      });
    });
  });



function setActiveItem(itemNumber) {
    localStorage.setItem("activeItem", itemNumber);
    localStorage.setItem("activeMenu", itemNumber);
    const items = document.querySelectorAll('.item');

    items.forEach((item) => {
        item.classList.remove('activeMenu');
    });
    items[itemNumber - 1].classList.add('activeMenu');

    document.querySelectorAll('.page-left-item').forEach(item => {
        item.classList.remove('activeItem');
    });
    document.querySelectorAll('.page-right-item').forEach(item => {
        item.classList.remove('activeItem');
    });

    const selectedLeftItem = document.querySelector(`.page-left-item#item${itemNumber}`);
    const selectedRightItem = document.querySelector(`.page-right-item#item${itemNumber}`);

    if (selectedLeftItem) {
        selectedLeftItem.classList.add('activeItem');
    } else {
        console.log(`Left item with ID 'item${itemNumber}' not found.`);
    }

    if (selectedRightItem) {
        selectedRightItem.classList.add('activeItem');
    } else {
        console.log(`Right item with ID 'item${itemNumber}' not found.`);
    }
}
document.addEventListener('DOMContentLoaded', function() {
    let savedItemNumber = localStorage.getItem('activeItem');
    let savedItemMenu= localStorage.getItem('activeMenu');

    if (!savedItemMenu) {
        savedItemMenu = 1;
    }

    if (!savedItemNumber) {
        savedItemNumber = 1;
    }

    document.querySelectorAll('.header-home nav ul li a').forEach(item => {
        item.classList.remove('activeMenu');
    });

    document.querySelectorAll('.page-left-item, .page-right-item').forEach(item => {
        item.classList.remove('activeItem');
    });

    const selectedLeftItem = document.querySelector(`.page-left-item#item${savedItemNumber}`);
    const selectedRightItem = document.querySelector(`.page-right-item#item${savedItemNumber}`);


    if (selectedLeftItem) {
        selectedLeftItem.classList.add('activeItem');
    }
    if (selectedRightItem) {
        selectedRightItem.classList.add('activeItem');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.page-product-item').forEach(item => {
        item.addEventListener('click', function() {
            const imgSrc = this.querySelector('img').src;
            const popup = document.getElementById('imagePopup');
            const popupImage = document.getElementById('popupImage');
            
            popupImage.src = imgSrc;
            popup.style.display = 'flex';
        });
    });

    const closeButton = document.querySelector('.close-popup');
    if (closeButton) { 
        closeButton.addEventListener('click', function() {
            document.getElementById('imagePopup').style.display = 'none';
        });
    }

    const popup = document.getElementById('imagePopup');
    if (popup) {
        popup.addEventListener('click', function(event) {
            if (event.target === this) {
                this.style.display = 'none';
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const popup = document.querySelector('#popup-category');
    if (popup) {
        popup.style.display = 'block';

        setTimeout(() => {
            popup.style.display = 'none';
        }, 5000);
    }
});


function closeCreateLogin() {
    const CreateLogin = document.getElementById('CreateLogin')
    if (CreateLogin.style.display === 'none' || CreateLogin.style.display === '') {
        CreateLogin.style.display = 'block'; 
    } else {
        CreateLogin.style.display = 'none';
    }
}

function closeCreateRegister() {
    const CreateRegister = document.getElementById('CreateRegister')
    if (CreateRegister.style.display === 'none' || CreateRegister.style.display === '') {
        CreateRegister.style.display = 'block'; 
    } else {
        CreateRegister.style.display = 'none';
    }
}

function Login(){
    const CreateLogin = document.getElementById('CreateLogin')
    if (CreateLogin.style.display === 'none' || CreateLogin.style.display === '') {
        CreateLogin.style.display = 'block'; 
    } else {
        CreateLogin.style.display = 'none';
    }
}
function Register(){
    const CreateLogin = document.getElementById('CreateLogin')
    if (CreateRegister.style.display === 'none' || CreateRegister.style.display === '') {
        CreateRegister.style.display = 'block'; 
    } else {
        CreateRegister.style.display = 'none';
    }
}
document.addEventListener("DOMContentLoaded", function() {
    if (window.location.hash === "#register") {
        const modal = document.getElementById("CreateRegister");
        if (modal) {
            modal.style.display = "block";
        }
    }
    window.addEventListener("click", function(event) {
        const modal = document.getElementById("CreateRegister");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    if (window.location.hash === "#login") {
        const modal = document.getElementById("CreateLogin");
        if (modal) {
            modal.style.display = "block";
        }
    }

    window.addEventListener("click", function(event) {
        const modal = document.getElementById("CreateLogin");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});


function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

function validatePhone(phone) {
    const phonePattern = /^[0-9]{10,11}$/;
    return phonePattern.test(phone);
}


function showMenu() {
    const menu = document.getElementById('menu')
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block'; 
    } else {
        menu.style.display = 'none';
    }
}