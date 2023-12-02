@extends('admin.layouts.master')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Users</h3>

                    </div>
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; ">

                        <a href="{{ url('user/create') }}" class="btn btn-md" title="Add New Service"
                            style="background-color: #7d7d7d; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                            + Add New User
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
                                <table class="datatable table table-hover table-center mb-0"
                                    style="border-collapse: collapse; width: 100%; margin-bottom: 10px;">
                                    <colgroup>
                                        <col style="width: 18%;">
                                        <col style="width: 15%;">
                                        <col style="width: 13%;">
                                        <col style="width: 12%;">
                                        <col style="width: 12%;">
                                        <col style="width: 12%;">
                                        <col style="width: 18%;">
                                    </colgroup>
                                    <thead style="background-color: #e8e7e7; color: black; ">
                                        <tr class="text-center">
                                            <th style="padding: 15px;">User</th>
                                            <th style="padding: 15px;">Password</th>
                                            <th style="padding: 15px;">Phone</th>
                                            <th style="padding: 15px;">Address</th>
                                            <th style="padding: 15px;">Role</th>
                                            <th style="padding: 15px;">Clinic Name</th>
                                            <th style="padding: 15px;">Actions</th>
                                        </tr>
                                    </thead>

                                 <tbody style="font-size: 14px">
                                        @foreach ($user as $item)
                                            <tr style="color: rgb(30, 30, 30)">
                                                <td class="sorting_1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-3" style="margin-right: 7px">
                                                            <img src="{{ $item->image }}" alt="Avatar"
                                                                class="rounded-circle">
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span>{{ $item->first_name }} {{ $item->last_name }}</span>
                                                            <small class="text-truncate">{{ $item->email }}</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    {{ Illuminate\Support\Str::limit($item->password, 17) }}</td>

                                                <td class="text-center">{{ $item->phone }}</td>
                                                <td class="text-center">{{ $item->address }}</td>
                                                <td class="text-center">{{ $item->role }}</td>
                                                <td class="text-center">{{ optional($item->clinic)->name ?? '-' }}</td>
                                                <td class="text-center">
                                                    <div class="actions">

                                                        
                                                        <a class="btn btn-md bg-success-light" href="{{ route('user.edit', ['user' => $item->id]) }}">Edit</a>


                                                        <form method="POST"
                                                        action="{{ url('/user' . '/' . $item->id) }}"
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
                                            <!-- Edit Modal -->
                                            <div id="edit_user_{{ $item->id }}" class="modal fade" role="dialog">
                                                <!-- Your edit user modal content here -->
                                            </div>
                                            <!-- Delete Modal -->
                                            <div id="delete_user_{{ $item->id }}" class="modal fade" role="dialog">
                                                <!-- Your delete user modal content here -->
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="pagination mt-3">
                                {{ $page->links() }} <!-- Pagination links -->
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
