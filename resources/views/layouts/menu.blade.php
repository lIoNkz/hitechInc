<li class="{{ Request::is('photos*') ? 'active' : '' }}">
    <a href="{!! route('photos.index') !!}"><i class="fa fa-edit"></i><span>Photos</span></a>
</li>

<li class="{{ Request::is('advantages*') ? 'active' : '' }}">
    <a href="{!! route('advantages.index') !!}"><i class="fa fa-edit"></i><span>Advantages</span></a>
</li>

