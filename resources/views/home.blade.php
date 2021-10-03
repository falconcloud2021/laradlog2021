@extends('layouts.default')

@section('title', 'Home')

@section('content')

@include('partials.slider')

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Свежие статьи</h2>
                    <a href="/blog">Перейти в блог <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="/blog/{{ $post->url }}"><img src="images/{{ $post->image_intro ?? 'noimage.jpg'}}" alt=""></a>
                    <div class="down-content">
                        <a href="/blog/{{ $post->url }}">
                            <h4>{{ $post->title }}</h4>
                        </a>
                        <p>{{ $post->text_intro }}<br>
                            <a href="/post_item/{$id}">Читать дальше...</a>
                        </p>
                        <p>Дата публикации: <br>
                            {{ $post->created_at }}
                        </p>
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

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Sixteen Clothing</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Хотите читать лучшие статьи в интернете?</h4>
                    <p><a rel="nofollow" href="#" target="_parent">Этот блог</a> Дает такую возможность. <a rel="nofollow" href="/contact">Контакт</a> для связи с нами.</p>
                    <ul class="featured-list">
                        <li><a href="#">Постоянное обновление новостей</a></li>
                        <li><a href="#">Быть в курсе всех последних тенденций</a></li>
                        <li><a href="#">Постоянное личностное развитие</a></li>
                    </ul>
                    <a href="about.html" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="images/feature-image.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('sidebar')
@parent
@endsection