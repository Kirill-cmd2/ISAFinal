<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenWeatherAPI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
        <div class="search">
            <input type="text" placeholder="City name" spellcheck="false">
            <button id="btn"><img src="imgs/search.png"></button>
        </div>

        <div class="weather">
            <h1 class="city">Some city</h1>

            <img src="imgs/pressure.png" class="pressure-icon">
            <h1 class="pressure">720 mm</h1>
            <h2>Pressure</h2>

            <div class="details">
                <div class="col">
                    <img src="imgs/Clear.png" class="weather-icon">
                    <div>
                        <p class="temp">9°C</p>
                        <p>Weather</p>
                    </div>
                </div>
                <div class="col">
                    <img src="imgs/wind.png">
                    <div>
                        <p class="wind">6 km/h</p>
                        <p>Wind speed</p>
                    </div>
                </div>
                <div class="col">
                    <img src="imgs/humidity.png">
                    <div>
                        <p class="humidity">50%</p>
                        <p>Humidity</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="refresh-btn">
            <button><img src="imgs/refresh.png">Refresh</button>
        </div>
    </div>

    <br>

    <script src="script.js"></script>

</body>
</html>