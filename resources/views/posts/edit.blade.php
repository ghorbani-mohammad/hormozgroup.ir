@extends('posts.master')

@section('title')
ویرایش مطلب
@endsection

@section('head')
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/summernote/summernote-bs4.css">
@endsection

@section('container')
<h1 class="display-4">ویرایش پست</h1>
<hr>
    <form action="/posts/{{$post->link}}" method="POST">
        @csrf
        @method('PATCH')
        @include('posts.errors')
        <div class="form-group">
            <label for="title">عنوان:</label>
            <input dir="rtl" type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="link">لینک:</label>
            <input dir="rtl" type="text" class="form-control" id="link" name="link" value="{{$post->link}}" readonly>
        </div>
        <div class="form-group">
                <label for="description">توضیحات: <span style="font-size: 1rem;" class="lead text-success">(Max Length is 100)</span></label>
                <input dir="rtl" maxlength="100" type="text" class="form-control" value="{{$post->description}}" id="description" name="description" required>
            </div>
        <div class="form-group">
            @if($post->type=='blog')
                <label for="type">نوع: <span class="lead text-success">(بلاگ انتخاب شده است)</span></label>
                <select name="type" class="form-control" id="type">
                    <option value="blog">وبلاگ</option>
                    {{--  <option value="proj">Project</option>  --}}
            </select> 
            @else
                <label for="type">نوع: <span class="lead text-success">(Project selected)</span></label>
                <select name="type" class="form-control" id="type">
                    <option value="proj">Project</option>
                    <option value="blog">Blog</option>
            </select> 
            @endif
            </div>
        <div class="form-group">
            <label for="body">بدنه مطلب:</label>
            <div dir="rtl">
                <textarea id="body" name="body" class="summernote form-control">{{$post->body}}</textarea>
            </div>
        </div>
        <div class="form-group">
            @if($post->status=='publish')
                <label for="status">وضعیت انتشار: <span class="lead text-success">(Publish selected)</span></label>
                <select name="status" class="form-control" id="status">
                    <option value="publish">Publish</option>
                    <option value="preview">Preview</option>
                </select> 
            @elseif($post->status=='preview')
                <label for="status">وضعیت انتشار: <span class="lead text-success">(Preview selected)</span></label>
                <select name="status" class="form-control" id="status">
                    <option value="preview">Preview</option>
                    <option value="publish">Publish</option>
                </select> 
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-warning" type="submit" name="_method" value="PATCH">Edit</button>
            <button class="btn btn-danger" type="submit" name="_method" value="DELETE">Delete</button>
        </div>
    </form>
@endsection

@section('scripts')

<script src="/summernote/summernote-bs4.js"></script>
 
<script>
        $(document).ready(function() {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture','video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                fontNames: ['Georgia','iransans','Sacramento', 'Tahoma', 'Comic Sans MS'],
                fontNamesIgnoreCheck: ['iransans','Sacramento'],
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
                height:200
            });
        });
</script>
@endsection