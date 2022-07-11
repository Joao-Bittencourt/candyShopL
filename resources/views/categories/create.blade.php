@extends('layouts.app')

@section('title', __('messages.create_category'))

@section('content_header')
<div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
        <h2>{{ __('messages.create_category') }}</h2>
    </div>
</div>
@stop

@section('content')
    @include('categories._form', ['category' => $category])
@stop