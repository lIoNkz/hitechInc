@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Photo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'photos.store']) !!}

                        <div class="form-group col-sm-12">
                            <input type="file" name="path">
                        </div>
                        
                        <!-- Size Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('size', 'Size:') !!}
                            {!! Form::text('size', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Photoable Id Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('photoable_id', 'Photoable Id:') !!}
                            {!! Form::text('photoable_id', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Photoable Type Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('photoable_type', 'Photoable Type:') !!}
                            {!! Form::text('photoable_type', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('photos.index') !!}" class="btn btn-default">Cancel</a>
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
