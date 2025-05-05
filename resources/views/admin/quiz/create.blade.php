@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Quiz</h1>
        </div>
        {{-- <div class="card card-primary">
            <div class="card-header">
                <h4>Create Quiz</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.faqs.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Question</label>
                        <input type='text' class='form-control' placeholder='Question' name='question' value='{{ old('
                            question') }}'>
                    </div>

                    <div class="form-group">
                        <label>Answer</label>
                        <input type='text' class='form-control' placeholder='Answer' name='answer' value='{{ old(' answer')
                            }}'>
                    </div>

                    <div class="form-group">
                        <label>Show at home page</label>
                        <select type='text' class='form-control' name='show_on_home_page'>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>



            </div>
        </div> --}}

        {{-- <form action="{{ route('admin.quizzes.store') }}" method="POST">
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
                        <input type="text" name="sub_title" class="form-control" placeholder="Enter quiz title" required>
                    </div>

                    <div class="form-group">
                        <label>Description (optional)</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
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
                                        <input type="checkbox" name="questions[0][options][{{ $i }}][is_correct]" value="1"
                                            class="form-check-input mt-2">
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <button type="button" id="add-question" class="btn mb-4 text-white" style="background-color: rgb(223, 149, 45)">+ Add Question</button>

                    <br>

                    <button type="submit" class="btn btn-primary py-2 px-3">Create Quiz</button>
                </div>
            </div>
        </form> --}}

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
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>

                    <hr>

                    <!-- Questions -->
                    <div id="questions-wrapper">
                        <h5>Questions</h5>
                        <div class="question-block mb-4 border p-3 rounded" data-index="0">
                            <h6 class="question-title">Question 1</h6>

                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" name="questions[0][text]" class="form-control" placeholder="Enter question" required>
                            </div>

                            <div class="options-wrapper">
                                <h6>Options</h6>
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="form-group d-flex">
                                        <input type="text" name="questions[0][options][{{ $i }}][text]" class="form-control me-2" placeholder="Option text" required>
                                        <label class="me-2 mt-2">Correct?</label>
                                        <input type="radio" name="questions[0][correct_option]" value="{{ $i }}" class="form-check-input mt-2" required>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <button type="button" id="add-question" class="btn mb-4 text-white" style="background-color: rgb(223, 149, 45)">+ Add Question</button>

                    <br>

                    <button type="submit" class="btn btn-primary py-2 px-3">Create Quiz</button>
                </div>
            </div>
        </form>
    </section>


    {{-- <script>
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
                    <input type="checkbox" name="questions[${questionIndex}][options][${i}][is_correct]" value="1" class="form-check-input mt-2">
                </div>
            `).join('')}
        </div>
    </div>`;


            wrapper.insertAdjacentHTML('beforeend', html);
            questionIndex++;
        });
    </script> --}}

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
                </div>`;

            wrapper.insertAdjacentHTML('beforeend', html);
            questionIndex++;
        });
    </script>


@endsection
