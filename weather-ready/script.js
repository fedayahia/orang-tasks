const apiKey = "7697cdd15cc16507d0e47691bc1aeac6"; 
const citySelect = document.getElementById("city");
const cityName = document.querySelector(".location"); 
const weatherIcon = document.querySelector(".weather-icon"); 
const temperature = document.querySelector(".weather-temp"); 
const weatherDesc = document.querySelector(".weather-desc"); 
const pressure = document.querySelector(".PRESSURE"); 
const humidity = document.querySelector(".humidity-view"); 
const wind = document.querySelector(".wind-view"); 
const forecastList = document.querySelector(".week-list"); 

async function fetchWeatherData(city) {
    const url = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&appid=${apiKey}&units=metric`;

    try {
        const response = await fetch(url);
        const data = await response.json();

        if (data.cod !== "200") {
            console.error("❌ Error fetching data:", data.message);
            return;
        }

        updateWeatherDisplay(data);
    } catch (error) {
        console.error("❌ Error fetching weather data:", error);
    }
}

function updateWeatherDisplay(data) {
    const currentWeather = data.list[0];
    cityName.innerText = `${data.city.name}, ${data.city.country}`;
    weatherIcon.setAttribute('data-feather', getWeatherIcon(currentWeather.weather[0].main));
    feather.replace();
    temperature.innerText = `${Math.round(currentWeather.main.temp)}°C`;
    weatherDesc.innerText = currentWeather.weather[0].description;
    pressure.innerText = `${currentWeather.main.pressure} hPa`;
    humidity.innerText = `${currentWeather.main.humidity} %`;
    wind.innerText = `${currentWeather.wind.speed} km/h`;

    forecastList.innerHTML = ""; 
    let count = 0;
    data.list.forEach(item => {
        if (item.dt_txt.includes("12:00:00") && count < 4) {
            const dayName = new Date(item.dt * 1000).toLocaleDateString("en-US", { weekday: "short" });
            const temp = Math.round(item.main.temp);
            const icon = getWeatherIcon(item.weather[0].main);

            const forecastItem = `
                <li>
                    <i class="day-icon" data-feather="${icon}"></i>
                    <span class="day-name">${dayName}</span>
                    <span class="day-temp">${temp}°C</span>
                </li>
            `;
            forecastList.innerHTML += forecastItem;
            count++;
        }
    });
    feather.replace();
}

function getWeatherIcon(weatherCondition) {
    switch (weatherCondition.toLowerCase()) {
        case "clear": return "sun";
        case "clouds": return "cloud";
        case "rain": return "cloud-rain";
        case "snow": return "cloud-snow";
        default: return "cloud";
    }
}

citySelect.addEventListener("change", () => {
    const selectedCity = citySelect.value;
    fetchWeatherData(selectedCity);
});

window.onload = () => fetchWeatherData(citySelect.value);

function updateDate() {
    const dateElement = new Date(); 
    const dayName = dateElement.toLocaleDateString("en-US", { weekday: "long" });
    const dateDay = dateElement.toLocaleDateString("en-US", { day: "numeric", month: "short", year: "numeric" });

    document.querySelector(".date-dayname").textContent = dayName;
    document.querySelector(".date-day").textContent = dateDay;
}

updateDate();
