@extends('layouts.app')

@section('template_title')
    Banks
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Banks') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('banks.create') }}" class="btn back-btn btn-light btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>User Id</th>
										<th>Name</th>
										<th>Address</th>
										<th>Account No</th>
										<th>Iban</th>
										<th>Swift</th>
										<th>Manufacturer Address</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banks as $bank)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $bank->user_id }}</td>
											<td>{{ $bank->name }}</td>
											<td>{{ $bank->address }}</td>
											<td>{{ $bank->account_no }}</td>
											<td>{{ $bank->iban }}</td>
											<td>{{ $bank->swift }}</td>
											<td>{{ $bank->manufacturer_address }}</td>

                                            <td>
                                                <form action="{{ route('banks.destroy',$bank->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('banks.show',$bank->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('banks.edit',$bank->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $banks->links() !!}
            </div>
        </div>
    </div>
@endsection