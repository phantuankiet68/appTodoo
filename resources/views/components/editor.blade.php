<div class="toolbar">
    <div class="head">
        <input type="text" placeholder="Filename" value="untitled" id="filename">
        <select onchange="fileHandle(this.value); this.selectedIndex=0">
            <option value="" selected="" hidden="" disabled="">File</option>
            <option value="new">New file</option>
            <option value="txt">Save as txt</option>
            <option value="pdf">Save as pdf</option>
        </select>
        <select onchange="formatDoc('formatBlock', this.value); this.selectedIndex=0;">
            <option value="" selected="" hidden="" disabled="">Format</option>
            <option value="h1">Heading 1</option>
            <option value="h2">Heading 2</option>
            <option value="h3">Heading 3</option>
            <option value="h4">Heading 4</option>
            <option value="h5">Heading 5</option>
            <option value="h6">Heading 6</option>
            <option value="p">Paragraph</option>
        </select>
        <select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
            <option value="" selected="" hidden="" disabled="">Font size</option>
            <option value="1">Extra small</option>
            <option value="2">Small</option>
            <option value="3">Regular</option>
            <option value="4">Medium</option>
            <option value="5">Large</option>
            <option value="6">Extra Large</option>
            <option value="7">Big</option>
        </select>
        <div class="color">
            <span>Color</span>
            <input type="color" oninput="formatDoc('foreColor', this.value); this.value='#000000';">
        </div>
        <div class="color">
            <span>Background</span>
            <input type="color" oninput="formatDoc('hiliteColor', this.value); this.value='#000000';">
        </div>
    </div>
    <div class="btn-toolbar">
        <button onclick="formatDoc('undo')"><i class='bx bx-undo' ></i></button>
        <button onclick="formatDoc('redo')"><i class='bx bx-redo' ></i></button>
        <button onclick="formatDoc('bold')"><i class='bx bx-bold'></i></button>
        <button onclick="formatDoc('underline')"><i class='bx bx-underline' ></i></button>
        <button onclick="formatDoc('italic')"><i class='bx bx-italic' ></i></button>
        <button onclick="formatDoc('strikeThrough')"><i class='bx bx-strikethrough' ></i></button>
        <button onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left' ></i></button>
        <button onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle' ></i></button>
        <button onclick="formatDoc('justifyRight')"><i class='bx bx-align-right' ></i></button>
        <button onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify' ></i></button>
        <button onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol' ></i></button>
        <button onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul' ></i></button>
        <button onclick="addLink()"><i class='bx bx-link' ></i></button>
        <button onclick="formatDoc('unlink')"><i class='bx bx-unlink' ></i></button>
        <button id="show-code" data-active="false">&lt;/&gt;</button>
    </div>
</div>
<div id="content" contenteditable="true" spellcheck="false">
    
</div>