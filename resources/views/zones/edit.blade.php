@extends('zones.main')
@section('content')
<div class="container">
    <h2 class="main-title p-3 " style="margin-right:900px;font-weight: bold; margin-top:-77px;">Edit Zone Master</h2>
    
    <div class="row my-3">
        <div class="col-md-12 bg-light h-100 p-4 rounded">
            <form action="{{ route('zones.update', $zone->id) }}" method="POST">       
                @csrf
                <div class="row">
                    <div class="form-group col-md-4" style="height:1300px;">
                        <label class="fw-bold" for="zone" style="margin-right:280px;">Zone Name*</label>
                        <input type="text" class="form-control" id="zone" name="zone" placeholder="Enter zone name" fdprocessedid="gvitjf" value="{{ $zone->zone }}">
                        <p class="name text-danger"></p>
                    </div>
                    
                    <div class="form-group col-md-8">
                        <label class="fw-bold" for="details" style="margin-right:690px;">Details</label>
                        <textarea class="form-control" id="details" name="details" placeholder="Enter Details" fdprocessedid="akmo0w" style="width:600px; height: 77px; "> {{ $zone->details }}</textarea>
                        <p class="details text-danger"></p>
                    </div>
                </div>
                
                
                
                        <!-- Add the following line for the horizontal rule -->
                        <!-- Add the following line for the horizontal rule with increased width -->
<hr style="width:1170px; margin-top:-1140px; margin-bottom:500px; margin-left:1px;">

</div>
<h2 class="main-title p-3 " style="margin-left:-460px;font-weight: bold; margin-top:-509px;font-size:24px;">Add Department</h2>
<div class="form-group p-1">
   
    <select name="name" id="name" class="form-select" style="width:200px;margin-top:-450px;margin-left:34px;">
        <option value="">Choose Department</option>
        @foreach($department as $row)
            <option value={{$row->name}}>
                {{$row->name}}
            </option>
        @endforeach
    </select>
    
        
    </select>
    <a class="fa fa-plus float-end add" href="{{ route('zones.create') }}" style="margin-top: -27px; color: green; font-size: 20px; margin-right:930px;"></a>
<style>
    .fa.fa-plus.float-end.add {
        text-decoration: none;
    }
    </style>
      <h2 class="main-title p-3 " style="margin-left:-860px;font-weight: bold; margin-top:77px;font-size:24px;">Added Department</h2>

      <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="dept_table">
            <!-- Here you should loop through departments and display them -->
            @foreach($department as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>
                        <!-- Add delete button here -->
                        <a href="#" class="text-danger delete-department"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
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
            <a href="{{ route('zones.index') }}" class="btn btn-danger" style="margin-right:999px; width:120px; margin-top:-140px;" data-dismiss="modal">Cancel</a>
            <button type="submit" class="btn btn-success save" id="btna" style="margin-left:989px;width:120px;margin-top:-189px;">Update</button>
        </div>
            
        </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
    // Event handler for clicking delete icon
    $(document).on('click', '.delete-department', function (e) {
        e.preventDefault();
        // Get the closest row and remove it
        $(this).closest('tr').remove();
    });

    // Event listener for when a new department is added to the table
    $('#name').change(function() {
        // Get the selected department name
        var selectedDepartment = $(this).val();
        // If the selected department is not empty, add it to the table
        if (selectedDepartment !== "") {
            // Remove any existing selected department from the table
            $('#dept_table tr').remove();
            // Add the selected department to the table
            var newRow = '<tr><td>' + selectedDepartment + '</td><td><button type="button" class="fa fa-trash-o delete-department" style="font-size:20px; margin-left:10px; color: red"></button></td></tr>';
            $('#dept_table').append(newRow);
        } else {
            // If no department is selected, clear the table
            $('#dept_table tr').remove();
        }
    });
});


$(document).ready(function() {
    $('#add_btn').click(function() {
        var dept_id = $('#dept option:selected').val()
        var dept_name = $('#dept option:selected').text()
        var dis = `
        <tr>
            <td style="display:none;">${dept_id}</td>
            <td>${dept_name}</td>
            <td>
                <a href="#" class="text-danger" ><i class="fa fa-trash"></i> </a>
            </td>
        </tr>`
        $('#dept_table').append(dis)
    })
    var dept_ids = []
    $('#save_btn').click(function() {
        // alert('clicked')
        $('#dept_table ').each(function() {
            var row = $(this).closest('tr')
            var dept_id = $(this).find('td:eq(0)').text().trim()
            dept_ids.push({
                dept_id: dept_id
            })
        })
        console.log(dept_ids)
        var zone_name = $('#zone').val()
        var zone_details = $('#details').val()
        $.ajax({
            type: 'POST',
            url: '{{route('zones.store')}}',
            data: {
                dept_ids: dept_ids,
                zone_name: zone_name,
                zone_details: zone_details,
            },
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                alert(response.success)
                window.location.href = '{{ route('zones.index') }}'; // Redirect to zonemaster page
            }
        })
    })
})
</script>
@endsection
