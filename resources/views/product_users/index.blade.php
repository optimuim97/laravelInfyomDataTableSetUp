@extends('layouts.app')
@section('title')
    Product Users 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Users</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('productUsers.create')}}" class="btn btn-primary form-btn">Product User <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('product_users.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

