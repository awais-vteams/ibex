@extends('layouts.app')

@section('template_title')
    {{ $bank->name }}
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <h4 class="card-title">Show Bank</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('banks.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
            <div class="form-group">
                <strong>Name:</strong>
                {{ $bank->name }}
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                {{ $bank->address }}
            </div>
            <div class="form-group">
                <strong>Account No:</strong>
                {{ $bank->account_no }}
            </div>
            <div class="form-group">
                <strong>Iban:</strong>
                {{ $bank->iban }}
            </div>
            <div class="form-group">
                <strong>Swift:</strong>
                {{ $bank->swift }}
            </div>
            <div class="form-group">
                <strong>Manufacturer Address:</strong>
                {{ $bank->manufacturer_address }}
            </div>

        </div>
    </div>
@endsection