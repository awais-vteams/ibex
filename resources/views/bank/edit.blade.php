@extends('layouts.app')

@section('template_title')
    Update Bank
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @include('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">Update Bank</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('banks.update', $bank->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('bank.form',  [$bank])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection