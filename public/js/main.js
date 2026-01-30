document.addEventListener('mousemove', e => {
        Object.assign(document.documentElement,{
            style: `
            --move-x: ${(e.clientX - window.innerWidth / 2) * -0.005}deg;
            --move-y: ${(e.clientY - window.innerHeight / 2) * -0.005}deg;
            `
        })
    })


//Изменение темы
let theme = document.querySelector('.theme');
let theme_fon = document.querySelector('.theme_fon');
let moon_light = document.querySelector('.moon_light');
let cusrsor = document.querySelector('.cursor')

function themeRem(){
        if(moon_light.style.right == '31px'){
                moon_light.style.right = '0px';
                moon_light.style.background = '#f9f9f9';
                theme_fon.style.background = '#ffffffde';
                cusrsor.style.display = 'none';

        }else {
                moon_light.style.right = '31px';
                moon_light.style.background = '#151515';
                theme_fon.style.background = '#151515de';
                cusrsor.style.display = 'flex';
        };
}

//Появление и скрытие комментариев

let comments = document.querySelector('.blocks_comment')

function comApp(combox){
        let com_activebox = document.getElementById('post_com' + combox);
        if(com_activebox.style.display == 'none'){
                com_activebox.style.display = 'flex';    
        } else {
                com_activebox.style.display = 'none'; 
        };
}

document.addEventListener('DOMContentLoaded', (event) => {
    const textarea = document.querySelector('.text_send');
    const simvolSpan = document.querySelector('.simvol');
    const maxLength = 351;

    textarea.addEventListener('input', (e) => {
        const remaining = maxLength - textarea.value.length;
        simvolSpan.textContent = `Осталось ${remaining}/${maxLength} символов`;

        if (textarea.value.length === 100 || textarea.value.length === 200) {
            textarea.style.height = (parseInt(window.getComputedStyle(textarea).height) + 10) + 'px';
        }
    });
});

//Появление и скрытие блока настроек ленты
let set_box = document.querySelector('.cs');

function setboxActive(){
        if(set_box.style.right == '-389px'){
                set_box.style.right = '56px';
        } else {
                set_box.style.right = '-389px';
        }
}


//Смена с фото профиля на избранные
function profimgbutActive(){
        let cardsprofile = document.querySelector('.cards_block_profile');
        let cardslike = document.querySelector('.cards_block_like');
        if(cardslike.style.display == 'none'){
                cardsprofile.style.display = 'flex';
        } else {
                cardslike.style.display = 'none';
                cardsprofile.style.display = 'flex';
        }
}

function likesetActive(){
        let cardsprofile = document.querySelector('.cards_block_profile');
        let cardslike = document.querySelector('.cards_block_like');
        if(cardsprofile.style.display == 'none'){
                cardslike.style.display = 'flex';
        } else {
                cardsprofile.style.display = 'none';
                cardslike.style.display = 'flex';
        }
}
document.addEventListener("DOMContentLoaded", function() {
        // Находим элементы .lentaadd, .addphoto_bgr и .close_edit_block
        const lentaadd = document.querySelector('.lentaadd');
        const addphoto_bgr = document.querySelector('.addphoto_bgr');
        const addphoto_box = document.querySelector('.addphoto_box');
        const close_edit_block = document.querySelector('.close_edit_block');
    
        // Функция для отображения блока .addphoto_bgr и .addphoto_box
        function showAddPhoto() {
            addphoto_bgr.style.display = 'block';
            addphoto_box.style.display = 'block';
        }
    
        // Функция для скрытия блока .addphoto_bgr и .addphoto_box
        function hideAddPhoto() {
            addphoto_bgr.style.display = 'none';
            addphoto_box.style.display = 'none';
        }
    
        // Добавляем обработчик события при нажатии на элемент .lentaadd
        lentaadd.addEventListener('click', function() {
            showAddPhoto();
        });
    
        // Добавляем обработчик события при нажатии на элемент .close_edit_block
        close_edit_block.addEventListener('click', function() {
            hideAddPhoto();
        });
    
        // Добавляем обработчик события при нажатии на элемент .addphoto_bgr
        addphoto_bgr.addEventListener('click', function(event) {
            // Проверяем, что событие произошло на .addphoto_bgr, а не на его дочерних элементах
            if (event.target === addphoto_bgr) {
                hideAddPhoto();
            }
        });
    });

 function cardsAdd() {
        // Находим элементы .lentaadd, .addphoto_bgr и .close_edit_block
        const add_card = document.querySelector('.add_card');
        const addphoto_bgr = document.querySelector('.addphoto_bgr');
        const addphoto_box = document.querySelector('.addphoto_box');
        const close_edit_block = document.querySelector('.close_edit_block');
    
        // Функция для отображения блока .addphoto_bgr и .addphoto_box
        function showAddPhoto() {
            addphoto_bgr.style.display = 'block';
            addphoto_box.style.display = 'block';
        }
    
        // Функция для скрытия блока .addphoto_bgr и .addphoto_box
        function hideAddPhoto() {
            addphoto_bgr.style.display = 'none';
            addphoto_box.style.display = 'none';
        }
    
        // Добавляем обработчик события при нажатии на элемент .lentaadd
        add_card.addEventListener('click', function() {
            showAddPhoto();
        });
    
        // Добавляем обработчик события при нажатии на элемент .close_edit_block
        close_edit_block.addEventListener('click', function() {
            hideAddPhoto();
        });
    
        // Добавляем обработчик события при нажатии на элемент .addphoto_bgr
        addphoto_bgr.addEventListener('click', function(event) {
            // Проверяем, что событие произошло на .addphoto_bgr, а не на его дочерних элементах
            if (event.target === addphoto_bgr) {
                hideAddPhoto();
            }
        });
    };    

// Отображение полного изоюбражения

// Функция для отображения всплывающего окна
function showPopUp() {
    let pop_up = document.querySelector('.pop_up');
    let pop_up_fullimg = document.querySelector('.pop_up_fullimg');
    
    // Получаем URL изображения из стиля background-image
    let imgUrl = event.target.closest('.card').querySelector('.card_img').style.backgroundImage.slice(4, -1).replace(/"/g, "");
    
    // Присваиваем изображение всплывающему окну
    pop_up_fullimg.style.backgroundImage = `url(${imgUrl})`;
    
    // Показываем всплывающее окно
    pop_up.style.display = 'block';
}

function showPopUpLenta() {
        let pop_up = document.querySelector('.pop_up');
        let pop_up_fullimg = document.querySelector('.pop_up_fullimg');
        
        // Получаем URL изображения из стиля background-image
        let imgUrl = event.target.closest('.lenta_block').querySelector('.lb_t').style.backgroundImage.slice(4, -1).replace(/"/g, "");
        
        // Присваиваем изображение всплывающему окну
        pop_up_fullimg.style.backgroundImage = `url(${imgUrl})`;
        
        // Показываем всплывающее окно
        pop_up.style.display = 'block';
    }

// Функция для скрытия всплывающего окна
function hidePopUp(event) {
    const pop_up = document.querySelector('.pop_up');
    if (event.target === pop_up || event.target.classList.contains('close_pop_up') || event.target.classList.contains('pop_up_bg')) {
        pop_up.style.display = 'none';
    }
}


function removeImg() {
    var fileInput = document.getElementById('red_img_inp_file');
    if (fileInput.files.length > 0) {
        var file = fileInput.files[0];
        if (file) {
            var ava = URL.createObjectURL(file);

            let avatar_profile = document.querySelector('.avater_red_hover');
            let avatar_auth = document.querySelector('.avatar_author_red');
            let avatar_com = document.querySelector('.comments_avatar');
            let avatar_seendcom = document.querySelector('.avatar_author_img');
            let avatar_tent = document.querySelector('.avatar_tent');

            avatar_profile.style.backgroundImage = "url('" + ava + "')";
            avatar_auth.style.backgroundImage = "url('" + ava + "')";
            avatar_com.style.backgroundImage = "url('" + ava + "')";
            avatar_seendcom.style.backgroundImage = "url('" + ava + "')";
            avatar_tent.style.backgroundImage = "url('" + ava + "')";
        }
    }
}

function resetImg() {
        let avatar_profile = document.querySelector('.avater_red_hover');
        let avatar_auth = document.querySelector('.avatar_author');
        let avatar_com = document.querySelector('.comments_avatar');
        let avatar_seendcom = document.querySelector('.avatar_author_img');
        let avatar_tent = document.querySelector('.avatar_tent');

        avatar_profile.style.backgroundImage = "url('" + avatarUrl + "')";
        avatar_auth.style.backgroundImage = "url('" + avatarUrl + "')";
        avatar_com.style.backgroundImage = "url('" + avatarUrl + "')";
        avatar_seendcom.style.backgroundImage = "url('" + avatarUrl + "')";
        avatar_tent.style.backgroundImage = "url('" + avatarUrl + "')";
}


// Функция для обновления значений span на основе значений input
function updateValues() {
        const nicknameInput = document.getElementById('nickname_red_inp');
        const fioInput = document.querySelector('.form_red_send_inf input:nth-of-type(2)');
        const emailInput = document.querySelector('.form_red_send_inf input:nth-of-type(3)');
        const nicknameSpan = document.querySelector('.tent_nickname');
        const fioSpan = document.querySelector('.tent_fio');
        const emailSpan = document.querySelector('.tent_email');
    
        // Обновление значений span
        nicknameSpan.textContent = nicknameInput.value;
        fioSpan.textContent = fioInput.value;
        emailSpan.textContent = emailInput.value;
    }
    
    // Функция для сброса значений input к изначальным значениям
function resetValues() {
        // Изначальные значения input
    
        const nicknameInput = document.getElementById('nickname_red_inp');
        const fioInput = document.querySelector('.form_red_send_inf input:nth-of-type(2)');
        const emailInput = document.querySelector('.form_red_send_inf input:nth-of-type(3)');
        const nicknameSpan = document.querySelector('.tent_nickname');
        const fioSpan = document.querySelector('.tent_fio');
        const emailSpan = document.querySelector('.tent_email');
    
        // Сброс значений input к изначальным значениям
        nicknameInput.value = initialNickname;
        fioInput.value = initialFio;
        emailInput.value = initialEmail;
    
        // Обновление значений span
        nicknameSpan.textContent = initialNickname;
        fioSpan.textContent = initialFio;
        emailSpan.textContent = initialEmail;
        
}

document.addEventListener("DOMContentLoaded", function() {
        const btnRedProfile = document.getElementById("btn_red_profile");
        const redModule = document.querySelector(".red_module");
        const redBgr = document.querySelector(".red_bgr");
        const closeRed = document.querySelector(".close_red");
    
        btnRedProfile.addEventListener("click", function() {
            redModule.style.display = "block";
            redBgr.style.display = "block";
        });
    
        closeRed.addEventListener("click", function() {
            redModule.style.display = "none";
            redBgr.style.display = "none";
        });
    
        redBgr.addEventListener("click", function() {
            redModule.style.display = "none";
            redBgr.style.display = "none";
        });
});

document.querySelector('.lenta_scroll').addEventListener('scroll', function() {
    const container = document.querySelector('.lenta_container');
    const blocks = document.querySelectorAll('.lenta_block');
    const scrollAmount = 749; // Высота блока, на которую нужно прокрутить
    
    let currentScroll = this.scrollTop;
    let nextBlockIndex = Math.floor(currentScroll / scrollAmount) + 1;
    let nextBlock = blocks[nextBlockIndex];
    
    if (nextBlock) {
      container.scrollTop = nextBlock.offsetTop;
    }
  });