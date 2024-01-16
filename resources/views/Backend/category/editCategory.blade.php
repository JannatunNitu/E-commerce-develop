@extends('Backend.layouts.mainlayouts')

@section('Main_backend')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category</h4>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Edit Category</a>
                </li>
                </li>
            </ul>
     {{-- form start --}}
     <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    @error('Category_Name')
                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 text-white">Error</h6>
                                    <div class="text-white">{{ $message }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    @error('image')
                        <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 text-white">Error</h6>
                                    <div class="text-white">{{ $message }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    <form class="card-body" action="{{ route('category.update',$editcategory->slug) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Edit Category</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="catName" name="category_name"
                                    value="{{ $editcategory->category_name }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Category Slug</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ $editcategory->slug }}" />
                            </div>
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
    {{-- form end --}}
    @push('script')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#image').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0'])
                })
            })
        </script>
        <script>
            var catName = $('#catName');
            catName.on('keyup', function() {
                var value = $(this).val();
                var convertValue = value.split(' ').join('-').toLowerCase();
                $('#slug').val(convertValue);
            })
        </script>
    @endpush
   
@endsection