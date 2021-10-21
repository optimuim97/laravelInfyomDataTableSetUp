<div class="table-responsive">
    <table class="table" id="needs-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Description</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($needs as $need)
            <tr>
                       <td>{{ $need->title }}</td>
            <td>{{ $need->description }}</td>
            <td>{{ $need->user_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['needs.destroy', $need->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('needs.show', [$need->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('needs.edit', [$need->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
