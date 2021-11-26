@extends('layouts.layout')
@section('title', 'Top')
@section('content')
<div class="index">
    @include('layouts.head')
    <div class="index__main">
        <div class="index__main__img">
    
        </div>
        <p class="index__main__txt">Yuito Hashimoto</p>
    </div>
    <div class="index__foot">
        <div class="index__foot__content">
            <a href="https://github.com/YuitoHashimoto"><img class="index__foot__content__git" src="img/gitHubLogo.svg" alt="GitHubロゴ"></a>
            <a href="https://www.instagram.com/pf_loud/"><img class="index__foot__content__insta" src="img/instaLogo.svg" alt="Instagramロゴ"></a>
            <p class="index__foot__content__mail">Email : hashimoto.yit@gmail.com</p>
        </div>
    </div>    
</div>
@endsection