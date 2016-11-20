@extends('admin-layouts.admin')
@section('title')
    Edit  page
@stop

@section('content')


    @include('admin-partials._form-error')

    <div>



        <div class="container">
            <div class="row col-md-8  custyle">
                {{Form::model($page, array('action' => array("PageController@update",$page->id), "method" => "PUT"))}}
                @include('admin-partials._page-form',array("buttonName"=>"Update Page"))
                {{Form::close()}}

                <br><br>
            </div>
        </div>
    </div>

@stop
