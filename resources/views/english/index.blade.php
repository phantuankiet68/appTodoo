@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="japanese-container">
        <div class="japanese-container-left">
            <h4>All lessons</h4>
            <ul>
                <li><a href="#" onclick="showLesson('lesson1')">Bài 1: Giới thiệu bản thân</a></li>
                <li><a href="#" onclick="showLesson('lesson2')">Bài 2: Giới thiệu về một ngày làm việc của bạn</a></li>
                <li><a href="#" onclick="showLesson('lesson3')">Bài 3: Giới thiệu về sở thích của bạn</a></li>
            </ul>
        </div>
        <div class="japanese-container-right">
            <div class="error-content lesson1">
                <div class="error-content-left">
                    <div class="imageerror">
                        <img src="./assets/images/user.jpg" alt="">
                    </div>
                    <p>私の名前はファン・トゥアン・キエットです。2000年生まれで、出身はベンチェーです。</p>
                </div>
                <div class="error-content-right">
                    <div class="tab">
                        <button class="tablinks active" onclick="openTab(event, 'Tab1')">Từ vựng</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')">Ngữ pháp</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab3')">Kiểm Tra</button>
                    </div>
                
                    <div id="Tab1" class="tabcontent" style="display: block;">
                        <div class="listFormVocalory">
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formVocalory">
                                <h4>Từ vựng</h4>
                                <p>nghĩa của từ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div id="Tab2" class="tabcontent">
                        <div class="listFormGrammar">
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            <div class="formGrammar">
                                <h4>うちに Vru N-no A(na)/A(i)  </h4>
                                <p>Trong khi, Trong lúc,Trong lúc đang (Mang tính tranh thủ)</p>
                                <p>VD: 日本にいるうちに一度富士山に登ってみたい</p>
                                <p>Trong lúc ở nhật, tôi muốn thử một lần leo núi Phú Sĩ</p>
                                <div class="jus-spaceween">
                                    <p>Cách phát âm</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Tab3" class="tabcontent">
                        <div class="tab3Container">
                            <h3 class="text-center"><b>Trắc nghiệm Tiếng nhật.</b></h1>
                            <form id="quiz-form" class="formQuiz">
                                <div class="question">
                                    <p>Câu 1: Từ "ありがとう" có nghĩa là gì?</p>
                                    <input type="radio" name="q1" value="a"> A. Tạm biệt<br>
                                    <input type="radio" name="q1" value="b"> B. Xin chào<br>
                                    <input type="radio" name="q1" value="c"> C. Cảm ơn<br>
                                    <input type="radio" name="q1" value="d"> D. Xin lỗi<br>
                                </div>
                                <div class="question">
                                    <p>Câu 2: "Konnichiwa" được sử dụng vào thời điểm nào trong ngày?</p>
                                    <input type="radio" name="q2" value="a"> A. Buổi sáng<br>
                                    <input type="radio" name="q2" value="b"> B. Buổi chiều<br>
                                    <input type="radio" name="q2" value="c"> C. Buổi tối<br>
                                    <input type="radio" name="q2" value="c"> D. Cả ngày<br>
                                </div>
                                <div class="question">
                                    <p>Câu 3: Hán tự nào sau đây có nghĩa là "nhật" trong từ "Nhật Bản" (日本)?</p>
                                    <input type="radio" name="q3" value="a"> A. 日<br>
                                    <input type="radio" name="q3" value="b"> B. 本<br>
                                    <input type="radio" name="q3" value="c"> C. 月<br>
                                    <input type="radio" name="q3" value="c"> D. 火<br>
                                </div>
                                <div class="question">
                                    <p>Câu 4: Trong tiếng Nhật, động từ "食べる" có nghĩa là:</p>
                                    <input type="radio" name="q4" value="a"> A. Uống<br>
                                    <input type="radio" name="q4" value="b"> B. Ăn<br>
                                    <input type="radio" name="q4" value="c"> C. Ngủ<br>
                                    <input type="radio" name="q4" value="d"> D. Chạy<br>
                                </div>
                                <div class="question">
                                    <p>Câu 5: Trợ từ nào sau đây được dùng để chỉ tân ngữ trong câu?</p>
                                    <input type="radio" name="q5" value="a"> A. は (wa)<br>
                                    <input type="radio" name="q5" value="b"> B. が (ga)<br>
                                    <input type="radio" name="q5" value="c"> C. を (wo)<br>
                                    <input type="radio" name="q5" value="d"> D. で (de)<br>
                                </div>
                                <div class="question">
                                    <p>Câu 6: "Sumimasen" trong tiếng Nhật có nghĩa là:</p>
                                    <input type="radio" name="q6" value="a"> A. Xin lỗi<br>
                                    <input type="radio" name="q6" value="b"> B. Cảm ơn<br>
                                    <input type="radio" name="q6" value="c"> C. Xin chào<br>
                                    <input type="radio" name="q6" value="d"> D. Tạm biệt<br>
                                </div>
                                <div class="question">
                                    <p>Câu 7: Cụm từ "お元気ですか" (Ogenki desu ka?) có nghĩa là gì?</p>
                                    <input type="radio" name="q7" value="a"> A. Bạn đang làm gì?<br>
                                    <input type="radio" name="q7" value="b"> B. Bạn khỏe không?<br>
                                    <input type="radio" name="q7" value="c"> C. Bạn từ đâu đến?<br>
                                    <input type="radio" name="q7" value="d"> D. Bạn đang đi đâu?<br>
                                </div>
                                <div class="question">
                                    <p>Câu 8: Động từ "見る" trong tiếng Nhật có nghĩa là gì?</p>
                                    <input type="radio" name="q8" value="a"> A. Chơi<br>
                                    <input type="radio" name="q8" value="b"> B. Đọc<br>
                                    <input type="radio" name="q8" value="c"> C. Nghe<br>
                                    <input type="radio" name="q8" value="d"> D. Nhìn<br>
                                </div>
                                <div class="question">
                                    <p>Câu 9: Từ "ねこ" (neko) trong tiếng Nhật có nghĩa là gì?</p>
                                    <input type="radio" name="q9" value="a"> A. Con chó<br>
                                    <input type="radio" name="q9" value="b"> B. Con mèo<br>
                                    <input type="radio" name="q9" value="c"> C. Con cá<br>
                                    <input type="radio" name="q9" value="d"> D. Con thỏ<br>
                                </div>
                                <div class="question">
                                    <p>Câu 10: Hán tự nào sau đây có nghĩa là "người"?</p>
                                    <input type="radio" name="q10" value="a"> A. 人<br>
                                    <input type="radio" name="q10" value="b"> B. 山<br>
                                    <input type="radio" name="q10" value="c"> C. 水<br>
                                    <input type="radio" name="q10" value="d"> D. 車<br>
                                </div>
                                <div class="submitBtn">
                                    <button type="button" onclick="checkAnswers()">Nộp</button>
                                    <div id="result"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lesson-content lesson2" style="display:none;">
                Bài 2: Giới thiệu về một ngày làm việc của bạn.
            </div>
            <div class="lesson-content lesson3" style="display:none;">
                Bài 3: Giới thiệu về sở thích của bạn
            </div>
        </div>
    </div>
</div>
@endsection