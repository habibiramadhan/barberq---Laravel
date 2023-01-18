@extends('layouts.admin.master')

@push('css')
<link rel="stylesheet" href="{{ asset('cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css') }}" />

<link rel="stylesheet" href="{{ asset('cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css') }}">
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Input Data Products</h4>
    </div><!-- end card header -->

    <div class="card-body">
    
        <form action=" {{ route('HairModels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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

<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Input Data Products</h4>
    </div><!-- end card header -->
    
    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
        <thead>
            <tr>
               

                <th>No.</th>
                <th>Nama Model</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($hairmodel as $d)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->title }}</td>
                <td>{{ $d->content }}</td>
                <td><img src="/image/{{ $d->image }}" width="100px"></td>
                <td>
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="">
                            <form action="{{route('HairModels.destroy', $d->id)}}" method="POST">
                                @csrf
                            <li><a class="dropdown-item edit-item-btn" href="{{ route('HairModels.edit', $d->id) }}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
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

@push('js')
<script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--datatable js-->
<script src="{{ asset('cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/js/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/js/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/js/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>

<script src="{{ asset('admin/js/pages/datatables.init.js') }}"></script>

@endpush



   