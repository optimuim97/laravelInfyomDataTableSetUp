@extends('layouts.app')
@section('title')
    Product Specifications 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Specifications</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('productSpecifications.create')}}" class="btn btn-primary form-btn">Product Specification <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('product_specifications.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

