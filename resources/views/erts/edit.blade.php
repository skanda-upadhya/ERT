@extends('zones.main')
@section('content')
<div class="container">
    <h2 class="main-title p-3" style="font-weight: bold;margin-right:880px;margin-top:-81px;">Add ERT Members</h2>
    
    <div class="row my-3">
        <div class="col-md-12 bg-light h-100 p-4 rounded" style="height:-200px;">
            <form action="{{ route('ert.store') }}" method="POST">      
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="fw-bold" style="margin-top:1px;margin-right:310px;">Zone*</label>
                        <select name="zone" id="zone" class="form-select" style="width:200px;margin-top:1px;margin-left:10px;">
                            <option value="">Search Zone</option>
                            @foreach($zones as $row)
                            <option value={{$row->zone}}>
                                {{$row->zone}}
                            </option>
                        @endforeach
                    </select>
                           
                    </div>
                    <div class="form-group col-md-4">
                        <label class="fw-bold" for="zone" style="margin-right:20px;margin-right:280px;">Zone Name</label>
                        <input type="text" class="form-control" id="zone" name="zone" fdprocessedid="gvitjf">
                        <p class="name text-danger"></p>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="fw-bold" for="department" style="margin-right: 20px;margin-right:278px;">Department</label>
                        <input type="text" class="form-control" id="department" name="department" fdprocessedid="gvitjf">
                        <p class="details text-danger"></p>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Add search input and button inside a form -->
                    <div class="col-md-4 offset-md-8" style="margin-left: -1px; margin-top:30px;"> <!-- Adjust the margin-right value as needed -->
                        <form id="searchForm">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Emp Name or Number" aria-label="Search" aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </div>
                              
                    <button class="btn btn-primary" type="button" style="margin-top:-60px;margin-right:287px;" id="searchButton">Search</button> <!-- Add search button -->    
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <table class="table table-bordered" style="width:1200px;">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Adhar Number</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Populate this section dynamically with search results -->
                                                <tr>
                                                    <td>Sandhya</td>
                                                    <td>74984434</td>
                                                    <td>843323</td>
                                                    <td>CS</td>
                                                    <td>Developer</td>
                                                    <td> <a class="fa fa-plus float-end add" style="margin-right:78px;"></a></td>
                                                </tr>
                                                
                                                <!-- Add more rows dynamically based on search results -->
                                            </tbody>
                                        </table>
                                 
                
                <style>
                    a.fa.fa-plus {
                        text-decoration: none;
                    }
                    </style>
                
                <h2 class="main-title p-3 " style="margin-left:-899px;font-weight: bold; margin-top:12px;font-size:26px;">Added Employee</h2>
                
                <div class="row mt-4">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Adhar Number</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                    <th>Specialization</th>
                                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sandhya</td>
                                    <td>74984434</td>
                                    <td>843323</td>
                                    <td>CS</td>
                                    <td>Developer</td>
                                    <td>
  
                                        <select name="specialization" id="specialization" class="form-select" style="width:200px;margin-top:1px;margin-left:34px;">
                                            <option value="">Select Specialization</option>
                                            @foreach($specializations as $row)
                                                <option value="{{ $row->specialization }}">{{ $row->specialization }}</option>
                                            @endforeach
                                        </select>
                                        
                                        
                                    <td> <button type="submit" class="fa fa-trash-o trash-button" style="font-size:20px; margin-left:10px; color: red" onclick="return confirm('Sure Want Delete?')"></button></td>
                                </tr>
                                <!-- Populate this section dynamically with search results -->
                                
                                <!-- Add more rows dynamically based on search results -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <style>
                    /* Remove default button styling */
                    .trash-button {
                      background: none;
                      border: none;
                      padding: 0;
                      cursor: pointer;
                    }
                  </style>
                    <a href="{{ route('zones.index') }}" class="btn btn-danger" style="margin-right:999px; width:120px; margin-top:158px;" data-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-success save" id="btna" style="margin-left:989px;width:120px;margin-top:-40px;">Save</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
