@extends('index')
@section('head')
<div class="head__logo"><a href="#"><img src="img/mainLogo.svg" alt="ポートフォリオロゴ"></a></div>
<!-- nav -->
<div class="head__menu" id="navBtn"><img src="img/menuIcon.svg" alt="ハンバーガーアイコン"></div>
<div class="navBox" id="navContent">
    <img id="navBack" src="img/backIcon.svg" alt="バツ">
    <p>contents</p>
    <nav class="navBox__nav">
        <ul>
            <li><a href="/">TOP</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/works">WORKS</a></li>
        </ul>
    </nav>
</div>
<!-- nav -->
@endsection