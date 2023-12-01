div<div class="tab-pane fade" id="password" role="tab" aria-labelledby="password-tab">



    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-lg-10 col-md-5">
            <div class="p-3 py-5">
                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.profile.edit') }}" enctype="multipart/form-data">

                        <div class="card-body pt-2 mt-1">
                            <div class="row mt-2 gy-4">



                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="address">Current Password</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="address" value="{{ $user->password }}" />

                                    </div>
                                    @error('password')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="address">New Password</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="address" value="{{ $user->password }}" />

                                    </div>
                                    @error('password')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <label for="address">Confirm Password</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="address" value="{{ $user->password }}" />

                                    </div>
                                    @error('password')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="reset" class="btn  btn-outline-danger">Reset Password</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


</div>
