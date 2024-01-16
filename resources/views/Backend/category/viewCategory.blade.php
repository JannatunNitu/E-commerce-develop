@extends('Backend.layouts.mainlayouts')

@section('Main_backend')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category</h4>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>All Category</a>
                </li>
                </li>
            </ul>
            <div class="card mb-4">                          
                <hr class="my-0">   
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <th>Category Slug</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @forelse ($categories as $key => $category)
                                                   
                                                    <tr>
                                                        <td>{{ $categories->firstItem() + $key }}</td>
                                                        <td>{{ $category->category_name }}</td>
                                                        <td>{{ $category->slug }}</td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm" href="{{ route('category.edit',$category->slug)}}">Edit</a>
                                                            <a class="btn btn-danger btn-sm" href="{{ route('category.delete',$category->id) }}">Trash</a>
                                                            {{-- <button class="btn btn-sm btn-danger button">Delete</button>
                                                            <form action="" method="get">
                                                                @csrf
                                                            </form>     --}}
                                                        </td>
                                                    </tr>
                                                    @empty                                 
                                                    <tr>
                                                        <td colspan="5" class="text-center">No Category</td>
                                                    </tr>
                                                    @endforelse
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <th>Category Slug</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="row">
                                            {{ $categories->links() }}
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>  
    </div>             
                @push('script')
                    <script>
                        var button = $('.button')
                        button.on('click', function() {
                            var form = $(this).next('form');
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    )
            
                                    form.submit()
                                }
                            })
                        })
                    </script>
                @endpush
   
@endsection