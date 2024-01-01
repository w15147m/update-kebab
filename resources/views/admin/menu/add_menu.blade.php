@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<div class="container mt-5">
    <h2>Add Menu Item</h2>

    <!-- Form for adding a menu item -->
    <form>
               <div class="mb-3">
            <label for="itemName" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="itemName" name="itemName" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="itemPhone" class="form-label">Item Phone</label>
            <input type="tel" class="form-control" id="itemPhone" name="itemPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 123-456-7890" required>
        </div>
        <div class="mb-3">
            <label for="shopName" class="form-label">Shop Name</label>
            <select class="form-select" id="shopName" name="shopName" required>
                <option value="" disabled selected>Select Shop</option>
                <option value="Shop A">Shop A</option>
                <option value="Shop B">Shop B</option>
                <option value="Shop C">Shop C</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Menu Item</button>
    </form>
</div>
</div>


    <!-- /.content-wrapper -->
@endsection
