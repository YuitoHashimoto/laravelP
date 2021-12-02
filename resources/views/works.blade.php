@extends('layouts.layout')
@section('title', 'Works')
@section('content')
<main class="works">
    @include('layouts.head')
    <div class="works__content">
        <div class="works__content__box">
            @foreach($works as $work)
            <article class="works__content__box__art">
                <a href="/works/{{$work->id}}">
                    <div></div>
                    <p>{{$work->title}}</p>
                </a>
            </article>
            @endforeach
            <article class="works__content__box__art">
                <div></div>
                <p>Puzzle</p>
            </article>
            <article class="works__content__box__art">
                <div></div>
                <p>Puzzle</p>
            </article>
            <article class="works__content__box__art">
                <div></div>
                <p>Puzzle</p>
            </article>
            <article class="works__content__box__art">
                <div></div>
                <p>Puzzle</p>
            </article>
            <article class="works__content__box__art">
                <div></div>
                <p>Puzzle</p>
            </article>
            <article class="works__content__box__art">
                <div></div>
                <p>Puzzle</p>
            </article>
        </div>
        @include('layouts.category')
    </div>
</main>
@endsection