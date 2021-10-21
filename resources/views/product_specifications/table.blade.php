<div class="table-responsive">
    <table class="table" id="productSpecifications-table">
        <thead>
            <tr>
                <th>Product Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Logo</th>
        <th>Slug</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productSpecifications as $productSpecification)
            <tr>
                       <td>{{ $productSpecification->product_id }}</td>
            <td>{{ $productSpecification->name }}</td>
            <td>{{ $productSpecification->description }}</td>
            <td>{{ $productSpecification->logo }}</td>
            <td>{{ $productSpecification->slug }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['productSpecifications.destroy', $productSpecification->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('productSpecifications.show', [$productSpecification->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('productSpecifications.edit', [$productSpecification->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
