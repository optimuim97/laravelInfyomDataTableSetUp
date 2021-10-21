<div class="table-responsive">
    <table class="table" id="productUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Product Id</th>
        <th>Is Favorite</th>
        <th>Is Liked</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productUsers as $productUser)
            <tr>
                       <td>{{ $productUser->user_id }}</td>
            <td>{{ $productUser->product_id }}</td>
            <td>{{ $productUser->is_favorite }}</td>
            <td>{{ $productUser->is_liked }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['productUsers.destroy', $productUser->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('productUsers.show', [$productUser->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('productUsers.edit', [$productUser->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
