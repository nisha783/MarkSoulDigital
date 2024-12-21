@extends('layout.dashboard')
@section('title','WALLET')


@section('content')
    <div class="container mt-4">
        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create Wallet Button -->
        <a href="{{route('admin.wallet.create')}}" class="btn btn-light mb-3 text-white" style="background-color:  #1f6f78;">Create Wallet</a>

        <!-- Wallets Table -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Symbol</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Icon</th>
                    <th>Fees</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wallets as $wallet)
                    <tr>
                        <td>{{ $wallet->symbol }}</td>
                        <td>{{ $wallet->name }}</td>
                        <td>{{ $wallet->address }}</td>
                        <td><img src="{{ $wallet->icon }}" alt="Icon" width="50" height="50"></td>
                        <td>{{ $wallet->fees }}</td>
                        <td>
                            <span class="text-dark">
                                {{ $wallet->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('admin.wallet.edit', $wallet->id) }}" class="btn btn-light btn-sm text-white" style="background-color:  #1f6f78;">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

