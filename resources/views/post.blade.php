@extends('layouts.default')

@section('title', 'post')

@section('content')
<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <a href="/blog">Вернуться в блог <i class="fa fa-share-square-o"></i></a>
                <div class="section-heading">
                    <h1>{{ $post->title}}</h1>
                </div>
            </div>
            <div class="col-md-10">
                <div class="post-item">
                    <img src="/images/{{ $post->image_full}}" alt="{{ $post->alt_full}}">
                    {{ $post->text_full}}
                </div>
            </div>


        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Похожие статьи</h2>
                </div>
            </div>

            @foreach ($relatedItems as $item)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="/blog/{{ $item->url}}"><img src="/images/{{ $post->image_full ?? 'noimage.jpg'}}" alt=""></a>
                    <div class="down-content">
                        <a href="/blog/{{ $post->url}}">
                            <h4>{{ $item->title }}</h4>
                        </a>
                        <p>{{ $post->text_intro }}<br>
                            <a href="/post_item/{$id}">Читать дальше...</a>
                        </p>
                        <p>Дата публикации: <br>{{ $item->created_at }}</p>
                        <ul class="stars">
                            @for($i = 0; $i < round($post->rating /2); $i++)
                                <li><i class="fa fa-star"></i></li>
                                @endfor
                        </ul>
                        <span>Reviews (24)</span>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@stop

@section('sidebar')
@parent
@endsection