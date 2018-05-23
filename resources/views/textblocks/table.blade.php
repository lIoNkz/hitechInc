<table class="table table-responsive" id="textblocks-table">
    <thead>
        <tr>
            <th>Text</th>
        <th>Title</th>
        <th>Theme Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($textblocks as $textblock)
        <tr>
            <td>{!! $textblock->text !!}</td>
            <td>{!! $textblock->title !!}</td>
            <td>{!! $textblock->theme_id !!}</td>
            <td>
                {!! Form::open(['route' => ['textblocks.destroy', $textblock->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('textblocks.show', [$textblock->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('textblocks.edit', [$textblock->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>