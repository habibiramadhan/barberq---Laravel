@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Input Data Products</h4>
    </div><!-- end card header -->

    <div class="card-body">
    
        <form action=" {{ route('HairModels.update').$hairmodel->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('Patch')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="firstNameinput" class="form-label">Model Name</label>
                        <input type="text" name ="title" class="form-control" placeholder="Cepmek Hairstyle" id="firstNameinput">
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
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea5" rows="3"></textarea>
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