@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Faq</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Item</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.faqs.update', ['faq' => $faq]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ $faq->question }}'>
                    </div>

                    <div class="form-group">
                        <label>Short Answer</label>
                        <input type='text' class='form-control' placeholder='Short Answer' name='answer'
                            value='{{ $faq->answer }}'>
                    </div>

                    <div class="form-group">
                        <label>Show at home page</label>
                        <select type='text' class='form-control' name='show_on_home_page'>
                            <option value="1" {{ $faq->show_on_home_page === 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $faq->show_on_home_page === 0 ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1" {{ $faq->status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $faq->status === 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
