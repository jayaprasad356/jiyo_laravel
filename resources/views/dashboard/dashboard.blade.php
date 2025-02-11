@extends('layouts.admin')

@section('page-title')
    {{ __('Dashboard') }}
@endsection

@php
    $setting = App\Models\Utility::settings();
@endphp

@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        
      

            <div class="col-xxl-12">

                {{-- start --}}
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mb-3 mb-sm-0">
                                        <div class="d-flex align-items-center">
                                            <div class="theme-avtar bg-primary">
                                                <i class="ti ti-users"></i>
                                            </div>
                                            <div class="ms-3">
                                                <small class="text-muted">{{ __('Total') }}</small>
                                                <h6 class="m-0">{{ __('Users') }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto text-end">
                                        <h4 class="m-0 text-primary">{{ $users_count }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                 
                </div>
            </div>

            {{-- </div> --}}

    </div>
@endsection


