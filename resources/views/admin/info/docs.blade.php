{{-- Layout and design by WhileD0S <https://vk.com/whiled0s>  --}}
@extends('layouts.shop')

@section('title')
    Документация
@endsection

@section('content')
    <div id="content-container">
        <div class="z-depth-1 content-header text-center">
            <h1><i class="fa fa-book fa-left-big"></i>Документация</h1>
        </div>
        <div class="card card-block">
            <h4 class="card-title">Основные сведения по работе с системой</h4>
            <p class="card-text"></p>
            <div class="flex-row">
                <a href="{{ route('admin.info.docs.main', ['server' => $currentServer->id]) }}" class="btn btn-info">Читать</a>
            </div>
        </div>
        <div class="card card-block mt-2">
            <h4 class="card-title">Документация по API L - Shop</h4>
            <p class="card-text"></p>
            <div class="flex-row">
                <a href="{{ route('admin.info.docs.api', ['server' => $currentServer->id]) }}" class="btn btn-info">Читать</a>
            </div>
        </div>
        <div class="card card-block mt-2">
            <h4 class="card-title">Документация по CLI L - Shop</h4>
            <p class="card-text"></p>
            <div class="flex-row">
                <a href="{{ route('admin.info.docs.cli', ['server' => $currentServer->id]) }}" class="btn btn-info">Читать</a>
            </div>
        </div>
    </div>
@endsection
