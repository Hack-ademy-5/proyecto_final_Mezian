
@extends('layouts.app')
@section('content')


<div class="container-fluid align-items-center text-center">
    <div class="row mb-5 pb-5">
        <div class="col-12">
        <div class="d-flex flex-column align-items-center ">
            <div class="form-content">
                <!--FORM TITLE -->
                <div class="section-title">
                    <h2 class="form-title space-around">{{__('ui.login')}}
                    </h2>
                    <!-- <p>Ut possimus qui ut temporibus culpa velit autem.</p> -->
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!--FORM FIELDS -->
                <form action="/login" method="POST" role="form" class="php-email-form">
                    @csrf
                    <!--Email -->
                    <div class="form-field form-field-edit space-around my-2">
                        <input type="email" name="email" id="email" class="form-control forms_field-input"
                            placeholder="{{__('ui.email')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <!--Password -->
                    <div class="form-field form-field-edit  space-around my-2">
                        <input type="password" name="password" id="password" class="form-control forms_field-input"
                            placeholder="{{__('ui.password')}}">
                        <div class="validate"></div>
                    </div>
                    <!--Button-Login-->
                    <button type="submit" class="btn btn-dark text-center space-around my-2">
                    {{__('ui.log-in')}}
                    </button>
                </form>
            </div>
            <div class="div form-link d-flex ">
                <p class="text"> {{__('ui.log-in-msg')}} </p>
                <a class="text-reset text-decoration-none ms-2" href="{{route('register')}}"><u> {{__('ui.register')}}</u></a>
            </div>
        </div>
        
    </div>
</div>

</div>
</div>
@endsection