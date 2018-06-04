<table class="table table-responsive" id="breadcrumbs-table">
    <thead>
        <tr>
            <th>Text</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($breadcrumbs as $breadcrumb)
        <tr>
            <td>{!! $breadcrumb->text !!}</td>
            <td>{!! $breadcrumb->url !!}</td>
            <td>
                {!! Form::open(['route' => ['breadcrumbs.destroy', $breadcrumb->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('breadcrumbs.show', [$breadcrumb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('breadcrumbs.edit', [$breadcrumb->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>