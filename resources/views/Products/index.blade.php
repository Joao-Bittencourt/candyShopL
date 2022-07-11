@extends('layouts.app')

@section('title', __('messages.products'))

@section('content_header')

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h2> {{ __('messages.products') }}</h2>
        </div>
    </div>

@stop

@section('content')

   <div class="table-responsive p-3">

    <div class="row align-items-center justify-content-between mb-2">

        <div class="col col-sm-6 text-left">
            <a class="btn btn-success" href="{{ route('products.create') }}">
                <i class="fa fa-plus"></i> {{ __('messages.create_product') }}
            </a>
        </div>
        <div class="col col-sm-4">
            <div class="input-group"><span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                <input type="text" wire:model="search" class="form-control" placeholder="{{ __('messages.search') }}...">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <table class="table table-sm table-hover table-centered table-nowrap mb-0">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">{{ __('messages.name') }}</th>
                        <th class="text-center">{{ __('messages.price') }}</th>
                        <th class="text-center">{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr class="text-center">
                        <td>{{ $product->getKey() }}</td>
                        <td>{{ $product->name }}</td>
                        <!--<td>{{ $product->description }}</td>-->
                        <td>{{ $product->price }}</td>
                     
                        <td>
                            <div class="btn-group"><button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-dark"></span> </span>
                                    <span class="sr-only">__('messages.actions')</span></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('products.show', $product) }}"><span class="fas fa-eye mr-2"></span>{{ __('messages.view') }}</a>
                                    <a class="dropdown-item" href="{{ route('products.edit', $product) }}"><span class="fas fa-edit mr-2"></span>{{ __('messages.edit') }}</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr class="text-center">
                        <td colspan="7">{{ __('messages.no_records') }}</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>
</div>


@stop
