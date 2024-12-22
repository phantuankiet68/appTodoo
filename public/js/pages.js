

function makeGrid(theSidePad, theTopPad, w, h){

var xAxis = d3.svg.axis()
    .scale(timeScale)
    .orient('bottom')
    .ticks(d3.time.days, 1)
    .tickSize(-h+theTopPad+20, 0, 0)
    .tickFormat(d3.time.format('%d %b'));

var grid = svg.append('g')
    .attr('class', 'grid')
    .attr('transform', 'translate(' +theSidePad + ', ' + (h - 50) + ')')
    .call(xAxis)
    .selectAll("text")  
            .style("text-anchor", "middle")
            .attr("fill", "#000")
            .attr("stroke", "none")
            .attr("font-size", 10)
            .attr("dy", "1em");
}

function vertLabels(theGap, theTopPad, theSidePad, theBarHeight, theColorScale){
  var numOccurances = new Array();
  var prevGap = 0;

  for (var i = 0; i < categories.length; i++){
    numOccurances[i] = [categories[i], getCount(categories[i], catsUnfiltered)];
  }

  var axisText = svg.append("g") //without doing this, impossible to put grid lines behind text
   .selectAll("text")
   .data(numOccurances)
   .enter()
   .append("text")
   .text(function(d){
    return d[0];
   })
   .attr("x", 10)
   .attr("y", function(d, i){
    if (i > 0){
        for (var j = 0; j < i; j++){
          prevGap += numOccurances[i-1][1];
         // console.log(prevGap);
          return d[1]*theGap/2 + prevGap*theGap + theTopPad;
        }
    } else{
    return d[1]*theGap/2 + theTopPad;
    }
   })
   .attr("font-size", 11)
   .attr("text-anchor", "start")
   .attr("text-height", 14)
   .attr("fill", function(d){
    for (var i = 0; i < categories.length; i++){
        if (d[0] == categories[i]){
        //  console.log("true!");
          return d3.rgb(theColorScale(i)).darker();
        }
    }
   });

}

//from this stackexchange question: http://stackoverflow.com/questions/1890203/unique-for-arrays-in-javascript
function checkUnique(arr) {
    var hash = {}, result = [];
    for ( var i = 0, l = arr.length; i < l; ++i ) {
        if ( !hash.hasOwnProperty(arr[i]) ) { //it works with objects! in FF, at least
            hash[ arr[i] ] = true;
            result.push(arr[i]);
        }
    }
    return result;
}

//from this stackexchange question: http://stackoverflow.com/questions/14227981/count-how-many-strings-in-an-array-have-duplicates-in-the-same-array
function getCounts(arr) {
    var i = arr.length, // var to loop over
        obj = {}; // obj to store results
    while (i) obj[arr[--i]] = (obj[arr[i]] || 0) + 1; // count occurrences
    return obj;
}

// get specific from everything
function getCount(word, arr) {
    return getCounts(arr)[word] || 0;
}
















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
    const itemsPerPage = 10;
    let currentPage = 0;

    function showPage(page) {
        const start = page * itemsPerPage;
        const end = start + itemsPerPage;

        // Ẩn tất cả các hrefTest
        hrefTests.forEach((item, index) => {
            item.classList.remove('active');
            if (index >= start && index < end) {
                item.classList.add('active');
            }
        });

        // Cập nhật trạng thái nút
        document.getElementById('prevBtn').disabled = page === 0;
        document.getElementById('nextBtn').disabled = end >= totalItems;
    }

    function handlePagination() {
        // Lắng nghe sự kiện click vào các nút điều hướng
        document.getElementById('prevBtn').addEventListener('click', function () {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });

        document.getElementById('nextBtn').addEventListener('click', function () {
            if ((currentPage + 1) * itemsPerPage < totalItems) {
                currentPage++;
                showPage(currentPage);
            }
        });
    }

    // Hiển thị trang đầu tiên
    showPage(currentPage);

    // Thêm sự kiện cho các nút
    handlePagination();
});