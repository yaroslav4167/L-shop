{{-- Layout and design by WhileD0S <https://vk.com/whiled0s>  --}}
@extends('layouts.auth')

@section('title')
    Вход
@endsection

@section('content')
    <!-- Sign in user page -->
    <div class="full-h flex-center pd-v-form">
        <div class="card no-pdh z-depth-4 col-xl-4 col-md-6 col-11">

            <div class="card-block" id="sign-in" data-url="{{ route('signin') }}" data-redirect="{{ route('servers') }}">
                <div class="card-header d_orange text-center white-text z-depth-2">
                    <h1>Вход<i class="fa fa-sign-in fa-lg fa-right"></i></h1>
                </div>
                @if($onlyForAdmins or $downForMaintenance)
                    <div class="alert alert-info text-center">
                        Вход только для администраторов
                    </div>
                @endif
                <div class="md-form">
                    <i class="fa fa-user fa-lg prefix"></i>
                    <input type="text" id="si-username" class="form-control">
                    <label for="si-username">Имя пользователя</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-unlock-alt fa-lg prefix"></i>
                    <input type="password" id="si-password" class="form-control">
                    <label for="si-password">Пароль</label>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-warning btn-lg" id="btn-sign-in">Войти</button>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    @if($enable_signup and !$onlyForAdmins)
                        <div class="col-12 text-center">
                            <a href="signup"><i class="fa fa-plus fa-left"></i> Регистрация</a>
                        </div>
                    @endif
                    @if(access_mode_any())
                        <div class="col-12 text-center">
                            <a href="servers"><i class="fa fa-shopping-cart"></i> Покупка без авторизации</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection
