@extends('provider.layouts.master')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <br>
            <br>
            <!-- /Page Header -->

            <div class="row justify-content-center"> <!-- Center the content -->

                @foreach ($clinic as $item)
                    <div class="col-md-12"> <!-- Adjust the width of the container -->

                        <div class="border p-4 mb-4 text-center"> <!-- Center the content -->
                            <h3 class="page-title">My Clinic</h3>
                            <br>
                            <img src="{{ asset($item->image) }}" alt="Clinic Image" class="rounded-circle"
                                style="width: 200px; height: 200px; object-fit: cover; margin-bottom: 20px;">

                            <h5> Name :{{ $item->name }}</h5>

                            <h5> Location :{{ $item->location }}</h5>
                            <h6>Description :{{ Illuminate\Support\Str::limit(strip_tags($item->description), 80) }}</h6>
                            <h6> About :{{ Illuminate\Support\Str::limit(strip_tags($item->about), 70) }}</h6>
                            <center>
                                <div style="text-align: center; width:600px; ">
                                    {!! $item->location_map !!} <!-- Center the map -->
                                </div>
                            </center>
                            <a class="btn btn-lg bg-success-light"
                                href="{{ route('clinic.edit', ['clinic' => $item->id]) }}">Edit</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
