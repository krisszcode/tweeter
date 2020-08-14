@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="/tweets" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-xl-10 offset-2">

                    <div class="row">
                        <h1>Add New Tweet</h1>
                    </div>
                    <div class="row">

                        <input id="tweet"
                               type="text"
                               class="form-control{{ $errors->has('tweet') ? ' is-invalid' : '' }}"
                               name="tweet"
                               value="{{ old('tweet') }}"
                               autocomplete="tweet" autofocus>

                        @if ($errors->has('tweet'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tweet') }}</strong>
                        </span>
                        @endif
                    </div>


                    <div class="row pt-2">
                        <button class="btn btn-primary">Add New Tweet</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection
