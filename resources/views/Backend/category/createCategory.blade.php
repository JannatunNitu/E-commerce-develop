@extends('Backend.layouts.mainlayouts')

@section('Main_backend')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category</h4>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Create Category</a>
                </li>
                </li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <p style="padding: 0.5rem; background-color:#0d6efd;color:white;">Category</p>
                            <form class="card-body" action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Category Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="catName" name="category_name" />
                                        @error('Category_Name')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
        
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Category Slug</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="slug" name="slug" />
                                    </div>
                                </div>
        
{{--         
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Category Image</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" class="form-control" id="image" name="image" />
                                        @error('image')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
        
                                </div> --}}
        
                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"></h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <img src="{{ asset('images/image_placeholder.png') }}" alt="" id="show_image"
                                            width="100" style="border-radius: 12px">
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button class="btn btn-primary px-4">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- form end --}}
                    {{-- Subcategoy starting --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <p style="padding: 0.5rem; background-color:#0d6efd;color:white;">Sub-Category</p>
                            <form class="card-body" action="" method="POST">
                                @csrf
        
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Select Category</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <select name="category_id" class="form-control">
                                            <option label="Choose One"></option>
                                           
                                                <option value=""></option>
                                         
                                                <option selected>No Category</option>
                                          
                                        </select>
                                        @error('category_id')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Add Sub Category</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="subName" name="SubCategory_Name" />
                                        @error('SubCategory_Name')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Sub Category Slug</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="sub_slug" name="SubCategory_Slug" />
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
                 <script>
                    var catName = $('#subName');
                    catName.on('keyup', function() {
                        var value = $(this).val();
                        var convertValue = value.split(' ').join('-').toLowerCase();
                        $('#sub_slug').val(convertValue);
                    })
                </script>
            @endpush
   
@endsection