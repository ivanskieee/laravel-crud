<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</h1>
        <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}"
            method="POST">
            @csrf
            @if (isset($product))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $product->name ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price (PHP)</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01"
                    value="{{ old('price', $product->price ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description"
                    name="description">{{ old('description', $product->description ?? '') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Add' }} Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>