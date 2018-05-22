<table class="table table-responsive" id="reviews-table">
    <thead>
        <tr>
            <th>Text</th>
        <th>Name</th>
        <th>Site</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reviews as $review)
        <tr>
            <td>{!! $review->text !!}</td>
            <td>{!! $review->name !!}</td>
            <td>{!! $review->site !!}</td>
            <td>
                {!! Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('reviews.show', [$review->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('reviews.edit', [$review->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>