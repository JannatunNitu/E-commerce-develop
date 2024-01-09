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
                <h5 class="card-header">Password Update</h5>
            <div class="card-body">
                <form class="card-body" action="{{ route('admin.update.password') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Current Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" name="old" />
                        </div>
                        @error('old')
                                    <span style="font-size: ; color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">New Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" name="password" />
                        </div>
                        @error('password')
                                    <span style="font-size: ; color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Confirm Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" name="password_confirmation" />
                        </div>
                        @error('password_confirmation')
                        <span style="font-size: ; color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <button class="btn btn-primary px-4">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>   
        </div>
    </div>


</div>
@endsection
