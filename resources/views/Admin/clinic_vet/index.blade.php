
@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Clinic Vets</h3>
                      
                    </div>
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; " >
                     
                            <a href= "{{ url('clinicVet/create')}}" class="btn btn-success  btn-md" title="Add New Service">
                                Add New Vet
                            </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>

                                        <tr style="text-align: center; vertical-align: middle;">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>image</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach( $clinic_vet as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            
                                            <td> {{ $item->position }} </td>


                                            <td>
                                                <img src="{{ asset($item->image) }}" style="height: 100px; width: 100px;">
                                            </td>

                                            <td >
                                                <div class="actions">
                                                    
                                                    <a class="btn btn-primary" href="{{ route('clinicVet.edit', ['clinicVet' => $item->id]) }}">update</a>
                                                    
                                                    <form method="POST" action="{{ url('/clinicVet' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger " title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->


   

@endsection
