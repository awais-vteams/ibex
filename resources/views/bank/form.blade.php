<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group  {{ $errors->has('name') ? "has-error" : ""}}">
            {{ Form::label('name') }}
            {{ Form::text('name', $bank->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group  {{ $errors->has('address') ? "has-error" : ""}}">
            {{ Form::label('address') }}
            {{ Form::text('address', $bank->address, ['class' => 'form-control', 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group  {{ $errors->has('account_no') ? "has-error" : ""}}">
            {{ Form::label('account_no') }}
            {{ Form::text('account_no', $bank->account_no, ['class' => 'form-control', 'placeholder' => 'Account No']) }}
            {!! $errors->first('account_no', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group  {{ $errors->has('iban') ? "has-error" : ""}}">
            {{ Form::label('iban') }}
            {{ Form::text('iban', $bank->iban, ['class' => 'form-control', 'placeholder' => 'Iban']) }}
            {!! $errors->first('iban', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group  {{ $errors->has('swift') ? "has-error" : ""}}">
            {{ Form::label('swift') }}
            {{ Form::text('swift', $bank->swift, ['class' => 'form-control', 'placeholder' => 'Swift']) }}
            {!! $errors->first('swift', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group  {{ $errors->has('manufacturer_address') ? "has-error" : ""}}">
            {{ Form::label('manufacturer_address') }}
            {{ Form::text('manufacturer_address', $bank->manufacturer_address, ['class' => 'form-control', 'placeholder' => 'Manufacturer Address']) }}
            {!! $errors->first('manufacturer_address', '<p class="help-block">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>