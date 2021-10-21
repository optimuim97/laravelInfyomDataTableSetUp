<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Favorite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_favorite', 'Is Favorite:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_favorite', 0) !!}
        {!! Form::checkbox('is_favorite', '1', null) !!}
    </label>
</div>


<!-- Is Liked Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_liked', 'Is Liked:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_liked', 0) !!}
        {!! Form::checkbox('is_liked', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productUsers.index') }}" class="btn btn-light">Cancel</a>
</div>
