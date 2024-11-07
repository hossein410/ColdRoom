<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClodRoom</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        @font-face {
            font-family: 'Vazir';
            src: url('../fonts/vazir/Vazir.ttf') format('truetype');
            font-weight: normal;
        }

        body {
            font-family: 'Vazir', sans-serif;
            direction: rtl;
            padding: 30px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .grid-item {
            direction: rtl;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: right;
            transition: transform 0.3s;
        }
        .title {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .title1{

            flex-direction: column-reverse;
        }
        /*.id{*/
        /*    padding: 10px;*/
        /*    border-radius: 5px;*/
        /*    border: 1px solid #ddd;*/
        /*    text-align: center;*/
        /*    display:inline-list-item;*/
        /*}*/


        .grid-item:hover {
            transform: scale(1.02);
            cursor: pointer;
        }

        .grid-item div {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        @media (max-width: 1200px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>

<div class="grid-container">
    @foreach ($data as $item)
        <div class="grid-item" onclick="goToPage('{{ $item['id'] }}')">
            <div class="title1">
{{--                <div class="id">{{$item['id']}}</div>--}}
                <h3 class="title">{{$item['title']}}:</h3>
            </div>
            <div>
                <p class=""> سنسور آی دی: </p>
                <p>{{ $item['sensorId'] }}</p>
            </div>
            <div>
                <p class="bi bi-thermometer-snow">دما: </p>
                <p>{{ $item['temp'] }}°</p>
            </div>
            <div>
                <p class="bi bi-moisture">رطوبت:</p>
                <p>{{ $item['humidity'] }}%</p>
            </div>
            <div>
                <p class="bi bi-eyedropper">CO2:</p>
                <p>{{ $item['co2'] }}</p>
            </div>
        </div>
    @endforeach
</div>

<script>
    function goToPage(itemId) {
        window.location.href = '/next-page/' + itemId;
    }
</script>

</body>
</html>
