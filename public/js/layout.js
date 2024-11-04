

function setActiveItem(itemNumber) {
    const items = document.querySelectorAll('.item');

    items.forEach((item) => {
        item.classList.remove('active');
    });
    items[itemNumber - 1].classList.add('active');

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

function validateForm()                                    
{ 
    var name = document.forms["myForm"]["name"];               
    var email = document.forms["myForm"]["email"];    
    var message = document.forms["myForm"]["message"];   
   
    if (name.value == "")                                  
    { 
        document.getElementById('errorname').innerHTML="Please enter a valid name";  
        name.focus(); 
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }
       
    if (email.value == "")                                   
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        email.focus(); 
        return false; 
    }else{
        document.getElementById('erroremail').innerHTML="";  
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        email.focus(); 
        return false; 
    } 
   
    if (message.value == "")                           
    {
        document.getElementById('errormsg').innerHTML="Please enter a valid message"; 
        message.focus(); 
        return false; 
    }else{
        document.getElementById('errormsg').innerHTML="";  
    }
   
    return true; 
}

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

function validateForm() {
    document.querySelectorAll('.input-error').forEach(error => error.innerText = '');

    let isValid = true;
    const fullName = document.getElementById('full_name').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const passwordConfirmation = document.getElementById('password_confirmation').value;
    const phone = document.getElementById('phone').value.trim();
    const address = document.getElementById('address').value.trim();
    const gender = document.getElementById('gender').value.trim();

    if (!fullName) {
        document.getElementById('full_name_error').innerText = "Họ và tên không được để trống";
        isValid = false;
    }
    if (!email || !validateEmail(email)) {
        document.getElementById('email_error').innerText = "Vui lòng nhập email hợp lệ";
        isValid = false;
    }
    if (!password) {
        document.getElementById('password_error').innerText = "Password không được để trống";
        isValid = false;
    }
    if (password !== passwordConfirmation) {
        document.getElementById('password_confirmation_error').innerText = "Password xác nhận không khớp";
        isValid = false;
    }
    if (!phone || !validatePhone(phone)) {
        document.getElementById('phone_error').innerText = "Vui lòng nhập số điện thoại hợp lệ";
        isValid = false;
    }
    if (!address) {
        document.getElementById('address_error').innerText = "Địa chỉ không được để trống";
        isValid = false;
    }
    if (!gender) {
        document.getElementById('gender_error').innerText = "Giới tính không được để trống";
        isValid = false;
    }
    return isValid;
}

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

function validatePhone(phone) {
    const phonePattern = /^[0-9]{10,11}$/;
    return phonePattern.test(phone);
}
