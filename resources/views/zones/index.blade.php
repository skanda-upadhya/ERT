@extends('zones.main')

@section('content')

<h2 style="margin-right:945px;font-weight: bold;">Zone Master </h2>
<div class="container pt-4 px-4">
    <div class="card" style="width:1190px; height: 70px; margin-left:7px; margin-top: 5px; text-align: center;">
        <h2 style="margin-right:930px;font-weight: bold;font-size:23px;">Zone Details </h2>
        <a class="fa fa-plus float-end add" href="{{ route('zones.create') }}" style="margin-top: -27px; color: green; font-size: 20px; margin-left: 1139px;"></a>

           
    </div>
    <style>
    a.fa.fa-plus {
        text-decoration: none;
    }
    </style>
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
                                <th>Zone Name</th>
                                <th>Department</th>
                                <th>Details</th>
                                <th>Status</th>
                                <th>Action</th>
                                <!-- <th>Work Permit</th> -->
                            </tr>
                        </thead>
                <tbody>
                            @foreach($zones as $key => $zone)
                                <tr>
                                    <td>{{ $key + 1 }} </td>
                                    <td>{{ $zone->zone }} <a href="{{ route('report.index')}}"><i class="fa fa-eye" style="font-size:21px"></i> </a> </td>
                                    <td>{{ $zone->name }}</td>
                                    <td>{{ $zone->details }}</td>
                                    <td>
                                        @if($zone->status == 1)
                                        <i class="fa fa-check-circle" style="font-size:26px;color:green"></i>
                                        @endif
                                    </td>
                                    <td style="width: 70px">
                                        <div class="d-flex">
                                            <a href="{{ route('zones.edit', ['id' => $zone->id]) }}">
                                                <i class="fa fa-edit" style="font-size:20px"></i>
                                                
                                            </a> 
                                            <a href="{{ route('zones.show', ['id' => $zone->id]) }}">
                                                <i class="fa fa-eye" style="font-size:21px"></i> 
                                            </a>
                                             <form action="{{ route('zones.delete', $zone->id) }}" method="POST"> 
                                                {{-- <a class="fas fa-edit" href="{{ route('specialization.edit', ['id' => $specialization->id]) }}"></a> --}}

                                             {{-- <a class="fas fa-edit" href="{{ route('specialization.edit') }}"></a>  --}}
                                         @csrf
                                            @method('DELETE')   
                                       
                                               
                                            <style>
                                                /* Remove default button styling */
                                                .trash-button {
                                                  background: none;
                                                  border: none;
                                                  padding: 0;
                                                  cursor: pointer;
                                                }
                                              </style>
                                              
                                              <!-- Your HTML with the updated class -->
                                              <button type="submit" class="fa fa-trash-o trash-button" style="font-size:20px; margin-left:10px; color: red" onclick="return confirm('Sure Want Delete?')"></button>
                                              
                                             </form>    
                                     </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>
    @endsection
