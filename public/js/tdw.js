function getCurrentTime() {
  const now = new Date();
  let hours = now.getHours();
  let minutes = now.getMinutes();

  // Добавляем ведущий ноль, если минуты меньше 10
  minutes = minutes < 10 ? '0' + minutes : minutes;

  // Формируем строку времени в формате "часы:минуты"
  const currentTime = hours + ':' + minutes;

  return currentTime;
}

// Получаем элемент span по его классу
const timeSpan = document.querySelector('.time');

// Проверяем, существует ли элемент с классом .time
if (timeSpan) {
  // Обновляем текст внутри span каждую секунду
  setInterval(function() {
    timeSpan.textContent = getCurrentTime();
  }, 1000);
}



//Дата
function getCurrentDate() {
    const months = [
      "января", "февраля", "марта", "апреля", "мая", "июня",
      "июля", "августа", "сентября", "октября", "ноября", "декабря"
    ];
  
    const now = new Date();
    const day = now.getDate();
    const monthIndex = now.getMonth();
    const year = now.getFullYear();
  
    // Формируем строку даты в формате "день месяца год"
    const currentDate = day + ' ' + months[monthIndex] + ' ' + year;
  
    return currentDate;
  }
  
  // Получаем элемент span по его классу
  const dateSpan = document.querySelector('.date');
  
  // Устанавливаем текст внутри span на текущую дату
  dateSpan.textContent = getCurrentDate();



//Погода
window.addEventListener('load', function() {
    
    const apiKey = '15e3d8f6a654bb55a4692a77a26afdf3';
    const city = 'Златоуст'; 
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            
            const weatherElement = document.querySelector('.weather');
            weatherElement.querySelector('.city').textContent = data.name;
            weatherElement.querySelector('.temp').textContent = `${Math.ceil(data.main.temp)}°`;
            weatherElement.querySelector('.speed').textContent = `${Math.ceil(data.wind.speed)}м/с`;
            weatherElement.querySelector('.hum').textContent = `${data.main.humidity}%`;
        })
        .catch(error => {
            console.error('Error fetching weather data:', error);
        });
});