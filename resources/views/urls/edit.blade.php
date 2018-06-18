@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Url
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($url, ['route' => ['urls.update', $url->id], 'method' => 'patch']) !!}

                        @include('urls.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection