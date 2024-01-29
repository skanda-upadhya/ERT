@extends('zones.main')
@section('content')
<div class="container">
    <h2 class="main-title p-3" style="font-weight: bold;margin-right:877px;margin-top:-81px;">View ERT Members</h2>
    
    <div class="row my-3">
        <div class="col-md-12 bg-light h-100 p-4 rounded" style="height:-200px;">
            <form action="{{ route('zones.store') }}" method="POST">      
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="fw-bold" style="margin-top:1px;margin-right:310px;">Zone</label>
                        <select name="zone" id="zone" class="form-select">
                            <option value="">Select Zone</option>
                            <option value="Assembly">Zone 1</option>
                            <option value="GD">Zone 2</option>
                            <option value="TNGA">Zone 3</option>
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
              
                  
                
                <h2 class="main-title p-3 " style="margin-left:-899px;font-weight: bold; margin-top:12px;">Added Employee</h2>
                
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
                                        <div class="form-group col-md-4">
                                            <input type="text"  class="form-control" id="First Aid" name="First Aid" fdprocessedid="First Aid">  
                                        </div> </td>
                                   
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
                    <a href="{{ route('ert.index') }}" class="btn btn-danger" style="margin-right:999px; width:120px; margin-top:158px;" data-dismiss="modal">Cancel</a>
                    
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
