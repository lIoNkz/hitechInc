@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Метатэги и Title</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('metatags.create') !!}">Add New</a>
        </h1>
        <p><form method="get" action="/admin/metatags-search-by-url">
            <input type="text" placeholder="URL..." name="url">
            <input type="submit" value="Поиск" id="buttons">
            {{ csrf_field() }}
        </form></p>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('metatags.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

@endsection

@section('scripts')


@endsection