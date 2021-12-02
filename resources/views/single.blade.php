@extends('layouts.layout')
@section('title', 'Works')
@section('content')
<main class="works">
    @include('layouts.head')
    <div class="works__content">
        <div class="works__content__box">
            <h1>{{$work->title}}</h1>
            <div class="worksContent">
                <h2>言語</h2>
                <p>HTML, CSS(Sass)</p>
                <h2>詳細</h2>
                <p>{{$work->content}}</p>
                <div class="urlBtns">
                    <a class="siteUrl" href="{{$work->siteUrl}}">Site</a>
                    <a class="gitUrl" href="{{$work->gitUrl}}">Git</a>    
                </div>
            </div>
        </div>
        @include('layouts.category')
    </div>
</main>
@endsection