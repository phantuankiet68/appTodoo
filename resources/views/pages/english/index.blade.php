@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="english-left">
        <div class="english-left-vocabulary">
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
                <p>This software will enhance the performance of your computer.</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
            <div class="english-left-vocabulary-item">
                <p>Enhance  (/ɪnˈhæns/ (v))</p>
                <p>Cải thiện, nâng cao</p>
            </div>    
        </div>
        <div class="english-left-passage">

        </div>
    </div>
    <div class="english-right">
        <div class="english-right-top">
            <button>Đoạn văn</button>
            <button>Học từ vựng</button>
            <button>Học cấu trúc</button>
            <button>Kiểm tra đoạn văn</button>
            <button>Kiểm tra từ vựng</button>
            <button>Kiểm tra cấu trúc</button>
        </div>
        <div class="w-full mt-10">
            <input type="text" name="url" class="w-full input"  placeholder="URL:"/> 
        </div>
        <div class="english-right-body">
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
            <a href="">Bài 1: Làm quen với bài mới</a>
        </div>
    </div>
</div>

<div class="fab-container">
    <button class="fab main-fab" id="fabMain">+</button>
    <div class="fab-menu">
        <a href="" class="fab fab-item">📄</a>
        <a href="" class="fab fab-item">⚙️</a>
        <a href="{{ route('get.index_add_vocabulary')}}" class="fab fab-item">➕</a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const fabMain = document.getElementById("fabMain");
        const fabMenu = document.querySelector(".fab-menu");

        fabMain.addEventListener("click", () => {
            fabMenu.classList.toggle("openfad");
        });
    });
</script>

@endsection
