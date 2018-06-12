<table class="table table-responsive" id="works-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($works as $work)
        <tr>
            <td>{!! $work->id !!}</td>
            <td>{!! $work->title !!}</td>
            <td>{!! $work->url !!}</td>
            <td>
                {!! Form::open(['route' => ['works.destroy', $work->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('works.show', [$work->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('works.edit', [$work->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>