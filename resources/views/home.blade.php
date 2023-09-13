@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   @if (Auth::user()->is_admin==1)
                   <h1 style="color: red;">You Are A Admin</h1>
                   @endif

                   
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
