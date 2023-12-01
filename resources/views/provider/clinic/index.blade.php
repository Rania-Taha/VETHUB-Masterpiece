@extends('provider.layouts.master')


@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <br>
                        <br>
                        <h3 class="page-title">My Clinic</h3>
                        
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
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th >About</th>
                                            <th>Location_map</th>
                                            <th>Image</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach($clinic as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td >
                                               
                                                <?php
                                                $description1 = strip_tags($item->description);
                                                $limit = 30; // Adjust this to your desired character limit
                                            
                                                if (strlen($description1) > $limit) {
                                                    $shortDescription = substr($description1, 0, $limit) . '...';
                                                } else {
                                                    $shortDescription = $description1;
                                                }
                                                ?>
                                            
                                                {{ $shortDescription }}</td>
                                            <td >
                                                
                                                <?php
                                                $about1 = strip_tags($item->about );
                                                $limit = 30; // Adjust this to your desired character limit
                                            
                                                if (strlen($about1) > $limit) {
                                                    $about = substr($about1, 0, $limit) . '...';
                                                } else {
                                                    $about = $about1;
                                                }
                                                ?>
                                            
                                                {{ $about }}
                                                
                                                 </td>
                                                 <td>{{ Illuminate\Support\Str::limit($item->location_map, 22) }}</td>

                                            <td><img src="{{ asset($item->image) }}" style="height: 100px; width: 100px;">
                                            </td>
 
                                            <td class="text-right">
                                                <div class="actions">
                                                  
                                                    <a class="btn btn-primary" href="{{ route('clinic.edit', ['clinic' => $item->id]) }}">update</a>
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
