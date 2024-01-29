@extends('zones.main')

@section('content')
<h5 style="text-align:left;font-weight: bold;">DashBoard</h5>


<div class="card" style="width:430px; height:190px; margin-left:200px; margin-top:5px; background-color: rgba(128, 0, 107, 0.23);">

    <div class="row justify-content-center">
        <!-- Your card body content goes here -->
        <h5 class="card-title" style="font-weight: bold;font-size:20px;"> Number of Zones</h5>
  
    </div>
</div>


<div class="card" style="width:430px; height:190px; margin-left:670px; margin-top:-190px;background-color: rgba(128, 0, 107, 0.23);">
    <div class="row justify-content-center">
        <!-- Your card body content goes here -->
        <h5 class="card-center" style="font-weight: bold;font-size:20px;"> Number of ERT Members</h5>
  
    </div>
</div>
<h5 style="text-align:left;font-weight: bold;">View Reports</h5>
<div class="card" style="width:290px; height:190px; margin-left:200px; margin-top:99px; background: rgba(88, 6, 223, 0.54);">
    <div class="row justify-content-center">
        <!-- Your card body content goes here -->
        <h5 class="card-center" style="font-weight: bold;font-size:20px;"> Zone 1</h5>
        
        <a href="{{ route('report.index')}}"><i class="fa fa-eye" style="font-size:21px;margin-top:70px;"> </i> </a>
    </div>
</div>

<div class="card" style="width:290px; height:190px; margin-left:560px; margin-top:-189px; background: rgba(88, 6, 223, 0.54);">
    <div class="row justify-content-center">
        <!-- Your card body content goes here -->
        <h5 class="card-center" style="font-weight: bold;font-size:20px;"> Zone 2</h5>
<a href="{{ route('report.index')}}"><i class="fa fa-eye" style="font-size:21px;margin-top:70px;"> </i> </a>
    </div>
</div>

<div class="card" style="width:290px; height:190px; margin-left:900px; margin-top:-189px; background: rgba(88, 6, 223, 0.54);">
    <div class="row justify-content-center">
        <!-- Your card body content goes here -->
        <h5 class="card-center" style="font-weight: bold;font-size:20px;"> Zone 3</h5>
        <a href="{{ route('report.index')}}"><i class="fa fa-eye" style="font-size:21px;margin-top:70px;"> </i> </a>
    </div>
</div>
@endsection
