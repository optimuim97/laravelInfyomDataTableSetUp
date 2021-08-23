@extends('layouts.app')
@section('title')
    Cars 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cars</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('cars.create')}}" class="btn btn-primary form-btn">Car <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('cars.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

