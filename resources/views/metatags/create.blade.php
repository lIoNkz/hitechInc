@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Metatag
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'metatags.store']) !!}

                        @include('metatags.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
