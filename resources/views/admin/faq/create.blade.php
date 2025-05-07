@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Faq</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Faq</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.faqs.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Question</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ old('question') }}'>
                    </div>

                    <div class="form-group">
                        <label>Answer</label>
                        <input type='text' class='form-control' placeholder='Answer' name='answer'
                            value='{{ old('answer') }}'>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
