<div class="mt-3 px-sm-5 px-0">
        <div class="row">  
            <div class="col-3"><img class="img-fluid post-img" src="{{$post->mainImage}}" style="height:100px; width:150px;"></div>
            <div class="col-9">
                <a class="post-title" style="text-decoration: none;color: blue;" href="/posts/{{$post->link}}">{{$post->title}}</a>
                <p class="mt-2">{{$post->description}}</p>
                <div class="row" style="font-size:0.9rem;">
                    <div class="col-10" style="color:#abbbc0;">منتشر شده در<span style="color: #0fb39e;" class="text-right"> {!!$post->created_at2!!}</span></div>
                    <div class="col-2 text-right" >
                        <a href="/posts/{{$post->link}}#comments"><i class="far fa-comment"></i> {!!$post->countComments!!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    