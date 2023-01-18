@extends('layouts.admin.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Input Data Products</h4>
    </div><!-- end card header -->

    <div class="card-body">
    
        <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="firstNameinput" class="form-label">Product Name</label>
                        <input type="text" class="form-control" value="{{ $product->name }}" name="name" placeholder="Product Name" id="firstNameinput">
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="lastNameinput" class="form-label">Price</label>
                        <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Rp." id="lastNameinput">
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="compnayNameinput" class="form-label">Description</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea5" rows="3">{{ $product->desc }}</textarea>
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="ForminputState" class="form-label">Category</label>
                        <select id="ForminputState" name="category" class="form-select" data-choices="" data-choices-sorting="true">
                            <option selected="">{{ $product->category }}</option>
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
    
@endsection