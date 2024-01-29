@extends('zones.main')
@section('content')
<div class="container">
    <h2 class="main-title p-3 " style="margin-right:900px;font-weight: bold;">Add Specialization</h2>
    
    <div class="row my-3">
        <div class="col-md-12 bg-light h-100 p-4 rounded">
            <form action="{{ route('specialization.store') }}" method="POST">      
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="fw-bold" style="margin-right:249px;"for="specialization">Specialization*</label>
                        <input type="text" class="form-control" id="specialization" name="specialization" placeholder="Enter Specialization" fdprocessedid="gvitjf">
                        <p class="name text-danger"></p>
                    </div>
                    <div class="form-group col-md-8">
                        <label class="fw-bold" style="margin-right:710px;" for="details">Details</label>
                        <textarea class="form-control" id="details" name="details" placeholder="Enter Details" fdprocessedid="akmo0w" style="width:560px;height:77px;"></textarea>
                        <p class="details text-danger"></p>
                    </div>
                </div>
                <input id="protective_ids" type="hidden" name="protective_ids">
                <input id="saftey_ids" type="hidden" name="saftey_ids">
                <input id="equipments_ids" type="hidden" name="equipments_ids">
                <input id="checklist_ids" type="hidden" name="checklist_ids">
                
                
                <a href="{{ route('specialization.index') }}" class="btn btn-danger" style="margin-right:999px;" data-dismiss="modal">Cancel</a>

                <button type="submit" class="btn btn-success save float-end" id="btna">Save</button>  
            </form>
        </div>
    </div>
</div>
@endsection

