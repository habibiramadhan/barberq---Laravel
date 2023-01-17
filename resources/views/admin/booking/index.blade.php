@extends('layouts.admin.master')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between">
      <h4 class="card-title mb-0">Data Bookings</h4>
      <a class="btn btn-soft-secondary btn-sm" href="{{route('booking.create')}}">Add</a>
    
  </div><!-- end card header -->
  
  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
      <thead>
          <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Date Time</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @forelse ($bookings as $d)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $d->user->name }}</td>
              <td>{{ $d->date }} {{ $d->time }}</td>
              <td>
                  <div class="dropdown d-inline-block">
                      <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" style="">
                          <li><a class="dropdown-item edit-item-btn" href="{{ route('booking.edit', $d->id) }}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <form action="{{route('booking.destroy', $d->id)}}" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="dropdown-item remove-item-btn" onclick="return confirm('Are you sure?')">
                                  <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                              </button>
                            </form>
                          </li>
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

   