@extends('layouts.frontend')
@push('title', 'Login')
@push('meta')
@endpush
@push('css')
@endpush

@section('content')
<style>
    .input-password-wrap .password-icons.lock .eye-unlock {
	display: block;
}
</style>
    <!-- Breadcrumb Area Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-area mt-3 mb-30px wow animate__fadeInUp" data-wow-delay=".1s">
                        <h1 class="al-title-42px text-center mb-20px">{{ get_phrase('Login') }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb fsh-breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ get_phrase('Home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ get_phrase('Login') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <section>
        <div class="container">
            <div class="row gx-20px gy-30px mb-100px wow animate__fadeInUp" data-wow-delay=".2s">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-5 col-md-8 mt-20px">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label fsh-form-label">{{ get_phrase('Email') }}</label>
                                <input type="text" class="form-control fsh-form-control" id="email" name="email" placeholder="{{ get_phrase('Enter your email address') }}">
                            </div>
                            <div class="mb-20px">
                                <label for="password" class="form-label fsh-form-label">{{ get_phrase('Password') }}</label>
                                <div class="input-password-wrap">
                                    <div class="password-icons lock toggle-password" data-toggle=".password-field1" style="cursor:pointer;">
                                        <img class="eye-lock" src="{{ asset('assets/frontend/fashion/images/image-icons/eye-slash-gray-20.svg') }}" alt="">
                                        <img class="eye-unlock d-none" src="{{ asset('assets/frontend/fashion/images/image-icons/eye-gray-20.svg') }}" alt="">
                                    </div>

                                    <input type="password" class="form-control fsh-form-control password-field1" name="password" id="user-password1" placeholder="{{ get_phrase('Enter your Password') }}">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center gap-3 flex-wrap justify-content-between">
                                    <div class="form-check form-checkbox">
                                        <input class="form-check-input form-checkbox-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label form-checkbox-label" for="flexCheckDefault">
                                            {{ get_phrase('Rememebr me') }}
                                        </label>
                                    </div>
                                    {{-- <a href="javascript:;" class="al-title-14px text-link" onclick="load_view('{{ route('view', ['path' => 'auth.forgot-password']) }}', '#formModal .modal-body')">{{ get_phrase('Forgot Password') }} ?</a> --}}
                                </div>
                            </div>
                            <button type="submit" class="btn fsh-btn-dark w-100 mb-12px">{{ strtoupper(get_phrase('LOG IN')) }}</button>

                            {{-- <a onclick="load_view('{{ route('view', ['path' => 'auth.register']) }}', '#formModal .modal-body')" class="btn fsh-btn-outline-secondary w-100">{{ strtoupper(get_phrase('CREATE ACCOUNT')) }}</a> --}}
                           

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')

<script type="text/javascript">
"use strict";
$(document).ready(function () {
    $(".toggle-password").click(function () {
        $(this).toggleClass("eye-open");
        var input = $($(this).data("toggle"));
        var eyeOpen = $(this).find(".eye-unlock");
        var eyeClose = $(this).find(".eye-lock");

        if (input.attr("type") === "password") {
            input.attr("type", "text");
            eyeOpen.removeClass("d-none");
            eyeClose.addClass("d-none");
        } else {
            input.attr("type", "password");
            eyeOpen.addClass("d-none");
            eyeClose.removeClass("d-none");
        }
    });
});
</script>

@endpush
