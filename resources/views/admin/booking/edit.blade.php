@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Edit Data Bookings</h4>
    </div><!-- end card header -->

    <div class="card-body">
    
        <form action="{{ route('booking.update', $booking->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="firstNameinput" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{$booking->date}}">
                        @error('date')
						              <span class="invalid-feedback">{{ $message }}</span>
					              @enderror
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="lastNameinput" class="form-label">Time</label>
                        <input class="form-control @error('time') is-invalid @enderror"  name="time" type="time" value="{{$booking->time}}">
                        @error('time')
						              <span class="invalid-feedback">{{ $message }}</span>
					              @enderror
                    </div>
                </div>
                <!--end col-->
              
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


   