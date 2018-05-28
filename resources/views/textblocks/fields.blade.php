<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control', 'id' => 'mytextarea_textblocks']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Theme Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theme_id', 'Theme Id:') !!}
    {!! Form::text('theme_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textblocks.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script>
	                CKEDITOR.replace( 'mytextarea_textblocks', {
                enterMode : CKEDITOR.ENTER_BR
                });
</script>

