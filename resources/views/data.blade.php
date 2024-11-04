<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClodRoom</title>
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

        .grid-item:hover {
            transform: scale(1.02);
            cursor: pointer;
        }

        .grid-item div {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="grid-container">
    @foreach ($data as $item)
        <div class="grid-item" onclick="goToPage('{{ $item['id'] }}')">
            <div>
                <p>دما:</p>
                <p>{{ $item['temperature'] }}°</p>
            </div>
            <div>
                <p>رطوبت:</p>
                <p>{{ $item['humidity'] }}%</p>
            </div>
            <div>
                <p>CO2:</p>
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