@extends('admin.admin_dashboard')

@section('content')
<div class="container mb-3">
<h2 class="text-center py-2">Add new Product</h2>
    <form method="POST" action="{{route('addproduct.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Product Name</label> 
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="image">Product Image</label>
                <input type="file" name="image" class="form-control-file" accept="image/*" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="price">Price</label> 
                <input class="form-control" required="required" name="price" type="text">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
               <label for="Quantity">Quantity</label><br>
               <input class="form-control" type="text" name="Quantity" required>
            </div>
        </div>                       

        <div class="row">
            <div class="col-md-6">
                <button type="submit" name="upload" class="btn btn-primary" style="width:120px; font-size:20px">
                Submit
                </button>
            </div>
        </div>
    </form>
</div>

@endsection