@extends('layouts.app')
@section('title')
    Advantages 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Advantages</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('advantages.create')}}" class="btn btn-primary form-btn">Advantage <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('advantages.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

