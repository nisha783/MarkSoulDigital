@extends('layout.dashboard')
@section('title', 'Update Plan')
@section('content')
<a href="{{ route('admin.plan.index') }}" class="btn btn-light text-white mb-3" style="background-color:  #1f6f78;">Go Back</a>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-white">
                <h4>Update Plan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.plan.update', $plan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Plan Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $plan->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="min_price" class="form-label">Minimum Price</label>
                        <input type="number" step="0.01" class="form-control @error('min_price') is-invalid @enderror" id="min_price" name="min_price" value="{{ old('min_price', $plan->min_price) }}" required>
                        @error('min_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="max_price" class="form-label">Maximum Price</label>
                        <input type="number" step="0.01" class="form-control @error('max_price') is-invalid @enderror" id="max_price" name="max_price" value="{{ old('max_price', $plan->max_price) }}" required>
                        @error('max_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="min_profit" class="form-label">Minimum Daily Profit (%)</label>
                        <input type="number" step="0.01" class="form-control @error('min_profit') is-invalid @enderror" id="min_profit" name="min_profit" value="{{ old('min_profit', $plan->min_profit) }}" required>
                        @error('min_profit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="max_profit" class="form-label">Maximum Daily Profit (%)</label>
                        <input type="number" step="0.01" class="form-control @error('max_profit') is-invalid @enderror" id="max_profit" name="max_profit" value="{{ old('max_profit', $plan->max_profit) }}" required>
                        @error('max_profit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Adding withdraw fees field -->
                    <div class="mb-3">
                        <label for="withdraw_fees" class="form-label">Withdraw Fees (%)</label>
                        <input type="number" step="0.01" class="form-control @error('withdraw_fees') is-invalid @enderror" id="withdraw_fees" name="withdraw_fees" value="{{ old('withdraw_fees', $plan->withdraw_fees) }}" required>
                        @error('withdraw_fees')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success w-100" style="background-color:  #1f6f78;">Update Plan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
