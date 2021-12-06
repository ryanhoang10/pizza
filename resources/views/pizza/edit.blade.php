@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if (count($errors) > 0)
            <div class="card mt-5">
                <div class="card-body">
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <p> {{ $error }} </p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>
                <form action="{{ route('pizza.update', $pizza->id) }}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Edit Pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="name of pizza" value="{{ $pizza->name }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description of Pizza</label>
                            <textarea class="form-control" name="description" value="{{ $pizza->description }}"></textarea>
                        </div>
                        <div class="form-inline">
                            <label>Pizza price($)</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" class="form-control" name="small_pizza_price" placeholder="small pizza price" value="{{ $pizza->small_pizza_price }}">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" name="medium_pizza_price" placeholder="medium pizza price" value="{{ $pizza->medium_pizza_price }}">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" name="large_pizza_price" placeholder="large pizza price" value="{{ $pizza->large_pizza_price }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Category</label>
                            <select class="form-control" name="category">
                                <option value=""></option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="nonvegetarian">Non Begetarian</option>
                                <option value="traditional">Traditional</option>
                                {{-- <option value="supreme">Supreme</option> --}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{ Storage::url($pizza->image) }}" width="80">
                        </div>
                        
                        <div class="form-group text-center" style="margin-top:5px;">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
