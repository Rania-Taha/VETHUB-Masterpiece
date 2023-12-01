@extends('admin.layouts.master')


@section('content')

    <div class="container-xxl flex-grow-1 container-p-y " style="margin-left: 260px; margin-top:80px ">

        <div class="row">
            <div class="col-md-12" style="margin-top:50px">

                <div class="card mb-4">
                    <h4 class="card-header">Profile Details</h4>
                    <!-- Account -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.profile.edit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img style="width: 200px; margin-left:22px" src="{{ $user->image }}" alt="user-avatar"
                                    class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar"  />
                                <div class="button-wrapper" style="margin-left: 20px">
                                    <label for="upload" class="btn btn-primary" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" name="image" onchange="previewImage(this)" />
                                    </label>
                                    <button type="button" class="btn  btn-outline-danger account-image-reset mb-2" onclick="resetImage()">
                                        <i class="mdi mdi-reload d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
            
                                    <div class="text-muted small">Allowed JPG, GIF, or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            @error('image')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                    <div class="card-body pt-2 mt-1">
                       
                            {{-- @csrf --}}
                            <div class="row mt-2 gy-4">
                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="first_name">First Name</label>
                                        <input class="form-control" type="text" id="first_name" name="first_name"
                                            value="{{ $user->first_name }}" autofocus />
                                    </div>
                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="last_name">Last Name</label>
                                        <input class="form-control" type="text" id="last_name" name="last_name"
                                            value="{{ $user->last_name }}" autofocus />
                                        
                                    </div>
                                    @error('first_name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror @error('last_name')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="email">E-mail</label>
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ $user->email }}" placeholder="john.doe@example.com" />
                                        
                                    </div>
                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12">

                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" id="phoneNumber" name="phone" class="form-control"
                                            placeholder="+962 7" value="{{$user->phone}}" />
                                        
                                    </div>
                                    @error('phone')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="address"
                                            value="{{ $user->address }}" />
                
                                    </div>
                                    @error('address')
                                        <span style="color: red">{{ $message }}</span>
                                        @enderror
                                </div>



                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary ">Save changes</button>
                <button type="reset" class="btn  btn-outline-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
                <div class="card">

                    <div>

                        <form id="formAccountDeactivation" onsubmit="return false">


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <hr style="border-top: 1px solid gray;">



@endsection
<script>
    function previewImage(input) {
        var file = input.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('uploadedAvatar').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }

    function resetImage() {
        // Reset the image to the original image source or a default image source
        var originalImageSource = "{{ $user->image }}";
        document.getElementById('uploadedAvatar').src = originalImageSource;
        
        // Clear the input file to allow re-uploading of the same image
        document.getElementById('upload').value = '';
    }
</script>