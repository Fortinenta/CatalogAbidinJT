@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h2 class="section-title">Edit Product</h2>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="form-grid">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" value="{{ old('type', $product->type) }}" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images[]" id="images" multiple class="form-input">
                <div class="image-preview">
                    @foreach ($product->images as $image)
                        <img src="{{ $image->image_path }}" alt="Product Image" class="preview-image">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Specifications</label>
            <div id="specifications" class="spec-container">
                @foreach ($product->specifications as $spec)
                    <div class="spec-row">
                        <input type="text" name="specifications[]" value="{{ $spec->spec_key }}" placeholder="Key" class="form-input spec-input">
                        <input type="text" name="specifications[]" value="{{ $spec->spec_value }}" placeholder="Value" class="form-input spec-input">
                    </div>
                @endforeach
                @if ($product->specifications->isEmpty())
                    <div class="spec-row">
                        <input type="text" name="specifications[]" placeholder="Key" class="form-input spec-input">
                        <input type="text" name="specifications[]" placeholder="Value" class="form-input spec-input">
                    </div>
                @endif
            </div>
            <button type="button" id="add-spec" class="link-add-spec"><i class="fas fa-plus me-2"></i> Add Specification</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
@endsection