document.getElementById('teg_input').addEventListener('keypress', function dntKey(event) {
    if (event.key === 'Enter') {
      event.preventDefault();
    }
});

let inputCount = 1; // Инициализируем счетчик для имен input

function addTeg() {
    // Получаем значение введенное в поле input
    let tegValue = document.getElementById('teg_input').value.trim();
    if (tegValue === "") {
        let error = document.querySelector('.error_teg');
        error.style.display = 'flex';
        return;
    }

    // Создаем новый элемент .teg
    let newTeg = document.createElement('div');
    newTeg.className = 'teg';
    
    // Создаем внутренние элементы нового тега
    let tegBg = document.createElement('div');
    tegBg.className = 'teg_bg';
    
    let tegNaz = document.createElement('span');
    tegNaz.className = 'teg_naz';
    tegNaz.textContent = '#' + tegValue;
    
    let circleDel = document.createElement('div');
    circleDel.className = 'cicrcle_del';
    circleDel.innerHTML = `
        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.2 0L0 1.2L2.30001 3.50001L3.89306e-06 5.80001L1.2 7.00001L3.50001 4.70001L5.8 7.00001L7.00001 5.8L4.70001 3.50001L7.00001 1.20001L5.80001 9.09763e-06L3.50001 2.30001L1.2 0Z" fill="#161616" />
        </svg>
    `;
    circleDel.addEventListener('click', function() {
        // При клике на крестик удаляем тег и соответствующий input
        newTeg.remove();
        hiddenInput.remove(); // Удаляем скрытый input
    });

    // Создаем скрытый input
    let hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'tags_' + inputCount++; // Генерируем уникальное имя для input и увеличиваем счетчик
    hiddenInput.value = tegValue;
    hiddenInput.setAttribute('form', 'photo-submit'); // Устанавливаем атрибут form

    // Добавляем элементы в DOM
    tegBg.appendChild(tegNaz);
    tegBg.appendChild(circleDel);
    newTeg.appendChild(tegBg);
    newTeg.appendChild(hiddenInput); // Добавляем скрытый input внутрь блока .teg
    document.querySelector('.teg_block').appendChild(newTeg);

    // Очищаем поле ввода
    document.getElementById('teg_input').value = "";
}


/*Изменение зачение масштаба*/
let scale = 100; // Начальный масштаб в процентах

function scalePlus() {
    scale += 10; // Увеличить масштаб на 10%
    updateScale();
}

function scaleMinus() {
    scale -= 10; // Уменьшить масштаб на 10%
    updateScale();
}

function updateScale() {
    // Ограничение масштаба, если необходимо
    if (scale < 10) scale = 10; // Минимальный масштаб
    if (scale > 200) scale = 200; // Максимальный масштаб

    const image = document.getElementById('image');
    const scaleText = document.querySelector('.proc');
    image.style.transform = `scale(${scale / 100})`;
    scaleText.innerText = `${scale}%`; // Обновить отображаемый процент масштаба
}

//Цветокор
document.addEventListener("DOMContentLoaded", function() {
    const editButton = document.querySelector(".colcor_edit");
    const block = document.querySelector(".colcor_block");

    // Добавляем обработчик события клика на кнопку
    editButton.addEventListener("click", function() {
      // Переключаем видимость блока
      block.style.display = block.style.display === "none" ? "flex" : "none";
    });

    // Добавляем обработчик события клика на кнопку закрытия
    document.querySelector(".cansel_btn").addEventListener("click", function() {
      // Скрываем блок
      block.style.display = "none";
    });
  });

  document.addEventListener("DOMContentLoaded", function() {
    const areaImage = document.getElementById('image');
    const exposureRange = document.querySelector('.ecsp_range');
    const contrastRange = document.querySelector('.contr_range');
    const saturationRange = document.querySelector('.nash_range');
    const temperatureRange = document.querySelector('.temp_range');
    const sharpnessRange = document.querySelector('.rez_range');
    const noiseRange = document.querySelector('.shum_range');
    const resetButton = document.querySelector('.reset');

    let originalExposure = 0;
    let originalContrast = 0;
    let originalSaturation = 0;
    let originalTemperature = 0;
    let originalSharpness = 0;
    let originalNoise = 0;

    // Сохраняем исходные значения
    originalExposure = exposureRange.value;
    originalContrast = contrastRange.value;
    originalSaturation = saturationRange.value;
    originalTemperature = temperatureRange.value;
    originalSharpness = sharpnessRange.value;
    originalNoise = noiseRange.value;

    // Функция для применения изменений к изображению
    function applyChanges() {
        areaImage.style.filter = `brightness(${originalExposure * 2 + 100}%) contrast(${originalContrast * 2 + 100}%) saturate(${originalSaturation * 2 + 100}%) hue-rotate(${originalTemperature * 1.8}deg) blur(${originalSharpness * 0.4}px) brightness(${100 - originalNoise * 0.5}%)`;
    }

    // Обработчики событий для ползунков
    exposureRange.addEventListener('input', function() {
        originalExposure = parseInt(this.value);
        applyChanges();
        document.querySelector('.data_ecsp').innerText = originalExposure;
    });

    contrastRange.addEventListener('input', function() {
        originalContrast = parseInt(this.value);
        applyChanges();
        document.querySelector('.data_contr').innerText = originalContrast;
    });

    saturationRange.addEventListener('input', function() {
        originalSaturation = parseInt(this.value);
        applyChanges();
        document.querySelector('.data_nash').innerText = originalSaturation;
    });

    temperatureRange.addEventListener('input', function() {
        originalTemperature = parseInt(this.value);
        applyChanges();
        document.querySelector('.data_temp').innerText = originalTemperature;
    });

    sharpnessRange.addEventListener('input', function() {
        originalSharpness = parseInt(this.value);
        applyChanges();
        document.querySelector('.data_rez').innerText = originalSharpness;
    });

    noiseRange.addEventListener('input', function() {
        originalNoise = parseInt(this.value);
        applyChanges();
        document.querySelector('.data_shum').innerText = originalNoise;
    });

    // Функция для сброса всех ползунков и обновления значений в .data
    function resetSliders() {
        // Сброс значений ползунков
        exposureRange.value = 0;
        contrastRange.value = 0;
        saturationRange.value = 0;
        temperatureRange.value = 0;
        sharpnessRange.value = 0;
        noiseRange.value = 0;

        // Сброс текста в .data
        document.querySelector('.data_ecsp').textContent = 0;
        document.querySelector('.data_contr').textContent = 0;
        document.querySelector('.data_nash').textContent = 0;
        document.querySelector('.data_temp').textContent = 0;
        document.querySelector('.data_rez').textContent = 0;
        document.querySelector('.data_shum').textContent = 0;

        // Сброс стилей изображения
        areaImage.style.filter = '';
    }

    // Добавление обработчика событий для клика по кнопке "Сбросить"
    resetButton.addEventListener('click', resetSliders);

    // Функция для сохранения изображения
    function saveImage() {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        canvas.width = areaImage.naturalWidth;
        canvas.height = areaImage.naturalHeight;

        // Применение фильтров к canvas
        ctx.filter = areaImage.style.filter;
        ctx.drawImage(areaImage, 0, 0, canvas.width, canvas.height);

        canvas.toBlob(function(blob) {
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'saved_image.jpg';
            link.click();
        }, 'image/jpeg');
    }

    // Находим кнопку "Сохранить" по классу или идентификатору
    const saveButton = document.getElementById('save_button');
    saveButton.addEventListener('click', saveImage);
});

 //Кадрирование
document.addEventListener('DOMContentLoaded', function () {
    var dropArea = document.getElementById('drop_area');
    var image = document.getElementById('image');
    var photoAddInput = document.getElementById('photo_add');
    var editButton = document.querySelector('.edbtn');
    var buttonsAccept = document.querySelector('.buts_accept');
    var acceptButton = document.getElementById('accept_button');
    var cancelButton = document.getElementById('cancel_button');
    var closeEditBlock = document.querySelector('.close_edit_block');
    var addPhotoBgr = document.querySelector('.addphoto_bgr');
    var cropper;

    if (!dropArea || !image || !photoAddInput || !editButton || !buttonsAccept || !acceptButton || !cancelButton || !closeEditBlock || !addPhotoBgr) {
        console.error('Один или несколько элементов не найдены на странице.');
        return;
    }

    console.log('Все элементы найдены.');

    // Drag and Drop functionality
    dropArea.addEventListener('dragover', function (e) {
        e.preventDefault();
        e.stopPropagation();
        dropArea.classList.add('dragging');
        console.log('dragover event triggered');
    });

    dropArea.addEventListener('dragleave', function (e) {
        e.preventDefault();
        e.stopPropagation();
        dropArea.classList.remove('dragging');
        console.log('dragleave event triggered');
    });

    dropArea.addEventListener('drop', function (e) {
        e.preventDefault();
        e.stopPropagation();
        dropArea.classList.remove('dragging');
        console.log('drop event triggered');

        var files = e.dataTransfer.files;
        if (files.length > 0) {
            photoAddInput.files = files;
            displayImage(files[0]);
        }
    });

    // Input file change event
    photoAddInput.addEventListener('change', function (e) {
        var files = e.target.files;
        if (files.length > 0) {
            displayImage(files[0]);
        }
    });

    function displayImage(file) {
        var reader = new FileReader();
        reader.onload = function (e) {
            image.src = e.target.result;
            image.style.display = 'block';
            dropArea.style.display = 'none';
            editButton.disabled = false; // Enable the edit button after image is loaded
            console.log('Image displayed');
        };
        reader.readAsDataURL(file);
    }

    editButton.addEventListener('click', function () {
        if (!image.src) {
            return; // If there is no image, do nothing
        }
        // Initialize cropper
        if (cropper) {
            cropper.destroy();
        }
        cropper = new Cropper(image, {
            aspectRatio: 16 / 9,
        });
        buttonsAccept.style.display = 'flex'; // Show the accept buttons
        console.log('Cropper initialized');
    });

    acceptButton.addEventListener('click', function () {
        if (cropper) {
            var canvas = cropper.getCroppedCanvas();
            canvas.toBlob(function (blob) {
                var formData = new FormData();
                formData.append('photo_add', blob);

                // Replace the original image with the cropped image
                var reader = new FileReader();
                reader.onload = function (e) {
                    image.src = e.target.result;
                    cropper.destroy();
                    cropper = null;
                    buttonsAccept.style.display = 'none'; // Hide the accept buttons
                    console.log('Cropped image accepted');
                };
                reader.readAsDataURL(blob);

                // Example: Submit the form with the cropped image
                // fetch('/image', {
                //     method: 'POST',
                //     body: formData,
                // })
                // .then(response => response.json())
                // .then(data => console.log(data))
                // .catch(error => console.error(error));
            });
            var butSave = document.querySelector('.but_save');
            butSave.style.display = 'flex';
        }
    });

    // Remove image and restore drop area
    function removeImage() {
        image.src = '';
        image.style.display = 'none';
        dropArea.style.display = 'flex';
        var butSave = document.querySelector('.but_save');
            butSave.style.display = 'none';
        editButton.disabled = true; // Disable the edit button when image is removed
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        buttonsAccept.style.display = 'none'; // Hide the accept buttons if visible
        console.log('Image removed and drop area restored');
    }

    closeEditBlock.addEventListener('click', removeImage);
    addPhotoBgr.addEventListener('click', removeImage);



    cancelButton.addEventListener('click', function () {
        if (cropper) {
            cropper.destroy();
            cropper = null;
            buttonsAccept.style.display = 'none'; // Hide the accept buttons
            image.style.display = 'none';
            dropArea.style.display = 'flex';
            editButton.disabled = true; // Disable the edit button when cancelling
            photoAddInput.value = '';
            console.log('Editing cancelled');
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const brushEdit = document.querySelector('.brush_edit');
    const brushBlock = document.querySelector('.brush_block');
    const cancelButton = document.getElementById('cancel');
    const canvas = document.getElementById('drawing-canvas');
    const canvas_container = document.querySelector('.canvas_container');

    brushEdit.addEventListener('click', function() {
        brushBlock.style.display = 'flex';
        canvas.style.display = 'flex';
        canvas_container.style.display = 'flex';
    });

    cancelButton.addEventListener('click', function() {
        brushBlock.style.display = 'none';
        canvas.style.display = 'none';
        canvas_container.style.display = 'none';
    });
});

//Кисти
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('drawing-canvas');
    const ctx = canvas.getContext('2d');
    const img = document.getElementById('image');
    let drawing = false;
    let lineWidth = 5;
    let lineOpacity = 1;
    let lineColor = '#000000';
    let prevX = 0;
    let prevY = 0;

    const updateCanvasSize = () => {
        canvas.width = img.clientWidth;
        canvas.height = img.clientHeight;
    };

    img.onload = updateCanvasSize;
    window.onresize = updateCanvasSize;

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);
    canvas.addEventListener('mousemove', draw);

    function startDrawing(event) {
        drawing = true;
        ctx.beginPath();
        prevX = event.clientX - canvas.getBoundingClientRect().left;
        prevY = event.clientY - canvas.getBoundingClientRect().top;
    }

    function stopDrawing() {
        drawing = false;
        ctx.beginPath();
    }

    function draw(event) {
        if (!drawing) return;
        const rect = canvas.getBoundingClientRect();
        const currX = event.clientX - rect.left;
        const currY = event.clientY - rect.top;

        ctx.lineWidth = lineWidth;
        ctx.strokeStyle = hexToRgba(lineColor, lineOpacity);
        ctx.lineCap = 'round';

        ctx.moveTo(prevX, prevY);
        ctx.quadraticCurveTo(prevX, prevY, currX, currY);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(currX, currY);

        prevX = currX;
        prevY = currY;
    }

    function hexToRgba(hex, alpha) {
        const r = parseInt(hex.slice(1, 3), 16);
        const g = parseInt(hex.slice(3, 5), 16);
        const b = parseInt(hex.slice(5, 7), 16);
        return `rgba(${r}, ${g}, ${b}, ${alpha})`;
    }

    document.getElementById('lineThickness').addEventListener('input', (event) => {
        lineWidth = event.target.value;
    });

    document.getElementById('intensity').addEventListener('input', (event) => {
        lineOpacity = event.target.value / 100;
    });

    const colors = document.querySelectorAll('.color');
    colors.forEach(color => {
        color.style.backgroundColor = color.getAttribute('data-color');
        color.addEventListener('click', () => {
            colors.forEach(c => c.classList.remove('selected'));
            color.classList.add('selected');
            lineColor = color.getAttribute('data-color');
        });
    });

    document.getElementById('cancel').addEventListener('click', () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    });

    document.getElementById('apply').addEventListener('click', () => {
        
        ctx.globalCompositeOperation = 'destination-over';
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        const dataURL = canvas.toDataURL('image/png');
        img.src = dataURL;
        ctx.globalCompositeOperation = 'source-over';
        
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        document.querySelector('.brush_block').style.display = 'none';
        document.querySelector('.canvas_container').style.display = 'none';
    });
});





// Сохранение картинки 
document.getElementById('save_button').addEventListener('click', function() {
    const image = document.getElementById('image');
    const base64Data = image.src.split(',')[1]; // Получаем Base64-код изображения

    // Преобразуем Base64-код в Blob
    const blob = base64ToBlob(base64Data);

    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob); // Создаем ссылку на Blob
    link.download = 'saved_image.jpg'; // Название файла при скачивании

    // Эмулируем клик на созданной ссылке для начала скачивания
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});

// Функция для преобразования Base64 в Blob
function base64ToBlob(base64Data) {
    const byteCharacters = atob(base64Data);
    const byteArrays = [];

    for (let offset = 0; offset < byteCharacters.length; offset += 512) {
        const slice = byteCharacters.slice(offset, offset + 512);
        const byteNumbers = new Array(slice.length);
        for (let i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }
        const byteArray = new Uint8Array(byteNumbers);
        byteArrays.push(byteArray);
    }

    return new Blob(byteArrays, { type: 'image/jpeg' });
}


