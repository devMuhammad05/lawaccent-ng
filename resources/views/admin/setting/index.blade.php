@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Settings</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>All Settings</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#general-setting"
                                    role="tab" aria-controls="home" aria-selected="true">Recapcha settings</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="tab-content no-padding" id="myTab2Content">
                            <div class="tab-pane fade show active" id="general-setting" role="tabpanel"
                                aria-labelledby="home-tab4">
                                <div class="border card-body">
                                    <form action="{{ route('admin.site-settings.update', $site_setting) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select type='text' class='form-control' name='recaptcha_status'>
                                                <option @selected($site_setting->recaptcha_status === 1) value="1">Active</option>
                                                <option @selected($site_setting->recaptcha_status === 0) value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 col-sm-12 col-md-12">
                        <ul class="nav nav-pills flex-column" id="myTab5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#general-setting"
                                    role="tab" aria-controls="home" aria-selected="true">Cookies consent banner settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="tab-content no-padding" id="myTab3Content">
                            <div class="tab-pane fade show active" id="general-setting" role="tabpanel"
                                aria-labelledby="home-tab4">
                                <div class="border card-body">
                                    <form action="{{ route('admin.site-settings.update', $site_setting) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select type='text' class='form-control' name='display_cookies_consent_banner'>
                                                <option @selected(@$site_setting->display_cookies_consent_banner == 1) value="1">Active</option>
                                                <option @selected(@$site_setting->display_cookies_consent_banner == 0) value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
