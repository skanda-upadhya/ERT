@extends('zones.main')

@section('content')

<h2 style="margin-right:945px;font-weight: bold;">ERT Members </h2>
<div class="container pt-4 px-4">
    <div class="card" style="width:1190px; height: 70px; margin-left:7px; margin-top: 5px; text-align: center;">
        <h2 style="margin-right:810px;font-weight: bold;font-size:24px;">ERT Members Details </h2>
        <a class="fa fa-plus float-end add" href="{{ route('ert.create') }}" style="margin-top: -27px; color: green; font-size: 20px; margin-left: 1139px;"></a>

           
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
                                <th>Name</th>
                                <th>Specialization</th>
                                <th>Phone Number</th>
                                <th>Department</th>
                                <th>Action</th>
                                <!-- <th>Work Permit</th> -->
                            </tr>
                        </thead>
            
 
                        <tbody>
                            @foreach($ert as $key => $ert)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $ert->zone }}</td>
                                    <td>{{ $ert->name }}</td>
                                    <td>{{ $ert->specialization }}</td>
                                     <td>{{ $ert->phone }}</td> 
                                     <td>{{ $ert->department}}</td> 
                                    <td style="width: 70px">
                                        <div class="d-flex">
                                            <a href="{{ route('ert.edit', ['id' => $ert->id]) }}">
                                                <i class="fa fa-edit" style="font-size:20px"></i>
                                                
                                            </a>  
                                             <a href="{{ route('ert.show', ['id' => $ert->id]) }}"> 
                                                 <i class="fa fa-eye" style="font-size:21px"></i> 
                                            </a>
                                            
                                           
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