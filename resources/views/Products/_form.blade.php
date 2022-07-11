<form role="form" action="{{ $product->exists
      ? route('products.update', ['product' => $product->getKey()])
      : route('products.store') }}" method="POST">
    @method($product->exists ? 'PUT' : 'POST')
    @csrf

    <div class="row p-3">
        <div class="col-sm-6">
            <div class="mb-2">
                <label for="name"> {{ @trans('messages.name') }} </label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="{{ @trans('messages.product_name_placeholder') }}" value="{{ $product->name ?? old('name') }}" autofocus>
                @if ($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>
        </div>

        <div class="col-sm-6">
            <div class="mb-2">
                <label for="category"> {{ @trans('messages.category') }} </label>
                <select  class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}" id="category_id" name="category_id">
                    <option value="0" selected>Selecione</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('category_id'))
                <div class="invalid-feedback">
                    {{ $errors->first('category_id') }}
                </div>
                @endif
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-2">
                <label for="name"> {{ @trans('messages.price') }} </label>
                <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" name="price" placeholder="{{ @trans('messages.product_price_placeholder')}}" value="{{ $product->price ?? old('price') }}" autofocus>
                @if ($errors->has('price'))
                <div class="invalid-feedback">
                    {{ $errors->first('price') }}
                </div>
                @endif
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-2">
                <label for="name"> {{ @trans('messages.description') }} </label>
                <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description" placeholder="{{ @trans('messages.product_description_placeholder')}}" value="{{ $product->description ?? old('description') }}" autofocus>
                @if ($errors->has('description'))
                <div class="invalid-feedback">
                    {{ $errors->first('description') }}
                </div>
                @endif
            </div>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('messages.save') }} </button>
        <a class="btn btn-light" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }} </a>
    </div>
</form>
