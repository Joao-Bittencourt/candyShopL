@extends('layouts.app')

@section('title', __('messages.create_product'))

@section('content_header')
<div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
        <h2>{{ __('messages.create_product') }}</h2>
    </div>
</div>
@stop

@section('content')
    @include('products._form', ['product' => $product])
@stop