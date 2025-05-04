document.addEventListener('DOMContentLoaded', function () {
    const productModal = new bootstrap.Modal(document.getElementById('productModal'));
    const productForm = document.getElementById('productForm');
    const modalTitle = document.getElementById('productModalLabel');
    const submitBtn = document.getElementById('submitBtn');
    const addSpecButton = document.getElementById('add-spec');
    const specContainer = document.getElementById('specifications');
    const selectAll = document.getElementById('selectAll');
    const selectItems = document.querySelectorAll('.select-item');
    const bulkDeleteBtn = document.getElementById('bulkDeleteBtn');
    const bulkDeleteForm = document.getElementById('bulkDeleteForm');

    // Handle modal open for create
    document.querySelectorAll('[data-mode="create"]').forEach(button => {
        button.addEventListener('click', function () {
            productForm.reset();
            specContainer.innerHTML = `
                <div class="spec-row">
                    <input type="text" name="specifications[]" placeholder="Key" class="form-input spec-input">
                    <input type="text" name="specifications[]" placeholder="Value" class="form-input spec-input">
                </div>
            `;
            document.getElementById('imagePreview').innerHTML = '';
            productModal.show();
        });
    });

    // Add specification row
    if (addSpecButton && specContainer) {
        addSpecButton.addEventListener('click', function () {
            const specRow = document.createElement('div');
            specRow.className = 'spec-row';
            specRow.innerHTML = `
                <input type="text" name="specifications[]" placeholder="Key" class="form-input spec-input">
                <input type="text" name="specifications[]" placeholder="Value" class="form-input spec-input">
            `;
            specContainer.appendChild(specRow);
        });
    }

    // Handle select all checkbox
    if (selectAll) {
        selectAll.addEventListener('change', function () {
            selectItems.forEach(item => {
                item.checked = this.checked;
            });
            bulkDeleteBtn.disabled = !Array.from(selectItems).some(item => item.checked);
        });
    }

    // Handle individual checkbox changes
    selectItems.forEach(item => {
        item.addEventListener('change', function () {
            bulkDeleteBtn.disabled = !Array.from(selectItems).some(item => item.checked);
            selectAll.checked = Array.from(selectItems).every(item => item.checked);
        });
    });

    // Handle bulk delete
    if (bulkDeleteForm) {
        bulkDeleteForm.addEventListener('submit', function (e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete the selected products?')) {
                this.submit();
            }
        });
    }

    // Handle single delete
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function () {
            const productId = this.dataset.id;
            if (confirm('Are you sure you want to delete this product?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = "{{ route('admin.products.delete', ':id') }}".replace(':id', productId);
                form.innerHTML = `
                    @csrf
                    @method('DELETE')
                `;
                document.body.appendChild(form);
                form.submit();
            }
        });
    });
});