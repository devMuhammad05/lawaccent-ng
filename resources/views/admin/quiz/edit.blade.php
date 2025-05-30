@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Quiz</h1>
        </div>

        <form action="{{ route('admin.quizzes.update', $quiz) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Quiz Info -->
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Edit Quiz</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Quiz Title</label>
                        <input type="text" name="title" value="{{ $quiz->title }}" class="form-control" placeholder="Enter quiz title" required>
                    </div>

                    <div class="form-group">
                        <label>Sub Title</label>
                        <input type="text" name="sub_title" value="{{ $quiz->sub_title }}" class="form-control" placeholder="Enter sub title" required>
                    </div>

                    <div class="form-group">
                        <label>Description (optional)</label>
                        <textarea name="description" class="form-control" rows="3">{{ $quiz->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-control">Why Take quiz (optional)</label>
                        <textarea class="summernote" name="why_take_quiz">
                            {{ old('why_take_quiz', $quiz->why_take_quiz) }}
                        </textarea>
                    </div>

                    <hr>

                    <div id="questions-wrapper">
                        <h5>Questions</h5>

                        @foreach ($quiz->questions as $qIndex => $question)
                            <div class="question-block mb-4 border p-3 rounded" data-index="{{ $qIndex }}">
                                <h6 class="question-title">Question {{ $qIndex + 1 }}</h6>

                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="questions[{{ $qIndex }}][text]" value="{{ $question->text }}" class="form-control" placeholder="Enter question" required>
                                </div>

                                <div class="options-wrapper">
                                    <h6>Options</h6>
                                    @foreach ($question->options as $oIndex => $option)
                                        <div class="form-group d-flex">
                                            <input type="text" name="questions[{{ $qIndex }}][options][{{ $oIndex }}][text]" value="{{ $option->text }}" class="form-control me-2" placeholder="Option text" required>

                                            <label class="me-2 mt-2">Correct?</label>
                                            <input type="radio" name="questions[{{ $qIndex }}][correct_option]" value="{{ $oIndex }}" class="form-check-input mt-2"
                                                   {{ $option->is_correct ? 'checked' : '' }} required>
                                        </div>

                                    <div class="form-group">
                                        <input type="text" name="questions[0][explanations][{{ $oIndex }}][text]"
                                            class="form-control" value="{{ $option->explanation }}" placeholder="Option explanation" required>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1" @selected($quiz->status === 1)>Active</option>
                            <option value="0" @selected($quiz->status === 0)>Inactive</option>
                        </select>
                    </div>

                    <button type="button" id="add-question" class="btn mb-4 text-white" style="background-color: rgb(223, 149, 45)">+ Add Question</button>

                    <br>

                    <button type="submit" class="btn btn-primary py-2 px-3">Update Quiz</button>
                </div>
            </div>
        </form>
    </section>


    <script>
        let questionIndex = {{ count($quiz->questions) }};

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

                            <div class="form-group">
                                <input type="text" name="questions[${questionIndex}][explanations][${i}][text]" class="form-control" placeholder="Option explanation" required>
                            </div>
                        `).join('')}
                    </div>
                </div>`;

            wrapper.insertAdjacentHTML('beforeend', html);
            questionIndex++;
        });
    </script>


@endsection
