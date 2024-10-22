

















// learn more home test learn_more_test

function reloadPage(event) {
    event.preventDefault();
    window.location.reload();
}

function changeListValue() {
    let index = 0;
    while (document.getElementById('vocabulary_' + index) !== null) {
        let vocabularyInput = document.getElementById('vocabulary_' + index);
        let meaningOfVocabularyInput = document.getElementById('meaning_of_vocabulary_' + index);
        let exampleInput = document.getElementById('example_' + index);
        let meaningOfExampleInput = document.getElementById('meaning_of_example_' + index);

        // Lấy giá trị từ thuộc tính data-* để hiển thị lại giá trị ban đầu
        let originalVocabulary = vocabularyInput.getAttribute('data-vocabulary');
        let originalMeaningOfVocabulary = meaningOfVocabularyInput.getAttribute('data-meaning-of-vocabulary');
        let originalExample = exampleInput.getAttribute('data-example');
        let originalMeaningOfExample = meaningOfExampleInput.getAttribute('data-meaning-of-example');

        // Hiển thị lại giá trị ban đầu
        vocabularyInput.value = originalVocabulary;
        meaningOfVocabularyInput.value = originalMeaningOfVocabulary;
        exampleInput.value = originalExample;
        meaningOfExampleInput.value = originalMeaningOfExample;

        index++; // Tăng chỉ mục cho vòng lặp tiếp theo
    }
}

function changeValue() {
    let index = 0;
    while (document.getElementById('vocabulary_' + index) !== null) {
        let vocabularyInput = document.getElementById('vocabulary_' + index);
        let meaningOfVocabularyInput = document.getElementById('meaning_of_vocabulary_' + index);
        let exampleInput = document.getElementById('example_' + index);
        let meaningOfExampleInput = document.getElementById('meaning_of_example_' + index);

        let originalVocabulary = vocabularyInput.getAttribute('data-vocabulary');
        let originalMeaningOfVocabulary = meaningOfVocabularyInput.getAttribute('data-meaning-of-vocabulary');
        let originalExample = exampleInput.getAttribute('data-example');
        let originalMeaningOfExample = meaningOfExampleInput.getAttribute('data-meaning-of-example');

        // Đảo ngược giá trị input (ẩn hoặc hiển thị giá trị ban đầu)
        if (vocabularyInput.value !== '') {
            vocabularyInput.value = ''; 
        } else {
            vocabularyInput.value = originalVocabulary; 
        }
        
        if (meaningOfVocabularyInput.value !== '') {
            meaningOfVocabularyInput.value = ''; 
        } else {
            meaningOfVocabularyInput.value = originalMeaningOfVocabulary; 
        }

        if (exampleInput.value !== '') {
            exampleInput.value = ''; 
        } else {
            exampleInput.value = originalExample; 
        }

        if (meaningOfExampleInput.value !== '') {
            meaningOfExampleInput.value = ''; 
        } else {
            meaningOfExampleInput.value = originalMeaningOfExample;
        }

        // Kiểm tra nếu cả bốn ô input đều trống
        if (
            vocabularyInput.value === '' &&
            meaningOfVocabularyInput.value === '' &&
            exampleInput.value === '' &&
            meaningOfExampleInput.value === ''
        ) {
            // Hiển thị lại giá trị của meaningOfVocabularyInput và meaningOfExampleInput
            meaningOfVocabularyInput.value = originalMeaningOfVocabulary;
            meaningOfExampleInput.value = originalMeaningOfExample;
        }

        index++; // Tăng chỉ mục cho vòng lặp tiếp theo
    }
}


document.addEventListener('DOMContentLoaded', function() {
    let index = 0;
    while(document.getElementById('vocabulary_' + index) !== null) {
        document.getElementById('vocabulary_' + index).value = '';
        document.getElementById('example_' + index).value = '';
        index++;
    }
});
document.addEventListener("DOMContentLoaded", function () {
    const hrefTests = document.querySelectorAll('.hrefTest');
    const totalItems = hrefTests.length;
    const itemsPerPage = 10; // Số lượng hrefTest hiển thị mỗi trang
    let currentPage = 0;

    function showPage(page) {
        // Tính toán chỉ số bắt đầu và kết thúc
        const start = page * itemsPerPage;
        const end = start + itemsPerPage;

        // Ẩn tất cả các hrefTest
        hrefTests.forEach((item, index) => {
            item.classList.remove('active');
            if (index >= start && index < end) {
                item.classList.add('active'); // Hiển thị các phần tử trong khoảng
            }
        });
    }

    // Thiết lập hiển thị trang đầu tiên
    showPage(currentPage);

    // Xử lý sự kiện cho nút next
    document.getElementById('nextBtn').addEventListener('click', () => {
        if (currentPage < Math.ceil(totalItems / itemsPerPage) - 1) {
            currentPage++;
            showPage(currentPage);
        }
    });

    // Xử lý sự kiện cho nút prev
    document.getElementById('prevBtn').addEventListener('click', () => {
        if (currentPage > 0) {
            currentPage--;
            showPage(currentPage);
        }
    });
});