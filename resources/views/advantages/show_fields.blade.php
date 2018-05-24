<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $advantage->id !!}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{!! $advantage->text !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $advantage->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $advantage->updated_at !!}</p>
</div>

<div class="form-group">
    <p>Изображения</p>
    <div class="row">
    	@foreach($photos as $photo)
	    <div class="col-md-2">
			<img src="/img/{{ $photo->path }}" alt="" style="width: 100%;">
		</div> 
		<div class="col-md-1">
			                        {!! Form::open(['route' => ['destroy_advantage', $photo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('photos.show', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('photos.edit', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            <input type="hidden" value="{{ $advantage->id }}" name="advantage">
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
		</div>
		@endforeach
    </div>
</div>
