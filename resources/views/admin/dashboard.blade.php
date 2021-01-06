@extends('admin.admin_dashboard')

@section('content')           
<div class="alert alert-success text-center">
    <h4>Welcome {{ Auth::user()->Firstname }} to the dashboard</h4>
</div>
<div class="main-wrapper">
    <h1 class="text-center dashboard-welcome">{{ Auth::user()->Firstname }}</h1>
</div>
  </div>
    </div>
</div>    
 
@endsection