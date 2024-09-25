// // script.js

// const sampleCanvas = document.getElementById('sample-area');
// const drawCanvas = document.getElementById('draw-area');
// const sampleCtx = sampleCanvas.getContext('2d');
// const drawCtx = drawCanvas.getContext('2d');
// const feedback = document.getElementById('feedback');
// const nextCharButton = document.getElementById('next-char');

// sampleCanvas.width = drawCanvas.width = 200;
// sampleCanvas.height = drawCanvas.height = 200;

// let isDrawing = false;
// let lastX = 0;
// let lastY = 0;
// let strokeCount = 0;
// let maxStrokes = 1; // Số nét tối đa cho ký tự hiện tại
// let currentCharIndex = 0;

// // Mảng chứa ký tự Hiragana cùng với hình ảnh mẫu và số nét
// const hiraganaChars = [
//     { character: 'あ', image: 'a-path.png', strokes: 3 },
//     { character: 'い', image: 'i-path.png', strokes: 2 },
//     // Thêm nhiều ký tự hơn nếu cần
// ];

// function loadCharacter() {
//     const character = hiraganaChars[currentCharIndex];
//     const img = new Image();
//     img.src = character.image;

//     img.onload = () => {
//         // Xóa canvas và vẽ lại hình ảnh mẫu chữ trên canvas mẫu
//         sampleCtx.clearRect(0, 0, sampleCanvas.width, sampleCanvas.height);
//         sampleCtx.drawImage(img, 0, 0, sampleCanvas.width, sampleCanvas.height);
        
//         // Xóa canvas luyện vẽ
//         drawCtx.clearRect(0, 0, drawCanvas.width, drawCanvas.height);
        
//         // Đặt lại trạng thái
//         feedback.textContent = '';
//         nextCharButton.disabled = true;
//         strokeCount = 0;
//         maxStrokes = character.strokes;
//     };

//     img.onerror = () => {
//         feedback.textContent = 'Không thể tải hình ảnh mẫu.';
//     };
// }

// // Tải ký tự đầu tiên khi trang load
// loadCharacter();

// drawCanvas.addEventListener('mousedown', (e) => {
//     isDrawing = true;
//     strokeCount++; // Tăng số lần vẽ lên mỗi khi bắt đầu vẽ một nét mới
//     [lastX, lastY] = [e.offsetX, e.offsetY];
// });

// drawCanvas.addEventListener('mousemove', draw);
// drawCanvas.addEventListener('mouseup', () => {
//     isDrawing = false;
//     if (strokeCount <= maxStrokes) {
//         checkStroke(); // Kiểm tra nét vẽ khi nhả chuột
//     } else {
//         feedback.textContent = 'Bạn đã vẽ sai. Hãy thử lại.';
//         strokeCount = 0;
//         drawCtx.clearRect(0, 0, drawCanvas.width, drawCanvas.height);
//     }
// });
// drawCanvas.addEventListener('mouseout', () => isDrawing = false);

// function draw(e) {
//     if (!isDrawing) return;
//     drawCtx.beginPath();
//     drawCtx.moveTo(lastX, lastY);
//     drawCtx.lineTo(e.offsetX, e.offsetY);
//     drawCtx.strokeStyle = '#333';
//     drawCtx.lineWidth = 4;
//     drawCtx.stroke();
//     [lastX, lastY] = [e.offsetX, e.offsetY];
// }

// function checkStroke() {
//     // Kiểm tra số nét hiện tại có đúng với số nét tối đa không
//     if (strokeCount === maxStrokes) {
//         feedback.textContent = 'Bạn đã vẽ đúng!';
//         nextCharButton.disabled = false;
//     } else {
//         feedback.textContent = 'Bạn đã vẽ sai. Hãy thử lại.';
//     }
// }

// nextCharButton.addEventListener('click', () => {
//     currentCharIndex = (currentCharIndex + 1) % hiraganaChars.length;
//     loadCharacter();
// });

// script.js

// script.js
// script.js

// script.js

// const questions = [
//     {
//         question: "How is the weather today?",
//         options: [
//             "Cool all day",
//             "Rainy in the early morning",
//             "Windy at noon",
//             "Sunny during the day"
//         ],
//         correctAnswer: "Sunny during the day"
//     },
//     {
//         question: "What is your favorite season?",
//         options: [
//             "Spring",
//             "Summer",
//             "Autumn",
//             "Winter"
//         ],
//         correctAnswer: "Summer"
//     },
//     {
//         question: "Which activity do you prefer?",
//         options: [
//             "Reading a book",
//             "Playing sports",
//             "Watching movies",
//             "Traveling"
//         ],
//         correctAnswer: "Traveling"
//     },
//     // Add more questions as needed
// ];

// let currentQuestionIndex = 0;
// let correctAnswersCount = 0;
// let incorrectAnswersCount = 0;

// const questionContainer = document.getElementById('question-container');
// const quizForm = document.getElementById('quiz-form');
// const feedbackContainer = document.getElementById('feedback');

// function loadQuestion() {
//     // Clear previous question and feedback
//     questionContainer.innerHTML = '';
//     feedbackContainer.innerHTML = '';

//     if (currentQuestionIndex < questions.length) {
//         const questionData = questions[currentQuestionIndex];

//         // Create question element
//         const questionElement = document.createElement('div');
//         questionElement.classList.add('question');
//         questionElement.innerHTML = `<p>${questionData.question}</p>`;

//         // Create options
//         questionData.options.forEach((option, index) => {
//             const optionElement = document.createElement('label');
//             optionElement.innerHTML = `
//                 <input type="radio" name="option" value="${option}">
//                 ${option}
//             `;
//             questionElement.appendChild(optionElement);
//             questionElement.appendChild(document.createElement('br'));
//         });

//         questionContainer.appendChild(questionElement);
//     } else {
//         // Show result at the end of the quiz
//         displayResult();
//         quizForm.style.display = 'none';
//     }
// }

// function displayResult() {
//     feedbackContainer.innerHTML = `
//         <h2>Quiz Completed!</h2>
//         <p>Correct Answers: ${correctAnswersCount}</p>
//         <p>Incorrect Answers: ${incorrectAnswersCount}</p>
//     `;
//     feedbackContainer.style.color = '#007bff';
// }

// quizForm.addEventListener('submit', (e) => {
//     e.preventDefault();

//     const selectedOption = document.querySelector('input[name="option"]:checked');
//     if (selectedOption) {
//         const answer = selectedOption.value;
//         const correctAnswer = questions[currentQuestionIndex].correctAnswer;

//         if (answer === correctAnswer) {
//             correctAnswersCount++;
//             feedbackContainer.innerHTML = 'Correct!';
//             feedbackContainer.style.color = 'green';
//         } else {
//             incorrectAnswersCount++;
//             feedbackContainer.innerHTML = `Incorrect! The correct answer was: ${correctAnswer}`;
//             feedbackContainer.style.color = 'red';
//         }

//         // Move to the next question after a short delay
//         setTimeout(() => {
//             currentQuestionIndex++;
//             loadQuestion();
//         }, 1500);
//     } else {
//         alert('Please select an option before submitting.');
//     }
// });

// // Load the first question when the page loads
// loadQuestion();


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
  const code = document.getElementById("code");
  const dropDownItems = document.querySelectorAll(".dropDownCode");
  const codeChevron = document.getElementById("codeChevron").querySelector("i");

  // Thêm sự kiện click vào Dashboard
  code.addEventListener("click", function(e) {
      e.preventDefault();  // Ngăn trang reload

      // Duyệt qua từng mục dropDown và chuyển đổi giữa hiển thị và ẩn
      dropDownItems.forEach(item => {
          item.classList.toggle("active");
      });

      // Chuyển đổi giữa chevron-up và chevron-down
      if (codeChevron.classList.contains("fa-chevron-up")) {
          codeChevron.classList.remove("fa-chevron-up");
          codeChevron.classList.add("fa-chevron-down");
      } else {
          codeChevron.classList.remove("fa-chevron-down");
          codeChevron.classList.add("fa-chevron-up");
      }
  });
});

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

// Lấy các phần tử cần thiết
const modalIssue = document.getElementById("modalStaskIssue");
const btnIssue = document.getElementById("openStaskIssue");
const closeBtnIssue = document.querySelector(".closeIssue");

// Kiểm tra xem modal và các phần tử có tồn tại không
if (modalIssue && btnIssue && closeBtnIssue) {
    // Khi người dùng click vào nút "Open Modal", modal sẽ hiển thị
    btnIssue.addEventListener("click", function() {
      modalIssue.style.display = "block";
    });

    // Khi người dùng click vào dấu "x", modal sẽ đóng
    closeBtnIssue.addEventListener("click", function() {
      modalIssue.style.display = "none";
    });

    // Khi người dùng click ra ngoài modal, modal sẽ đóng
    window.addEventListener("click", function(event) {
        if (event.target == modalIssue) {
          modalIssue.style.display = "none";
        }
    });
}


 // Hàm lấy số ngày trong tháng dựa vào tháng và năm
 function getDaysInMonth(month, year) {
  return new Date(year, month, 0).getDate(); // Ngày cuối cùng của tháng
}

// Hàm tạo form dựa trên ngày tháng hiện tại
function generateForm() {
  const today = new Date();
  const month = today.getMonth() + 1; // Tháng (lấy từ 0-11 nên cần +1)
  const year = today.getFullYear();   // Năm
  const day = today.getDate();        // Ngày hiện tại

  // Tính số ngày trong tháng hiện tại
  const daysInMonth = getDaysInMonth(month, year);

  // Chọn phần tử form-container
  const formContainer = document.getElementById('form-container');
  formContainer.innerHTML = ''; // Xóa nội dung cũ

  // Tạo input cho mỗi ngày trong tháng hiện tại
  for (let d = 1; d <= daysInMonth; d++) {


    // Tạo input cho dữ liệu của ngày
    const inputData = document.createElement('input');
    inputData.type = 'text';
    inputData.name = `day${d}_data`;
    inputData.placeholder = `Nhập dữ liệu cho ngày ${d}/${month}...`;

    // Tạo nhãn và input cho "Thời gian bắt đầu"
    const startTimeLabel = document.createElement('label');
    startTimeLabel.innerText = `Bắt đầu`;
    const startTimeInput = document.createElement('input');
    startTimeInput.type = 'time';
    startTimeInput.name = `day${d}_start_time`;

    // Tạo nhãn và input cho "Thời gian kết thúc"
    const endTimeLabel = document.createElement('label');
    endTimeLabel.innerText = `Kết thúc:`;
    const endTimeInput = document.createElement('input');
    endTimeInput.type = 'time';
    endTimeInput.name = `day${d}_end_time`;

    const submitButton = document.createElement('button');
    submitButton.type = 'submit'; // Có thể thay đổi thành 'button' nếu không cần gửi form
    submitButton.innerText = 'Gửi'; // Văn bản nút

    // Tạo div bao quanh nhãn và input
    const formGroup = document.createElement('div');
    formGroup.classList.add('form-group');
    formGroup.appendChild(inputData);
    formGroup.appendChild(startTimeLabel);
    formGroup.appendChild(startTimeInput);
    formGroup.appendChild(endTimeLabel);
    formGroup.appendChild(endTimeInput);
    formGroup.appendChild(submitButton);

    // Thêm formGroup vào form-container
    formContainer.appendChild(formGroup);
  }
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
  const issue = document.getElementById("issue");
  const dropDownIssue = document.querySelectorAll(".dropDownIssue");
  const chevronIssue = document.getElementById("chevronIssue").querySelector("i");

  // Thêm sự kiện click vào Dashboard
  issue.addEventListener("click", function(e) {
      e.preventDefault();  // Ngăn trang reload

      // Duyệt qua từng mục dropDown và chuyển đổi giữa hiển thị và ẩn
      dropDownIssue.forEach(item => {
          item.classList.toggle("active");
      });

      // Chuyển đổi giữa chevron-up và chevron-down
      if (chevronIssue.classList.contains("fa-chevron-up")) {
        chevronIssue.classList.remove("fa-chevron-up");
        chevronIssue.classList.add("fa-chevron-down");
      } else {
        chevronIssue.classList.remove("fa-chevron-down");
        chevronIssue.classList.add("fa-chevron-up");
      }
  });
});



document.addEventListener("DOMContentLoaded", function() {
  const Email = document.getElementById("email");
  const dropDownEmail = document.querySelectorAll(".dropDownEmail");
  const chevronEmail = document.getElementById("chevronEmail").querySelector("i");

  // Thêm sự kiện click vào Dashboard
  Email.addEventListener("click", function(e) {
      e.preventDefault();  // Ngăn trang reload

      // Duyệt qua từng mục dropDown và chuyển đổi giữa hiển thị và ẩn
      dropDownEmail.forEach(item => {
          item.classList.toggle("active");
      });

      // Chuyển đổi giữa chevron-up và chevron-down
      if (chevronEmail.classList.contains("fa-chevron-up")) {
        chevronEmail.classList.remove("fa-chevron-up");
        chevronEmail.classList.add("fa-chevron-down");
      } else {
        chevronEmail.classList.remove("fa-chevron-down");
        chevronEmail.classList.add("fa-chevron-up");
      }
  });
});



document.addEventListener("DOMContentLoaded", function() {
  const Todo = document.getElementById("todo");
  const dropDownTodo = document.querySelectorAll(".dropDownTodo");
  const chevronTodo = document.getElementById("chevronTodo").querySelector("i");

  // Thêm sự kiện click vào Dashboard
  Todo.addEventListener("click", function(e) {
      e.preventDefault();  // Ngăn trang reload

      // Duyệt qua từng mục dropDown và chuyển đổi giữa hiển thị và ẩn
      dropDownTodo.forEach(item => {
          item.classList.toggle("active");
      });

      // Chuyển đổi giữa chevron-up và chevron-down
      if (chevronTodo.classList.contains("fa-chevron-up")) {
        chevronTodo.classList.remove("fa-chevron-up");
        chevronTodo.classList.add("fa-chevron-down");
      } else {
        chevronTodo.classList.remove("fa-chevron-down");
        chevronTodo.classList.add("fa-chevron-up");
      }
  });
});

document.getElementById("showCategoryBtn").addEventListener("click", function() {
  var categoryForm = document.querySelector(".CreateCategory");
  if (categoryForm.style.display === "none" || categoryForm.style.display === "") {
      categoryForm.style.display = "block"; // Hiển thị form
  } else {
      categoryForm.style.display = "none"; // Ẩn form nếu đã hiển thị
  }
});


document.addEventListener("DOMContentLoaded", function() {
  const FrontEnd = document.getElementById("FrontEnd");
  const dropDownFrontEnd = document.querySelectorAll(".dropDownFrontEnd");
  const chevronFrontEnd = document.getElementById("chevronFrontEnd").querySelector("i");

  // Thêm sự kiện click vào Dashboard
  FrontEnd.addEventListener("click", function(e) {
      e.preventDefault();  // Ngăn trang reload

      // Duyệt qua từng mục dropDown và chuyển đổi giữa hiển thị và ẩn
      dropDownFrontEnd.forEach(item => {
          item.classList.toggle("active");
      });

      // Chuyển đổi giữa chevron-up và chevron-down
      if (chevronFrontEnd.classList.contains("fa-chevron-up")) {
        chevronFrontEnd.classList.remove("fa-chevron-up");
        chevronFrontEnd.classList.add("fa-chevron-down");
      } else {
        chevronFrontEnd.classList.remove("fa-chevron-down");
        chevronFrontEnd.classList.add("fa-chevron-up");
      }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const BackEnd = document.getElementById("BackEnd");
  const dropDownBackEnd = document.querySelectorAll(".dropDownBackEnd");
  const chevronBackEnd = document.getElementById("chevronBackEnd").querySelector("i");

  // Thêm sự kiện click vào Dashboard
  BackEnd.addEventListener("click", function(e) {
      e.preventDefault();  // Ngăn trang reload

      // Duyệt qua từng mục dropDown và chuyển đổi giữa hiển thị và ẩn
      dropDownBackEnd.forEach(item => {
          item.classList.toggle("active");
      });

      // Chuyển đổi giữa chevron-up và chevron-down
      if (chevronBackEnd.classList.contains("fa-chevron-up")) {
        chevronBackEnd.classList.remove("fa-chevron-up");
        chevronBackEnd.classList.add("fa-chevron-down");
      } else {
        chevronBackEnd.classList.remove("fa-chevron-down");
        chevronBackEnd.classList.add("fa-chevron-up");
      }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const Sql = document.getElementById("Sql");
  const dropDownSql = document.querySelectorAll(".dropDownSql");
  const chevronSql = document.getElementById("chevronSql").querySelector("i");

  // Thêm sự kiện click vào Dashboard
  Sql.addEventListener("click", function(e) {
      e.preventDefault();  // Ngăn trang reload

      // Duyệt qua từng mục dropDown và chuyển đổi giữa hiển thị và ẩn
      dropDownSql.forEach(item => {
          item.classList.toggle("active");
      });

      // Chuyển đổi giữa chevron-up và chevron-down
      if (chevronSql.classList.contains("fa-chevron-up")) {
        chevronSql.classList.remove("fa-chevron-up");
        chevronSql.classList.add("fa-chevron-down");
      } else {
        chevronSql.classList.remove("fa-chevron-down");
        chevronSql.classList.add("fa-chevron-up");
      }
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


function checkAnswers() {
  let score = 0;
  let incorrectAnswers = [];
  const totalQuestions = 10;  // Đổi thành tổng số câu hỏi (ở đây là 10)

  // Đáp án đúng
  const answers = {
      q1: "a",  // Đáp án đúng câu 1
      q2: "a",  // Đáp án đúng câu 2
      q3: "b",  // Đáp án đúng câu 3 (thêm tiếp cho các câu khác)
      q4: "c",
      q5: "b",
      q6: "c",
      q7: "a",
      q8: "b",
      q9: "c",
      q10: "a"
  };

  // Kiểm tra từng câu trả lời
  for (let i = 1; i <= totalQuestions; i++) {
      let selectedAnswer = document.querySelector(`input[name="q${i}"]:checked`);
      if (selectedAnswer) {
          if (selectedAnswer.value === answers[`q${i}`]) {
              score++;
          } else {
              incorrectAnswers.push(i);  // Lưu câu sai vào mảng
          }
      } else {
          incorrectAnswers.push(i);  // Nếu không chọn câu nào, coi như sai
      }
  }

  // Hiển thị kết quả
  const resultDiv = document.getElementById('result');
  const wrongCount = incorrectAnswers.length;
  const correctCount = score;

  resultDiv.innerHTML = `
      <p>Bạn đạt ${score} trên ${totalQuestions}</p>
      <p>Câu trả lời đúng: ${correctCount}</p>
      <p>Câu trả lời sai: ${wrongCount}</p>
      ${wrongCount > 0 ? `<p>Câu hỏi trả lời sai: ${incorrectAnswers.join(', ')}</p>` : ''}
  `;
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
  document.getElementById(tabId).style.display = "block";
  evt.currentTarget.className += " active";
}
