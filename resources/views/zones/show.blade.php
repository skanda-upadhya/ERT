@extends('zones.main')
@section('content')
<div class="container">
    <h2 class="main-title p-3 " style="margin-right:900px;font-weight: bold; margin-top:-77px;">View Zone Master</h2>
    
    <div class="row my-3">
        <div class="col-md-12 bg-light h-100 p-4 rounded">
                <div class="row">
                    <div class="form-group col-md-4" style="height:1300px;">
                        <label class="fw-bold" for="zone" style="margin-right:280px;">Zone Name*</label>
                        <input type="text" class="form-control" id="zone" name="zone" placeholder="Enter zone name" fdprocessedid="gvitjf" value="{{ $zone->zone }}">
                        <p class="name text-danger"></p>
                    </div>
                    
                    <div class="form-group col-md-8">
                        <label class="fw-bold" for="details" style="margin-right:690px;">Details*</label>
                        <textarea class="form-control" id="details" name="details" placeholder="Enter Details" fdprocessedid="akmo0w" style="width:600px; height: 77px; "> {{ $zone->details }}</textarea>
                        <p class="details text-danger"></p>
                    </div>
                </div>
                
                
                
                        <!-- Add the following line for the horizontal rule -->
                        <!-- Add the following line for the horizontal rule with increased width -->
<hr style="width:1170px; margin-top:-1140px; margin-bottom:500px; margin-left:1px;">

</div>
<h2 class="main-title p-3 " style="margin-left:-460px;font-weight: bold; margin-top:-509px;font-size:24px;">Added Department</h2>


<table class="table table-bordered" style="margin-left:100px; margin-top:-410px;width:1090px;height:200px;">
           
    
    <tbody>
        <tr>
            <td>PLANT</td>
            
        </tr>
        <tr>
            <td>UTILITY</td>
            
        </tr>
        
        <!-- Add more rows for additional departments -->
    </tbody>
</table>

    
      
    </div>
</div>


  




                    </div>
                </div>
                {{-- <div class="form-group col-md-8">
                    <label class="fw-bold" style="margin-right:710px;" for="details">Department*</label>
                    <textarea class="form-control" id="department" name="department" placeholder="Enter Details" fdprocessedid="akmo0w" style="width:560px;height:77px;"></textarea>
                    <p class="details text-danger"></p>
                </div>
            </div> --}}
                <input id="protective_ids" type="hidden" name="protective_ids">
                <input id="saftey_ids" type="hidden" name="saftey_ids">
                <input id="equipments_ids" type="hidden" name="equipments_ids">
                <input id="checklist_ids" type="hidden" name="checklist_ids">


                
                
            </div> <!-- Closing form-group col-md-4 -->
      
            <!-- Save button is outside the form-group col-md-4 -->
            <a href="{{ route('zones.index') }}" class="btn btn-danger" style="margin-right:999px; width:120px; margin-top:-170px;" data-dismiss="modal">Cancel</a>
            
        </div>
            
        </div>
            </form>
        </div>
    </div>
</div>
@endsection
