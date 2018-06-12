@extends('layouts.app')

@section('content')
<style>
    
    img {
        width: 95%;
    }
    .left {
                float: left;
        width: 50%;
        height: 100%;
        overflow: hidden;
    }
    .right {
        width: 50%;
        height: 100%;
        float: right;
    }
    .right * {
        font-size: 8px;
    }
    .right p {
        margin-bottom: 1px;
        font-size: 8px;
    }
    .row .col-md-2 {
        margin: 10px 0;
        height: 70px;
    }
</style>


    <section class="content-header">
        <h1 class="pull-left">Изображения</h1><br>
        <p>
        <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            Photoable type: (К чему относится фото. Если не относится, написать Undefined)
            <br />
            <select name="photoable_type">
                <option value="Advantage">Преимущества</option>
                <option value="Undefined">НЕ ОТНОСИТСЯ</option>
                <option value="Review">Отзывы</option>
                <option value="Article">Блог</option>
                <option value="Work">Портфолио</option>
            </select>
            <br /> 
            Изображения (можно прикрепить больше одного):
            <br />
            <div class="fallback">
                <input type="file" name="photos[]" multiple />
            </div>
            <br />
            <input type="submit" value="Загрузить" />
        </form>
        </p>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    

                    <div class="row">
            @foreach($photos as $photo)
                <div class="col-md-2">
                    <div class="left">
                        <img src="/img/{!! $photo->path !!}" alt="" class="img">
                    </div>
                    <div class="right">

                        {!! Form::open(['route' => ['photos.destroy', $photo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('photos.show', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('photos.edit', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                        
                        <p>{!! $photo->path !!}</p>
                        <p>{!! $photo->photoable_type !!}</p>
                        <p>{!! $photo->photoable_id !!}</p>
                        <p>{!! $photo->size !!}</p>
                        
                    </div>

                </div>

                @if($loop->iteration / 6 == 0)
                </div><div class="row">
                @endif

            @endforeach

                </div>

            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

