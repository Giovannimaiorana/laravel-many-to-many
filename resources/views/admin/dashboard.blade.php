@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="col-2">

                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4">Home</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">

                    <li>
                        <a href="{{Route('admin.projects.create')}}" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="{{ 'admin' }}"></use></svg>
                         Crea Nuovo
                        </a>
                    </li>
                    <li>
                        <a href="{{ Route('admin.projects.index') }}" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                        Portfolio
                        </a>
                    </li>
                    </ul>
                </div>
            </div>

        
        
            <div class="col-8">
                <h2 class="fs-4 text-secondary my-4">
                    {{ __('Dashboard') }}
                </h2>
                <div class="card">  
                    <div class="card-header">{{ __('User Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
               
            </div>
  

        

    </div>
   

   

   

@endsection
