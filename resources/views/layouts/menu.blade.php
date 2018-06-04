<li class="{{ Request::is('photos*') ? 'active' : '' }}">
    <a href="{!! route('photos.index') !!}"><i class="fa fa-edit"></i><span>Галерея</span></a>
</li>

<li class="{{ Request::is('advantages*') ? 'active' : '' }}">
    <a href="{!! route('advantages.index') !!}"><i class="fa fa-edit"></i><span>Преимущества</span></a>
</li>

<li class="{{ Request::is('reviews*') ? 'active' : '' }}">
    <a href="{!! route('reviews.index') !!}"><i class="fa fa-edit"></i><span>Отзывы</span></a>
</li>

<li class="{{ Request::is('textblocks*') ? 'active' : '' }}">
    <a href="{!! route('textblocks.index') !!}"><i class="fa fa-edit"></i><span>Текстовые блоки</span></a>
</li>

<li class="{{ Request::is('siteprices*') ? 'active' : '' }}">
    <a href="{!! route('siteprices.index') !!}"><i class="fa fa-edit"></i><span>Типы сайтов</span></a>
</li>

<li class="{{ Request::is('metatags*') ? 'active' : '' }}">
    <a href="{!! route('metatags.index') !!}"><i class="fa fa-edit"></i><span>Метатэги и Title</span></a>
</li>

<li class="{{ Request::is('breadcrumbs*') ? 'active' : '' }}">
    <a href="{!! route('breadcrumbs.index') !!}"><i class="fa fa-edit"></i><span>Хлебные крошки</span></a>
</li>

