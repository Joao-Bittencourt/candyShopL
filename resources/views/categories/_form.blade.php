<form role="form" action="{{ $category->exists
        ? route('categories.update', ['category' => $category->getKey()])
        : route('categories.store') }}" method="POST">
        @method($category->exists ? 'PUT' : 'POST')
        @csrf
        <div class="row p-3">
            <div class="col-sm-6">
                <div class="mb-2">
                    <label for="name"> {{ @trans('messages.name') }} </label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Nome da Categoria" value="{{ $category->name ?? old('name') }}" autofocus>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
            </div>
            
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('messages.save') }} </button>
            <a class="btn btn-light" href="{{ route('categories.index') }}"><i class="fa fa-arrow-left"></i> {{ __('messages.go_back') }} </a>
        </div>
    </form>
