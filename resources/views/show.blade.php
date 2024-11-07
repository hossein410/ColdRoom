{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Dashboard</title>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            font-family: Arial, sans-serif;--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            align-items: center;--}}
{{--        }--}}
{{--        .dashboard {--}}
{{--            display: grid;--}}
{{--            grid-template-columns: 1fr 2fr;--}}
{{--            gap: 20px;--}}
{{--            width: 90%;--}}
{{--            max-width: 1200px;--}}
{{--        }--}}
{{--        .channel, .chart {--}}
{{--            border: 1px solid #ddd;--}}
{{--            padding: 20px;--}}
{{--            border-radius: 8px;--}}
{{--            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);--}}
{{--        }--}}
{{--        .channel {--}}
{{--            display: flex;--}}
{{--            align-items: center;--}}
{{--            justify-content: space-between;--}}
{{--        }--}}
{{--        .channel p {--}}
{{--            font-size: 18px;--}}
{{--        }--}}
{{--        .chart {--}}
{{--            height: 300px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<h1>Dashboard</h1>--}}
{{--<div class="dashboard">--}}
{{--    <!-- کانال‌ها -->--}}
{{--    <div class="channel">--}}
{{--        <p>Channel 1</p>--}}
{{--        <p>20.9 °C</p>--}}
{{--    </div>--}}
{{--    <div class="channel">--}}
{{--        <p>Channel 2</p>--}}
{{--        <p>18.99 °C</p>--}}
{{--    </div>--}}
{{--    <div class="channel">--}}
{{--        <p>Channel 3</p>--}}
{{--        <p>21.11 °C</p>--}}
{{--    </div>--}}
{{--    <div class="channel">--}}
{{--        <p>Channel 4</p>--}}
{{--        <p>20.37 °C</p>--}}
{{--    </div>--}}

{{--    <!-- نمودارها -->--}}
{{--    <div class="chart">--}}
{{--        <canvas id="temperatureChart"></canvas>--}}
{{--    </div>--}}
{{--    <div class="chart">--}}
{{--        <canvas id="humidityChart"></canvas>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<script>--}}
{{--    // نمودار دما--}}
{{--    const temperatureCtx = document.getElementById('temperatureChart').getContext('2d');--}}
{{--    const temperatureChart = new Chart(temperatureCtx, {--}}
{{--        type: 'line',--}}
{{--        data: {--}}
{{--            labels: ['10:00', '10:30', '11:00', '11:30', '12:00'], // زمان‌ها--}}
{{--            datasets: [--}}
{{--                {--}}
{{--                    label: 'Channel 1',--}}
{{--                    data: [20.9, 21.2, 20.7, 20.5, 20.9],--}}
{{--                    borderColor: 'red',--}}
{{--                    fill: false--}}
{{--                },--}}
{{--                {--}}
{{--                    label: 'Channel 2',--}}
{{--                    data: [18.99, 18.7, 19.1, 18.8, 18.9],--}}
{{--                    borderColor: 'blue',--}}
{{--                    fill: false--}}
{{--                },--}}
{{--                {--}}
{{--                    label: 'Channel 3',--}}
{{--                    data: [21.11, 21.4, 21.0, 21.3, 21.1],--}}
{{--                    borderColor: 'green',--}}
{{--                    fill: false--}}
{{--                },--}}
{{--                {--}}
{{--                    label: 'Channel 4',--}}
{{--                    data: [20.37, 20.5, 20.4, 20.3, 20.6],--}}
{{--                    borderColor: 'orange',--}}
{{--                    fill: false--}}
{{--                }--}}
{{--            ]--}}
{{--        },--}}
{{--        options: {--}}
{{--            responsive: true,--}}
{{--            scales: {--}}
{{--                y: {--}}
{{--                    beginAtZero: false--}}
{{--                }--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}

{{--    // نمودار رطوبت--}}
{{--    const humidityCtx = document.getElementById('humidityChart').getContext('2d');--}}
{{--    const humidityChart = new Chart(humidityCtx, {--}}
{{--        type: 'line',--}}
{{--        data: {--}}
{{--            labels: ['10:00', '10:30', '11:00', '11:30', '12:00'],--}}
{{--            datasets: [{--}}
{{--                label: 'Humidity (%)',--}}
{{--                data: [46, 48, 45, 47, 46],--}}
{{--                backgroundColor: 'rgba(54, 162, 235, 0.2)',--}}
{{--                borderColor: 'rgba(54, 162, 235, 1)',--}}
{{--                borderWidth: 1,--}}
{{--                fill: true--}}
{{--            }]--}}
{{--        },--}}
{{--        options: {--}}
{{--            responsive: true,--}}
{{--            scales: {--}}
{{--                y: {--}}
{{--                    beginAtZero: true--}}
{{--                }--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/gaugeJS@1.3.7/dist/gauge.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 600px;
            width: 100%;
        }

        .channels {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .channel {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .gauge-container {
            padding-bottom: 103px;
            width: 100%;
            height: 321px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 8px solid #ddd;
            border-radius: 50%;
            background-color: #fff;
            box-shadow:  20px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="channels">
        <div class="channel">
            <p>Channel 1</p>
            <p>20.9 °C</p>
        </div>
        <div class="channel">
            <p>Channel 2</p>
            <p>18.99 °C</p>
        </div>
        <div class="channel">
            <p>Channel 3</p>
            <p>21.11 °C</p>
        </div>
        <div class="channel">
            <p>Channel 4</p>
            <p>20.37 °C</p>
        </div>
        <div class="gauge-container">
            <canvas id="humidityGauge" class="gauge"></canvas>
            <div id="gaugeValue" class="gauge-value">0</div>
        </div>
    </div>
</div>

<script>
    // تنظیمات گیج رطوبت
    const humidityGaugeOptions = {
        angle: 0, // زاویه گیج
        lineWidth: 0.3, // ضخامت خط
        radiusScale: 1.0, // مقیاس شعاع
        pointer: {
            length: 0.5, // طول نشانگر
            strokeWidth: 0.04, // ضخامت نشانگر
            color: '#ff3300' // رنگ نشانگر
        },
        limitMax: true,
        limitMin: true,
        colorStart: '#5eb7ff', // رنگ شروع
        colorStop: '#ff715e', // رنگ پایان
        strokeColor: '#E0E0E0', // رنگ زمینه
        generateGradient: true,
        highDpiSupport: true,
        staticZones: [
            {strokeStyle: "#5eb7ff", min: 0, max: 50},  // منطقه آبی برای مقادیر پایین
            {strokeStyle: "#ff715e", min: 50, max: 100} // منطقه قرمز برای مقادیر بالا
        ],
        staticLabels: {
            font: "10px sans-serif",  // نوع فونت
            labels: [0, 20, 40, 60, 80, 100],  // مقادیر بر روی گیج
            color: "#000000",  // رنگ متن
            fractionDigits: 0  // تعداد ارقام اعشار
        },
        renderTicks: {
            divisions: 10,
            divWidth: 1.5,
            divLength: 0.12,
            divColor: "#333333",
            subDivisions: 5,
            subLength: 0.07,
            subWidth: 0.6,
            subColor: "#666666"
        }
    };

    // ایجاد گیج و تنظیم مقدار
    window.onload = function() {
        const target = document.getElementById('humidityGauge');
        const gauge = new Gauge(target).setOptions(humidityGaugeOptions);
        gauge.maxValue = 100; // مقدار حداکثر
        gauge.setMinValue(0);  // مقدار حداقل
        gauge.animationSpeed = 32; // سرعت انیمیشن

        function updateGauge(value) {
            gauge.set(value);
        }

        // مقدار اولیه
        updateGauge(46); // می‌توانید مقدار را تغییر دهید

        // شبیه سازی تغییر مقدار
        let value = 46;
        setInterval(() => {
            value = (value + Math.floor(Math.random() * 10) - 5) % 100; // شبیه سازی تغییر مقدار
            updateGauge(value);
        }, 2000);
    };
</script>
</body>
</html>
