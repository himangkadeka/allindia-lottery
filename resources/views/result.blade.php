@extends('layouts.guest')
@section('title','All India Lottery')
@section('content')

    <style>
        body {
            background-color: #f9f3f3;
        }
        .lottery-container {
            border: 2px solid #999;
            padding: 30px;
            background-color: #fdf6f6;
            max-width: 960px;
            margin: auto;
        }
        .lottery-header h2 {
            font-weight: 900;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        .table th {
            color: blue;
            font-weight: bold;
        }
        footer {
            background: #000c61;
            color: white;
            padding: 10px 0;
            font-size: 13px;
        }
    </style>

    <div class="lottery-container text-center">
        <div class="lottery-header mb-3">
            <h2>PLAY INDIA LOTTERY</h2>
            <h5>Daily Result Chart</h5>
            <p><strong>CONTACT FOR RESULT SMS & CUSTOMER CARE: 9555999608</strong></p>
        </div>

        <form method="GET" class="d-flex justify-content-center align-items-center gap-2 mb-3">
            <label for="date" class="fw-bold">Select Date</label>
            <input type="date" id="date" name="date" value="{{ $selectedDate }}" class="form-control" style="max-width: 200px;">
            <button type="submit" class="btn btn-outline-dark">Search</button>
        </form>

        <table class="table table-bordered text-center">
            <thead class="table-light">
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
    </div>

    <footer class="text-center mt-4">
        <small>
            Purchase of lottery using this website is strictly prohibited in the states where lotteries are banned.
            You must be above 18 years to play Online Lottery.<br>
            playindia-lottery.com all rights reserved.
        </small>
    </footer>

@endsection
