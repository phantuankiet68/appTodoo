

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