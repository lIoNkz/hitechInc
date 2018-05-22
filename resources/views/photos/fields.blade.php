<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
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
