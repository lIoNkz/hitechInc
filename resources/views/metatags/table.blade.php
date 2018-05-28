<table class="table table-responsive" id="metatags-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Meta</th>
        <th>Url</th>
        <th>Webpage</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($metatags as $metatag)
        <tr>
            <td>{!! $metatag->title !!}</td>
            <td>{{ $metatag->meta }}</td>
            <td>{!! $metatag->url !!}</td>
            <td>{!! $metatag->webpage !!}</td>
            <td>
                {!! Form::open(['route' => ['metatags.destroy', $metatag->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('metatags.show', [$metatag->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('metatags.edit', [$metatag->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>