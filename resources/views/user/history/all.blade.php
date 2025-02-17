@extends('layout.dashboard')
@section('title','All Deposits')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <livewire:user.transactions :type="['Deposit','Withdraw','Withdraw Fees','Daily ROI','Direct Commission','Binary Commission']" />
        </div>
    </div>
</div>
@endsection