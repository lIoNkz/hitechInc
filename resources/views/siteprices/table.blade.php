<table class="table table-responsive" id="siteprices-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Price</th>
        <th>Old Price</th>
        <th>Info</th>
        <th>Image</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($siteprices as $siteprice)
        <tr>
            <td>{!! $siteprice->title !!}</td>
            <td>{!! $siteprice->price !!}</td>
            <td>{!! $siteprice->old_price !!}</td>
            <td>{!! $siteprice->info !!}</td>
            <td>{!! $siteprice->image !!}</td>
            <td>
                {!! Form::open(['route' => ['siteprices.destroy', $siteprice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('siteprices.show', [$siteprice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('siteprices.edit', [$siteprice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>