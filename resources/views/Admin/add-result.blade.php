@extends('layouts.master')
@section('title','All India Lottery')
@section('content')


    <div class="container mt-2">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Enter Lottery Results</h5>
                <a href="{{route('upload-excel')}}" class="btn btn-danger">Upload Excel</a>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{route('insert-result')}}" method="POST">
                @csrf

                <!-- Date Input -->
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input
                                type="date"
                                class="form-control"
                                id="date"
                                name="date"
                                value="{{ old('date', \Carbon\Carbon::today()->toDateString()) }}"
                                required
                        >
                    </div>


                    <!-- Time Slot Dropdown -->
                    <div class="mb-3">
                        <label for="time_slot" class="form-label">Time Slot</label>
                        <select class="form-select" id="time_slot" name="time_slot" required>
                            @for ($i = strtotime('09:00'); $i <= strtotime('21:00'); $i += 900)
                                <option value="{{ date('H:i:s', $i) }}">{{ date('h:i A', $i) }}</option>
                            @endfor
                        </select>
                    </div>

                    <!-- Category Inputs -->
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="sangam" class="form-label">SANGAM</label>
                            <input type="text" class="form-control" name="sangam" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="chetak" class="form-label">CHETAK</label>
                            <input type="text" class="form-control" name="chetak" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="super" class="form-label">SUPER</label>
                            <input type="text" class="form-control" name="super" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="mp_delux" class="form-label">MP DELUXE</label>
                            <input type="text" class="form-control" name="mp_delux" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="bhagya_rekha" class="form-label">BHAGYA REKHA</label>
                            <input type="text" class="form-control" name="bhagya_rekha" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="diamond" class="form-label">DIAMOND</label>
                            <input type="text" class="form-control" name="diamond" required>
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Submit Results</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection