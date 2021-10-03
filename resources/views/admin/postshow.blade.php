@extends('layouts.default')

@section('title', 'post')

@section('content')
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1>{{ $post->title}}</h1>
                        <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-item">
                        <img src="/images/{{ $post->image_full}}" alt="{{ $post->alt_full}}">
                        {{ $post->text_full}}
                    </div>
                </div>
                           
                             
            </div>
        </div>
    </div>

@stop

@section('sidebar')
    @parent
@endsection