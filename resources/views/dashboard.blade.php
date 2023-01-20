@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @role('Editor')
                I am a writer!
                @else
                    I am not a writer...
                @endrole
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    You are Logged In
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
