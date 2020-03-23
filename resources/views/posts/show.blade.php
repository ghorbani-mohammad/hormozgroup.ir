@extends('posts.master')

@section('title')
{{$post->title}}
@endsection

@section('head')
    <link rel="stylesheet" href="/css/font-awesome.minified.css">
@endsection


@section('head')
<meta name="description" content="{{$post->description}}">
<style>
    ::placeholder { /* Most modern browsers support this now. */
        color:    #74b9ff !important;
    }
    @media screen and (min-width: 480px) {
        .blog-body{
            padding:0px 15%;
            font-size: 1.4rem;
            font-family: Georgia,Times,Times New Roman,serif; 
        }
    }
    @media screen and (min-width: 0px) and (max-width:480px) {
        .blog-body{
            padding:0px 2%;
            font-family: Georgia,Times,Times New Roman,serif; 
            font-size: 1.2rem;
        }
    }
    @media screen and (min-width: 480px) {
        .comment-body{
            padding:0px 15%;
        }
        .comment-date{
            font-size: 0.8rem;
        }
    }
    @media screen and (min-width: 0px) and (max-width:480px) {
        .comment-body{
            padding:0px 2%;
        }
        .comment-date{
            font-size: 0.7rem;
        }
    }
    video{
        max-width:90% !important;
    }
    .blog-body img{
            max-width:90% !important;
    }   
    .display-4{
    font-size: 3.5rem !important;
    }
</style>
@endsection

@section('container')
<div class="my-5" dir="rtl">
    <a class="" style="text-decoration: none;color: blue; font-size: 2rem;" href="/posts/{{$post->link}}">{{$post->title}}</a>
    <div class="ml-1" style="color: #0fb39e; font-size: 0.8rem;">{!!$post->created_at2!!}</div>
    <hr>



    <div class="mt-2 blog-body">
        {!!$post->body!!}
    </div>

</div>
@endsection

@section('footer')
@endsection