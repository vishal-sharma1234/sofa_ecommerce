<div class="container">
    <div>
        <form action="{{ route('products.bulk-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Select File (Excel/CSV)</label>
            <input type="file" name="file" required>
            <button type="submit">Upload</button>
        </form>
    </div>
</div>
