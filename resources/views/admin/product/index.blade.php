@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Input Data Products</h4>
    </div><!-- end card header -->

    <div class="card-body">
    
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="firstNameinput" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Product Name" id="firstNameinput">
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="lastNameinput" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Rp." id="lastNameinput">
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="compnayNameinput" class="form-label">Description</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea5" rows="3"></textarea>
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="ForminputState" class="form-label">Category</label>
                        <select id="ForminputState" name="category" class="form-select" data-choices="" data-choices-sorting="true">
                            <option selected="">Choose...</option>
                            <option selected="Alat">Alat</option>
                            <option selected="Pomade">Pomade</option>
                            <option selected="Minyak">Minyak</option>
                        </select>
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="lastNameinput" class="form-label">Image</label>
                        <input class="form-control @error('image') is-invalid @enderror"  name ="image" type="file" id="formFile">
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Input Data Products</h4>
    </div><!-- end card header -->
    
    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
        <thead>
            <tr>
               

                <th>No.</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category Product</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $d)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->name }}</td>
                <td>{{ $d->price }}</td>
                <td>{{ $d->desc }}</td>
                <td>{{ $d->category }}</td>
                <td><img src="/image/{{ $d->image }}" width="100px"></td>
                <td>
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="">
                            <form action="{{route('products.destroy', $d->id)}}" method="POST">
                                @csrf
                            <li><a class="dropdown-item edit-item-btn" href="{{ route('products.edit', $d->id) }}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                            <li>
                                @method('delete')
                                <button type="submit" class="dropdown-item remove-item-btn" onclick="return confirm('Are you sure?')">
                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                </button>
                              
                            </li>
                            </form>
                        </ul>
                    </div>
                </td>
            </tr>
            @empty
                
            @endforelse
           
            
        </tbody>
    </table>
        {{-- {{ $dataTable->table() }} --}}
    
           
    <div class="card-body">
    
    </div>
</div>
@endsection

   