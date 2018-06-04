@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Breadcrumb
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($breadcrumb, ['route' => ['breadcrumbs.update', $breadcrumb->id], 'method' => 'patch']) !!}

                        @include('breadcrumbs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection