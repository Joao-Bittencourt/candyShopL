@extends('layouts.main')

@section('content')
<div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav-category></nav-category>    
                    </div>
                    <div class="col-md-6">
                        @include('elements.carousel_a')
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category-1.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/category-2.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
   
        @include('elements.feature');
        <nav-product></nav-product> 
        {{-- @include('elements.product_feature');
        @include('elements.recent_product'); --}}
          

               
@endsection