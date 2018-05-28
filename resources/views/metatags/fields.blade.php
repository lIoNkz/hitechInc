<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta', 'Meta:') !!}
    {!! Form::textarea('meta', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Webpage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('webpage', 'Webpage:') !!}
    {!! Form::text('webpage', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('metatags.index') !!}" class="btn btn-default">Cancel</a>
</div>
