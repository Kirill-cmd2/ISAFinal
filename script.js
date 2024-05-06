const apiKEY = "752aee49a0ce251131810130f176c7b2";
const apiURL = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=";

const searchbox = document.querySelector(".search input");
const searchbtn = document.querySelector(".search button");
const weatherIcon = document.querySelector(".weather-icon");
const refreshbtn = document.querySelector(".refresh-btn button")
var cityName = "Stoke-on-Trent";

function storeInLocal($city, $temp)
{
    localStorage.setItem($city, $temp);
}

function getFromLocal($city)
{
    var value = localStorage.getItem($city);

    if (value == null)
    {
        return false;
    }

    return value;
}

async function checkWeatherCity(city = cityName){   
    const response = await fetch(apiURL + city + `&appid=${apiKEY}`);
    cityName = `${city}`;

    var data = await response.json();

    document.querySelector(".city").innerHTML = data.name;
    document.querySelector(".pressure").innerHTML = data.main.pressure + " mm";
    document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°C";
    document.querySelector(".humidity").innerHTML = data.main.humidity + "%";
    document.querySelector(".wind").innerHTML = data.wind.speed + " km/h";

    const weather = data.weather[0].main;
    weatherIcon.src = `imgs/${weather}.png`;

    storeInLocal(data.name, [data.main.temp, data.main.pressure, data.main.humidity, data.wind.speed]);
}

checkWeatherCity();

searchbtn.addEventListener("click", ()=>{
    checkWeatherCity(searchbox.value);
})

refreshbtn.addEventListener("click", ()=>{
    checkWeatherCity();
})
