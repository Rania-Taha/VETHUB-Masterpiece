@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Reviews</h3>

                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0" >
                                    <thead style="text-align: left; vertical-align: middle;">

                                        <tr>
                                            <th>User id</th>

                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: left; vertical-align: middle">
                                        @foreach ($review as $item)
                                            <tr >

                                                <td style="text-align: left" sty>
                                                    <ul>
                                                        <li>Username: {{ $item->user->first_name }} {{ $item->user->last_name }}</li><br>
                                                        <li>Clinic Name: {{ $item->clinic->name }}</li><br>
                                                        <li>Review: {{ $item->review_text }}</li><br>

                                                        <li>Rating: 
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $item->rating)
                                                                    <span class="fa fa-star checked" style="color: rgb(255, 217, 0);"></span>
                                                                @else
                                                                    <span class="fa fa-star" style="color: grey;"></span>
                                                                @endif
                                                            @endfor
                                                            {{-- <span style="color: gold;">{{ $item->rating }}</span> --}}
                                                        </li><br>
                                                    </ul> 
                                                </td>

                                                <td>
                                                    <div class="actions">

                                                        <form method="POST" action="{{ url('/review' . '/' . $item->id) }}"
                                                            accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger "
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
@endsection
