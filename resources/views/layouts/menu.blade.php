<li class="{{ Request::is('photos*') ? 'active' : '' }}">
    <a href="{!! route('photos.index') !!}"><i class="fa fa-edit"></i><span>Photos</span></a>
</li>

<li class="{{ Request::is('advantages*') ? 'active' : '' }}">
    <a href="{!! route('advantages.index') !!}"><i class="fa fa-edit"></i><span>Advantages</span></a>
</li>

<li class="{{ Request::is('reviews*') ? 'active' : '' }}">
    <a href="{!! route('reviews.index') !!}"><i class="fa fa-edit"></i><span>Reviews</span></a>
</li>

<li class="{{ Request::is('textblocks*') ? 'active' : '' }}">
    <a href="{!! route('textblocks.index') !!}"><i class="fa fa-edit"></i><span>Textblocks</span></a>
</li>

<li class="{{ Request::is('siteprices*') ? 'active' : '' }}">
    <a href="{!! route('siteprices.index') !!}"><i class="fa fa-edit"></i><span>Siteprices</span></a>
</li>

