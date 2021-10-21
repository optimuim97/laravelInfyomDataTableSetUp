@extends('layouts.app')
@section('title')
    Account Types 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Account Types</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('accountTypes.create')}}" class="btn btn-primary form-btn">Account Type <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('account_types.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

