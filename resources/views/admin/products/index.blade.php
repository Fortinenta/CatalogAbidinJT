@extends('admin.layouts.app')

   @section('content')
   <h2>Kelola Produk</h2>
   <a href="{{ route('admin.products.create') }}" class="btn btn-success mb-3">Tambah Produk</a>
   <table class="table table-bordered">
       <thead>
           <tr>
               <th>Nama</th>
               <th>Jenis</th>
               <th>Harga</th>
               <th>Aksi</th>
           </tr>
       </thead>
       <tbody>
           @forelse($products as $product)
           <tr>
               <td>{{ $product->name }}</td>
               <td>{{ $product->type }}</td>
               <td>Rp {{ number_format($product->price, 2) }}</td>
               <td>
                   <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                   <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" style="display:inline;">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Hapus</button>
                   </form>
               </td>
           </tr>
           @empty
           <tr>
               <td colspan="4" class="text-center">Tidak ada produk.</td>
           </tr>
           @endforelse
       </tbody>
   </table>
   {{ $products->links() }}
   @endsection