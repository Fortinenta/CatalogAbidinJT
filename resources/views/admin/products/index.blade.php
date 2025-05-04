@extends('admin.layouts.app')

@section('title', 'Products')

@section('content')
    <div class="section-header">
        <h2 class="section-title">Products</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" data-mode="create"><i class="fas fa-plus me-2"></i> Add Product</button>
    </div>
    <form id="bulkDeleteForm" action="{{ route('admin.products.bulk.delete') }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="table-header">
            <button type="submit" class="btn btn-danger" id="bulkDeleteBtn" disabled><i class="fas fa-trash me-2"></i> Delete Selected</button>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll"></th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Images</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td><input type="checkbox" name="product_ids[]" value="{{ $product->id }}" class="select-item"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->type }}</td>
                            <td>{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->images->count() }}</td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-icon btn-update"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-icon btn-delete" data-id="{{ $product->id }}"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
    <div class="pagination">
        {{ $products->links() }}
    </div>

    <!-- Product Modal for Create -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="productForm" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" name="type" id="type" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" name="price" id="price" step="0.01" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="images" class="form-label">Images</label>
                                <input type="file" name="images[]" id="images" multiple class="form-input">
                                <div class="image-preview" id="imagePreview"></div>
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
                            <button type="button" id="add-spec" class="link-add-spec"><i class="fas fa-plus me-2"></i> Add Specification</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection