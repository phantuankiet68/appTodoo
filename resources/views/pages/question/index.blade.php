@extends('page')
@section('title', 'Home Page')
@section('content')
<div class="question">
    <div class="question-left">
        @foreach ($question_category as $item)
            <a href="javascript:void(0);" class="category-link" data-id="{{ $item->id }}">
                <i class="fas fa-circle-question"></i> {{ $item->name }}
            </a>
        @endforeach
    </div>
    <div class="question-right">
        <div class="question-right-top">
            <input type="text" id="search-question" placeholder="🔍 Tìm kiếm câu hỏi..." class="input w-full p-10">
        </div>
        <div class="question-right-body" id="question-list">
            @foreach ($questions as $item)
            <div class="question-right-item">
                <div class="accordion-item">
                    <div class="accordion-title" data-tab="{{ $item->id }}">
                        <h3>✅ {{ $item->question }} <i class="fa fa-chevron-down"></i></h3>
                    </div>
                    <div class="accordion-content" id="{{ $item->id }}">
                        <p>💬 Trả lời: {!! $item->answer !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</div>
<div class="fab-container">
    <button class="fab main-fab" id="fabMain"><i class="fa-solid fa-list"></i></button>
    <div class="fab-menu">
        <a href="" class="fab fab-item">📄</a>
        <a href="" class="fab fab-item">⚙️</a>
        <a href="{{ route('questions.add')}}" class="fab fab-item">+</a>
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

    document.addEventListener("DOMContentLoaded", function () {
        let accordionTitles = document.querySelectorAll(".accordion-title");

        accordionTitles.forEach(title => {
            title.addEventListener("click", function () {
                let accordionItem = this.getAttribute("data-tab");
                let content = document.getElementById(accordionItem);

                content.classList.toggle("active-content");

                document.querySelectorAll(".accordion-content").forEach(item => {
                    if (item.id !== accordionItem) {
                        item.classList.remove("active-content");
                    }
                });

                let icon = this.querySelector("i");
                icon.classList.toggle("chevron-top");

                document.querySelectorAll(".accordion-title i").forEach(i => {
                    if (i !== icon) {
                        i.classList.remove("chevron-top");
                    }
                });
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    const categoryLinks = document.querySelectorAll('.category-link');
    const questionRightBody = document.querySelector('.question-right-body');

    categoryLinks.forEach(link => {
        link.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-id');

            fetch(`/v1/questions/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    questionRightBody.innerHTML = ""; // Xóa nội dung cũ

                    if (!data.success) {
                        questionRightBody.innerHTML = `<p class="text-center text-gray-500">${data.message}</p>`;
                        return;
                    }

                    data.questions.forEach(item => {
                        const questionItem = `
                            <div class="question-right-item">
                                <div class="accordion-item">
                                    <div class="accordion-title" data-tab="${item.id}">
                                        <h3>✅ ${item.question} <i class="fa fa-chevron-down"></i></h3>
                                    </div>
                                    <div class="accordion-content" id="${item.id}" style="display: none;">
                                        <p>💬 Trả lời: ${item.answer}</p>
                                    </div>
                                </div>
                            </div>`;
                        questionRightBody.innerHTML += questionItem;
                    });

                    addAccordionFunctionality();
                })
                .catch(error => console.error('Lỗi:', error));
        });
    });

    function addAccordionFunctionality() {
        document.querySelectorAll('.accordion-title').forEach(title => {
            title.addEventListener('click', function () {
                const content = document.getElementById(this.getAttribute('data-tab'));
                content.style.display = (content.style.display === 'block') ? 'none' : 'block';
            });
        });
    }
});

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $("#search-question").on("keyup", function () {
        let searchQuery = $(this).val();
        $.ajax({
            url: "{{ route('questions.index') }}",
            type: "GET",
            data: { search: searchQuery },
            success: function (data) {
                let questionList = $("#question-list");
                questionList.empty();

                if (data.length === 0) {
                    questionList.html("<p>🚫 Không tìm thấy kết quả!</p>");
                    return;
                }

                $.each(data, function (index, item) {
                    let questionHTML = `
                        <div class="question-right-item">
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="${item.id}">
                                    <h3>✅ ${item.question} <i class="fa fa-chevron-down"></i></h3>
                                </div>
                                <div class="accordion-content show" id="${item.id}">
                                    <p>💬 Trả lời: ${item.answer}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    questionList.append(questionHTML);
                });

            },
            error: function (xhr, status, error) {
                console.error("Lỗi khi tìm kiếm:", error);
            }
        });
    });
});
</script>


@endsection
