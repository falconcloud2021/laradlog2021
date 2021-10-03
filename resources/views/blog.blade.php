@extends('layouts.default')

@section('title', 'blog')

@section('content')
<!-- Page Content -->
    <!-- <div class="page-heading about-heading header-text">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Раздел</h4>
              <h2>Наш блог</h2>
            </div>
          </div>
        </div>

      </div>

    </div> -->
    <div class="row">
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
            <i class="fa fa-search"></i>
            </span>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h2>Свежие статьи Блога</h2>
                            </div>
                        </div>

                        @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="product-item">
                                <a href="/blog/{{ $post->url}}"><img src="images/{{ $post->image_intro ?? 'noimage.jpg'}}" alt=""></a>
                                <div class="down-content">
                                    <a href="/blog/{{$post->url}}"><h4>{{ $post->title }}</h4></a>
                                    <p>{{ $post->text_intro }}<br>
                                        <a href="/blog/{{$post->url}}">Читать дальше...</a></p>
                                    <p>Дата публикации: <br>
                                        {{ $post->created_at }}</p>
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
                <div class="col-md-3">
                    
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="section-heading">

                                <h2>Категории Блога</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="categories">
                                @each('partials.category_list', $categories, 'item')
                               <!--  @foreach($categories as $category)
                                <li>
                                    <a href="/blog/{{ $category->url }}">{{ $category->name }}</a>
                                </li>
                                @endforeach -->
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h2>Метки Блога</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="categories">
                                @each('partials.category_list', $categories, 'item')
                               <!--  @foreach($categories as $category)
                                <li>
                                    <a href="/blog/{{ $category->url }}">{{ $category->name }}</a>
                                </li>
                                @endforeach -->
                            </ul>
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
                        <h2>Подпишитесь на рассылку новостей от сайта</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Хотите читать лучшие статьи в интеренете?</h4>
                        <p><a rel="nofollow" href="#" target="_parent">Этот блог</a> Дает такую возможность. <a rel="nofollow" href="/contact">Контакт</a> для связи с нами.</p>
                        <ul class="featured-list">
                            <li><a href="#">Постоянное обновление новостей</a></li>
                            <li><a href="#">Быть в курсе всех последних тенденций</a></li>
                            <li><a href="#">Постоянное личностное развитие</a></li>
                        </ul>
                        <a href="about.html" class="filled-button">Узнать больше</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
       
                    </div>
                </div>
            </div>
        </div>
    </div>
 @stop

@section('sidebar')
    @parent
@endsection