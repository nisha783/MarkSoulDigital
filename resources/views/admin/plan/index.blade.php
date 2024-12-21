@extends('layout.dashboard')
@section('title','PLAN')
@section('content')
    <a href="{{ route('admin.plan.create') }}" class="btn btn-light text-white mb-3" style="background-color:  #1f6f78;">Create New Plan</a>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Plan Name</th>
                        <th>Package</th>
                        <th>Min Price</th>
                        <th>Max Price</th>
                        <th>Min Profit</th>
                        <th>Max Profit</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $plan->name }}</td>
                            <td>Package {{ $loop->iteration }}</td>
                            <td>${{ $plan->min_price }}</td>
                            <td>${{ $plan->max_price }}</td>
                            <td>{{ $plan->min_profit }}%</td>
                            <td>{{ $plan->max_profit }}%</td>
                            <td>
                                <a href="{{ route('admin.plan.edit', $plan->id) }}" class="btn btn-light btn-sm text-white" style="background-color:  #1f6f78;">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
