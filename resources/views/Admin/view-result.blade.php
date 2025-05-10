@extends('layouts.master')
@section('title','All India Lottery')
@section('content')

    <div class="container">
        <div class="text-center mb-3">
            <h2>PLAY INDIA LOTTERY</h2>
            <h5>Daily Result Chart</h5>
            <p><strong></strong></p>

            <form method="GET" class="d-flex justify-content-center align-items-center gap-2">
                <label for="date">Select Date</label>
                <input type="date" id="date" name="date" value="{{ $selectedDate }}" class="form-control" style="max-width: 200px;">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <table class="table table-bordered text-center table-striped">
            <thead class="table-dark">
            <tr>
                <th>DrawTime</th>
                <th>SANGAM</th>
                <th>CHETAK</th>
                <th>SUPER</th>
                <th>MP DELUXE</th>
                <th>BHAGYA REKHA</th>
                <th>DIAMOND</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($results as $result)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($result->time_slot)->format('h:i A') }}</td>
                    <td>{{ $result->sangam }}</td>
                    <td>{{ $result->chetak }}</td>
                    <td>{{ $result->super }}</td>
                    <td>{{ $result->mp_delux }}</td>
                    <td>{{ $result->bhagya_rekha }}</td>
                    <td>{{ $result->diamond }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No results found for selected date.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <footer class="text-center mt-4">
            <small class="text-muted">
                Purchase of lottery using this website is strictly prohibited in the states where lotteries are banned.
                You must be above 18 years to play Online Lottery.<br>
                playindialottery.com all rights reserved.
            </small>
        </footer>
    </div>

    @endsection