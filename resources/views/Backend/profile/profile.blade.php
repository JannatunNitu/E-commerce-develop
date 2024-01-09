@extends('Backend.layouts.mainlayouts')

@section('Main_backend')


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile Settings</h4>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Admin Profile</a>
                </li>
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ route('admin.update.profile.image') }}" method="post" >
                        @csrf
                        @method('put')
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                    
                        <img name="profile_img" src="{{auth()->user()->profile_img ? asset('storage/users/'.auth()->user()->profile_img) : env('DICEBARE_API').auth()->user()->name }}"
                            alt="{{ auth()->user()->name }}" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                            
                                {{-- {{ dd(auth()->user()->profile_img) }} --}}
                                <label for="upload" class="btn btn-outline-secondary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Select new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input name="profile_img" type="file" id="upload" class="account-file-input" hidden=""
                                        accept="image/png, image/jpeg"
                                        oninput="imageUploadPreview(event, 'uploadedAvatar')">
                                </label>
                                <button type="submit" class="btn btn-primary mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Upload Photo</span>
                                </button>
                    </form>
    
                            <p class="text-muted mb-0"> Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>                           
                <hr class="my-0">
                <div class="card-body">
                    <form action="{{ route('admin.update.profile') }}" method="post" >
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{auth()->user()->name}}" placeholder="Enter your name">
                                @error('name')
                                    <span style="font-size: ; color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email" 
                                value="{{auth()->user()->email}}" placeholder="Enter your email">
                                @error('email')
                                    <span style="font-size: ; color:red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    {{-- <span class="input-group-text">BD (+880)</span> --}}
                                    <input type="text" id="phoneNumber" name="number" class="form-control" 
                                    value="{{auth()->user()->number}}" placeholder="+880 ">
                                    @error('phone')
                                    <span style="font-size: ; color:red;">{{ $message }}</span>
                                   @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Update</button>               
                        </div>
                    </form>
                </div>
        </div>
    </div>


</div>
@endsection
