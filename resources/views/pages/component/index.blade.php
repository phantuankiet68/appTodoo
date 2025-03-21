@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="component">
    <div class="component-left">
        <div class="component-container">
            <div class="component-sidebar">
                <div class="draggable" draggable="true" data-type="div"><i class="fa-solid fa-plus"></i> {{ __('messages.Title') }}</div>
                <div class="draggable" draggable="true" data-type="sidebar"><i class="fa-solid fa-plus"></i> {{ __('messages.Sidebar') }}</div>
                <div class="draggable" draggable="true" data-type="header"><i class="fa-solid fa-plus"></i> {{ __('messages.Header') }}</div>
                <div class="draggable" draggable="true" data-type="min-height-div"><i class="fa-solid fa-plus"></i> {{ __('messages.Div Tag') }}</div>
                <div class="draggable" draggable="true" data-type="p"><i class="fa-solid fa-plus"></i> {{ __('messages.Paragraph') }}</div>
                <div class="draggable" draggable="true" data-type="button"><i class="fa-solid fa-plus"></i> {{ __('messages.Button') }}</div>
                <div class="draggable" draggable="true" data-type="tab"><i class="fa-solid fa-plus"></i> {{ __('messages.Tab Menu') }}</div>
                <div class="draggable" draggable="true" data-type="form"><i class="fa-solid fa-plus"></i> {{ __('messages.Form') }}</div>
                <div class="draggable" draggable="true" data-type="menu"><i class="fa-solid fa-plus"></i> {{ __('messages.Menu') }}</div>
                <div class="draggable" draggable="true" data-type="row"><i class="fa-solid fa-plus"></i> {{ __('messages.Row') }}</div>
                <div class="draggable" draggable="true" data-type="column"><i class="fa-solid fa-plus"></i> {{ __('messages.Column') }}</div>
                <div class="draggable" draggable="true" data-type="input"><i class="fa-solid fa-plus"></i> {{ __('messages.Input') }}</div>
                <div class="draggable" draggable="true" data-type="textarea"><i class="fa-solid fa-plus"></i> {{ __('messages.Textarea') }}</div>
                <div class="draggable" draggable="true" data-type="a"><i class="fa-solid fa-plus"></i> {{ __('messages.Link') }}</div>
                <div class="draggable" draggable="true" data-type="card"> <i class="fa-solid fa-plus"></i> {{ __('messages.Card') }}</div>
                <div class="draggable" draggable="true" data-type="image"><i class="fa-solid fa-plus"></i> {{ __('messages.Image') }}</div>
                <div class="draggable" draggable="true" data-type="table"><i class="fa-solid fa-plus"></i> {{ __('messages.Table') }}</div>
            </div>
            <div class="dropzone" id="dropzone"></div>
            
            <div class="toolbar" id="toolbar">
                <div class="d-flex gap-10">
                    <button onclick="setStyle('bold')">B</button>
                    <button onclick="setStyle('italic')">I</button>
                    <button onclick="setStyle('underline')">U</button> <!-- Thêm gạch chân -->
                    
                    <button onclick="setStyle('left')"><i class="fa-solid fa-align-left"></i></button> <!-- Căn trái -->
                    <button onclick="setStyle('center')"><i class="fa-solid fa-align-center"></i></button> <!-- Căn giữa -->
                    <button onclick="setStyle('right')"><i class="fa-solid fa-align-right"></i></button> <!-- Căn phải -->
                    <button onclick="setStyle('justify')"><i class="fa-solid fa-align-justify"></i></button> <!-- Căn đều -->

                    <input type="color" id="textColor" title="Chọn màu chữ">
                    <input type="color" id="bgColor" title="Chọn màu nền">
                </div>
                <div class="d-flex gap-10 space-between">
                    <label style="display: flex; flex-direction: column; gap: 5px; width: 50%;">
                        {{ __('messages.Font Family') }}: 
                        <select id="fontFamily">
                            <option value="Arial">Arial</option>
                            <option value="Verdana">Verdana</option>
                            <option value="Times New Roman">Times New Roman</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Courier New">Courier New</option>
                            <option value="Tahoma">Tahoma</option>
                        </select>
                    </label> 
                    <label style="display: flex; flex-direction: column; gap: 5px; width: 50%;">
                        {{ __('messages.Font Size') }}: <input type="number" id="fontSize" min="10" max="100" value="16">
                    </label>
                </div>
                <div class="d-flex gap-10">
                    <label class="w-50">{{ __('messages.Position') }}:  
                        <select id="formPosition" style="width: 100%">
                            <option value="static">Static</option>
                            <option value="relative">Relative</option>
                            <option value="absolute">Absolute</option>
                            <option value="fixed">Fixed</option>
                            <option value="sticky">Sticky</option>
                        </select>
                    </label>
                    <label class="w-50">{{ __('messages.This') }}:  
                        <select id="formTag" style="width: 100%">
                            <option value="p">P</option>
                            <option value="h1">H1</option>
                            <option value="h2">H2</option>
                            <option value="h3">H3</option>
                            <option value="h4">H4</option>
                            <option value="h5">H5</option>
                        </select>
                    </label>
                </div>
                <div class="d-flex gap-10 space-between">
                    <label style="width: 50%;display: flex; flex-direction: column;gap: 5px;">{{ __('messages.Width') }}: <input type="number" id="widthSize" style="width: 100%;" min="0" max="1000" value="100"></label>
                    <label style="width: 50%;display: flex; flex-direction: column;gap: 5px;">{{ __('messages.Height') }}: <input type="number" id="heightSize" style="width: 100%;" min="0" max="1000" value="50"></label>
                </div>      
                <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Margin') }}: 
                    <div class="margin">
                        <input type="number" id="marginTop" min="0" max="100" value="0" >
                        <input type="number" id="marginRight" min="0" max="100" value="0">
                        <input type="number" id="marginBottom" min="0" max="100" value="0">
                        <input type="number" id="marginLeft" min="0" max="100" value="0">
                    </div>
                </label>     
                <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Padding') }}: 
                    <div class="margin">
                        <input type="number" id="paddingTop" min="0" max="100" value="0">
                        <input type="number" id="paddingRight" min="0" max="100" value="0">
                        <input type="number" id="paddingBottom" min="0" max="100" value="0">
                        <input type="number" id="paddingLeft" min="0" max="100" value="0">
                    </div>
                </label>
                <div class="d-flex gap-10">
                    <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Top') }}:  
                        <input type="number" id="formTop" style="width: 90.7%" min="0" value="0">
                    </label>

                    <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Left') }}:  
                        <input type="number" id="formLeft" style="width: 90.7%" min="0" value="0">
                    </label>

                    <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Right') }}:  
                        <input type="number" id="formRight" style="width: 90.7%" min="0" value="0">
                    </label>

                    <label style="display: flex; flex-direction: column; gap: 5px;"> {{ __('messages.Bottom') }}:  
                        <input type="number" id="formBottom" style="width: 90.7%" min="0" value="0">
                    </label>
                </div>
                <div class="d-flex gap-10">
                    <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Link') }}: <input type="text" id="linkHref" style="width: 100%;" placeholder="{{ __('messages.Enter URL') }}"></label>
                    <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Action') }}: <input type="text" id="formAction" style="width:100%;" placeholder="{{ __('messages.Enter URL action') }}"></label>
                </div>
                <div class="d-flex gap-5 space-between">
                    <label style="display: flex; flex-direction: column; gap: 5px; width: 25%">{{ __('messages.Display') }}: 
                        <select id="formDisplay" style="width: 100%;">
                            <option value="block">Block</option>
                            <option value="inline">Inline</option>
                            <option value="flex">Flex</option>
                            <option value="grid">Grid</option>
                            <option value="none">None</option>
                        </select>
                    </label>
                    <label style="display: flex; flex-direction: column; gap: 5px; width: 15%">{{ __('messages.Gap') }}:  
                        <input type="number" id="formGap" style="width: 100%" value="0">
                    </label>
                    <label style="display: flex; flex-direction: column; gap: 5px;width: 30%">{{ __('messages.Justify Content') }}:  
                        <select id="formJustify" style="width: 100%">
                            <option value="flex-start">Flex Start</option>
                            <option value="center">Center</option>
                            <option value="flex-end">Flex End</option>
                            <option value="space-between">Space Between</option>
                            <option value="space-around">Space Around</option>
                            <option value="space-evenly">Space Evenly</option>
                        </select>
                    </label>
                    <label style="display: flex; flex-direction: column; gap: 5px;width: 30%">{{ __('messages.Flex Direction') }}:  
                        <select id="formFlexDirection" style="width: 100%">
                            <option value="row">Row</option>
                            <option value="row-reverse">Row Reverse</option>
                            <option value="column">Column</option>
                            <option value="column-reverse">Column Reverse</option>
                        </select>
                    </label>
                </div>
                <div class="d-flex gap-5 space-between">
                    <label class="w-50" style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Align Items') }}:
                        <select id="formAlignItems" style="width: 100%">
                            <option value="flex-start">Flex Start</option>
                            <option value="center">Center</option>
                            <option value="flex-end">Flex End</option>
                            <option value="stretch">Stretch</option>
                            <option value="baseline">Baseline</option>
                        </select>
                    </label>

                    <label class="w-50" style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Text Align') }}:
                        <select id="formTextAlign" style="width: 100%">
                            <option value="left">Left</option>
                            <option value="center">Center</option>
                            <option value="right">Right</option>
                            <option value="justify">Justify</option>
                        </select>
                    </label>
                </div>
                <div class="d-flex gap-5 space-between">
                    <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Border') }}:
                        <input type="text" id="formBorder" style="width: 100%" placeholder="1px solid #000">
                    </label>

                    <label style="display: flex; flex-direction: column; gap: 5px;">{{ __('messages.Border Radius') }}:
                        <input type="number" id="formBorderRadius" style="width: 100%" placeholder="{{ __('messages.Enter border radius (px)') }}">
                    </label>
                </div>
                <button onclick="hideToolbar()">Đóng</button>
            </div>
        </div>
    </div>
    <div class="component-right">
   
    </div>
</div>


<script>
    const draggables = document.querySelectorAll('.draggable');
    const dropzones = document.querySelectorAll('.dropzone, .column');
    const toolbar = document.getElementById('toolbar');
    let selectedElement = null;

    draggables.forEach(draggable => {
        draggable.addEventListener('dragstart', (e) => {
            e.dataTransfer.setData('type', e.target.getAttribute('data-type'));
        });
    });

    dropzones.forEach(dropzone => {
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            const type = e.dataTransfer.getData('type');
            let element;

            if (type === 'row') {
                element = document.createElement('div');
                element.classList.add('row');
                element.innerHTML = '<div class="column dropzone" contenteditable="true"></div><div class="column dropzone" contenteditable="true"></div>';
            } 
            else if (type === "min-height-div") {
                element = document.createElement("div");
                element.style.minHeight = "10vh";
                element.style.border = "1px dashed #ccc";
                element.style.padding = "5px";
            }else if (type === 'column') {
                element = document.createElement('div');
                element.classList.add('column', 'dropzone');
            } else if (type === 'input') {
                element = document.createElement('input');
                element.type = 'text';
                element.placeholder = 'Nhập nội dung';
            } else if (type === 'textarea') {
                element = document.createElement('textarea');
                element.placeholder = 'Nhập nội dung';
            } else if (type === 'a') {
                element = document.createElement('a');
                element.href = '#';
                element.textContent = 'Liên kết mới';
                element.classList.add('editable');
                element.setAttribute('contenteditable', 'true');

                element.style.textDecoration = 'none';
                element.style.borderRadius = '5px';
                element.style.padding = '9px';
                element.style.display = 'inline-block'; 
            } else if (type === 'card') {
                element = document.createElement('div');
                element.classList.add('card');
                element.style.border = '1px solid #ccc';
                element.style.borderRadius = '8px';
                element.style.boxShadow = '2px 2px 10px rgba(0, 0, 0, 0.1)';
                element.style.backgroundColor = '#fff';
                element.style.overflow = 'hidden';
            }
            else if (type === 'image') {
                element = document.createElement('img');
                element.src = "https://via.placeholder.com/150";
                element.alt = "Hình ảnh mới";
                element.classList.add('draggable-image');
                element.style.width = "150px";
                element.style.display = "block";
                element.style.marginTop = "10px";
                element.style.cursor = "pointer"; 

                const fileInput = document.createElement('input');
                fileInput.type = 'file';
                fileInput.accept = 'image/*';
                fileInput.style.display = 'none';

                element.addEventListener('click', () => {
                    fileInput.click();
                });

                fileInput.addEventListener('change', (event) => {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            element.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });

                e.target.appendChild(element);
                e.target.appendChild(fileInput);
            } 
            else if (type === "table") {
                element = document.createElement("div");
                element.classList.add("table-container");
                element.innerHTML = `
                    <button class="add-column">Thêm cột</button>
                    <table border="1">
                        <thead>
                            <tr>
                                <th contenteditable="true">Tiêu đề 1</th>
                                <th contenteditable="true">Tiêu đề 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td contenteditable="true">Dữ liệu 1</td>
                                <td contenteditable="true">Dữ liệu 2</td>
                            </tr>
                        </tbody>
                    </table>
                `;

                // Thêm sự kiện click cho nút "Thêm cột"
                const addColumnButton = element.querySelector(".add-column");
                addColumnButton.addEventListener("click", () => {
                    const table = element.querySelector("table");
                    const rows = table.querySelectorAll("tr");

                    rows.forEach((row, index) => {
                        const newCell = document.createElement(index === 0 ? "th" : "td");
                        newCell.textContent = index === 0 ? `Tiêu đề ${row.children.length + 1}` : `Dữ liệu`;
                        newCell.setAttribute("contenteditable", "true");
                        row.appendChild(newCell);
                    });
                });
            }
            else if (type === "form") {
                element = document.createElement("form");
                element.classList.add("dropzone");
                element.setAttribute("method", "POST"); // Mặc định là POST
                element.style.border = "1px solid #ccc";
                element.style.padding = "10px";
                element.style.marginTop = "10px";
                element.style.borderRadius = "5px";

                setTimeout(() => {
                    const actionInput = document.getElementById("formAction");
                    if (actionInput && actionInput.value.trim() !== "") {
                        element.setAttribute("action", actionInput.value.trim());
                    } else {
                        element.setAttribute("action", "#");
                    }
                }, 100);
                
                e.target.appendChild(element);
            }else {
                element = document.createElement(type === 'div' ? 'div' : type);
                element.textContent = type.toUpperCase();
                element.classList.add('editable');
                element.setAttribute('contenteditable', 'true');
            }

            element.addEventListener('click', (e) => {
                selectedElement = e.target;
                showToolbar(e.clientX, e.clientY);
                if (toolbar && toolbar.style.display === "flex" && !toolbar.contains(e.target) && 
                    (!selectedElement || !selectedElement.contains(e.target))) {
                    hideToolbar();
                }
            });

            const deleteBtn = document.createElement("button");
            deleteBtn.textContent = "❌";
            deleteBtn.style.position = "absolute";
            deleteBtn.style.top = "5px";
            deleteBtn.style.right = "5px";
            deleteBtn.style.background = "red";
            deleteBtn.style.color = "white";
            deleteBtn.style.border = "none";
            deleteBtn.style.cursor = "pointer";

            deleteBtn.addEventListener("click", () => {
                element.remove();
            });

            element.style.position = "relative";
            element.style.padding = "10px";
            element.style.border = "1px solid #ccc";
            element.style.margin = "5px";
            element.style.backgroundColor = "#f9f9f9";

            element.appendChild(deleteBtn);

            e.target.appendChild(element);
        });
    });
    

    function showToolbar(x, y) {
        const toolbar = document.getElementById("toolbar");
        const toolbarRect = toolbar.getBoundingClientRect();
        const screenWidth = window.innerWidth;
        const screenHeight = window.innerHeight;

        // Đảm bảo toolbar không vượt ra ngoài màn hình bên phải
        if (x + toolbarRect.width > screenWidth) {
            x = screenWidth - toolbarRect.width - 10; // Giảm 10px để tránh chạm mép
        }

        // Đảm bảo toolbar không vượt ra ngoài màn hình phía dưới
        if (y + toolbarRect.height > screenHeight) {
            y = screenHeight - toolbarRect.height - 10;
        }

        // Đảm bảo toolbar không vượt ra ngoài màn hình bên trái
        if (x < 0) {
            x = 10;
        }

        // Đảm bảo toolbar không vượt ra ngoài màn hình phía trên
        if (y < 0) {
            y = 10;
        }

        toolbar.style.display = 'flex';
        toolbar.style.flexDirection = "column";
        toolbar.style.gap = '10px';
        toolbar.style.right = `0px`;
        toolbar.style.top = `63px`;
        toolbar.style. zIndex = `10`;
    }


    function hideToolbar() {
        const toolbar = document.getElementById("toolbar");
        if (toolbar) {
            toolbar.style.display = "none";
        }
    }
    function addColumnToTable(table) {
        const rows = table.querySelectorAll("tr");
        rows.forEach((row, index) => {
            const newCell = document.createElement(index === 0 ? "th" : "td");
            newCell.textContent = index === 0 ? "Cột mới" : "Dữ liệu";
            newCell.setAttribute("contenteditable", "true");
            row.appendChild(newCell);
        });
    }

    document.getElementById('formGap').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.gap = this.value + 'px';
    });

    document.addEventListener("click", (event) => {
        if (event.target.classList.contains("add-column")) {
            const table = event.target.closest(".table-container").querySelector("table");
            addColumnToTable(table);
        }
    });

    document.getElementById('fontSize').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.fontSize = this.value + 'px';
    });

    document.getElementById('textColor').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.color = this.value;
    });

    document.getElementById('bgColor').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.backgroundColor = this.value;
    });
    
    document.getElementById('widthSize').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.width = this.value + '%';
    });

    document.getElementById('heightSize').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.height = this.value + 'vh';
    });

    document.getElementById('formFlexDirection').addEventListener('change', function() {
        if (selectedElement) selectedElement.style.flexDirection = this.value;
    });

    document.getElementById('linkHref').addEventListener('input', function() {
        if (selectedElement && selectedElement.tagName === 'A') {
            selectedElement.href = this.value;
        }
    });
    document.getElementById('marginTop').addEventListener('input', updateMargin);
    document.getElementById('marginRight').addEventListener('input', updateMargin);
    document.getElementById('marginBottom').addEventListener('input', updateMargin);
    document.getElementById('marginLeft').addEventListener('input', updateMargin);

    function updateMargin() {
        if (selectedElement) {
            let top = document.getElementById('marginTop').value + 'px';
            let right = document.getElementById('marginRight').value + 'px';
            let bottom = document.getElementById('marginBottom').value + 'px';
            let left = document.getElementById('marginLeft').value + 'px';
            selectedElement.style.margin = `${top} ${right} ${bottom} ${left}`;
        }
    }

    document.getElementById('paddingTop').addEventListener('input', updatePadding);
    document.getElementById('paddingRight').addEventListener('input', updatePadding);
    document.getElementById('paddingBottom').addEventListener('input', updatePadding);
    document.getElementById('paddingLeft').addEventListener('input', updatePadding);

    function updatePadding() {
        if (selectedElement) {
            let top = document.getElementById('paddingTop').value + 'px';
            let right = document.getElementById('paddingRight').value + 'px';
            let bottom = document.getElementById('paddingBottom').value + 'px';
            let left = document.getElementById('paddingLeft').value + 'px';
            selectedElement.style.padding = `${top} ${right} ${bottom} ${left}`;
        }
    }

    document.getElementById('fontFamily').addEventListener('change', function() {
        if (selectedElement) {
            selectedElement.style.fontFamily = this.value;
        }
    });
    document.getElementById('formDisplay').addEventListener('change', function() {
        if (selectedElement) selectedElement.style.display = this.value;
    });


    document.getElementById('formJustify').addEventListener('change', function() {
        if (selectedElement) selectedElement.style.justifyContent = this.value;
    });

    document.getElementById('formPosition').addEventListener('change', function() {
        if (selectedElement) selectedElement.style.position = this.value;
    });
    document.getElementById('formPosition').addEventListener('change', function() {
        if (selectedElement) selectedElement.style.position = this.value;
    });

    document.getElementById('formTop').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.top = this.value + 'px';
    });

    document.getElementById('formLeft').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.left = this.value + 'px';
    });

    document.getElementById('formRight').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.right = this.value + 'px';
    });

    document.getElementById('formBottom').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.bottom = this.value + 'px';
    });

    document.getElementById('formTag').addEventListener('change', function() {
        if (selectedElement) {
            let newTag = document.createElement(this.value);
            newTag.innerHTML = selectedElement.innerHTML;
            
            for (let i = 0; i < selectedElement.style.length; i++) {
                let prop = selectedElement.style[i];
                newTag.style[prop] = selectedElement.style[prop];
            }

            selectedElement.replaceWith(newTag);
            selectedElement = newTag;
        }
    });

    document.getElementById('formAlignItems').addEventListener('change', function() {
        if (selectedElement) selectedElement.style.alignItems = this.value;
    });

    document.getElementById('formTextAlign').addEventListener('change', function() {
        if (selectedElement) selectedElement.style.textAlign = this.value;
    });

    document.getElementById('formBorder').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.border = this.value;
    });

    document.getElementById('formBorderRadius').addEventListener('input', function() {
        if (selectedElement) selectedElement.style.borderRadius = this.value + 'px';
    });

    function setStyle(style) {
        if (!selectedElement) return;

        if (style === 'bold') {
            selectedElement.style.fontWeight = selectedElement.style.fontWeight === 'bold' ? 'normal' : 'bold';
        }
        if (style === 'italic') {
            selectedElement.style.fontStyle = selectedElement.style.fontStyle === 'italic' ? 'normal' : 'italic';
        }
        if (style === 'underline') {
            selectedElement.style.textDecoration = selectedElement.style.textDecoration === 'underline' ? 'none' : 'underline';
        }
        if (style === 'left') {
            selectedElement.style.textAlign = 'left';
        }
        if (style === 'center') {
            selectedElement.style.textAlign = 'center';
        }
        if (style === 'right') {
            selectedElement.style.textAlign = 'right';
        }
        if (style === 'justify') {
            selectedElement.style.textAlign = 'justify';
        }
    }

</script>
@endsection