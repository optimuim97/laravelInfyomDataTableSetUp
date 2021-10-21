<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $productUser->user_id }}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $productUser->product_id }}</p>
</div>

<!-- Is Favorite Field -->
<div class="form-group">
    {!! Form::label('is_favorite', 'Is Favorite:') !!}
    <p>{{ $productUser->is_favorite }}</p>
</div>

<!-- Is Liked Field -->
<div class="form-group">
    {!! Form::label('is_liked', 'Is Liked:') !!}
    <p>{{ $productUser->is_liked }}</p>
</div>

