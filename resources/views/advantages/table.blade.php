<table class="table table-responsive" id="advantages-table">
    <thead>
        <tr>
            <th>Text</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($advantages as $advantage)
        <tr>
            <td>{!! $advantage->text !!}</td>
            <td>
                {!! Form::open(['route' => ['advantages.destroy', $advantage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('advantages.show', [$advantage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('advantages.edit', [$advantage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>