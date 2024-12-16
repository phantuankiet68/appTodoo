/* ======================*==================== */
/* NavBar*/
/* ======================*==================== */
document.querySelectorAll('.menu-item > a').forEach(menu => {
  menu.addEventListener('click', function(e) {
      e.preventDefault();

      const chevron = menu.querySelector('.chevron i');
      const subSidebar = menu.nextElementSibling;

      menu.parentElement.classList.toggle('active');

      if (menu.parentElement.classList.contains('active')) {
          chevron.classList.remove('fa-chevron-right');
          chevron.classList.add('fa-chevron-down');
      } else {
          chevron.classList.remove('fa-chevron-down');
          chevron.classList.add('fa-chevron-right');
      }
  });
});



// dashboard
document.addEventListener("DOMContentLoaded", function() {
    const dropdowns = document.querySelectorAll('.dropdown > a');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            const menu = this.nextElementSibling;
            const isVisible = menu.style.display === 'block';

            // Hide all dropdown menus
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });

            // Toggle the current dropdown menu
            menu.style.display = isVisible ? 'none' : 'block';
        });
    });

    // Hide dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });
        }
    });
});


// kaban

const draggables = document.querySelectorAll(".task");
const droppables = document.querySelectorAll(".swim-lane");

draggables.forEach((task) => {
  task.addEventListener("dragstart", () => {
    task.classList.add("is-dragging");
  });
  task.addEventListener("dragend", () => {
    task.classList.remove("is-dragging");
  });
});

droppables.forEach((zone) => {
  zone.addEventListener("dragover", (e) => {
    e.preventDefault();

    const bottomTask = insertAboveTask(zone, e.clientY);
    const curTask = document.querySelector(".is-dragging");

    if (!bottomTask) {
      zone.appendChild(curTask);
    } else {
      zone.insertBefore(curTask, bottomTask);
    }
  });
});

const insertAboveTask = (zone, mouseY) => {
  const els = zone.querySelectorAll(".task:not(.is-dragging)");

  let closestTask = null;
  let closestOffset = Number.NEGATIVE_INFINITY;

  els.forEach((task) => {
    const { top } = task.getBoundingClientRect();

    const offset = mouseY - top;

    if (offset < 0 && offset > closestOffset) {
      closestOffset = offset;
      closestTask = task;
    }
  });

  return closestTask;
};


document.addEventListener("DOMContentLoaded", function() {
  const toggleButton = document.querySelector(".toggle");
  const sidebar = document.querySelector(".sidebar");
  const container = document.querySelector(".Container");

  // Thêm sự kiện click vào nút toggle
  toggleButton.addEventListener("click", function() {
      // Ẩn/hiện sidebar
      sidebar.classList.toggle("hidden");
      
      // Chuyển đổi width của container
      container.classList.toggle("full-width");
  });
});


// Lấy các phần tử cần thiết
const modal = document.getElementById("myModalEmail");
const btn = document.getElementById("openModalEmail");
const closeBtn = document.querySelector(".close");

// Kiểm tra xem modal và các phần tử có tồn tại không
if (modal && btn && closeBtn) {
    // Khi người dùng click vào nút "Open Modal", modal sẽ hiển thị
    btn.addEventListener("click", function() {
        modal.style.display = "block";
    });

    // Khi người dùng click vào dấu "x", modal sẽ đóng
    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });

    // Khi người dùng click ra ngoài modal, modal sẽ đóng
    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
} 

// // Lấy các phần tử cần thiết
// const modalIssue = document.getElementById("modalStaskIssue");
// const btnIssue = document.getElementById("openStaskIssue");
// const closeBtnIssue = document.querySelector(".closeIssue");

// // Kiểm tra xem modal và các phần tử có tồn tại không
// if (modalIssue && btnIssue && closeBtnIssue) {
//     // Khi người dùng click vào nút "Open Modal", modal sẽ hiển thị
//     btnIssue.addEventListener("click", function() {
//       modalIssue.style.display = "block";
//     });

//     // Khi người dùng click vào dấu "x", modal sẽ đóng
//     closeBtnIssue.addEventListener("click", function() {
//       modalIssue.style.display = "none";
//     });

//     // Khi người dùng click ra ngoài modal, modal sẽ đóng
//     window.addEventListener("click", function(event) {
//         if (event.target == modalIssue) {
//           modalIssue.style.display = "none";
//         }
//     });
// }


 // Hàm lấy số ngày trong tháng dựa vào tháng và năm
 function getDaysInMonth(month, year) {
  return new Date(year, month, 0).getDate(); // Ngày cuối cùng của tháng
}



 // Hàm lấy số ngày trong tháng dựa vào tháng và năm
 function getDaysInMonth(month, year) {
  return new Date(year, month, 0).getDate(); // Ngày cuối cùng của tháng
}

// Hàm tạo form dựa trên ngày tháng hiện tại
function generateForm1() {
  const today = new Date();
  const month = today.getMonth() + 1; // Tháng (lấy từ 0-11 nên cần +1)
  const year = today.getFullYear();   // Năm
  const day = today.getDate();        // Ngày hiện tại

  // Tính số ngày trong tháng hiện tại
  const daysInMonth = getDaysInMonth(month, year);

  // Chọn phần tử form-container
  const formContainer1 = document.getElementById('form-container1');
  formContainer1.innerHTML = ''; // Xóa nội dung cũ

  // Tạo input cho mỗi ngày trong tháng hiện tại
  for (let d = 1; d <= daysInMonth; d++) {


    // Tạo input cho dữ liệu của ngày
    const inputData = document.createElement('input');
    inputData.type = 'text';
    inputData.name = `day${d}_data`;
    inputData.placeholder = `Nhập dữ liệu cho ngày ${d}/${month}...`;

    // Tạo nhãn và input cho "Thời gian bắt đầu"
    const startTimeLabel = document.createElement('label');
    startTimeLabel.innerText = `Chi phí`;
    const startTimeInput = document.createElement('input');
    inputData.type = 'text';

    const submitButton = document.createElement('button');
    submitButton.type = 'submit'; // Có thể thay đổi thành 'button' nếu không cần gửi form
    submitButton.innerText = 'Gửi'; // Văn bản nút

    // Tạo div bao quanh nhãn và input
    const formGroup = document.createElement('div');
    formGroup.classList.add('form-group');
    formGroup.appendChild(inputData);
    formGroup.appendChild(startTimeLabel);
    formGroup.appendChild(startTimeInput);
    formGroup.appendChild(submitButton);

    // Thêm formGroup vào form-container
    formContainer1.appendChild(formGroup);
  }
}


// Lấy các phần tử cần thiết
const modalCard = document.getElementById("myModalCard");
const btnCard = document.getElementById("openModalCard");
const closeBtnCard = document.querySelector(".closeCard");

// Kiểm tra xem modal và các phần tử có tồn tại không
if (modalCard && btnCard && closeBtnCard) {
    // Khi người dùng click vào nút "Open Modal", modal sẽ hiển thị
    btnCard.addEventListener("click", function() {
      modalCard.style.display = "block";
    });

    // Khi người dùng click vào dấu "x", modal sẽ đóng
    closeBtnCard.addEventListener("click", function() {
      modalCard.style.display = "none";
    });

    // Khi người dùng click ra ngoài modal, modal sẽ đóng
    window.addEventListener("click", function(event) {
        if (event.target == modalCard) {
          modalCard.style.display = "none";
        }
    });
}

// Lấy các phần tử cần thiết
const modalStartHtml = document.getElementById("myModalStartHtml");
const btnStartHtml = document.getElementById("openModalCard");
const closeBtnStartHtml = document.querySelector(".closeCard");

// Kiểm tra xem modal và các phần tử có tồn tại không
if (modalCard && btnCard && closeBtnCard) {
    // Khi người dùng click vào nút "Open Modal", modal sẽ hiển thị
    btnCard.addEventListener("click", function() {
      modalCard.style.display = "block";
    });

    // Khi người dùng click vào dấu "x", modal sẽ đóng
    closeBtnCard.addEventListener("click", function() {
      modalCard.style.display = "none";
    });

    // Khi người dùng click ra ngoài modal, modal sẽ đóng
    window.addEventListener("click", function(event) {
        if (event.target == modalCard) {
          modalCard.style.display = "none";
        }
    });
}






document.addEventListener("DOMContentLoaded", function() {
  const navItems = document.querySelectorAll('.nav-menu li');

  // Kiểm tra localStorage để giữ trạng thái
  const activeItem = localStorage.getItem('activeNavItem');
  if (activeItem) {
      navItems.forEach(item => {
          const link = item.querySelector('a'); // Lấy phần tử <a>
          if (link && link.getAttribute('href') === activeItem) {
              item.classList.add('activeBox');
          }
      });
  }

  navItems.forEach(item => {
      item.addEventListener('click', function() {
          // Xóa class activeBox từ tất cả các mục
          navItems.forEach(i => i.classList.remove('activeBox'));
          // Thêm class activeBox vào mục được click
          item.classList.add('activeBox');

          // Lưu trạng thái vào localStorage
          const link = item.querySelector('a'); // Lấy phần tử <a>
          if (link) {
              localStorage.setItem('activeNavItem', link.getAttribute('href'));
          }
      });
  });
});



document.addEventListener('DOMContentLoaded', function() {
  const toggleButton = document.getElementById('toggle-mode');
  const sidebar = document.querySelectorAll('.row .sidebar');
  const container = document.querySelectorAll('.row .Container');
  const cod_top = document.querySelectorAll('.row .cod-top-header');
  const Sidebar_a = document.querySelectorAll('.sidebar ul li a');
  const Sidebar_a_i = document.querySelectorAll('.sidebar ul li a i');
  const Sidebar_name = document.querySelectorAll('.sidebar .name-user h2');
  const Sidebar_grey = document.querySelectorAll('.sidebar ul li.bg-grey');
  const Sidebar_span = document.querySelectorAll('.sidebar ul li span');
  const Dashboard_content = document.querySelectorAll('.dashboard-content');
  const todoHeader = document.querySelectorAll('.todoHeader');
  const projecTodoBodyTable = document.querySelectorAll('.projecTodoBody .recent--patient .tables');
  const iconNitify = document.querySelectorAll('.d-flex i');
  const FlexA = document.querySelectorAll('a.d-flex');
  const app = document.getElementById('app');

  // Load theme from localStorage
  if (localStorage.getItem('theme') === 'dark') {
      app.classList.add('dark-mode');
      sidebar.forEach(element => element.classList.add('dark-mode'));
      container.forEach(element => element.classList.add('dark-mode'));
      cod_top.forEach(element => element.classList.add('dark-mode'));
      Sidebar_a.forEach(element => element.classList.add('dark-mode'));
      Sidebar_a_i.forEach(element => element.classList.add('dark-mode'));
      Sidebar_name.forEach(element => element.classList.add('dark-mode'));
      Sidebar_grey.forEach(element => element.classList.add('dark-mode'));
      Sidebar_span.forEach(element => element.classList.add('dark-mode'));
      Dashboard_content.forEach(element => element.classList.add('dark-mode'));
      todoHeader.forEach(element => element.classList.add('dark-mode'));
      projecTodoBodyTable.forEach(element => element.classList.add('dark-mode'));
      iconNitify.forEach(element => element.classList.add('dark-mode'));
      FlexA.forEach(element => element.classList.add('dark-mode'));
  }

  toggleButton.addEventListener('click', function() {
      // Toggle dark mode on app
      const isDarkMode = app.classList.toggle('dark-mode');

      // Toggle dark mode on all sidebar elements
      sidebar.forEach(element => element.classList.toggle('dark-mode'));
      container.forEach(element => element.classList.toggle('dark-mode'));
      cod_top.forEach(element => element.classList.toggle('dark-mode'));
      Sidebar_a.forEach(element => element.classList.toggle('dark-mode'));
      Sidebar_a_i.forEach(element => element.classList.toggle('dark-mode'));
      Sidebar_name.forEach(element => element.classList.toggle('dark-mode'));
      Sidebar_grey.forEach(element => element.classList.toggle('dark-mode'));
      Sidebar_span.forEach(element => element.classList.toggle('dark-mode'));
      Dashboard_content.forEach(element => element.classList.toggle('dark-mode'));
      todoHeader.forEach(element => element.classList.toggle('dark-mode'));
      projecTodoBodyTable.forEach(element => element.classList.toggle('dark-mode'));
      iconNitify.forEach(element => element.classList.toggle('dark-mode'));
      FlexA.forEach(element => element.classList.toggle('dark-mode'));

      // Save theme to localStorage
      if (isDarkMode) {
          localStorage.setItem('theme', 'dark');
      } else {
          localStorage.setItem('theme', 'light');
      }
  });
});


function openTab(evt, tabName) {
  // Ẩn tất cả nội dung của các tab
  let tabcontent = document.getElementsByClassName("tabcontent");
  for (let i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Xóa class 'active' trên tất cả các nút tab
  let tablinks = document.getElementsByClassName("tablinks");
  for (let i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Hiển thị nội dung của tab hiện tại và thêm class 'active' cho nút
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}




function openTab(evt, tabId) {
  var i, tabcontent, tablinks;

  // Ẩn tất cả các tab
tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Loại bỏ class "active" khỏi tất cả các nút
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Hiển thị tab hiện tại và thêm class "active" vào nút đã được nhấn
  document.getElementById(tabId).style.display = "flex";
  evt.currentTarget.className += " active";
}


function openTab1(evt, tabName) {
  // Declare all variables
  let i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

function formatDoc(cmd, value=null) {
	if(value) {
		document.execCommand(cmd, false, value);
	} else {
		document.execCommand(cmd);
	}
}

function addLink() {
	const url = prompt('Insert url');
	formatDoc('createLink', url);
}


const menuItems = document.querySelectorAll('.menu-item');
menuItems.forEach(item => {
    item.addEventListener('click', function(event) {
        event.preventDefault();
        const menuName = item.getAttribute('data-menu');

        localStorage.setItem('activeMenu', menuName);
        menuItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        window.location.href = item.getAttribute('href');
    });
});

window.addEventListener('DOMContentLoaded', () => {
    const activeMenu = localStorage.getItem('activeMenu');
    if (activeMenu) {
        const activeItem = document.querySelector(`[data-menu="${activeMenu}"]`);
        if (activeItem) {
            activeItem.classList.add('active');
        }
    }
});