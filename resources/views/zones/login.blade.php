@extends('zones.mains')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <style>
                .text-center h2 {
                    height: 78px; /* Adjust the height value as needed */
                }

                .custom-input {
                    padding: 10px; /* Adjust the padding as needed */
                }

                .custom-btn {
                    padding: 10px 20px; /* Adjust the padding as needed */
                }
            </style>





<style>
    .card-header {
      text-align: center;
    }
  
    .card-header h4 {
      display: inline-block;
    }
  </style>
  
  <div class="card-header" style="text-align: center; margin-left:200px; width:999px;margin-top:1px;">
    <h2>Login</h2>
</div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input <br> <br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('login.store') }}" method="POST" class="text-center">
        @csrf
        <div class="card" style="width:977px; height:250px; margin-left:200px; margin-top:5px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Email*</strong>
                    <input type="text" name="Email" class="form-control custom-input" placeholder="Email">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Password*</strong>
                    <input type="password" name="Password" class="form-control custom-input" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <button type="submit" class="btn btn-primary custom-btn">Login</button>
        </div>
        
    </form>
</div>
</div>
@endsection 
