<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/addphoto.css')}}">
    <link rel="stylesheet" href="{{ asset('css/profile.css')}}">

    
</head>
<body>
    <!-- Курсор -->
    <div class="cursor">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    <!-- Тема на сайте -->
    <button onclick="themeRem()" class="theme">
        <div class="theme_fon" ></div>
        <div class="moon_light"></div>
    </button>
    <!-- Изменения просмотра фото в профиле  -->
    <div class="set_card">
        <div class="set_but">
            <button onclick="profimgbutActive()" class="profimgbut">
                <svg class="profimgbut_ico" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5.5C12 7.70914 10.2091 9.5 8 9.5C5.79089 9.5 4 7.70914 4 5.5C4 3.29086 5.79089 1.5 8 1.5C10.2091 1.5 12 3.29086 12 5.5ZM10.3698 9.9039C11.9358 9.05942 13 7.40399 13 5.5C13 2.73859 10.7615 0.5 8 0.5C5.23853 0.5 3 2.73859 3 5.5C3 7.40399 4.06421 9.05942 5.63025 9.9039C4.40088 10.3329 3.27002 11.0933 2.34314 12.136C1.05383 13.5865 0.250122 15.481 0.0495605 17.5C0.0167236 17.8305 0 18.1643 0 18.5H1H8H8.5V21V21.5H9H19H19.5V21V11V10.5H19H11.665C11.2496 10.2592 10.8162 10.0597 10.3698 9.9039ZM8.5 10.5205C8.33398 10.5069 8.16711 10.5 8 10.5C6.18408 10.5 4.41492 11.3105 3.09058 12.8004C1.96997 14.0611 1.25171 15.717 1.05493 17.5H8H8.5V11V10.5205ZM9.5 18.431V11.5H18.5V18.4292L17.0825 17.0087L16.7289 16.6544L16.375 17.0084L14.9092 18.4742L12.5342 16.1033L12.1807 15.7504L11.8274 16.1036L9.5 18.431ZM9.5 19.8452V20.5H18.5V19.8449L16.7281 18.0694L15.2631 19.5345L14.9098 19.8878L14.5563 19.5348L12.1813 17.1639L9.5 19.8452ZM14.9095 13.7715C14.6833 13.7715 14.5 13.9548 14.5 14.181C14.5 14.4072 14.6833 14.5905 14.9095 14.5905C15.1357 14.5905 15.3191 14.4072 15.3191 14.181C15.3191 13.9548 15.1357 13.7715 14.9095 13.7715ZM13.5 14.181C13.5 13.4025 14.1311 12.7715 14.9095 12.7715C15.688 12.7715 16.3191 13.4025 16.3191 14.181C16.3191 14.9594 15.688 15.5905 14.9095 15.5905C14.1311 15.5905 13.5 14.9594 13.5 14.181Z" fill="#151515" />
                </svg>
                <div class="profinbut_hov">
                    <span class="profinbut_text">
                        Твои фотографии
                    </span>
                    <svg class="profinbut_bg" width="112" height="48" viewBox="0 0 112 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M105 48C106.105 48 107 47.1046 107 46V27.7476L112 24.5L107 21.2524V2.00001C107 0.89544 106.105 9.05991e-06 105 8.82149e-06L2 0C0.895435 0 4.11801e-06 0.895431 4.02145e-06 2L0 46C0 47.1046 0.895432 48 2 48L105 48Z" fill="#151515" />
                    </svg>
                </div>
            </button>
            <button onclick="likesetActive()" class="like_set">
                <svg class="like_set_ico"  width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5359 1.23C12.9763 0.979519 12.3749 0.850539 11.7667 0.851692L11.7655 0.851696C11.0002 0.855035 10.2498 1.06396 9.58186 1.45682C9.12123 1.72775 8.71039 2.07989 8.36487 2.49551C7.86891 1.90768 7.24351 1.45204 6.53717 1.17578C5.60727 0.812079 4.59216 0.781151 3.64396 1.08831C2.69651 1.39524 1.87275 2.02101 1.28892 2.8649C0.705415 3.7083 0.390136 4.72763 0.384285 5.77282H0.384277V5.77562C0.384277 9.30803 2.38542 11.6502 4.32916 13.085C5.30164 13.8028 6.27112 14.3033 6.99619 14.6243C7.35941 14.7851 7.66313 14.9017 7.8777 14.9786C7.98503 15.0171 8.0702 15.0457 8.12952 15.0649C8.15918 15.0745 8.1824 15.0818 8.1987 15.0869L8.21792 15.0928L8.22354 15.0945L8.22533 15.095L8.22597 15.0952C8.22622 15.0952 8.22644 15.0953 8.36794 14.6158L8.22644 15.0953L8.36794 15.1371L8.50943 15.0953L8.36794 14.6158C8.50943 15.0953 8.50965 15.0952 8.5099 15.0952L8.51054 15.095L8.51233 15.0945L8.51795 15.0928L8.53717 15.0869C8.55347 15.0818 8.57669 15.0745 8.60635 15.0649C8.66567 15.0457 8.75084 15.0171 8.85817 14.9786C9.07274 14.9017 9.37646 14.7851 9.73968 14.6243C10.4648 14.3033 11.4342 13.8028 12.4067 13.085C14.3503 11.6503 16.3513 9.30838 16.3516 5.77643V5.77562H15.8516L16.3516 5.77643C16.3526 5.1347 16.2368 4.49825 16.0098 3.90326C15.7828 3.30824 15.4488 2.76513 15.0249 2.30601C14.601 1.8468 14.0954 1.48042 13.5359 1.23ZM8.36794 14.0905C8.3951 14.0996 8.41861 14.1074 8.43826 14.1138C8.46341 14.1219 8.48222 14.1278 8.49423 14.1316L8.5071 14.1355L8.50961 14.1362L8.50973 14.1363C8.5096 14.1362 8.50943 14.1362 8.36794 14.6158C8.22644 14.1362 8.22627 14.1362 8.22614 14.1363L8.22626 14.1362L8.22877 14.1355L8.24164 14.1316C8.25365 14.1278 8.27246 14.1219 8.29761 14.1138C8.31726 14.1074 8.34078 14.0996 8.36794 14.0905ZM1.38428 5.77704C1.38481 8.87588 3.12524 10.9534 4.92305 12.2804C5.82149 12.9436 6.72293 13.4097 7.40104 13.7099C7.73941 13.8597 8.02035 13.9675 8.21505 14.0372C8.27433 14.0585 8.32557 14.0762 8.36794 14.0905C8.4103 14.0762 8.46154 14.0585 8.52082 14.0372C8.71552 13.9675 8.99646 13.8597 9.33483 13.7099C10.0129 13.4097 10.9144 12.9436 11.8128 12.2804C13.6109 10.9532 15.3516 8.87524 15.3516 5.77562L15.3516 5.77481C15.3524 5.25406 15.2583 4.73905 15.0755 4.25965C14.8926 3.78028 14.6251 3.3472 14.2901 2.98432C13.9552 2.62152 13.5597 2.33625 13.1274 2.14274C12.6954 1.94939 12.234 1.8509 11.7692 1.85169L11.7698 1.85169L11.7677 1.35169L11.7686 1.85169L11.7692 1.85169C11.1845 1.85435 10.6073 2.01381 10.0888 2.31877C9.56987 2.62402 9.12452 3.06649 8.79578 3.61008L8.37131 4.31196L7.94192 3.61308C7.51133 2.91225 6.88921 2.38723 6.17293 2.10708C5.45746 1.82725 4.67993 1.80388 3.95214 2.03964C3.22359 2.27565 2.57655 2.76135 2.11129 3.43384C1.64595 4.10646 1.3893 4.92779 1.38428 5.77704ZM1.38428 5.77704L1.38427 5.77842L0.884277 5.77562H1.38428L1.38428 5.77704ZM8.36487 2.49551C8.52128 2.68088 8.66481 2.8794 8.79395 3.08959L8.36794 3.35134L7.94009 3.0926C8.06756 2.88182 8.20962 2.68225 8.36487 2.49551ZM11.7706 4.8014C11.8777 4.80079 11.9849 4.82312 12.0864 4.86833C12.188 4.9136 12.2831 4.98148 12.365 5.0702C12.447 5.159 12.5138 5.26668 12.5599 5.38794C12.6056 5.50847 12.6294 5.63878 12.6291 5.77109C12.6196 6.35055 12.5037 6.92125 12.289 7.4496C12.0739 7.9788 11.7646 8.45365 11.3811 8.84741L12.0974 9.54519C12.5737 9.05622 12.9532 8.47142 13.2154 7.82606C13.4776 7.18074 13.6179 6.48659 13.629 5.78392L13.629 5.78393L13.629 5.77849C13.6303 5.52379 13.5849 5.27056 13.4948 5.03311C13.4047 4.79562 13.271 4.57736 13.0998 4.39189C12.9285 4.20633 12.7227 4.05705 12.4932 3.95483C12.2635 3.85255 12.0159 3.79999 11.7649 3.80142L11.7706 4.8014Z" fill="#151515" />
                </svg>
                <div class="like_set_hov">
                    <span class="like_set_text">
                        Избранные фотографии
                    </span>
                    <svg class="like_set_bg" width="112" height="48" viewBox="0 0 112 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M105 48C106.105 48 107 47.1046 107 46V27.7476L112 24.5L107 21.2524V2.00001C107 0.89544 106.105 9.05991e-06 105 8.82149e-06L2 0C0.895435 0 4.11801e-06 0.895431 4.02145e-06 2L0 46C0 47.1046 0.895432 48 2 48L105 48Z" fill="#151515" />
                    </svg>
                </div>
            </button>
        </div>
        <div class="set_inf">
            <div class="circle_bg">
                <span class="cicle_set"></span>
                <span class="cicle_set"></span>
                <span class="cicle_set"></span>
            </div>
        </div>
    </div>

    @if (auth()->user()->id == $user->id) 
    <!-- Добавление фото -->
    <div class="addphoto">
        <div class="addphoto_bgr"></div>
        <div class="addphoto_box">
            <div class="colcor_block">
                <div class="set_colcor">
    
                    <div class="ecsp">
                        <div class="title_data">
                            <span class="title title_ecsp">Экспозиция</span>
                            <span class="data data_ecsp">0</span>
                        </div>
                        <input min="-100" max="100" value="0" class="ecsp_range" type="range" name="" id="">
                    </div>
    
                    <div class="contr">
                        <div class="title_data">
                            <span class="title title_contr">Контраст</span>
                            <span class="data data_contr">0</span>
                        </div>
                        <input min="-100" max="100" value="0"  class="contr_range" type="range" name="" id="">
                    </div>
    
                    <div class="nash">
                        <div class="title_data">
                            <span class="title title_nash">Насыщенность</span>
                            <span class="data data_nash">0</span>
                        </div>
                        <input min="-100" max="100" value="0"  class="nash_range" type="range" name="" id="">
                    </div>
    
                    <div class="temp">
                        <div class="title_data">
                            <span class="title title_temp">Температура</span>
                            <span class="data data_temp">0</span>
                        </div>
                        <input min="-100" max="100" value="0"  class="temp_range" type="range" name="" id="">
                    </div>
    
                    <div class="rez">
                        <div class="title_data">
                            <span class="title title_rez">Резкость</span>
                            <span class="data data_rez">0</span>
                        </div>
                        <input min="0" max="100" value="0"  class="rez_range" type="range" name="" id="">
                    </div>
    
                    <div class="shum">
                        <div class="title_data">
                            <span class="title title_shum">Шум</span>
                            <span class="data data_shum">0</span>
                        </div>
                        <input min="0" max="100" value="0" class="shum_range" type="range" name="" id="">
                    </div>
    
                </div>
                <button class="reset">
                    Сбросить
                </button>
                <div class="set_colcor_btn">
                    <button class="cansel_btn">Отмена</button>
                    <button class="ok_btn">Применить</button>
                </div>
            </div>
            
            <div class="brush_block" style="display:none">
                <div class="controls">
                    <div class="top_controls">
                    <svg width="113" height="37" viewBox="0 0 113 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.11407 33.8895C-0.262634 30.5128 -0.262634 25.0382 3.11407 21.6615L21.6617 3.11391C23.4088 1.36684 25.7175 0.523574 28.0067 0.584365C30.2928 0.526259 32.5975 1.36952 34.3422 3.11415L47.002 15.7738L59.6618 3.11415C61.4077 1.3683 63.7144 0.525038 66.002 0.584609C68.2896 0.525038 70.5964 1.3683 72.3422 3.11415L85.002 15.7738L97.6617 3.11415C101.038 -0.262559 106.513 -0.262559 109.89 3.11415C113.267 6.49086 113.267 11.9655 109.89 15.3422L91.3422 33.8898C89.5964 35.6356 87.2897 36.4789 85.002 36.4193C82.7144 36.4789 80.4075 35.6356 78.6616 33.8898L66.002 21.2301L53.3423 33.8898C51.5964 35.6356 49.2897 36.4789 47.002 36.4193C44.7144 36.4789 42.4077 35.6356 40.6617 33.8898L28.0019 21.2301L15.3422 33.8895C11.9655 37.2663 6.49091 37.2663 3.11407 33.8895Z" fill="#161616" />
                    </svg>
                    </div>
                    <div class="slider">
                        <label for="lineThickness">Толщина линии</label>
                        <input type="range" id="lineThickness" min="1" max="50" value="5">
                    </div>
                    <div class="slider">
                        <label for="intensity">Интенсивность</label>
                        <input type="range" id="intensity" min="10" max="100" value="100">
                    </div>
                    <div class="colors">
                        <div class="color" data-color="#FFFFFF"></div>
                        <div class="color" data-color="#181919"></div>
                        <div class="color" data-color="#afa399"></div>
                        <div class="color" data-color="#3f8ae0"></div>
                        <div class="color" data-color="#22bd8a"></div>
                        <div class="color" data-color="#fac725"></div>
                        <div class="color" data-color="#ff5773"></div>
                        <div class="color" data-color="#a393f5"></div>
                        <div class="color" data-color="#925cff"></div>
                        <div class="color" data-color="#fa60a3"></div>
                        <div class="color" data-color="#ff8000"></div>
                        <div class="color" data-color="#b1e718"></div>
                        <div class="color" data-color="#7ad3ff;"></div>
                        <div class="color" data-color="#585f67"></div>
                    </div>
                    <div class="buttons">
                        <button id="cancel">Отмена</button>
                        <button id="apply">Применить</button>
                    </div>
                </div>
            </div>

            <div class="close_edit_block">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.05714L9.94284 0L5.99998 3.94286L2.05714 1.70684e-05L0 2.05716L3.94284 6L3.50304e-06 9.94284L2.05714 12L5.99998 8.05714L9.94284 12L12 9.94286L8.05712 6L12 2.05714Z" fill="#161616" />
                  </svg>
            </div>
            <div class="addphoto_block">
                
            <div class="editing_area">
                <div class="area_block">
                    <div id="drop_area">Переместите картинку сюда</div>
                    <form id="photo-submit" enctype="multipart/form-data" action="/image" method="POST" class="photo_add_form">
                        @csrf
                        <input accept="image/png, image/gif, image/jpeg" type="file" name="photo_add" id="photo_add" style="display: none;">
                       
                    </form>
                    <div class="image_box">
                        <img id="image" src="" >
                    </div>
                    <div class="canvas_container" style="display:none">
                        <canvas id="drawing-canvas" style="display:none"></canvas>    
                    </div>
                    
                    
                    <div class="buts_accept" style="display:none">
                        <button type="button" id="accept_button" class="accept">Принять</button>
                        <button type="button" id="cancel_button" class="close_crop">Отмена</button>
                    </div>

                    <div class="but_save" style="display:none">
                        <button id="save_button" class="sava_img">Сохранение изображения</button>
                    </div>
                </div>
            </div>
                                                                        
                <div class="editing_tools">
                    <div class="edit_btn">
                        <button class="edbtn clip_edit">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.96156 1.30128C2.96156 0.582604 3.54417 0 4.26285 0C4.98152 0 5.56413 0.582604 5.56413 1.30128V11.9359H16.1987C16.9174 11.9359 17.5 12.5185 17.5 13.2372C17.5 13.9559 16.9174 14.5385 16.1987 14.5385H14.5385V16.1987C14.5385 16.9174 13.9558 17.5 13.2372 17.5C12.5185 17.5 11.9359 16.9174 11.9359 16.1987V14.5385H4.26284C3.99334 14.5385 3.74297 14.4565 3.53529 14.3162C3.18914 14.0824 2.96156 13.6864 2.96156 13.2372V13.2321V5.5641H1.30128C0.582605 5.5641 0 4.9815 0 4.26282C0 3.54414 0.582603 2.96154 1.30128 2.96154H2.96156V1.30128ZM7.08976 2.96153V5.5641H11.9359V10.4103H14.5385V4.26811V4.26282C14.5385 3.54414 13.9559 2.96153 13.2372 2.96153H7.08976Z" fill="#161616" />
                            </svg>
                            <span class="clip_edit_naz">Обрезка</span>
                        </button>
                        <button class="edbtn blur_edit">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.3921 0C7.46238 0.107428 6.57329 0.348407 5.74449 0.703277L6.5829 2.15662C7.156 1.92839 7.76212 1.76541 8.3921 1.67685V0ZM3.82242 1.80672L4.65992 3.2585C4.16345 3.64469 3.71428 4.08891 3.32257 4.58098L1.8699 3.7416C2.42445 3.00676 3.08252 2.35456 3.82242 1.80672ZM0.748247 5.6542L2.19841 6.49213C1.96019 7.07072 1.78864 7.68383 1.69332 8.32189H0.0159884C0.131124 7.38388 0.381963 6.4879 0.748247 5.6542ZM0 10.5395H1.67387C1.75878 11.186 1.9218 11.8079 2.15313 12.3954L0.700348 13.2349C0.342553 12.3916 0.102251 11.4863 0 10.5395ZM1.79772 15.1615L3.24781 14.3236C3.64253 14.8353 4.09855 15.2972 4.60488 15.6983L3.76651 17.1516C3.01716 16.5882 2.35325 15.9172 1.79772 15.1615ZM5.68049 18.269L6.51803 16.8172C7.1102 17.0592 7.7383 17.2312 8.3921 17.3231V19C7.4384 18.8898 6.52746 18.6391 5.68049 18.269ZM10.6079 19V17.3232C11.2616 17.2313 11.8897 17.0592 12.4817 16.8173L13.3193 18.2691C12.4724 18.6391 11.5615 18.8898 10.6079 19ZM15.2333 17.1517L14.3949 15.6985C14.9013 15.2974 15.3574 14.8355 15.7522 14.3238L17.2022 15.1616C16.6466 15.9174 15.9827 16.5884 15.2333 17.1517ZM18.2996 13.235L16.8469 12.3956C17.0783 11.8081 17.2413 11.1861 17.3263 10.5395H19C18.8977 11.4863 18.6574 12.3917 18.2996 13.235ZM18.984 8.32188H17.3068C17.2115 7.68376 17.0399 7.07057 16.8016 6.49192L18.2517 5.65405C18.618 6.48779 18.8689 7.38383 18.984 8.32188ZM17.13 3.74147L15.6774 4.5808C15.2857 4.0887 14.8364 3.64447 14.3399 3.25827L15.1774 1.80657C15.9173 2.35441 16.5754 3.00662 17.13 3.74147ZM13.2553 0.703173L12.4169 2.15648C11.8439 1.92831 11.2378 1.76537 10.6079 1.67683V5.48892e-06C11.5376 0.107426 12.4265 0.348367 13.2553 0.703173ZM9.56916 14.3511C12.2844 14.3511 14.4855 12.1482 14.4855 9.43071C14.4855 6.71325 12.2844 4.51031 9.56916 4.51031C6.85391 4.51031 4.65277 6.71325 4.65277 9.43071C4.65277 12.1482 6.85391 14.3511 9.56916 14.3511Z" fill="#161616" />
                            </svg>
                            <span class="blur_edit_naz">Размытие</span>
                        </button>
                        <button class="edbtn brush_edit">
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.24053 1.29699C9.40694 0.814482 9.1743 0.285133 8.7063 0.0814362C8.23586 -0.123327 7.68715 0.0702888 7.44939 0.524949L3.54101 7.99879C3.10789 8.82703 3.46843 9.84879 4.32542 10.2218C5.18657 10.5966 6.18445 10.1581 6.49066 9.2702L9.24053 1.29699ZM5.19154 12.4968C5.36041 11.8734 5.11206 11.2117 4.57466 10.8534C4.31103 10.6776 4.00979 10.5662 3.69522 10.5281L3.58868 10.5152C3.12334 10.4589 2.67625 10.7148 2.48918 11.1446L2.42407 11.2942C2.35779 11.4465 2.31112 11.6066 2.28517 11.7706L2.13325 12.7312C2.08887 13.0119 2.00903 13.2857 1.89564 13.5462C1.57327 14.2869 1.07943 14.9403 0.454861 15.4525L0.0759286 15.7633H0.0369316V15.7953L0 15.8256L0.0369316 15.8226V16H8.63718V15.7633H0.773584L0.964163 15.748C2.02488 15.6626 3.04152 15.2864 3.90229 14.6607C4.27678 14.3885 4.57167 14.0211 4.75643 13.5966L5.11976 12.7618L5.19154 12.4968Z" fill="#161616" />
                            </svg>
                            <span class="brush_edit_naz">Кисть</span>
                        </button>
                        <button class="edbtn colcor_edit">
                            <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.49084 1.73911H16.087V3.47825H7.4101C7.02937 4.3728 6.1423 5 5.10874 5C4.07518 5 3.18811 4.3728 2.80738 3.47825H0V1.73911H2.72664C3.04854 0.730464 3.99334 0 5.10874 0C6.22414 0 7.16893 0.730464 7.49084 1.73911ZM6.95653 2.50001C6.95653 3.52054 6.12923 4.34784 5.10871 4.34784C4.08818 4.34784 3.26088 3.52054 3.26088 2.50001C3.26088 1.47948 4.08818 0.652185 5.10871 0.652185C6.12923 0.652185 6.95653 1.47948 6.95653 2.50001ZM8.59612 8.26087H0V6.52174H8.67686C9.05759 5.62719 9.94466 4.99999 10.9782 4.99999C12.0118 4.99999 12.8988 5.62719 13.2796 6.52174H16.087V8.26087H13.3603C13.0384 9.26952 12.0936 9.99999 10.9782 9.99999C9.86282 9.99999 8.91802 9.26952 8.59612 8.26087ZM9.13047 7.50001C9.13047 6.47948 9.95777 5.65218 10.9783 5.65218C11.9988 5.65218 12.8261 6.47948 12.8261 7.50001C12.8261 8.52054 11.9988 9.34784 10.9783 9.34784C9.95777 9.34784 9.13047 8.52054 9.13047 7.50001Z" fill="#161616" />
                            </svg>
                            <span class="colcor_edit_naz">Цветокоррекция</span>
                        </button>
                    </div>
                    <div class="photo_caption">
                        <form class="photo_caption_form" action="">
                            <label class="title_photo" for="">Подпись к фотографии</label>
                            <textarea form="photo-submit" type="text" class="podp" placeholder="Добавить подпись к фото" name="podp" id="podp_edit" cols="30" rows="10" maxlength="256"></textarea>
                        </form>
                    </div>
    
                    <div class="add_teg">
                        <div class="add_teg_form" action="">
                            <label class="teg_title" for="">Добавить теги</label>
                            <div class="teg_send_box">

                                <input onemptied="dntKey()" class="teg_add" id="teg_input" placeholder="Добавить теги" type="text">
                                
                                <div class="error_teg">
                                    <svg class="error_ico" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.22857 0L0 2.22857L4.27148 6.50005L8.28145e-05 10.7714L2.22866 13L6.50005 8.72862L10.7714 13L13 10.7714L8.72862 6.50005L13.0001 2.22858L10.7715 7.3838e-06L6.50005 4.27148L2.22857 0Z" fill="#161616" />
                                    </svg>
                                    <div class="error_bg">
                                        <svg width="84" height="45" viewBox="0 0 84 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_389_28)">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7942 6L41.8971 0L38 6H45.7942ZM5 6C2.23858 6 0 8.23858 0 11V40C0 42.7614 2.23858 45 5 45H79C81.7614 45 84 42.7614 84 40V11C84 8.23858 81.7614 6 79 6H5Z" fill="#161616" />
                                              <mask id="mask0_389_28" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="84" height="45">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M45.7942 6L41.8971 0L38 6H45.7942ZM5 6C2.23858 6 0 8.23858 0 11V40C0 42.7614 2.23858 45 5 45H79C81.7614 45 84 42.7614 84 40V11C84 8.23858 81.7614 6 79 6H5Z" fill="white" />
                                              </mask>
                                              <g mask="url(#mask0_389_28)">
                                                <path d="M41.8971 1.40667e-05L42.7357 -0.544691L41.8971 -1.83585L41.0585 -0.544691L41.8971 1.40667e-05ZM45.7942 6.00001V7.00001H47.6362L46.6329 5.4553L45.7942 6.00001ZM38 6.00001L37.1614 5.4553L36.1581 7.00001H38V6.00001ZM41.0585 0.544719L44.9556 6.54471L46.6329 5.4553L42.7357 -0.544691L41.0585 0.544719ZM38.8386 6.54471L42.7357 0.544719L41.0585 -0.544691L37.1614 5.4553L38.8386 6.54471ZM45.7942 5.00001H38V7.00001H45.7942V5.00001ZM1 11C1 8.79087 2.79086 7.00001 5 7.00001V5.00001C1.68629 5.00001 -1 7.6863 -1 11H1ZM1 40V11H-1V40H1ZM5 44C2.79086 44 1 42.2091 1 40H-1C-1 43.3137 1.68629 46 5 46V44ZM79 44H5V46H79V44ZM83 40C83 42.2091 81.2091 44 79 44V46C82.3137 46 85 43.3137 85 40H83ZM83 11V40H85V11H83ZM79 7.00001C81.2091 7.00001 83 8.79087 83 11H85C85 7.6863 82.3137 5.00001 79 5.00001V7.00001ZM5 7.00001H79V5.00001H5V7.00001Z" fill="#444444" />
                                              </g>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_389_28">
                                                <rect width="84" height="45" fill="white" />
                                              </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="error_text">
                                            Укажите<br/>
                                            тег
                                        </span>
                                    </div>
                                </div>
                                
                                <button onclick="addTeg()" class="send_teg">
                                    <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 1L2 8.239L17.3805 17.283L21 1Z" stroke="white" stroke-miterlimit="10" />
                                        <path d="M12.1745 14.2142L8.33654 17.2827L7.73804 11.6112L20.0975 1.90222" stroke="white" stroke-miterlimit="10" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="teg_s">
                            <div class="teg_block">
    
                                
    
                            </div>
                        </div>
                    </div>

                    <div class="scale_send">
                        <div class="send_title">
                            Масштаб
                        </div>
                        <div class="scale_box">
                            <div class="scale">
                                <div onclick="scaleMinus()" class="scale_plus">
                                    <svg width="20" height="2" viewBox="0 0 20 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="2" fill="#161616" />
                                    </svg>
                                </div>
                                <span class="proc">0%</span>
                                <div onclick="scalePlus()" class="scale_minus">
                                    <svg class="scale_minus" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11 10V0H9V10H0V12H9V21H11V12H20V10H11Z" fill="#161616" />
                                    </svg>
                                </div>
                            </div>
                            <div class="send_all">
                                    <button form="photo-submit"  class="send_all_btn" type="submit" value="">
                                        <svg width="41" height="34" viewBox="0 0 41 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8276 1.1085L40.0291 0.202225L39.1615 0.532764L1.82198 14.7591L0.84925 15.1297L1.74656 15.6574L12.8062 22.1607L13.9556 33.0519L14.0514 33.9605L14.765 33.39L22.028 27.5832L31.9729 33.431L32.5653 33.7794L32.7145 33.1085L39.8276 1.1085ZM21.1053 27.0406L13.8783 22.7911L14.8542 32.0384L21.1053 27.0406ZM14.1592 21.7961L31.8874 32.2206L38.65 1.79778L3.15075 15.323L13.2334 21.2517L37.2571 2.37988L37.8749 3.16626L14.1592 21.7961Z" fill="white" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>   
            </div>
        </div>

    </div>
    @endif

    <div onclick="hidePopUp(event)" class="pop_up">
        <span class="close_pop_up">&times;</span>
        <div class="pop_up_fullimg" style="background-image: url('img/profile/full_img.png');"></div>
        <div class="block_author_full">
            <div class="avatar_author" style="background-image: url({{asset("/storage/".$user->image)}})">
                
            </div>
            <div class="author_info">
                <span class="nickname">{{$user->nickname}}</span>
                <span class="name">{{$user->fio}}</span>
                <span class="subcol">{{$subscriber}} подписчиков</span>
            </div>
        </div>
        <div onclick="hidePopUp(event)" class="pop_up_bg"></div>
    </div>

    <div class="logout">
        <a href="{{ route('logout') }}" class="logout_btn" type="submit">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 11.2654V35V36H1H35H36V35V11.2654V10.2654V1V0H35H1H0V1V10.2654V11.2654ZM34 2V9.2654H24.8967H21.8028H2V2H34ZM21.8028 11.2654H2V34H34V11.2654H24.8967H21.8028ZM21.9343 27.9731L18 24.0457L14.0657 27.9731L12.6528 26.5577L16.5846 22.6327L12.6528 18.7077L14.0657 17.2923L18 21.2197L21.9343 17.2923L23.3473 18.7077L19.4155 22.6327L23.3473 26.5577L21.9343 27.9731ZM5.64075 6.64075H8.71847V4.64075H5.64075V6.64075ZM14.9062 6.64075H11.8124V4.64075H14.9062V6.64075ZM18 6.64075H21.0938V4.64075H18V6.64075Z" fill="#151515" />
            </svg>
        </a>
    </div>

    <!-- Редактировать профиль -->
    @if (auth()->user()->id == $user->id) 
    <div style="display:none" class="red_module">
        <div class="red_block">

            <span class="close_red">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.05714L9.94284 0L5.99998 3.94286L2.05714 1.70684e-05L0 2.05716L3.94284 6L3.50304e-06 9.94284L2.05714 12L5.99998 8.05714L9.94284 12L12 9.94286L8.05712 6L12 2.05714Z" fill="#161616" />
                </svg>
            </span>
    
            <div class="title_red">
                Редактировать профиль
            </div>
    
            <div class="red_profile_block">
                <div class="top_red_block">
                    <div class="avatar_red_block">
    
                        <div class="avater_red_hover" style="background-image: url('{{asset("/storage/".$user->image)}}');">
                            
                                <div class="red_img_inp" >
                                    <input onchange="updateValues()" form="prof_edit" onchange="removeImg()" id="red_img_inp_file" value="asdlkada" type="file" name="image">
                                    <label for="red_img_inp_file">
                                        <div class="hover_avatar_bg">
                                            <span class="pluse">+</span> 
                                            <span class="pluse_text">Добавить фотографию</span> 
                                        </div>
                                    </label>
                                </div>
                                
                            
                        </div>

                        
                        <button class="reset_red_img" onclick="resetImg()" type="button">Сбросить</button>


                    </div>
    
                    <div class="auth_com_cominp">
        
                        <div class="auth_block_red">
                            <div class="avatar_author_red" style="background-image: url('{{asset("/storage/".$user->image)}}');">
                            </div>
                            <div class="author_info">
                                <span class="author_nickname">Wile</span>
                                <span class="author_fio">Зарипов Денис Ильич</span>
                                <span class="author_subcol">125 подписчиков</span>
                            </div>
                        </div>
        
                        <div class="com_block_red">
                            <div class="comments_avatar" style="background-image: url('{{asset("/storage/".$user->image)}}');">
                            </div>
                            <div class="comment_info">
                                <span class="red_com_ncikname">Wile</span>
                                <div class="red_com_comment_text">Просто топ!!!</div>
                                <span class="red_com_datecomment">12.06.2023</span>
                            </div>
                        </div>
        
                        <div class="send_com_red">
                            <form class="send_com_form" action="">
                                <div class="avatar_author_block" >
                                    <div class="avatar_author_img" style="background-image: url('{{asset("/storage/".$user->image)}}');"></div>
                                </div>
                                <input type="text" class="text_send" placeholder="Оставить комментарий...">
                            </form>
                            
                        </div>
        
                    </div>
                </div>
                <div class="bot_red_block">
    
                    <div class="red_form">
                        <div class="title_red_form">
                            Информация о профиле
                        </div>
    
                        <div class="red_form_block">
                            <form id="prof_edit" enctype="multipart/form-data" class="form_red_send" method="POST" action="/edit">
                                @csrf
                                @method('PATCH')
                                <div class="form_red_send_inf">

                                    <label for="" class="nickname_red">Никнейм</label>

                                    <input onchange="updateValues()" placeholder="Введите никнейм" id="nickname_red_inp" value="{{$user->nickname}}" type="text" name="nickname">

                                    <label for="" class="fio_red">ФИО</label>

                                    <input onchange="updateValues()" placeholder="Введите ФИО" value="{{$user->fio}}" type="text" name="fio">

                                    <label for="" class="email_red">Email</label>
                                    
                                    <input onchange="updateValues()" placeholder="Введите Email" value="{{$user->email}}" type="text" name="email">
                                </div>

                                <div class="bnt_send_res">
                                    <button type="button" onclick="updateValues()" class="btn_red_inf">Посмотреть изменения</button>

                                    <button type="button" onclick="resetValues()" class="btn_red_inf_res">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29571 3.96627C9.33114 2.96009 11.6594 2.71536 13.8595 3.27632C15.5124 3.69773 17.0109 4.55292 18.2076 5.74H14.37V7.74H20.11H21.11V6.74V0.999995H19.11V3.84741C17.7544 2.65559 16.1274 1.79056 14.3537 1.33832C11.6908 0.659389 8.87291 0.955588 6.40943 2.17337C3.94594 3.39114 1.99945 5.45013 0.921854 7.97808C-0.15574 10.506 -0.293316 13.3361 0.533999 15.9567C1.36131 18.5772 3.09892 20.8153 5.43267 22.2663C7.76643 23.7173 10.5423 24.2854 13.2585 23.8679C15.9746 23.4505 18.4518 22.075 20.2421 19.9902C22.0324 17.9054 23.0178 15.2488 23.02 12.5008L21.02 12.4992C21.0182 14.7697 20.2041 16.9647 18.7248 18.6872C17.2456 20.4098 15.1988 21.5462 12.9546 21.8911C10.7105 22.2361 8.41692 21.7667 6.48868 20.5678C4.56045 19.3689 3.12477 17.5198 2.44121 15.3546C1.75765 13.1894 1.87132 10.851 2.76167 8.76235C3.65202 6.67366 5.26029 4.97244 7.29571 3.96627Z" fill="white" />
                                        </svg>
                                    </button>
                                </div>

                                <button type="submit" class="btn_red">Отправить</button>
                            </form>
        
                            <div class="tent_block">
                                <div class="avatar_tent" style="background-image: url('{{asset("/storage/".$user->image)}}');"></div>
                                <span class="tent_nickname">Wile</span>
                                <span class="tent_fio">Зарипов Денис Ильич</span>
                                <span class="tent_email">wile@gmail.com</span>
                                <span class="tent_photo_count">128 фотографий</span>
                                <span class="tent_sub_count">125 подписчиков</span>
                                </span>
                            </div>    
                        </div>
                    </div>
    
                    
                </div>
            </div>
    
            
        </div>
        <div class="red_bgr"></div>
    </div>
    @endif
    
    <header>
        <nav>
            <a class="logo" href="/main">
                <div class="logo_block">
                    <img src="{{asset('img/menu/logo.svg')}}" alt="">
                </div>
                <div class="logo_hover">
                    <span>Главная</span>
                    <img src="{{asset('img/menu/logo_hover.svg')}}" alt="">
                </div>
            </a>
            <a class="profile" href="/profile/{{auth()->user()->id}}">
                <div class="logo_block">
                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11 5C11 6.65685 9.65685 8 8 8C6.34315 8 5 6.65685 5 5C5 3.34315 6.34315 2 8 2C9.65685 2 11 3.34315 11 5ZM10.3697 9.40389C11.9358 8.55943 13 6.904 13 5C13 2.23858 10.7614 0 8 0C5.23858 0 3 2.23858 3 5C3 6.904 4.06424 8.55943 5.6303 9.40389C4.40093 9.83285 3.27003 10.5933 2.34315 11.636C1.26927 12.8442 0.532221 14.3604 0.200003 16C0.0680867 16.6511 0 17.3216 0 18H2H8H14H16C16 17.3216 15.9319 16.6511 15.8 16C15.4678 14.3604 14.7307 12.8442 13.6569 11.636C12.73 10.5933 11.5991 9.83285 10.3697 9.40389ZM12.162 12.9648C12.905 13.8006 13.4526 14.8469 13.7488 16H8L2.25122 16C2.54738 14.8469 3.09496 13.8006 3.83796 12.9648C4.98632 11.6729 6.48981 11 8 11C9.51019 11 11.0137 11.6729 12.162 12.9648Z" fill="#151515" />
                    </svg>
                </div>
                <div class="logo_hover profile_logo">
                    <span>Профиль</span>
                    <img src="{{asset('img/menu/logo_hover.svg')}}" alt="">
                </div>
            </a>
            <a class="lenta" href="/feed">
                <div class="logo_block">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H1H22H23V1V22V23H22H1H0V22V1V0ZM2 2V16.7257L6.97289 11.7529L7.67938 11.0464L8.38649 11.7522L13.4094 16.7664L16.5229 13.6529L17.2307 12.945L17.9378 13.6536L21 16.7222V2H2ZM2 21V19.5542L7.68062 13.8736L12.7035 18.8877L13.4106 19.5936L14.1171 18.8871L17.2293 15.7749L21 19.5536V21H2ZM12.5 7.68002C12.5 7.17744 12.9074 6.77002 13.41 6.77002C13.9126 6.77002 14.32 7.17744 14.32 7.68002C14.32 8.1826 13.9126 8.59002 13.41 8.59002C12.9074 8.59002 12.5 8.1826 12.5 7.68002ZM13.41 4.77002C11.8029 4.77002 10.5 6.07287 10.5 7.68002C10.5 9.28717 11.8029 10.59 13.41 10.59C15.0171 10.59 16.32 9.28717 16.32 7.68002C16.32 6.07287 15.0171 4.77002 13.41 4.77002Z" fill="#151515" />
                      </svg>
                </div>
                <div class="logo_hover lenta_hover">
                    <span>Лента</span>
                    <img src="{{asset('img/menu/logo_hover.svg')}}" alt="">
                </div>
            </a>
            <a class="messages" href="/message">
                <div class="logo_block">
                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.49505L7.25719 9L2 14.5049V3.49505ZM3.33775 2L11.5 10.5469L19.6623 2H3.33775ZM21 3.49505L15.7427 9.00007L21 14.5051V3.49505ZM19.6522 15.9896L14.36 10.448L12.2232 12.6855L11.5 13.4428L10.7768 12.6855L8.63995 10.4479L3.34764 15.9896H19.6522ZM1 0H0V1V16.9896V17.9896H1H22H23V16.9896V1V0H22H1Z" fill="#151515" />
                      </svg>
                </div>
                
                <div class="logo_hover messages_hover">
                    <span>Сообщения</span>
                    <img src="{{asset('img/menu/logo_hover.svg')}}" alt="">
                </div>
            </a>
            <a class="friends" href="/friends">
                <div class="logo_block">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3961 2.55567L11.5002 0.749509L10.6044 2.55567L10.2158 3.33905L9.34085 3.47124L7.33288 3.7746L8.79755 5.18126L9.42387 5.78278L9.27502 6.63867L8.92735 8.63776L10.7245 7.69571L11.5002 7.28908L12.276 7.69571L14.0731 8.63776L13.7254 6.63867L13.5766 5.78278L14.2029 5.18126L15.6676 3.7746L13.6596 3.47124L12.7846 3.33905L12.3961 2.55567ZM5.77015 11.6402C4.7429 11.6402 3.91015 12.4729 3.91015 13.5002C3.91015 14.5274 4.7429 15.3602 5.77015 15.3602C6.7974 15.3602 7.63015 14.5274 7.63015 13.5002C7.63015 12.4729 6.7974 11.6402 5.77015 11.6402ZM1.91015 13.5002C1.91015 11.3683 3.63834 9.64015 5.77015 9.64015C7.90197 9.64015 9.63015 11.3683 9.63015 13.5002C9.63015 15.4117 8.2406 16.9988 6.41647 17.3063C7.7095 17.4518 8.92283 18.0307 9.8528 18.9587C10.8118 19.9157 11.4001 21.1747 11.525 22.5127C11.6499 21.1747 12.2382 19.9157 13.1972 18.9587C14.1201 18.0377 15.3221 17.4606 16.6042 17.3097C14.77 17.0106 13.3701 15.4188 13.3701 13.5002C13.3701 11.3683 15.0983 9.64015 17.2301 9.64015C19.3619 9.64015 21.0901 11.3683 21.0901 13.5002C21.0901 15.4062 19.7086 16.9896 17.8922 17.3036C19.1965 17.4448 20.4209 18.0267 21.3571 18.9629C22.4381 20.0439 23.0468 21.5092 23.05 23.0379L21.05 23.0421C21.0479 22.0423 20.6498 21.0841 19.9429 20.3772C19.2362 19.6705 18.2784 19.2724 17.279 19.27C16.2782 19.2703 15.3183 19.6674 14.6099 20.3744C13.9013 21.0816 13.5021 22.041 13.5 23.0421L11.525 23.038L9.55 23.0421C9.54791 22.041 9.14873 21.0816 8.44007 20.3744C7.73166 19.6674 6.77181 19.2703 5.77104 19.27C4.77164 19.2724 3.81383 19.6705 3.10712 20.3772C2.40017 21.0841 2.00209 22.0423 2 23.0421L0 23.0379C0.00319517 21.5092 0.61191 20.0439 1.69291 18.9629C2.62191 18.0339 3.83469 17.4538 5.12769 17.3069C3.30167 17.001 1.91015 15.4131 1.91015 13.5002ZM17.2301 11.6402C16.2029 11.6402 15.3701 12.4729 15.3701 13.5002C15.3701 14.5274 16.2029 15.3602 17.2301 15.3602C18.2574 15.3602 19.0901 14.5274 19.0901 13.5002C19.0901 12.4729 18.2574 11.6402 17.2301 11.6402Z" fill="#151515" />
                      </svg>
                </div>
                <div class="logo_hover friends_hover">
                    <span>Друзья</span>
                    <img src="{{asset('img/menu/logo_hover.svg')}}" alt="">
                </div>
            </a>
            <a class="settings" href="/settings">
                <div class="logo_block">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59 0H8.59V1V2.36634C8.07605 2.52956 7.57684 2.73603 7.09774 2.98352L6.13711 2.02289L5.43 1.31579L4.72289 2.02289L2.02289 4.72289L1.31579 5.43L2.02289 6.13711L2.98352 7.09774C2.73603 7.57684 2.52956 8.07605 2.36634 8.59H1H0V9.59V13.41V14.41H1H2.36634C2.52956 14.924 2.73603 15.4232 2.98352 15.9023L2.02289 16.8629L1.31579 17.57L2.02289 18.2771L4.72289 20.9771L5.43 21.6842L6.13711 20.9771L7.09774 20.0165C7.57684 20.264 8.07605 20.4704 8.59 20.6337V22V23H9.59H13.41H14.41V22V20.6337C14.924 20.4704 15.4232 20.264 15.9023 20.0165L16.8629 20.9771L17.57 21.6842L18.2771 20.9771L20.9771 18.2771L21.6842 17.57L20.9771 16.8629L20.0165 15.9023C20.264 15.4232 20.4704 14.924 20.6337 14.41H22H23V13.41V9.59V8.59H22H20.6337C20.4704 8.07605 20.264 7.57684 20.0165 7.09774L20.9771 6.13711L21.6842 5.43L20.9771 4.72289L18.2771 2.02289L17.57 1.31579L16.8629 2.02289L15.9023 2.98352C15.4232 2.73603 14.924 2.52956 14.41 2.36634V1V0H13.41H9.59ZM10.59 3.13V2H12.41V3.13V3.92863L13.1889 4.10524C14.0211 4.29395 14.8153 4.62239 15.5378 5.07659L16.2131 5.50115L16.7771 4.93711L17.57 4.14421L18.8558 5.43L18.0629 6.22289L17.4988 6.78694L17.9234 7.46225C18.3776 8.18469 18.706 8.97891 18.8948 9.81114L19.0714 10.59H19.87H21V12.41H19.87H19.0714L18.8948 13.1889C18.706 14.0211 18.3776 14.8153 17.9234 15.5378L17.4988 16.2131L18.0629 16.7771L18.8558 17.57L17.57 18.8558L16.7771 18.0629L16.2131 17.4988L15.5378 17.9234C14.8153 18.3776 14.0211 18.706 13.1889 18.8948L12.41 19.0714V19.87V21H10.59V19.87V19.0714L9.81114 18.8948C8.97891 18.706 8.18469 18.3776 7.46225 17.9234L6.78694 17.4988L6.22289 18.0629L5.43 18.8558L4.14421 17.57L4.93711 16.7771L5.50115 16.2131L5.07659 15.5378C4.62239 14.8153 4.29395 14.0211 4.10524 13.1889L3.92863 12.41H3.13H2V10.59H3.13H3.92863L4.10524 9.81114C4.29395 8.97891 4.62239 8.18469 5.07659 7.46225L5.50115 6.78694L4.93711 6.22289L4.14421 5.43L5.43 4.14421L6.22289 4.93711L6.78694 5.50115L7.46225 5.07659C8.18469 4.62239 8.97891 4.29395 9.81114 4.10524L10.59 3.92863V3.13ZM9.55225 11.2793C9.55225 10.1747 10.4477 9.2793 11.5522 9.2793C12.6568 9.2793 13.5522 10.1747 13.5522 11.2793C13.5522 12.3839 12.6568 13.2793 11.5522 13.2793C10.4477 13.2793 9.55225 12.3839 9.55225 11.2793ZM11.5522 7.2793C9.34311 7.2793 7.55225 9.07016 7.55225 11.2793C7.55225 13.4884 9.34311 15.2793 11.5522 15.2793C13.7614 15.2793 15.5522 13.4884 15.5522 11.2793C15.5522 9.07016 13.7614 7.2793 11.5522 7.2793Z" fill="#151515" />
                      </svg>
                </div>
                <div class="logo_hover settings_hover">
                    <span>Настройки</span>
                    <img src="{{asset('img/menu/logo_hover.svg')}}" alt="">
                </div>
            </a>
            
        </nav>
    </header>

    <main>
        <div class="container">

            <div class="profile_main">

                <div class="block_profile">

                    @if(auth()->user()->id == $user->id)
                    <button id="btn_red_profile">
                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6983 2.12831C18.9042 2.04313 19.125 1.99953 19.3479 2L19.35 2C19.8009 2 20.2333 2.17911 20.5521 2.49792C20.8709 2.81674 21.05 3.24914 21.05 3.7L21.05 3.70215C21.0505 3.92501 21.0069 4.14576 20.9217 4.3517C20.8365 4.55764 20.7114 4.7447 20.5537 4.90211L20.5529 4.9029L19.1901 6.26572L16.788 3.8637L18.1479 2.49632L18.1487 2.49551C18.3059 2.33813 18.4927 2.21334 18.6983 2.12831ZM15.3777 5.28182L3.9181 16.805L3.29193 19.7981L6.28358 19.1722L17.7759 7.67993L15.3777 5.28182ZM17.9339 0.280159C18.3832 0.0943123 18.8648 -0.000895381 19.3511 5.00679e-06L23.05 3.7C23.0508 4.18588 22.9556 4.66712 22.7698 5.11612C22.5839 5.56557 22.311 5.97384 21.9668 6.31744L21.9663 6.3179L7.48711 20.7971L7.27642 21.0078L6.98477 21.0688L2.20477 22.0688L0.708073 22.3819L1.02119 20.8852L2.02119 16.1052L2.0819 15.8151L2.29094 15.6049L16.7309 1.08485L16.7321 1.08369C17.0758 0.739226 17.4842 0.466143 17.9339 0.280159Z" fill="#151515" />
                        </svg>
                    </button>
                    @endif

                    <div class="profile_container">
                        <div class="avatar" style="background-image: url('{{asset("/storage/".$user->image)}}');">
                            
                        </div>
                        <div class="info">
                            <span class="nick_name">{{$user->nickname}}</span>
                            <span class="name">{{$user->fio}}</span>
                            <span class="email">{{$user->email}}</span>
                            <span class="numimg">{{$image_count}} фото</span>
                            <span class="numsub">{{$subscriber}} подписчиков</span>
                        </div>
                        <div class="buttons_profile">

                            @if(auth()->user()->id !== $user->id)

                                <a href="/message" class="sendmes">Написать</a>
                                <div class="botbut">
                                    @if ($check_friend == null)
                                        <form action="{{route('friend.store', $user->id)}}" method="POST">@csrf <button class="addfr">Добавить в друзья</button></form>
                                    @elseif($check_friend->first_user_id == auth()->user()->id and $check_friend->conf == 0)   
                                        <form action="{{route('friend.destroy',$check_friend->id)}}" method="POST">@csrf @method('delete')<button class="expfr">Отменить приглашение</button></form>
                                    @elseif($check_friend->second_user_id == auth()->user()->id and $check_friend->conf == 0)   
                                        <form action="{{route('friend.update',$check_friend->id)}}" method="POST">@csrf @method('patch')<button class="expfr">Принять приглашение</button></form>    
                                    @elseif( $check_friend->conf == 1)    
                                    <form action="{{route('friend.destroy',$check_friend->id)}}" method="POST">@csrf @method('delete')<button class="delfr">Удалить из друзей</button></form>
                                    
                                    @endif

                                    @if ($check_subscriber == 0)
                                    <form action="/subscribe/{{$user->id}}" method="POST">
                                        @csrf
                                            <button class="sub">Подписаться</button>

                                    </form>
                                    @else
                                    <form action="/subscribe/{{$user->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="delsub">Отписаться</button>
                                    </form>
                                    @endif
                                </div>
                                
                            @endif
                            
                        </div>
                    </div>
                </div>

                <div class="cards">
                    <div class="cards_scroll">
                        <div class="cards_container">

                            <div  class=" cards_block_profile">

                                @if(auth()->user()->id == $user->id)
                                <div onclick="cardsAdd()" class="add_card">
                                    <div class="card_bg">
                                        <img src="{{ asset("img/profile/+.svg")}}" alt="">
                                        <span>Добавить</br>
                                             фотографию
                                        </span>
                                    </div>
                                </div>
                                @endif
                                
                                
                                @foreach($images as $image)
                                <div onclick="showPopUp()" class="card">
                                    <div  class="card_img" style="background-image: url({{asset('/storage/'.$image->url)}})">
                                        <div class="card_img_bot">
                                            <span class="like">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8559 0.421951C13.2325 0.142954 12.5613 -0.00127161 11.8815 1.70469e-05L11.879 2.47359e-05C11.0235 0.00375712 10.1867 0.237405 9.44409 0.674163C9.09347 0.880395 8.76966 1.12844 8.47789 1.41167C8.00348 0.957931 7.44778 0.598115 6.83502 0.358452C5.7979 -0.0471827 4.664 -0.08189 3.6056 0.260974C2.54869 0.603351 1.63657 1.29916 0.993451 2.22874C0.350998 3.15736 0.00641316 4.27543 1.5676e-05 5.41835H0V5.42394C0 9.17274 2.13137 11.647 4.14794 13.1356C5.15744 13.8807 6.16093 14.3984 6.90949 14.7298C7.28513 14.8961 7.60024 15.0172 7.82474 15.0976C7.9371 15.1379 8.02705 15.1681 8.09087 15.1888C8.1228 15.1992 8.14821 15.2072 8.16666 15.2129L8.18905 15.2197L8.19623 15.2219L8.19879 15.2226L8.19981 15.2229C8.20025 15.2231 8.20066 15.2232 8.48366 14.2641L8.20066 15.2232L8.48366 15.3067L8.76665 15.2232L8.48366 14.2641C8.76665 15.2232 8.76706 15.2231 8.7675 15.2229L8.76853 15.2226L8.77109 15.2219L8.77826 15.2197L8.80066 15.2129C8.8191 15.2072 8.84452 15.1992 8.87644 15.1888C8.94027 15.1681 9.03022 15.1379 9.14257 15.0976C9.36708 15.0172 9.68218 14.8961 10.0578 14.7298C10.8064 14.3984 11.8099 13.8807 12.8194 13.1356C14.8357 11.6472 16.9667 9.17345 16.9673 5.42556L15.9673 5.42394H16.9673V5.42475C16.9684 4.7228 16.8416 4.02592 16.5927 3.37339C16.3437 2.72054 15.9763 2.12242 15.508 1.61518C15.0396 1.10777 14.479 0.700832 13.8559 0.421951ZM9.24813 12.9011C8.93135 13.0413 8.66783 13.1428 8.48366 13.2092C8.29948 13.1428 8.03596 13.0413 7.71919 12.9011C7.06455 12.6112 6.19713 12.1623 5.33571 11.5265C3.61104 10.2534 2.00107 8.30847 2 5.42682C2.00474 4.67578 2.23205 3.9537 2.6382 3.36664C3.04417 2.77984 3.60286 2.36418 4.22195 2.16363C4.83954 1.96357 5.49827 1.98316 6.10652 2.22106C6.71642 2.45959 7.25506 2.91026 7.63163 3.52315L8.49041 4.92092L9.33935 3.51715C9.62688 3.04169 10.0134 2.65961 10.4581 2.39807C10.9017 2.13712 11.3922 2.00239 11.8865 2.00001C12.2794 1.99944 12.6707 2.08268 13.0388 2.24744C13.4076 2.41248 13.7481 2.6572 14.0385 2.97179C14.329 3.28656 14.5632 3.66462 14.724 4.08617C14.8848 4.50777 14.9681 4.96206 14.9673 5.42233L14.9673 5.42394C14.9673 8.30718 13.3569 10.253 11.6316 11.5265C10.7702 12.1623 9.90276 12.6112 9.24813 12.9011ZM11.8892 4.94972C11.9243 4.94952 11.9613 4.95673 11.9987 4.97341C12.0364 4.9902 12.0762 5.01738 12.1134 5.05768C12.1508 5.09814 12.1842 5.15053 12.2082 5.21368C12.2317 5.27562 12.2446 5.34425 12.2448 5.41512C12.2359 5.93224 12.1322 6.44046 11.9415 6.9097C11.7501 7.38082 11.4759 7.80069 11.1387 8.14684L12.5713 9.54241C13.094 9.00583 13.5085 8.36605 13.7944 7.66261C14.0802 6.95926 14.2327 6.20389 14.2447 5.44012L14.2447 5.44012L14.2448 5.42925C14.2463 5.11379 14.1902 4.79954 14.078 4.50401C13.9658 4.20842 13.7988 3.93487 13.583 3.70106C13.367 3.46708 13.1059 3.27709 12.8124 3.1464C12.5187 3.01559 12.2007 2.94791 11.8778 2.94975L11.8892 4.94972Z" fill="white" />
                                                  </svg>
                                                  {{$image->like_count}}
                                            </span>
                                            <span class="com">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.40047 0C2.47163 0 1.59871 0.400421 0.968304 1.0833C0.340383 1.7635 0 2.67011 0 3.60031V10.0943C0 11.0245 0.340383 11.9311 0.968304 12.6113C1.59871 13.2942 2.47163 13.6946 3.40047 13.6946H3.6007V14.6414V16.3134L5.07376 15.5224L8.47803 13.6946H11.8272C12.7561 13.6946 13.629 13.2942 14.2594 12.6113C14.8873 11.9311 15.2277 11.0245 15.2277 10.0943V3.60031C15.2277 2.67011 14.8873 1.7635 14.2594 1.0833C13.629 0.400421 12.7561 0 11.8272 0H3.40047ZM7.75349 11.8136L5.6007 12.9694V12.6946V11.6946H4.6007H3.40047C3.05602 11.6946 2.70781 11.5471 2.43786 11.2547C2.16543 10.9596 2 10.5434 2 10.0943V3.60031C2 3.15122 2.16543 2.73503 2.43786 2.43992C2.70781 2.1475 3.05602 2 3.40047 2H11.8272C12.1717 2 12.5199 2.1475 12.7899 2.43992C13.0623 2.73503 13.2277 3.15122 13.2277 3.60031V10.0943C13.2277 10.5434 13.0623 10.9596 12.7899 11.2547C12.5199 11.5471 12.1717 11.6946 11.8272 11.6946H8.22654H7.97506L7.75349 11.8136ZM9.99869 7.84769H11.1989V5.84769H9.99869V7.84769ZM8.19558 7.84769H7.00163V5.84769H8.19558V7.84769ZM3.99745 7.84769H5.19769V5.84769H3.99745V7.84769Z" fill="white" />
                                                  </svg>
                                                  {{$image->com_count}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card_bot">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                            
                            <div class="cards_block_like">
                                
                                @foreach($check_like as $like)
                                <div onclick="showPopUp()" class="card">
                                    <div  class="card_img" style="background-image: url({{asset('/storage/'.$like->url)}});">
                                        <div class="card_img_bot">
                                            <span class="like">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8559 0.421951C13.2325 0.142954 12.5613 -0.00127161 11.8815 1.70469e-05L11.879 2.47359e-05C11.0235 0.00375712 10.1867 0.237405 9.44409 0.674163C9.09347 0.880395 8.76966 1.12844 8.47789 1.41167C8.00348 0.957931 7.44778 0.598115 6.83502 0.358452C5.7979 -0.0471827 4.664 -0.08189 3.6056 0.260974C2.54869 0.603351 1.63657 1.29916 0.993451 2.22874C0.350998 3.15736 0.00641316 4.27543 1.5676e-05 5.41835H0V5.42394C0 9.17274 2.13137 11.647 4.14794 13.1356C5.15744 13.8807 6.16093 14.3984 6.90949 14.7298C7.28513 14.8961 7.60024 15.0172 7.82474 15.0976C7.9371 15.1379 8.02705 15.1681 8.09087 15.1888C8.1228 15.1992 8.14821 15.2072 8.16666 15.2129L8.18905 15.2197L8.19623 15.2219L8.19879 15.2226L8.19981 15.2229C8.20025 15.2231 8.20066 15.2232 8.48366 14.2641L8.20066 15.2232L8.48366 15.3067L8.76665 15.2232L8.48366 14.2641C8.76665 15.2232 8.76706 15.2231 8.7675 15.2229L8.76853 15.2226L8.77109 15.2219L8.77826 15.2197L8.80066 15.2129C8.8191 15.2072 8.84452 15.1992 8.87644 15.1888C8.94027 15.1681 9.03022 15.1379 9.14257 15.0976C9.36708 15.0172 9.68218 14.8961 10.0578 14.7298C10.8064 14.3984 11.8099 13.8807 12.8194 13.1356C14.8357 11.6472 16.9667 9.17345 16.9673 5.42556L15.9673 5.42394H16.9673V5.42475C16.9684 4.7228 16.8416 4.02592 16.5927 3.37339C16.3437 2.72054 15.9763 2.12242 15.508 1.61518C15.0396 1.10777 14.479 0.700832 13.8559 0.421951ZM9.24813 12.9011C8.93135 13.0413 8.66783 13.1428 8.48366 13.2092C8.29948 13.1428 8.03596 13.0413 7.71919 12.9011C7.06455 12.6112 6.19713 12.1623 5.33571 11.5265C3.61104 10.2534 2.00107 8.30847 2 5.42682C2.00474 4.67578 2.23205 3.9537 2.6382 3.36664C3.04417 2.77984 3.60286 2.36418 4.22195 2.16363C4.83954 1.96357 5.49827 1.98316 6.10652 2.22106C6.71642 2.45959 7.25506 2.91026 7.63163 3.52315L8.49041 4.92092L9.33935 3.51715C9.62688 3.04169 10.0134 2.65961 10.4581 2.39807C10.9017 2.13712 11.3922 2.00239 11.8865 2.00001C12.2794 1.99944 12.6707 2.08268 13.0388 2.24744C13.4076 2.41248 13.7481 2.6572 14.0385 2.97179C14.329 3.28656 14.5632 3.66462 14.724 4.08617C14.8848 4.50777 14.9681 4.96206 14.9673 5.42233L14.9673 5.42394C14.9673 8.30718 13.3569 10.253 11.6316 11.5265C10.7702 12.1623 9.90276 12.6112 9.24813 12.9011ZM11.8892 4.94972C11.9243 4.94952 11.9613 4.95673 11.9987 4.97341C12.0364 4.9902 12.0762 5.01738 12.1134 5.05768C12.1508 5.09814 12.1842 5.15053 12.2082 5.21368C12.2317 5.27562 12.2446 5.34425 12.2448 5.41512C12.2359 5.93224 12.1322 6.44046 11.9415 6.9097C11.7501 7.38082 11.4759 7.80069 11.1387 8.14684L12.5713 9.54241C13.094 9.00583 13.5085 8.36605 13.7944 7.66261C14.0802 6.95926 14.2327 6.20389 14.2447 5.44012L14.2447 5.44012L14.2448 5.42925C14.2463 5.11379 14.1902 4.79954 14.078 4.50401C13.9658 4.20842 13.7988 3.93487 13.583 3.70106C13.367 3.46708 13.1059 3.27709 12.8124 3.1464C12.5187 3.01559 12.2007 2.94791 11.8778 2.94975L11.8892 4.94972Z" fill="white" />
                                                  </svg>
                                                  {{$like->like_count}}
                                            </span>
                                            <span class="com">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.40047 0C2.47163 0 1.59871 0.400421 0.968304 1.0833C0.340383 1.7635 0 2.67011 0 3.60031V10.0943C0 11.0245 0.340383 11.9311 0.968304 12.6113C1.59871 13.2942 2.47163 13.6946 3.40047 13.6946H3.6007V14.6414V16.3134L5.07376 15.5224L8.47803 13.6946H11.8272C12.7561 13.6946 13.629 13.2942 14.2594 12.6113C14.8873 11.9311 15.2277 11.0245 15.2277 10.0943V3.60031C15.2277 2.67011 14.8873 1.7635 14.2594 1.0833C13.629 0.400421 12.7561 0 11.8272 0H3.40047ZM7.75349 11.8136L5.6007 12.9694V12.6946V11.6946H4.6007H3.40047C3.05602 11.6946 2.70781 11.5471 2.43786 11.2547C2.16543 10.9596 2 10.5434 2 10.0943V3.60031C2 3.15122 2.16543 2.73503 2.43786 2.43992C2.70781 2.1475 3.05602 2 3.40047 2H11.8272C12.1717 2 12.5199 2.1475 12.7899 2.43992C13.0623 2.73503 13.2277 3.15122 13.2277 3.60031V10.0943C13.2277 10.5434 13.0623 10.9596 12.7899 11.2547C12.5199 11.5471 12.1717 11.6946 11.8272 11.6946H8.22654H7.97506L7.75349 11.8136ZM9.99869 7.84769H11.1989V5.84769H9.99869V7.84769ZM8.19558 7.84769H7.00163V5.84769H8.19558V7.84769ZM3.99745 7.84769H5.19769V5.84769H3.99745V7.84769Z" fill="white" />
                                                  </svg>
                                                  {{$like->com_count}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card_bot">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <script>
        var avatarUrl = "{{ asset('img/profile/avatar.png') }}";
        console.log(avatarUrl);


        // Изначальные значения input
        const initialNickname = "{{$user->nickname}}";
        const initialFio = "{{$user->fio}}";
        const initialEmail = "{{$user->email}}";
    

    </script>


    <script src="https://unpkg.com/cropperjs"></script>
    <script src="{{ asset('js/app.js')}}" defer></script>
    <script src="{{ asset('js/cursor.js')}}" defer></script>
    <script src="{{ asset('js/editimg.js')}}" defer></script>
    <script src="{{ asset('js/main.js')}}" defer></script>
</body>
</html>