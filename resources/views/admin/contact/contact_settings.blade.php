@extends('layouts.admin')
@push('title', get_phrase('Contact settings'))
@push('meta')
@endpush
@push('css')
@endpush
@section('content')



    <div class="row">
        <div class="col-md-7">
            <div class="ol-card p-4">
                <div class="ol-card-body">
                    <form action="{{ route('admin.contact.settings.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="contact_email" class="form-label ol-form-label">{{ get_phrase('Email') }}</label>
                            <input type="contact_email" value="{{ get_settings('contact_email') }}" name="contact_email" class="form-control ol-form-control" id="contact_email" placeholder="{{ get_phrase('Enter contact email') }}" aria-label="{{ get_phrase('Enter contact email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="contact_phone" class="form-label ol-form-label">{{ get_phrase('Phone') }}</label>
                            <input type="text" value="{{ get_settings('contact_phone') }}" name="contact_phone" class="form-control ol-form-control" id="contact_phone" placeholder="{{ get_phrase('Enter contact phone number') }}" aria-label="{{ get_phrase('Enter contact phone number') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="contact_message" class="form-label ol-form-label">{{ get_phrase('Write a short message') }}</label>
                            <textarea name="contact_message" class="form-control ol-form-control" id="contact_message" rows="4" placeholder="{{ get_phrase('Write a short message...') }}" required>{{ get_settings('contact_message') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="contact_address" class="form-label ol-form-label">{{ get_phrase('Address') }}</label>
                            <textarea name="contact_address" id="contact_address" class="form-control" required>{{ get_settings('contact_address') }}</textarea>
                        </div>


                       

                        <div class="mb-2">
                            <button class="btn ol-btn-primary">{{ get_phrase('Save changes') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
