<!DOCTYPE html>
<html>
<head>
    <title>Play India Lottery Demo</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(#ffb400, #ffde59);
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .header {
            background: url('{{ asset('assets/image/1.jpg') }}') no-repeat center center;
            background-size: cover;

            color: #ffdf00;
            font-size: 30px;
            font-weight: bold;
            padding: 100px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
        }
        .head{
            background-color: rgba(0, 0, 0, 0.6);
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.9);
        }
        .info-bar {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            background: #ffdf00;
            font-weight: bold;
            font-size: 20px;
        }
        .lottery-table {
            width: 95%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
        }
        .lottery-table th, .lottery-table td {
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
        }
        .lottery-row input[type="text"] {
            width: 30px;
            text-align: center;
        }
        .login-section {
            background: #222;
            color: #fff;
            padding: 15px;
            align-items: center;
            gap: 1rem;
            display:flex;
        }
        .right-inputs {
            display: flex;
            gap: 0.5rem;
            margin-left: auto;
        }
        .login-section input {
            padding: 5px;
            margin: 5px;
        }
        .buttons {
            margin: 20px;
        }
        .buttons button {
            margin: 5px;
            padding: 10px 20px;
            background: #ffcc00;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="header">
    <h1 class="head">ALL INDIA LOTTERY</h1>
</div>

<div class="info-bar">
    <div>Next Draw Time: 09:00 AM</div>
    <div>Today Date: {{ date('d M Y') }}</div>
    <div>Now Time: <span id="clock"></span></div>
    <div>Time To Draw: Time Out</div>
</div>

<table class="lottery-table">
    <thead>
    <tr style="background-color: #f00; color: #fff;">
        <th>Name</th><th>Sr.</th><th>Win</th>
        @for ($i = 0; $i < 10; $i++) <th>{{ $i }}</th> @endfor
        <th>Qty</th><th>Amt</th><th>Time</th>
    </tr>
    </thead>
    <tbody>
    @php
        $lotteries = [
            ['name' => 'SANGAM', 'sr' => 'A', 'color' => '#ff4444'],
            ['name' => 'CHETAK', 'sr' => 'B', 'color' => '#99cc33'],
            ['name' => 'SUPER', 'sr' => 'C', 'color' => '#33b5e5'],
            ['name' => 'MP DELUXE', 'sr' => 'D', 'color' => '#ff8800'],
            ['name' => 'BHAGYA REKHA', 'sr' => 'E', 'color' => '#cc0000'],
            ['name' => 'DIAMOND', 'sr' => 'F', 'color' => '#aa66cc'],
        ];
    @endphp

    @foreach ($lotteries as $lottery)
        <tr class="lottery-row" style="background-color: {{ $lottery['color'] }}22; font-size: 18px;">
            <td><strong>{{ $lottery['name'] }}</strong><br><small>SAVERA</small></td>
            <td>{{ $lottery['sr'] }}</td>
            <td>100</td>
            @for ($i = 0; $i < 10; $i++)
                <td><input type="text" maxlength="1"></td>
            @endfor
            <td><input type="text" value="0"></td>
            <td><input type="text" value="0"></td>
            <td>{{ rand(1, 99) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="login-section">
    <label>LOGINID: <input type="text"></label>
    <label>PASSWORD: <input type="password"></label>
    <button class="btn btn-secondary">Login</button>
    <div class="right-inputs">
        <div>Total: <input type="text" value="0"></div>
        <div><input type="text" value="0"></div>
    </div>
</div>

<div class="buttons">
    <button><a href="{{ route('view-result-data') }}" style="text-decoration: none;color: #000;">RESULT CHART</a></button>
    <button>FREE ACCOUNT</button>
    {{--<button>USER LOGIN</button>--}}
    <button><a href="{{ route('login') }}" style="text-decoration: none;color: #000;">LOG IN</a></button>
    <button>HOW TO PLAY</button>
</div>

<footer>
    <p style="font-size: 12px;">Purchase of lottery using this website is strictly prohibited in the states where lotteries are banned. You must be above 18 years to play Online Lottery.</p>
</footer>
<script>
    function updateTime() {
        const now = new Date();
        const formatted = now.toLocaleTimeString('en-US', {
            hour12: true,
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('clock').textContent = formatted;
    }

    setInterval(updateTime, 1000); // update every second
    updateTime(); // initial call
</script>
</body>
</html>
