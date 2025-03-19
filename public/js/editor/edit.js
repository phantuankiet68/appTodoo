// Chọn tất cả các nút chỉnh sửa
let advancedOptionButtons = document.querySelectorAll(".adv-option-button");

// Chọn các phần tử trong trình soạn thảo
let fontNameEdit = document.getElementById("fontNameEdit");
let fontSizeEdit = document.getElementById("fontSizeEdit");
let writingAreaEdit = document.getElementById("text-inputEdit");
let linkButtonEdit = document.getElementById("createLinkEdit");

// Các nút căn chỉnh, giãn cách, định dạng, script
let alignButtonsEdit = document.querySelectorAll(".align");
let spacingButtonsEdit = document.querySelectorAll(".spacing");
let formatButtonsEdit = document.querySelectorAll(".format");
let scriptButtonsEdit = document.querySelectorAll(".script");


// ✅ Khởi tạo trình soạn thảo
const initializerEdit = () => {
    highlighter(alignButtonsEdit, true);
    highlighter(spacingButtonsEdit, true);
    highlighter(formatButtonsEdit, false);
    highlighter(scriptButtonsEdit, true);

    // Thêm font vào danh sách chọn
    fontList.forEach(value => {
        let option = document.createElement("option");
        option.value = value;
        option.innerHTML = value;
        fontNameEdit.appendChild(option);
    });

    // Thêm kích thước chữ từ 1 -> 7
    for (let i = 1; i <= 7; i++) {
        let option = document.createElement("option");
        option.value = i;
        option.innerHTML = `Size ${i}`;
        fontSizeEdit.appendChild(option);
    }

    // Mặc định chọn kích thước 3
    fontSizeEdit.value = 3;
    document.execCommand("defaultParagraphSeparator", false, "p");
};

// ✅ Hàm chỉnh sửa văn bản
const modifyTextEdit = (command, defaultUi, value) => {
    document.execCommand(command, defaultUi, value);
};

// ✅ Gán sự kiện click cho các nút chỉnh sửa
optionsButtons.forEach(button => {
    button.addEventListener("click", () => {
        modifyTextEdit(button.id.replace("Edit", ""), false, null);
    });
});

// ✅ Gán sự kiện change cho dropdown (font, kích thước)
advancedOptionButtons.forEach(button => {
    button.addEventListener("change", () => {
        modifyTextEdit(button.id.replace("Edit", ""), false, button.value);
    });
});

// ✅ Xử lý chèn link
linkButtonEdit.addEventListener("click", () => {
    let userLink = prompt("Nhập URL:");
    if (userLink && !/^https?:\/\//i.test(userLink)) {
        userLink = "http://" + userLink;
    }
    modifyTextEdit("createLink", false, userLink);
});

// ✅ Highlight nút đang được chọn
const highlighterEdit = (className, needsRemoval) => {
    className.forEach(button => {
        button.addEventListener("click", () => {
            if (needsRemoval) {
                highlighterRemoverEdit(className);
                button.classList.add("active");
            } else {
                button.classList.toggle("active");
            }
        });
    });
};

// ✅ Xóa highlight trước khi thêm mới
const highlighterRemoverEdit = (className) => {
    className.forEach(button => button.classList.remove("active"));
};

// ✅ Đảm bảo có ít nhất 1 đoạn văn bản
const ensureParagraphWrapperEdit = () => {
    if (writingAreaEdit.innerHTML.trim() === "") {
        writingAreaEdit.innerHTML = "<p><br></p>";
    }
};

// ✅ Xử lý khi nhấn phím Enter (Tạo đoạn văn mới)
writingAreaEdit.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
        event.preventDefault();

        let selection = window.getSelection();
        let range = selection.getRangeAt(0);
        let currentNode = selection.anchorNode;

        while (currentNode.nodeType !== 1) {
            currentNode = currentNode.parentNode;
        }

        if (currentNode.tagName === "H2") {
            let newParagraph = document.createElement("p");
            newParagraph.innerHTML = "<br>";
            currentNode.parentNode.insertBefore(newParagraph, currentNode.nextSibling);
        } else {
            document.execCommand("insertParagraph", false, null);
        }
    }
});

// ✅ Cập nhật style tự động khi chỉnh sửa nội dung
const applyStylesEdit = () => {
    writingAreaEdit.querySelectorAll("h1, h2, h3, h4, h5, h6").forEach(el => {
        el.style.fontSize = "24px";
        el.style.fontWeight = "bold";
        el.style.color = "black";
        el.style.margin = "10px 0";
    });
};

// ✅ Quan sát thay đổi trong trình soạn thảo và áp dụng style
const observerEdit = new MutationObserver(() => {
    applyStylesEdit();
});
observerEdit.observe(writingAreaEdit, { childList: true, subtree: true });

// ✅ Khởi chạy khi tải trang
window.onload = () => {
    initializerEdit();
    ensureParagraphWrapperEdit();
};
