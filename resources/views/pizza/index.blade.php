@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-action">View</a>
                        <a href="" class="list-group-item list-group-action">Create</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of Pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
                    </div>
                    <div class="form-group">
                        <label for="description">Description of Pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <label>Pizza price($)</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="small pizza price">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="medium pizza price">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="large pizza price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Category</label>
                        <select class="form-control">
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
                    </div>
                    
                    <div class="form-group text-center" style="margin-top:5px;">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
