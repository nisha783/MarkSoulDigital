@extends('layout.dashboard')
@section('title','WALLET')
@section('content')
<a href="{{ route('admin.wallet.index') }}" class="btn btn-light text-white mb-3" style="background-color:  #1f6f78;">Go Back</a>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Update Wallet</h4>
                <form action="{{ route('admin.wallet.update',$wallet->id) }}" method="POST">
                    @csrf
                    @method('PUT')
            <div class="form-group">
                <label for="symbol">Symbol</label>
                <input type="text" name="symbol" id="symbol" class="form-control" value="{{$wallet->symbol}}" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$wallet->name}}" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$wallet->address}}" required>
            </div>
            
            <div class="form-group">
                <label for="icon">Icon (URL)</label>
                <input type="text" name="status" id="icon" class="form-control" value="{{$wallet->status}}" required>
            </div>
            
            <div class="form-group">
                <label for="fees">Fees</label>
                <input type="text" name="fees" id="fees" class="form-control" value="{{$wallet->fees}}" required>
            </div>
            <button type="submit" class="btn btn-light w-100 text-white mt-3 mb-3"  style="background-color: #1f6f78;">Update Wallet</button>
        </form>
    </div>
            </div>
        </div>
    </div>
</div>

@endsection

