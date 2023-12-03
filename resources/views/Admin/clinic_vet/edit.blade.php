@extends('Admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <!-- Main Content -->
    <div class="main-content" style="margin-left: 290px; width: 75%; padding: 20px;">
        <section class="section">
            <div class="section-body">
                <div class="section-header">
                    <h1>Vets</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit a vet</h4>
                            </div>
                            <div class="card-body p-0">

                                <form action="{{ route('clinicVet.update', $clinic_vet->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>

                                                <img width="150px" src="{{ asset($clinic_vet->image) }}">
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="clinic_id">Clinic Name</label>
                                                <select name="clinic_id" id="clinic_id" class="form-control">
                                                    <option value="">Select Clinic</option>
                                                    @foreach ($clinics as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $clinic_vet->clinic_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                            <!-- Replace 'clinic_name' with the actual field name -->
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('clinic_id')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror


                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" value="{{ $clinic_vet->image }}"
                                                        class="form-control" id="image" placeholder="Choose an image">
                                                </div>
                                            </div>
                                            @error('image')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="service_name">Name</label>
                                                    <input type="name" name="name" value="{{ $clinic_vet->name }}"
                                                        class="form-control" id="inputEmail4" placeholder="Name">
                                                </div>
                                            </div>
                                            @error('name')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="position"> Position</label>
                                                    <input type="text" name="position"
                                                        value="{{ $clinic_vet->position }}" class="form-control"
                                                        id="inputEmail4" placeholder="Position">
                                                </div>
                                            </div>
                                            @error('position')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                            <div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
