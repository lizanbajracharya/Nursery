@extends('admin.admin_dashboard')

@section('content')
<div class="container">
<h2 class="text-center py-2">Add New Blog</h2>
    <form action="{{ route('blog.store')}}" method="POST" enctype="multipart/form-data">
    
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Blog Title</label> 
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Blog Info</label> 
                <textarea type="text" cols="100" rows="10" name="details" class="form-control" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" name="upload" class="btn btn-primary d-block mx-auto" style="width:120px; font-size:20px">
                 Submit
                </button>
            </div>
        </div>
    </form>
</div>

@endsection