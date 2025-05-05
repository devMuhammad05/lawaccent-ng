@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Quiz</h1>
        </div>

        <form action="{{ route('admin.quizzes.store') }}" method="POST">
            @csrf

            <!-- Quiz Info -->
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Create Quiz</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Quiz Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter quiz title" required>
                    </div>

                    <div class="form-group">
                        <label>Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" placeholder="Enter sub title" required>
                    </div>

                    <div class="form-group">
                        <label>Description (optional)</label>
                        <textarea name="description" class="form-control" rows="3"
                            placeholder="Enter quiz description"></textarea>
                    </div>


                    <div class="form-group">
                        <label class="form-control">Why Take quiz (optional)</label>
                        <textarea class="summernote" name="why_take_quiz">{{ old('why_take_quiz', "
                                <p>
                                Understanding legal risk is the first step toward protecting
                                your <br />
                                interests.
                                </p>

                                <p>Our short, interactive quizzes can help you:</p>
                                <ul>
                                <li>
                                    ✅ Identify areas where your business or personal life may be
                                    <br />
                                    legally vulnerable
                                </li>
                                <li>
                                    ✅ Learn key concepts in employment law, contracts,
                                    compliance, <br />
                                    and more
                                </li>
                                <li>✅ Prepare for meetings with lawyers or regulators</li>
                                <li>✅ Avoid costly legal mistakes</li>
                                </ul>

                                <p>
                                Each quiz takes just takes a few minutes and provides immediate
                                <br />
                                feedback, with helpful insights and next steps.
                                </p>") }}

                            </textarea>
                    </div>

                    <hr>

                    <!-- Questions -->
                    <div id="questions-wrapper">
                        <h5>Questions</h5>
                        <div class="question-block mb-4 border p-3 rounded" data-index="0">
                            <h6 class="question-title">Question 1</h6>

                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" name="questions[0][text]" class="form-control"
                                    placeholder="Enter question" required>
                            </div>

                            <div class="options-wrapper">
                                <h6>Options</h6>
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="form-group d-flex">
                                        <input type="text" name="questions[0][options][{{ $i }}][text]"
                                            class="form-control me-2" placeholder="Option text" required>
                                        <label class="me-2 mt-2">Correct?</label>
                                        <input type="radio" name="questions[0][correct_option]" value="{{ $i }}"
                                            class="form-check-input mt-2" required>
                                    </div>
                                @endfor

                                <div class="form-group">
                                    <label>Answer Explanation</label>
                                    <input type="text" name="questions[0][explanation]" class="form-control" placeholder="Enter explanation" required>

                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="add-question" class="btn mb-4 text-white"
                        style="background-color: rgb(223, 149, 45)">+ Add Question</button>

                    <br>

                    <button type="submit" class="btn btn-primary py-2 px-3">Create Quiz</button>
                </div>
            </div>
        </form>
    </section>


    <script>
        let questionIndex = 1;

        document.getElementById('add-question').addEventListener('click', function () {
            const wrapper = document.getElementById('questions-wrapper');

            let html = `
                <div class="question-block mb-4 border p-3 rounded" data-index="${questionIndex}">
                    <h6 class="question-title">Question ${questionIndex + 1}</h6>

                    <div class="form-group">
                        <label>Question</label>
                        <input type="text" name="questions[${questionIndex}][text]" class="form-control" placeholder="Enter question" required>
                    </div>

                    <div class="options-wrapper">
                        <h6>Options</h6>
                        ${[0, 1, 2, 3].map(i => `
                            <div class="form-group d-flex">
                                <input type="text" name="questions[${questionIndex}][options][${i}][text]" class="form-control me-2" placeholder="Option text" required>
                                <label class="me-2 mt-2">Correct?</label>
                                <input type="radio" name="questions[${questionIndex}][correct_option]" value="${i}" class="form-check-input mt-2" required>
                            </div>
                        `).join('')}
                    </div>

                    <div class="form-group">
                        <label>Answer Explanation</label>
                        <input type="text" name="questions[${questionIndex}][explanation]" class="form-control" placeholder="Enter explanation" required>
                    </div>
                </div>
            `;

            wrapper.insertAdjacentHTML('beforeend', html);
            questionIndex++;
        });
    </script>



@endsection
