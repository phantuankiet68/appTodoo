@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="TodoBodyContent">
        <div class="col-5">
            <h3>Kiểm Tra Code HTML, CSS, JavaScript</h1>
            <form id="codeForm">
                <div class="form-textarea-category">
                    <label for="htmlCode">HTML:</label>
                    <textarea id="htmlCode" rows="5" class="textArea_description" placeholder="Nhập mã HTML ở đây"></textarea>
                </div>
                <div class="form-textarea-category">
                    <label for="cssCode">CSS:</label>
                    <textarea id="cssCode" rows="5" class="textArea_description" placeholder="Nhập mã CSS ở đây"></textarea>
                </div>
                <div class="form-textarea-category">
                    <label for="jsCode">JavaScript:</label>
                    <textarea id="jsCode" rows="5" class="textArea_description" placeholder="Nhập mã JavaScript ở đây"></textarea>
                </div>
                <div class="form-btn">
                    <button type="submit">Chạy Code</button>
                </div>
            </form>
        </div>
        <div class="col-7">
            <h2>Kết Quả:</h2>
            <iframe id="resultFrame" style="width: 100%; height: 758px; border: 1px solid #ccc;"></iframe>
        </div>
    </div>
</div>

<script>
document.getElementById('codeForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const htmlCode = document.getElementById('htmlCode').value;
    const cssCode = `<style>${document.getElementById('cssCode').value}</style>`;
    const jsCode = `<script>${document.getElementById('jsCode').value}<\/script>`;

    const resultFrame = document.getElementById('resultFrame');
    const result = resultFrame.contentWindow.document;

    result.open();
    result.write(htmlCode + cssCode + jsCode);
    result.close();
});
</script>

@endsection
