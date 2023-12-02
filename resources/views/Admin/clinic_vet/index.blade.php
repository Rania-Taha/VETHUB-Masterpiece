
@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Clinics Vets</h3>

                    </div>
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; ">

                        <a href="{{ url('clinicVet/create') }}" class="btn btn-md" title="Add New Service"
                            style="background-color: #7d7d7d; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                            + Add New Vet
                        </a>

                    </div>
                </div>
            </div>            <!-- /Page Header -->
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <div class="row">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <div class="col-sm-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>

                                        <tr style="text-align: center; vertical-align: middle;">
                                            <th> Vet info</th>
                                         
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach( $clinic_vet as $item)
                                        <center>   <tr>
                                            <center>   <td class="sorting_1">
                                                <center>   <div class="d-flex align-items-center">
                                                    &nbsp &nbsp  <div class="avatar avatar-sm me-3" style="margin-right: 7px">
                                                        <img src="{{ $item->image }}" alt="Avatar" style="width: 70px ; height: 65px"
                                                            class="rounded-circle"> &nbsp &nbsp
                                                    </div>
                                                    &nbsp &nbsp &nbsp
                                                    <center> <div class="d-flex flex-column ">
                                                        <span style="font-size: 16px">&nbsp &nbsp vet name : {{ $item->name }} &nbsp &nbsp
                                                            
                                                              <br> @if ($item->clinic)
                                                              &nbsp &nbsp  clinic name: {{ $item->clinic->name }}
                                                          @else
                                                              No Clinic Assigned
                                                          @endif <br>
                                                          &nbsp &nbsp position :  {{ $item->position }} &nbsp &nbsp</span>
                                                                                                                
                                                     
                                                    </div> </center>
                                                </div> </center>
                                            </td> </center>
                

                                            <td >
                                                <div class="actions">
                                                    
                                                
                                                    <a class="btn btn-md bg-success-light" href="{{ route('clinicVet.edit', ['clinicVet' => $item->id]) }}">Edit</a>


                                                    <form method="POST"
                                                    action="{{ url('/clinicVet' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-md bg-danger-light"
                                                        title="Delete Working Hours"
                                                        onclick="return confirm('Confirm delete?')"> Delete</button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr><center> 

                                        @endforeach                               
                                         </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->


   

@endsection
