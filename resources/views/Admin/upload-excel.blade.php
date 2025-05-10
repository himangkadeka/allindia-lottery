@extends('layouts.master')
@section('title','All India Lottery')
@section('content')

    <div class="container py-5">
        <div class="card shadow rounded">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Upload Lottery Results via Excel</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('results.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Choose Excel File (.xls or .xlsx)</label>
                        <input type="file" name="file" class="form-control" accept=".xls,.xlsx" required>
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-upload"></i> Upload Results
                    </button>
                </form>
            </div>
        </div>
    </div>


@endsection