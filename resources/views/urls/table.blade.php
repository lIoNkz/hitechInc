<table class="table table-responsive" id="urls-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Slug</th>
        <th>Method</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($urls as $url)
        <tr>
            <td>{!! $url->title !!}</td>
            <td>{!! $url->slug !!}</td>
            <td>{!! $url->method !!}</td>
            <td>
                {!! Form::open(['route' => ['urls.destroy', $url->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('urls.show', [$url->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('urls.edit', [$url->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>