<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        @foreach($featured as $item)
        <div class="banner-item">
            <img src="img-fluid" src="/images/{{ $item->image_intro}}" alt="/images/{{ $item->alt_intro}}">
            <div class="text-content">
                <h4>{{ $item->text_intro }}</h4>
                <h2>{{ $item->title }}</h2>
                <a href="/blog/{{ $item->url }}">Подробнее</a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>