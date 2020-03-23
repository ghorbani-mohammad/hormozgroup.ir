@extends('posts.master')

@section('title')
نگارش مطلب جدید
@endsection

@section('head')
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link href="/summernote/summernote-bs4.css" rel="stylesheet">
@endsection

@section('container')
    <h1 class="display-4 mt-5">مطلب جدید</h1>
<hr>
    <form action="/posts" method="POST">
        @csrf
        @include('posts.errors')
        <div class="form-group">
            <label for="title">عنوان:</label>
            <input dir="rtl" type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="link">لینک:</label>
            <input dir="rtl" type="text" class="form-control" id="link" name="link" required>
        </div>
        <div class="form-group">
            <label for="description">توضیحات: <span style="font-size: 1rem;" class="lead text-success">(Max Length is 100)</span></label>
            <input dir="rtl" maxlength="100" type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="type">نوع:</label>
            <select name="type" class="form-control" id="type" style="font-size: 0.8rem !important;">
                <option value="blog">وبلاگ</option>
                {{--  <option value="proj">Project</option>  --}}
            </select> 
        </div>
        <div class="form-group">
            <label for="body">بدنه مطلب:</label>
            <div dir="rtl">
                <textarea id="body" name="body" class="summernote form-control" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="status">وضعیت انتشار:</label>
            <select name="status" class="form-control" id="status" style="font-size: 0.8rem !important;">
                <option value="publish">انتشار</option>
                <option value="preview">پیش نمایش</option>
            </select> 
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Publish</button>
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
            fontNames: ['iransans','Sacramento', 'Tahoma', 'Comic Sans MS'],
            fontNamesIgnoreCheck: ['iransans','Sacramento'],
            fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
            height:200
        });
    });
</script>
@endsection