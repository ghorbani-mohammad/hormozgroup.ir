
@extends('master')

@section('title', 'وبلاگ || گروه هرمز')

@section('keywords', 'سینی کابل، نصب سینی کابل، اجرای سینی کابل، مقالات سینی کابل')
@section('description', 'مقالات آموزشی در رابطه با سینی کابل، انواع سینی کابل، نصب سینی کابل و غیر')

@section('container')
    <div style="height:2rem;"></div>
    @foreach($posts as $post)
        @include('posts.post')
        <div style="height: 50px;"></div>
    @endforeach
@endsection
