<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Old Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('old_price', 'Old Price:') !!}
    {!! Form::text('old_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control', 'id' => 'mytextarea_siteprices1']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::textarea('image', null, ['class' => 'form-control', 'id' => 'mytextarea_siteprices2']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('siteprices.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script>
                    CKEDITOR.replace( 'mytextarea_siteprices1', {
                enterMode : CKEDITOR.ENTER_BR
                });
</script>