@extends('admin.layouts.app')

   @section('content')
   <h2>Edit Produk</h2>
   <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
       @csrf
       @method('PUT')
       <div class="mb-3">
           <label for="name" class="form-label">Nama Produk</label>
           <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
       </div>
       <div class="mb-3">
           <label for="type" class="form-label">Jenis</label>
           <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type', $product->type) }}" required>
       </div>
       <div class="mb-3">
           <label for="price" class="form-label">Harga</label>
           <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" step="0.01" value="{{ old('price', $product->price) }}" required>
       </div>
       <div class="mb-3">
           <label class="form-label">Spesifikasi</label>
           <div id="specifications">
               @forelse($product->specifications as $spec)
               <div class="row mb-2">
                   <div class="col-md-6">
                       <input type="text" name="specifications[]" class="form-control" value="{{ $spec->spec_key }}">
                   </div>
                   <div class="col-md-6">
                       <input type="text" name="specifications[]" class="form-control" value="{{ $spec->spec_value }}">
                   </div>
               </div>
               @empty
               <div class="row mb-2">
                   <div class="col-md-6">
                       <input type="text" name="specifications[]" class="form-control" placeholder="Nama Spesifikasi">
                   </div>
                   <div class="col-md-6">
                       <input type="text" name="specifications[]" class="form-control" placeholder="Nilai">
                   </div>
               </div>
               @endforelse
           </div>
           <button type="button" class="btn btn-secondary" onclick="addSpecification()">Tambah Spesifikasi</button>
       </div>
       <div class="mb-3">
           <label for="images" class="form-label">Gambar (Upload ulang untuk mengganti)</label>
           <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror" multiple>
           <div class="mt-2">
               @forelse($product->images as $image)
               <img src="{{ $image->image_path }}" alt="Product Image" width="100" class="me-2">
               @empty
               <p>Tidak ada gambar tersedia.</p>
               @endforelse
           </div>
       </div>
       <button type="submit" class="btn btn-primary">Update</button>
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