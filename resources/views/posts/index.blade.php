
@extends('master')

@section('title')
وبلاگ گروه هرمز
@endsection

@section('container')
    <div style="height:2rem;"></div>
    @foreach($posts as $post)
        @include('posts.post')
        <div style="height: 50px;"></div>
    @endforeach
@endsection
