
@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Services</h3>
                        
                    </div>
                  
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; " >
                     
                            <a href= "{{ url('category/create')}}" class="btn btn-success class="btn btn-success  btn-md" title="Add New Service">
                                Add New Category
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
                                    <thead style="text-align: center; vertical-align: middle;">

                                        <tr style="text-align: center; vertical-align: middle;">
                                            <th>Name</th>
                                            <th>Short description</th>
                                            <th>Long description</th>
                                            <th>image</th>
                                            <th class="text-right">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach($category as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>

                                            {{-- <td>{{ $item->short_description }}</td> --}}

                                           
                                            
                                            <td>
                                                <?php
                                                $description1 = strip_tags($item->short_description);
                                                $limit = 30; // Adjust this to your desired character limit
                                            
                                                if (strlen($description1) > $limit) {
                                                    $shortDescription = substr($description1, 0, $limit) . '...';
                                                } else {
                                                    $shortDescription = $description1;
                                                }
                                                ?>
                                            
                                                {{ $shortDescription }}
                                            </td>


                                            {{-- <td > --}}
                                                <td>
                                                    <?php
                                                    $description2 = strip_tags($item->long_description);
                                                    $limit = 30; // Adjust this to your desired character limit
                                                
                                                    if (strlen($description2) > $limit) {
                                                        $longDescription = substr($description2, 0, $limit) . '...';
                                                    } else {
                                                        $longDescription = $description2;
                                                    }
                                                    ?>
                                                
                                                    {{ $longDescription }}
                                                </td>
                                                {{-- {{ $item->long_description }}
                                            </td> --}}








                                            <td>
                                                <img src="{{ asset($item->image) }}" style="height: 100px; width: 100px;">
                                            </td>

                                            <td class="text-right">
                                                <div class="actions">
                                                    
                                                    <a class="btn btn-primary" href="{{ route('category.edit', ['category' => $item->id]) }}">update</a>
                                                    
                                                    <form method="POST" action="{{ url('/category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
