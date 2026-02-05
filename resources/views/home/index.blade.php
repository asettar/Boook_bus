<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bus Booking</title>

    <style>
        body{
            margin:0;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#4e73df,#1cc88a);
            font-family:Arial, Helvetica, sans-serif;
        }

        .card{
            background:white;
            padding:40px;
            border-radius:12px;
            width:420px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        h1{
            text-align:center;
            margin-bottom:25px;
        }

        .field{
            margin-bottom:15px;
        }

        input{
            width:100%;
            padding:10px;
            border-radius:6px;
            border:1px solid #ddd;
            font-size:15px;
        }

        input:focus{
            outline:none;
            border-color:#4e73df;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            background:#4e73df;
            color:white;
            font-size:16px;
            border-radius:6px;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#2e59d9;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Find Your Bus</h1>

    <form action="/search" method="GET">

        <div class="field">
            <input type="text" name="start_city" placeholder="Start City" required>
        </div>

        <div class="field">
            <input type="text" name="arrival_city" placeholder="Arrival City" required>
        </div>

        <div class="field">
            <input type="datetime-local" name="start_time">
        </div>

        <div class="field">
            <input type="datetime-local" name="arrival_time">
        </div>

        <button type="submit">Search</button>

    </form>
</div>

</body>
</html>
