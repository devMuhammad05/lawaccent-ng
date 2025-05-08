@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Newsletters</h1>
        </div>
        <div class="card card-primary">


            <div class="card-header">
                <h4>Send Newsletter</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.newsletters.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Subject</label>
                        <input type='text' class='form-control' placeholder='Enter subject' name='subject'
                            value='{{ old('subject') }}'>
                    </div>


                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" style="width: 100%; height: 200px;">
                            {{ old('body') }}
                        </textarea>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Send</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        });
    </script>
@endpush
