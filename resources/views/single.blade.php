@extends('layouts.layout')
@section('title', 'Works')
@section('content')
<main class="works">
    @include('layouts.head')
    <div class="works__content">
        <div class="works__content__box">
            <h1>コツメカフェ</h1>
            <div class="worksContent">
                <h2>言語</h2>
                <p>HTML, CSS(Sass)</p>
                <div class="urlBtns">
                    <a class="siteUrl" href=""></a>
                    <a class="gitUrl" href=""></a>    
                </div>
            </div>
        </div>
        @include('layouts.category')
    </div>
</main>
@endsection