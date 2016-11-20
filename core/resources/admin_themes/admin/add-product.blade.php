@extends('admin-layouts.admin')
@section('title')
    Add product
@stop

@section('content')

    @include('admin-partials._form-error')


    <div class="container">
        <div class="row col-md-8  custyle">

    {{Form::open(array('action'=>'ProductController@store', 'files' => true))}}

    @include('admin-partials._product-form',array('productButton'=>'Add Product'))

    {{Form::close()}}


    </div>
    </div>
    @stop
