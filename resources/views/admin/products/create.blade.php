@extends('admin.layouts.app')

@section('title', 'Create Product')

@section('content')
    <h2 class="section-title">Create Product</h2>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-grid">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" value="{{ old('type') }}" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images[]" id="images" multiple class="form-input">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Specifications</label>
            <div id="specifications" class="spec-container">
                <div class="spec-row">
                    <input type="text" name="specifications[]" placeholder="Key" class="form-input spec-input">
                    <input type="text" name="specifications[]" placeholder="Value" class="form-input spec-input">
                </div>
            </div>
            <button type="button" id="add-spec" class="link-add-spec">Add Specification</button>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Product</button>
        </div>
    </form>
@endsection