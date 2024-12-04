// =============================
// Initialization and Constants
// =============================
const canvas = document.getElementById("weatherCanvas");
const ctx = canvas.getContext("2d");

const temperatureSlider = document.getElementById("temperature");
const precipitationSlider = document.getElementById("precipitation");
const windSlider = document.getElementById("wind");
const cloudinessSlider = document.getElementById("cloudiness");

const temperatureDisplay = document.getElementById("temperatureDisplay");
const precipitationInfo = document.getElementById("precipitationInfo");
const windInfo = document.getElementById("windInfo");
const weatherIcon = document.getElementById("weatherIcon");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particles = [];
let cloudParticles = [];
let temperature = 0;
let intensity = 50;
let windSpeed = 0;
let cloudiness = 50;

const icons = {
    rain: "fa-cloud-showers-heavy",
    snow: "fa-snowflake",
    mixed: "fa-cloud-sun-rain",
    sunny: "fa-sun",
};

// =============================
// Utility Functions
// =============================
function celsiusToFahrenheit(celsius) {
    return Math.round((celsius * 9) / 5 + 32);
}

function getWindDirection(speed) {
    if (speed === 0) return "Calm";
    if (speed > 0 && speed <= 2) return "E";
    if (speed > 2 && speed <= 4) return "NE";
    if (speed > 4) return "N";
    if (speed < 0 && speed >= -2) return "W";
    if (speed < -2 && speed >= -4) return "NW";
    if (speed < -4) return "S";
    return "Variable";
}

// =============================
// UI Update Functions
// =============================
function updateTemperatureDisplay() {
    const fahrenheit = celsiusToFahrenheit(temperature);
    temperatureDisplay.textContent = `Temperature: ${temperature}°C / ${fahrenheit}°F`;

    let condition;
    if (temperature > 20 && intensity === 0) {
        condition = "sunny"; // Sunny weather if warm and no precipitation
    } else if (temperature > 2) {
        condition = "rain";
    } else if (temperature < -2) {
        condition = "snow";
    } else {
        condition = "mixed";
    }

    updateWeatherIcon(condition);
}

function updatePrecipitationInfo() {
    precipitationInfo.textContent = `Precipitation: ${intensity}%`;
}

function updateWindInfo() {
    const direction = getWindDirection(windSpeed);
    const windText =
        windSpeed !== 0 ? `${Math.abs(windSpeed)} m/s (${direction})` : "Calm";
    windInfo.textContent = `Wind: ${windText}`;
}

function updateCanvasBackground() {
    if (temperature > 20 && intensity === 0) {
        // Sunny
        canvas.style.background =
            "linear-gradient(to bottom, #87ceeb, #f0e68c)"; // Bright sunny sky
    } else if (temperature > 10 && temperature <= 20) {
        // Mild
        canvas.style.background =
            "linear-gradient(to bottom, #6ab3f1, #c2d8ef)"; // Cool blue sky
    } else if (temperature > 0 && temperature <= 10) {
        // Cool
        canvas.style.background =
            "linear-gradient(to bottom, #8ecae6, #219ebc)"; // Cooler blues
    } else if (temperature <= 0 && intensity > 50) {
        // Freezing with precipitation (snow)
        canvas.style.background =
            "linear-gradient(to bottom, #d6e6f2, #a9c9d9)"; // Soft snowy tones
    } else if (temperature <= 0) {
        // Freezing, no precipitation
        canvas.style.background =
            "linear-gradient(to bottom, #b3d4e0, #609dbb)"; // Frosty blue-gray
    } else if (intensity > 50) {
        // Rainy
        canvas.style.background =
            "linear-gradient(to bottom, #4a90e2, #1e1e2f)"; // Rainy blue-gray
    } else {
        // Default Cloudy
        canvas.style.background =
            "linear-gradient(to bottom, #6b8e23, #556b2f)"; // Overcast greens
    }
}

function updateWeatherIcon(condition) {
    weatherIcon.classList.add("hidden"); // Fade out current icon
    setTimeout(() => {
        weatherIcon.className = `weather-icon fas ${icons[condition]}`; // Update icon class
        weatherIcon.classList.remove("hidden"); // Fade in new icon
    }, 500);
}

// =============================
// Particle Classes
// =============================
class Particle {
    constructor(type) {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.size = Math.random() * 3 + 1;
        this.speedY = Math.random() * 1 + (type === "rain" ? 3 : 1);
        this.speedX = windSpeed;
        this.type = type;
    }

    update() {
        this.y += this.speedY;
        this.x += this.speedX;
        if (this.y > canvas.height) {
            this.y = 0;
            this.x = Math.random() * canvas.width;
        }
        if (this.x > canvas.width) {
            this.x = 0;
        } else if (this.x < 0) {
            this.x = canvas.width;
        }
    }

    draw() {
        ctx.beginPath();
        if (this.type === "rain") {
            ctx.strokeStyle = "#00f";
            ctx.lineWidth = 1;
            ctx.moveTo(this.x, this.y);
            ctx.lineTo(this.x + this.speedX, this.y + this.size * 5);
        } else if (this.type === "snow") {
            ctx.fillStyle = "#fff";
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        } else if (this.type === "mixed") {
            if (Math.random() < 0.5) {
                ctx.strokeStyle = "#00f";
                ctx.lineWidth = 1;
                ctx.moveTo(this.x, this.y);
                ctx.lineTo(this.x + this.speedX, this.y + this.size * 5);
            } else {
                ctx.fillStyle = "#fff";
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            }
        }
        ctx.stroke();
        ctx.fill();
    }
}

class CloudParticle {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = (Math.random() * canvas.height) / 2; // Clouds at the top half
        this.size = Math.random() * 50 + 20; // Larger cloud sizes
        this.speedX = Math.random() * 0.5 - 0.25; // Gentle horizontal movement
        this.opacity = Math.random() * 0.6 + 0.4; // Randomized opacity
    }

    update() {
        this.x += this.speedX;
        if (this.x > canvas.width) {
            this.x = 0;
        } else if (this.x < 0) {
            this.x = canvas.width;
        }
    }

    draw() {
        // Create a radial gradient for the cloud
        const gradient = ctx.createRadialGradient(
            this.x,
            this.y,
            0, // Start at the center
            this.x,
            this.y,
            this.size // Extend to the edges of the cloud
        );
        gradient.addColorStop(0, `rgba(255, 255, 255, ${this.opacity})`); // Opaque center
        gradient.addColorStop(1, "rgba(255, 255, 255, 0)"); // Transparent edges

        // Apply the gradient
        ctx.fillStyle = gradient;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2); // Draw the cloud circle
        ctx.fill();
    }
}

// =============================
// Particle Initialization
// =============================
function initParticles() {
    particles = [];
    for (let i = 0; i < intensity; i++) {
        let type = "rain";
        if (temperature <= 2 && temperature >= -2) {
            type = "mixed";
        } else if (temperature < -2) {
            type = "snow";
        }
        particles.push(new Particle(type));
    }
}

function initCloudParticles() {
    cloudParticles = [];
    for (let i = 0; i < cloudiness; i++) {
        cloudParticles.push(new CloudParticle());
    }
}
const cloudLayers = [
    { speedMultiplier: 0.2, opacity: 0.3 }, // Far layer
    { speedMultiplier: 0.4, opacity: 0.5 }, // Mid layer
    { speedMultiplier: 0.6, opacity: 0.8 }, // Near layer
];

function drawCloudLayers() {
    cloudLayers.forEach((layer) => {
        cloudParticles.forEach((particle) => {
            particle.speedX *= layer.speedMultiplier;
            ctx.globalAlpha = layer.opacity;
            particle.draw();
            ctx.globalAlpha = 1; // Reset opacity
        });
    });
}

// =============================
// Animation Loop
// =============================
function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw fog for freezing temperatures
    drawFog();

    // Draw cloud particles
    cloudParticles.forEach((particle) => {
        particle.update();
        particle.draw();
    });

    // Draw precipitation particles
    particles.forEach((particle) => {
        particle.update();
        particle.draw();
    });

    requestAnimationFrame(animate);
}

// =============================
// Event Handlers
// =============================
function updateWeather() {
    temperature = parseInt(temperatureSlider.value);
    intensity = parseInt(precipitationSlider.value);
    windSpeed = parseFloat(windSlider.value);

    particles.forEach((particle) => {
        particle.speedX = windSpeed;
    });

    updateTemperatureDisplay(); // Update temperature and weather icon
    updatePrecipitationInfo(); // Update precipitation info
    updateWindInfo(); // Update wind info
    updateCanvasBackground(); // Update canvas background color

    initParticles(); // Reinitialize particles for precipitation
}

function updateCloudiness() {
    cloudiness = parseInt(cloudinessSlider.value);
    initCloudParticles();
}

// =============================
// Event Listeners
// =============================
temperatureSlider.addEventListener("input", updateWeather);
precipitationSlider.addEventListener("input", updateWeather);
windSlider.addEventListener("input", updateWeather);
cloudinessSlider.addEventListener("input", updateCloudiness);

const cloudinessInfo = document.getElementById("cloudinessInfo");

cloudinessSlider.addEventListener("input", (event) => {
    const cloudinessValue = event.target.value; // Get cloudiness value
    cloudinessInfo.textContent = `Cloudiness: ${cloudinessValue}%`; // Update display
});
window.addEventListener("resize", () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    initParticles();
    initCloudParticles();
});

function drawFog() {
    if (temperature <= 0) {
        ctx.fillStyle = "rgba(255, 255, 255, 0.2)"; // Light transparent white
        ctx.fillRect(0, 0, canvas.width, canvas.height); // Apply a fog overlay
    }
}

// =============================
// Initialization
// =============================
updateWeather();
updateCloudiness();
animate();
