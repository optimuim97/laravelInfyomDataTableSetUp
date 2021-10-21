<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Category Id</th>
        <th>Sub Category Id</th>
        <th>Brand Category Id</th>
        <th>Subcategory Item Id</th>
        <th>Name</th>
        <th>Star Number</th>
        <th>Price</th>
        <th>Percentage</th>
        <th>Barred Price</th>
        <th>Slug</th>
        <th>Publication Type Id</th>
        <th>Sku</th>
        <th>Excerpt</th>
        <th>Description</th>
        <th>Ext Title</th>
        <th>Meta Keywords</th>
        <th>Meta Description</th>
        <th>Units Sold</th>
        <th>Last Sale At</th>
        <th>Stock</th>
        <th>Number Users Who Liked</th>
        <th>Brand Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                       <td>{{ $product->category_id }}</td>
            <td>{{ $product->sub_category_id }}</td>
            <td>{{ $product->brand_category_id }}</td>
            <td>{{ $product->subcategory_item_id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->star_number }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->percentage }}</td>
            <td>{{ $product->barred_price }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->publication_type_id }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->excerpt }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->ext_title }}</td>
            <td>{{ $product->meta_keywords }}</td>
            <td>{{ $product->meta_description }}</td>
            <td>{{ $product->units_sold }}</td>
            <td>{{ $product->last_sale_at }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->number_users_who_liked }}</td>
            <td>{{ $product->brand_id }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
