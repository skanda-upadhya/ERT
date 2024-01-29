@extends('zones.main')

@section('content')

<h2 style="margin-right:1090px;font-weight: bold;margin-top:-77px;">Reports </h2>
<div class="green-textbox"></div>
<style>
    .green-textbox {
        background-color: green;
        margin-top:40px;
        padding: 20px;
        border-radius: 10px;
        color: white;
        width:67px; /* Adjust width as needed */
        margin-left:700px; /* Adjust margin as needed */
    }
</style>
<h4 style="margin-top:-35px;margin-left:410px;font-weight: bold;font-size:20px;">Available </h4>
<div class="red-textbox"></div>
<h4 style="margin-top:-35px;margin-left:1059px;font-weight: bold;font-size:20px;"> Not Available </h4>
<style>
    .red-textbox {
        background-color:red;
        margin-top:-40px;
        padding: 20px;
        border-radius: 10px;
        color: white;
        width:67px; /* Adjust width as needed */
        margin-left:1000px; /* Adjust margin as needed */
    }
</style>
<div class="container pt-4 px-4">
    <div class="card" style="width:1238px; height: 70px; margin-left:-21px; margin-top: 5px;height:67px;text-align: center;">
        
        <div class="row">
            <div class="form-group col-md-4" style="margin-top:-17px;width:249px;margin-left:40px;">
                <label class="fw-bold" style="margin-top:-190px;"></label>
                <select name="zone" id="zone" class="form-select">
                    <option value="">Select Zone</option>
                    <option value="Assembly">Zone 1</option>
                    <option value="GD">Zone 2</option>
                    <option value="TNGA">Zone 3</option>
                </select>
            </div>

            <button class="btn btn-primary" type="button" style="margin-top:10px;margin-left:20px;width:77px;height:34px;" id="searchButton">Search</button> <!-- Add search button -->    
    </div>
</div>
</div> 

<div class="container pt-4 px-4">
    <div class="card" style="width:1238px; height: 70px; margin-left:-21px; margin-top:-28px;height:67px;text-align: center;">
        <h4 style="margin-right:867px;font-weight: bold;margin-top:10px;font-size:21px;">Zone Name:Zone 1 </h4>
        <h5 style="margin-left:750px;font-weight: bold;margin-top:-31px;font-size:17px;">Last Updated on:26th Jan 2024@ 10:00 AM </h5>
    </div>
</div>
    
        <section class="bg-light rounded p-3">
        <div class="row">
            <div class="row">
                <div class="form-group col-md-12">
                

                </div>
                <div class="col-md-12">
                    <table id="myTable" class="table">
                        <thead>
                            <tr class="header">
                               

                                <th>Sr</th>
                                <th>Profile Picture</th>
                               
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Department</th>
                                <th>Specialization</th>
                            
                              
                                <th>Availability</th>
                                <!-- <th>Work Permit</th> -->
                            </tr>
                        </thead>
            

                    

</div>
    @endsection