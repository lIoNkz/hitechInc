@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Advantage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($advantage, ['route' => ['advantages.update', $advantage->id], 'method' => 'patch']) !!}

                        @include('advantages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection