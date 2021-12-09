@extends('layouts.layout')
@section('title', 'Works')
@section('content')
<main class="works">
    @include('layouts.head')
    <div class="works__content">
        {{-- <div class="works__content__box"> --}}
            <h1>作品登録</h1>
            <div class="worksContent">
                <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
                @csrf
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control"
                            value="{{ old('title') }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">
                            本文
                        </label>
                        <textarea
                            id="content"
                            name="content"
                            class="form-control"
                            rows="4"
                        >{{ old('content') }}</textarea>
                        @if ($errors->has('content'))
                            <div class="text-danger">
                                {{ $errors->first('content') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="gitUrl">
                            GitURL
                        </label>
                        <input
                            id="gitUrl"
                            name="gitUrl"
                            class="form-control"
                            value="{{ old('gitUrl') }}"
                            type="text"
                        >
                        @if ($errors->has('gitUrl'))
                            <div class="text-danger">
                                {{ $errors->first('gitUrl') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="siteUrl">
                            SiteURL
                        </label>
                        <input
                            id="siteUrl"
                            name="siteUrl"
                            class="form-control"
                            value="{{ old('siteUrl') }}"
                            type="text"
                        >
                        @if ($errors->has('siteUrl'))
                            <div class="text-danger">
                                {{ $errors->first('siteUrl') }}
                            </div>
                        @endif
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('works') }}">
                            キャンセル
                        </a>
                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </form>        
            {{-- </div> --}}
        </div>
    </div>
</main>
@endsection