<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_category_id', 'Sub Category Id:') !!}
    {!! Form::number('sub_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Brand Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_category_id', 'Brand Category Id:') !!}
    {!! Form::number('brand_category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Subcategory Item Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subcategory_item_id', 'Subcategory Item Id:') !!}
    {!! Form::number('subcategory_item_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Star Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('star_number', 'Star Number:') !!}
    {!! Form::text('star_number', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Percentage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percentage', 'Percentage:') !!}
    {!! Form::number('percentage', null, ['class' => 'form-control']) !!}
</div>

<!-- Barred Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barred_price', 'Barred Price:') !!}
    {!! Form::text('barred_price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Publication Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publication_type_id', 'Publication Type Id:') !!}
    {!! Form::text('publication_type_id', null, ['class' => 'form-control','maxlength' => 1,'maxlength' => 1,'maxlength' => 1]) !!}
</div>

<!-- Sku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sku', 'Sku:') !!}
    {!! Form::text('sku', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Excerpt Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('excerpt', 'Excerpt:') !!}
    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Ext Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ext_title', 'Ext Title:') !!}
    {!! Form::text('ext_title', null, ['class' => 'form-control','maxlength' => 511,'maxlength' => 511,'maxlength' => 511]) !!}
</div>

<!-- Meta Keywords Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    {!! Form::textarea('meta_keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Units Sold Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('units_sold', 'Units Sold:') !!}
    {!! Form::textarea('units_sold', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Sale At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_sale_at', 'Last Sale At:') !!}
    {!! Form::text('last_sale_at', null, ['class' => 'form-control','id'=>'last_sale_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#last_sale_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Stock Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::textarea('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Users Who Liked Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('number_users_who_liked', 'Number Users Who Liked:') !!}
    {!! Form::textarea('number_users_who_liked', null, ['class' => 'form-control']) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Brand Id:') !!}
    {!! Form::number('brand_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
</div>
