const temperatureCelsius = Number.parseFloat(prompt('Введите температуру в градусах Цельсия'))
let temperatureFahrenheit = (9*temperatureCelsius/5) + 32
alert(`Цельсий: ${temperatureCelsius}, Фаренгейт: ${temperatureFahrenheit.toFixed(1)}`)