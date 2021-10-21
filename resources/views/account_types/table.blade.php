<div class="table-responsive">
    <table class="table" id="accountTypes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Logo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accountTypes as $accountType)
            <tr>
                       <td>{{ $accountType->name }}</td>
            <td>{{ $accountType->slug }}</td>
            <td>{{ $accountType->description }}</td>
            <td>{{ $accountType->logo }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['accountTypes.destroy', $accountType->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('accountTypes.show', [$accountType->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('accountTypes.edit', [$accountType->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
