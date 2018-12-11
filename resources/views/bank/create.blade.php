@extends('layouts.app')

@section('template_title')
    Create Bank
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @include('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Create Bank</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('banks.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('bank.form', [$bank])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection