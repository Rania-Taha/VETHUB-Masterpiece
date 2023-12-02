@extends('admin.layouts.master')


@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                    <h3 class="page-title">Blogs</h3>

                </div>
                <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; ">

                    <a href="{{ url('blog/create') }}" class="btn btn-md" title="Add New Service"
                        style="background-color: #7d7d7d; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                        + Add New Blog
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

                                        <tr style="text-align: center; vertical-align: middle;" >
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Section1</th>
                                            <th>Section2</th>
                                            <th>Section3</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th >Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blog as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td >
                                               
                                                <?php
                                                $description1 = strip_tags($item->short_description);
                                                $limit = 10; // Adjust this to your desired character limit
                                            
                                                if (strlen($description1) > $limit) {
                                                    $shortDescription = substr($description1, 0, $limit) . '...';
                                                } else {
                                                    $shortDescription = $description1;
                                                }
                                                ?>
                                            
                                                {{ $shortDescription }}</td>
                                            <td >
                                                
                                                <?php
                                                $about1 = strip_tags($item->section1 );
                                                $limit = 10; // Adjust this to your desired character limit
                                            
                                                if (strlen($about1) > $limit) {
                                                    $about = substr($about1, 0, $limit) . '...';
                                                } else {
                                                    $about = $about1;
                                                }
                                                ?>
                                            
                                                {{ $about }}
                                                
                                                 </td>

                                                 <td><?php
                                                    $about2 = strip_tags($item->section2 );
                                                    $limit = 10; // Adjust this to your desired character limit
                                                
                                                    if (strlen($about2) > $limit) {
                                                        $about1 = substr($about2, 0, $limit) . '...';
                                                    } else {
                                                        $about1 = $about2;
                                                    }
                                                    ?>
                                                
                                                    {{ $about1 }}</td>
                                                </td>

                                                <td>
                                                    <?php
                                                    $about2 = strip_tags($item->section3 );
                                                    $limit = 10; // Adjust this to your desired character limit
                                                
                                                    if (strlen($about2) > $limit) {
                                                        $about1 = substr($about2, 0, $limit) . '...';
                                                    } else {
                                                        $about1 = $about2;
                                                    }
                                                    ?>
                                                
                                                    {{ $about1 }}</td>
                                                   

                                            <td><img src="{{ asset($item->image1) }}" style="height: 100px; width: 100px;">
                                            </td>
                                            <td><img src="{{ asset($item->image2) }}" style="height: 100px; width: 100px;">
                                            </td>
 
                                            <td class="text-right">
                                                <div class="actions">
                                                  
                      
                                                        <a class="btn btn-md bg-success-light" href="{{ route('blog.edit', ['blog' => $item->id]) }}">Edit</a>


                                                        <form method="POST"
                                                        action="{{ url('/blog' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-md bg-danger-light"
                                                            title="Delete Working Hours"
                                                            onclick="return confirm('Confirm delete?')"> Delete</button>
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


   



    <!-- Delete Modal -->
    {{-- <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!--	<div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>-->
                <div class="modal-body">
                    <div class="form-content p-2">
                        <h4 class="modal-title">Delete</h4>
                        <p class="mb-4">Are you sure want to delete?</p>
                        <button type="button" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /Delete Modal -->
    {{-- </div> --}}
    <!-- /Main Wrapper -->



@endsection
