

 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-lg-10 col-md-5">
            <div class="p-3 py-5">
                <br>
        
                <div class="card-body">
                    <form method="POST" action="{{ route('user.profile.edit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            @if($user->image)
    <img style="width: 200px; margin-left: 22px;" src="{{ $user->image }}" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
@else
    <!-- Default image if user does not have an image -->
    <img style="width: 200px; margin-left: 22px;" src="{{ asset('images/customer/1700005508.png') }}" alt="default-avatar" class="d-block w-px-120 h-px-120 rounded" id="defaultAvatar" />
@endif
                            <div class="button-wrapper" style="margin-left: 20px">
                                <label for="upload" class="btn btn-primary" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden
                                        accept="image/png, image/jpeg" name="image" onchange="previewImage(this)" />
                                </label>
                                {{-- <button type="button" class="btn  btn-outline-danger account-image-reset mb-2" onclick="resetImage()">
                                    <i class="mdi mdi-reload d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button> --}}
        
                                <div class="text-muted small">Allowed JPG, GIF, or PNG. Max size of 800K</div>
                            </div>
                        </div>
                        @error('image')
                        <span style="color: red">{{ $message }}</span>
                        @enderror
                           <div class="card-body pt-2 mt-1">
                           <div class="row mt-2 gy-4">
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline mb-3">
                                <label for="first_name">First Name</label>
        
                                <input class="form-control" type="text" id="first_name" name="first_name"
                                    value="{{ $user->first_name }}" autofocus />
                            </div>
                            @error('first_name')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline mb-3">
                                <label for="last_name">Last Name</label>
                                <input class="form-control" type="text" id="last_name" name="last_name"
                                    value="{{ $user->last_name }}" autofocus />
                            </div>
                            @error('last_name')
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
        
                                <input type="text" id="phoneNumber" name="phone" class="form-control" placeholder="+962 7"
                                    value="{{ $user->phone }}" />
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
                
            </div>
          </div>
        </div>
    </div>
    
    </div>
    
    
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
            var originalImageSource = "{{ $user->image }}";
            document.getElementById('uploadedAvatar').src = originalImageSource;
            
            document.getElementById('upload').value = '';
        }
    </script>