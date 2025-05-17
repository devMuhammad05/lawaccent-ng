@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Assessments</h1>
        </div>

        <form action="{{ route('admin.assessments.update', $assessment) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Assessment Info -->
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Edit Assessment</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Assessment Title</label>
                        <input type='text' class='form-control' placeholder='Enter assessment title' name='title'
                            value='{{ old('title', $assessment->title) }}'>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type='text' class='form-control' placeholder='Enter description' name='description'
                            value='{{ old('description', $assessment->description) }}' required>
                    </div>

                    {{-- <div class="form-group">
                        <label>Thumbnail</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                        </div>
                    </div> --}}

                    <hr>

                    <!-- Questions -->
                    <div id="questions-wrapper">
                        <h5>Questions</h5>


                        @foreach ($assessment->questions as $qIndex => $question)
                        <div class="question-block mb-4 border p-3 rounded" data-index="{{ $qIndex }}">
                            <h6 class="question-title">Question {{ $qIndex + 1 }}</h6>

                                <div class="form-group">
                                    <label>Head</label>
                                    <input type="text" name="questions[{{ $qIndex }}][head]" value="{{ $question->head }}"  class="form-control"
                                        placeholder="Enter question head" required>
                                </div>

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
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1" @selected($assessment->status === 1)>Active</option>
                            <option value="0" @selected($assessment->status === 0)>Inactive</option>
                        </select>
                    </div>

                    <button type="button" id="add-question" class="btn mb-4 text-white"
                        style="background-color: rgb(223, 149, 45)">+ Add Question</button>

                    <br>

                    <button type="submit" class="btn btn-primary py-2 px-3">Update Assessment</button>
                </div>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script>
        let questionIndex = 1;

        document.getElementById('add-question').addEventListener('click', function () {
            const wrapper = document.getElementById('questions-wrapper');

            let html = `
                <div class="question-block mb-4 border p-3 rounded" data-index="${questionIndex}">
                    <h6 class="question-title">Question ${questionIndex + 1}</h6>

                    <div class="form-group">
                        <label>Head</label>
                        <input type="text" name="questions[${questionIndex}][head]" class="form-control"
                            placeholder="Enter question head" required>
                    </div>

                    <div class="form-group">
                        <label>Question</label>
                        <input type="text" name="questions[${questionIndex}][text]" class="form-control" placeholder="Enter question" required>
                    </div>

                    <div class="options-wrapper">
                        <h6>Options</h6>
                        ${[0, 1].map(i => `
                            <div class="form-group d-flex">
                                <input type="text" name="questions[${questionIndex}][options][${i}][text]" class="form-control me-2" placeholder="Option text" required>
                                <label class="me-2 mt-2">Correct?</label>
                                <input type="radio" name="questions[${questionIndex}][correct_option]" value="${i}" class="form-check-input mt-2" required>
                            </div>
                        `).join('')}
                    </div>

                </div>
            `;

            wrapper.insertAdjacentHTML('beforeend', html);
            questionIndex++;
        });
    </script>
@endpush
