@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="dashboard-grid">
        <div class="card">
            <h2 class="card-title"><i class="fas fa-box me-2"></i> Total Products</h2>
            <p class="card-value">{{ \App\Models\Product::count() }}</p>
        </div>
        <div class="card">
            <h2 class="card-title"><i class="fas fa-clock me-2"></i> Recent Activity</h2>
            <p class="card-text">No recent activity.</p>
        </div>
        <div class="card">
            <h2 class="card-title"><i class="fas fa-users me-2"></i> Users</h2>
            <p class="card-value">{{ \App\Models\User::count() }}</p>
        </div>
    </div>
@endsection