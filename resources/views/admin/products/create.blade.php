@extends('admin.layouts.app')

   @section('content')
   <h2>Tambah Produk</h2>
   <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
       @csrf
       <div class="mb-3">
           <label for="name" class="form-label">Nama Produk</label>
           <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
       </div>
       <div class="mb-3">
           <label for="type" class="form-label">Jenis</label>
           <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" required>
       </div>
       <div class="mb-3">
           <label for="price" class="form-label">Harga</label>
           <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" step="0.01" value="{{ old('price') }}" required>
       </div>
       <div class="mb-3">
           <label class="form-label">Spesifikasi</label>
           <div id="specifications">
               <div class="row mb-2">
                   <div class="col-md-6">
                       <input type="text" name="specifications[]" class="form-control" placeholder="Nama Spesifikasi (e.g., Panjang)">
                   </div>
                   <div class="col-md-6">
                       <input type="text" name="specifications[]" class="form-control" placeholder="Nilai (e.g., 95cm)">
                   </div>
               </div>
           </div>
           <button type="button" class="btn btn-secondary" onclick="addSpecification()">Tambah Spesifikasi</button>
       </div>
       <div class="mb-3">
           <label for="images" class="form-label">Gambar (Minimal 1)</label>
           <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror" multiple required>
       </div>
       <button type="submit" class="btn btn-primary">Simpan</button>
   </form>

   <script>
       function addSpecification() {
           const div = document.createElement('div');
           div.className = 'row mb-2';
           div.innerHTML = `
               <div class="col-md-6">
                   <input type="text" name="specifications[]" class="form-control" placeholder="Nama Spesifikasi">
               </div>
               <div class="col-md-6">
                   <input type="text" name="specifications[]" class="form-control" placeholder="Nilai">
               </div>
           `;
           document.getElementById('specifications').appendChild(div);
       }
   </script>
   @endsection