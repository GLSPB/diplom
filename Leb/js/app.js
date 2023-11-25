let questionNum = 1;
let resultNum = 1;

$(document).on('click', '.addAnswer', function() {
    let question = $(this).data('question');
    let answer = $(this).data('answer');
    let answerBlock = $(this).parents('.answers').find('.answer-items');
    answer++;

    $(this).data('answer', answer);

    answerBlock.append(`
                        <div class="parent">
                              <div class="">
                                <label for="answer_text_${question}_${answer}" class="form-label">Ответ #${answer}</label>
                                <input type="text" name="answer_text_${question}_${answer}" id="answer_text_${question}_${answer}" class="form-control">
                              </div>
                              <div class="">
                                <label for="" class="form-label">Балл за ответ #${answer}</label>
                                <select id="inputState" name="answer_score_${question}_${answer}" id="answer_score_${question}_${answer}" class="form-control">
                                <option selected>0</option>
                                <option>1</option>
                                </select>
                              </div>
                        </div> 
                        
                        `);
});
$('.addQuestion').on('click', function() {
    questionNum++;
    let questionBlock = $('.question-items');

    questionBlock.append(`
                <div class="mt-4">
                    <label for="question_${questionNum}" class="form-label">Вопрос #${questionNum}</label>
                    <input type="text" name="question_${questionNum}" id="question_${questionNum}" class="form-control">
                    <div class="answers">
                        <div class="answer-items">
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-light border addAnswer" data-question="${questionNum}" data-answer="0">Добавить вариант ответа</button>
                        </div>
                    </div>
                </div>
                <hr>
                `);
});
