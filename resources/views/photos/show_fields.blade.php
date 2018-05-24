<div class="row"></div>
<div class="col-md-7">
 <!-- Id Field -->   
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $photo->id !!}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Filename:') !!}
    <p></p>
</div>

<!-- Size Field -->
<div class="form-group">
    {!! Form::label('size', 'Size:') !!}
    <p>{!! $photo->size !!}</p>
</div>

<!-- Photoable Id Field -->
<div class="form-group">
    {!! Form::label('photoable_id', 'Photoable Id:') !!}
    <p>{!! $photo->photoable_id !!}</p>
</div>

<!-- Photoable Type Field -->
<div class="form-group">
    {!! Form::label('photoable_type', 'Photoable Type:') !!}
    <p>{!! $photo->photoable_type !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $photo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $photo->updated_at !!}</p>
</div>


</div>
<div class="col-md-5">
    <img src="/img/{!! $photo->path !!}" alt="" style="width: 100%">
</div>
</div>