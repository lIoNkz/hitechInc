@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Siteprice
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($siteprice, ['route' => ['siteprices.update', $siteprice->id], 'method' => 'patch']) !!}

                        @include('siteprices.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection