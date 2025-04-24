@extends('admin.layouts.app')

   @section('content')
   <h2>Admin Dashboard</h2>
   <p>Selamat datang di panel admin PT. Abidin Jaya Teknik.</p>
   <a href="{{ route('admin.products') }}" class="btn btn-primary">Kelola Produk</a>
   @endsection