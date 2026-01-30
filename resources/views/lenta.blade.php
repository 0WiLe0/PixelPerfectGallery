<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лента</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lenta.css">
    <link rel="stylesheet" href="css/addphoto.css">

    
</head>
<body>

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

    <button onclick="themeRem()" class="theme">
        <div class="theme_fon" ></div>
        <div class="moon_light"></div>
    </button>
    
    @foreach($posts as $post)
    <div onclick="hidePopUp(event)" class="pop_up">
        <span class="close_pop_up">&times;</span>
        <div class="pop_up_fullimg" style="background-image: url('img/profile/full_img.png');"></div>
        <div class="block_author_full">
            <div class="avatar_author" style="background-image: url('{{asset("/storage/".$post->image)}}')">
                
            </div>
            <div class="author_info">
                <span class="nickname">{{$post->nickname}}</span>
                <span class="name">{{$post->fio}}</span>
                <span class="subcol">{{$post->subscriber_count}}подписчиков</span>
            </div>
        </div>
        <div onclick="hidePopUp(event)" class="pop_up_bg"></div>
    </div>   
    @endforeach
    <div class="cs">
        <div class="set_lent">
            <div class="st_lent_title">
                <h2>Настройки ленты</h2>
            </div>
            <div class="cat">
                <form class="cs_f" action="">

                    <div class="cat_title">
                        <h3>Выбрать категории</h3>
                    </div>

                    <div class="cat_blocks">
                       <form action="">
                            <input class="search_cat" type="text" placeholder="Поиск по категориям: #Фото">
                            <input class="search_btn" type="button" value="⌕">
                       </form>
                    </div>

                    <div class="sort_title">
                        <h3>Сортровка</h3>
                    </div>

                    <div class="sort_blocks">

                        <div class="sb">
                            <input type="checkbox" name="" id="">
                            <label for="">По Дате Добовления </label>
                        </div>

                        <div class="sb">
                            <input type="checkbox" name="" id="">
                            <label for="">По Количеству Лайков</label>
                        </div>

                        <div class="sb">
                            <input type="checkbox" name="" id="">
                            <label for="">По Количеству Комментариев</label>
                        </div>

                    </div>

                    <input class="sort_btn" type="submit" value="Применить">
                </form>
            </div>
            
        </div>

    </div>

    <div  class="lentaset_lentaadd">
        <div onclick="setboxActive()" class="lentaset">
            <svg class="lentaset_ico" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59 0.5H9.09V1V2.73981C8.36284 2.93898 7.6634 3.22824 7.00797 3.60086L5.78355 2.37645L5.43 2.02289L5.07645 2.37645L2.37645 5.07645L2.02289 5.43L2.37645 5.78355L3.60086 7.00797C3.22824 7.6634 2.93898 8.36284 2.73981 9.09H1H0.5V9.59V13.41V13.91H1H2.73981C2.93898 14.6372 3.22824 15.3366 3.60086 15.992L2.37645 17.2164L2.02289 17.57L2.37645 17.9236L5.07645 20.6236L5.43 20.9771L5.78355 20.6236L7.00797 19.3991C7.6634 19.7718 8.36284 20.061 9.09 20.2602V22V22.5H9.59H13.41H13.91V22V20.2602C14.6372 20.061 15.3366 19.7718 15.992 19.3991L17.2164 20.6236L17.57 20.9771L17.9236 20.6236L20.6236 17.9236L20.9771 17.57L20.6236 17.2164L19.3991 15.992C19.7718 15.3366 20.061 14.6372 20.2602 13.91H22H22.5V13.41V9.59V9.09H22H20.2602C20.061 8.36284 19.7718 7.6634 19.3991 7.00797L20.6236 5.78355L20.9771 5.43L20.6236 5.07645L17.9236 2.37645L17.57 2.02289L17.2164 2.37645L15.992 3.60086C15.3366 3.22824 14.6372 2.93898 13.91 2.73981V1V0.5H13.41H9.59ZM10.09 3.13V1.5H12.91V3.13V3.52932L13.2994 3.61762C14.1868 3.81883 15.0336 4.16901 15.8039 4.65329L16.1415 4.86558L16.4236 4.58355L17.57 3.43711L19.5629 5.43L18.4164 6.57645L18.1344 6.85847L18.3467 7.19612C18.831 7.96641 19.1812 8.81322 19.3824 9.70057L19.4707 10.09H19.87H21.5V12.91H19.87H19.4707L19.3824 13.2994C19.1812 14.1868 18.831 15.0336 18.3467 15.8039L18.1344 16.1415L18.4164 16.4236L19.5629 17.57L17.57 19.5629L16.4236 18.4164L16.1415 18.1344L15.8039 18.3467C15.0336 18.831 14.1868 19.1812 13.2994 19.3824L12.91 19.4707V19.87V21.5H10.09V19.87V19.4707L9.70057 19.3824C8.81322 19.1812 7.96641 18.831 7.19612 18.3467L6.85847 18.1344L6.57645 18.4164L5.43 19.5629L3.43711 17.57L4.58355 16.4236L4.86558 16.1415L4.65329 15.8039C4.16901 15.0336 3.81883 14.1868 3.61762 13.2994L3.52932 12.91H3.13H1.5V10.09H3.13H3.52932L3.61762 9.70057C3.81883 8.81322 4.16901 7.96641 4.65329 7.19612L4.86558 6.85847L4.58355 6.57645L3.43711 5.43L5.43 3.43711L6.57645 4.58355L6.85847 4.86558L7.19612 4.65329C7.96641 4.16901 8.81322 3.81883 9.70057 3.61762L10.09 3.52932V3.13ZM9.05225 11.2793C9.05225 9.89858 10.1715 8.7793 11.5522 8.7793C12.933 8.7793 14.0522 9.89858 14.0522 11.2793C14.0522 12.66 12.933 13.7793 11.5522 13.7793C10.1715 13.7793 9.05225 12.66 9.05225 11.2793ZM11.5522 7.7793C9.61925 7.7793 8.05225 9.3463 8.05225 11.2793C8.05225 13.2123 9.61925 14.7793 11.5522 14.7793C13.4852 14.7793 15.0522 13.2123 15.0522 11.2793C15.0522 9.3463 13.4852 7.7793 11.5522 7.7793Z" fill="#151515" />
            </svg>

            <div  class="lentaset_hov">
                <span class="lentaset_hov_nad">
                    Настройки ленты
                </span>
                <svg class="lentaset_hov_ico" width="154" height="48" viewBox="0 0 154 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0C0.895386 0 0 0.895447 0 2V46C0 47.1046 0.895386 48 2 48H144C145.105 48 146 47.1046 146 46V29.3886L154 24L146 18.6114V2C146 0.895447 145.105 0 144 0H2Z" fill="#151515" />
                  </svg>
            </div>

        </div>
        <div class="lentaadd">
            <svg class="lentaadd_ico" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 0C10.1193 0 9 1.11926 9 2.5V9H2.5C1.11926 9 0 10.1193 0 11.5C0 12.8807 1.11926 14 2.5 14H9V20.5C9 21.8807 10.1193 23 11.5 23C12.8807 23 14 21.8807 14 20.5V14H19.5C20.8807 14 22 12.8807 22 11.5C22 10.1193 20.8807 9 19.5 9H14V2.5C14 1.11926 12.8807 0 11.5 0Z" fill="#151515" />
            </svg>

            <div class="lentaadd_hov">
                <span class="lentaadd_hov_nad">
                    Добавить фото
                </span>
                <svg class="lentaadd_hov_ico" width="154" height="48" viewBox="0 0 154 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0C0.895386 0 0 0.895447 0 2V46C0 47.1046 0.895386 48 2 48H144C145.105 48 146 47.1046 146 46V29.3886L154 24L146 18.6114V2C146 0.895447 145.105 0 144 0H2Z" fill="#151515" />
                </svg>
            </div>

        </div>
    </div>

    <header>
        <nav>
            <a class="logo" href="/main">
                <div class="logo_block">
                    <img src="img/menu/logo.svg" alt="">
                </div>
                <div class="logo_hover">
                    <span>Главная</span>
                    <img src="img/menu/logo_hover.svg" alt="">
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
                    <img src="img/menu/logo_hover.svg" alt="">
                </div>
            </a>
            <a class="lenta" href="/lenta">
                <div class="logo_block">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H1H22H23V1V22V23H22H1H0V22V1V0ZM2 2V16.7257L6.97289 11.7529L7.67938 11.0464L8.38649 11.7522L13.4094 16.7664L16.5229 13.6529L17.2307 12.945L17.9378 13.6536L21 16.7222V2H2ZM2 21V19.5542L7.68062 13.8736L12.7035 18.8877L13.4106 19.5936L14.1171 18.8871L17.2293 15.7749L21 19.5536V21H2ZM12.5 7.68002C12.5 7.17744 12.9074 6.77002 13.41 6.77002C13.9126 6.77002 14.32 7.17744 14.32 7.68002C14.32 8.1826 13.9126 8.59002 13.41 8.59002C12.9074 8.59002 12.5 8.1826 12.5 7.68002ZM13.41 4.77002C11.8029 4.77002 10.5 6.07287 10.5 7.68002C10.5 9.28717 11.8029 10.59 13.41 10.59C15.0171 10.59 16.32 9.28717 16.32 7.68002C16.32 6.07287 15.0171 4.77002 13.41 4.77002Z" fill="#151515" />
                      </svg>
                </div>
                <div class="logo_hover lenta_hover">
                    <span>Лента</span>
                    <img src="img/menu/logo_hover.svg" alt="">
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
                    <img src="img/menu/logo_hover.svg" alt="">
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
                    <img src="img/menu/logo_hover.svg" alt="">
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
                    <img src="img/menu/logo_hover.svg" alt="">
                </div>
            </a>
            
        </nav>
    </header>

    <main>
        <div class="title_lenta">
            Лента галлереи
        </div>
        <div class="container">
            
            <div class="lenta_scroll">
                <div class="lenta_container">
                    
                    @foreach($posts as $post)
                    <div class="lenta_coman_block">
                        <div class="lenta_block">
                                    <div class="like_coment_block">
                                        <div class="like_block_lent">
                                            <svg class="like_lenta_img" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0054 0.51979C16.2553 0.17621 15.4472 -0.00157773 14.6283 1.055e-05L14.6258 1.86563e-05C13.5953 0.0046196 12.5878 0.292668 11.6946 0.830344C11.205 1.12505 10.7591 1.48898 10.3665 1.90933C9.76129 1.27073 9.03404 0.76752 8.22316 0.44296C6.9746 -0.0567832 5.60898 -0.0996114 4.33452 0.322889C3.06226 0.744658 1.9658 1.60125 1.19329 2.74395C0.421519 3.88555 0.00769824 5.2598 1.49608e-05 6.6645H0V6.66997C0 11.3425 2.59231 14.4386 5.08349 16.3204C6.32909 17.2613 7.56902 17.9161 8.49532 18.3359C8.9598 18.5463 9.34899 18.6993 9.62546 18.8007C9.76378 18.8514 9.87418 18.8893 9.95199 18.9152C9.9909 18.9281 10.0217 18.938 10.0438 18.945L10.0703 18.9533L10.0786 18.9558L10.0814 18.9567L10.0825 18.957C10.083 18.9572 10.0834 18.9573 10.3725 18L10.0834 18.9573L10.3725 19.0446L10.6615 18.9573L10.3725 18C10.6615 18.9573 10.662 18.9572 10.6624 18.957L10.6635 18.9567L10.6664 18.9558L10.6746 18.9533L10.7012 18.945C10.7233 18.938 10.7541 18.9281 10.793 18.9152C10.8708 18.8893 10.9812 18.8514 11.1195 18.8007C11.396 18.6993 11.7852 18.5463 12.2497 18.3359C13.176 17.9161 14.4159 17.2613 15.6615 16.3204C18.1524 14.4388 20.7444 11.3432 20.745 6.67155V6.66997H19.7451L20.745 6.67155C20.7463 5.80852 20.5941 4.95168 20.2951 4.14937C19.996 3.34701 19.5547 2.61173 18.9921 1.98798C18.4292 1.36403 17.7551 0.863197 17.0054 0.51979ZM10.3725 16.9442C10.4624 16.9766 10.5332 17.0008 10.5825 17.0171C10.6122 17.027 10.634 17.034 10.6474 17.0383L10.6611 17.0425L10.6622 17.0429C10.6619 17.0428 10.6615 17.0427 10.3725 18C10.0834 17.0427 10.0831 17.0428 10.0828 17.0429L10.0839 17.0425L10.0976 17.0383C10.1109 17.034 10.1328 17.027 10.1625 17.0171C10.2118 17.0008 10.2826 16.9766 10.3725 16.9442ZM2 6.67276C2.00102 10.4987 4.09447 13.0668 6.289 14.7246C7.38653 15.5536 8.48972 16.1376 9.32075 16.5141C9.73494 16.7018 10.078 16.8364 10.3141 16.9229L10.3725 16.9442L10.4309 16.9229C10.667 16.8364 11.01 16.7018 11.4242 16.5141C12.2553 16.1376 13.3585 15.5536 14.456 14.7246C16.651 13.0664 18.745 10.4974 18.745 6.66997L18.745 6.66839C18.746 6.04151 18.6352 5.42258 18.421 4.84788C18.2068 4.27325 17.8947 3.75739 17.507 3.32761C17.1195 2.89803 16.665 2.56367 16.1725 2.33812C15.6809 2.11292 15.1582 1.99917 14.6335 2L14.6347 2L14.6303 1.0002L14.6322 2.00001L14.6335 2C13.9734 2.00318 13.3184 2.18728 12.726 2.54387C12.1323 2.90123 11.6167 3.42303 11.2334 4.07162L10.3793 5.51696L9.51514 4.0776C9.01312 3.24143 8.29444 2.62575 7.47997 2.29975C6.66788 1.97471 5.78841 1.94794 4.96386 2.22129C4.13711 2.49537 3.39155 3.06329 2.85018 3.86408C2.30854 4.66528 2.00611 5.64977 2 6.67276ZM2 6.67276L1.99998 6.67544L1.00004 6.66997H2L2 6.67276ZM10.3665 1.90933C10.6914 2.25214 10.9812 2.63398 11.2298 3.04814L10.3725 3.56287L9.51158 3.05412C9.75683 2.63911 10.0436 2.25513 10.3665 1.90933ZM14.6358 5.78004C14.7125 5.77959 14.7914 5.79583 14.8691 5.8312C14.9471 5.86675 15.0251 5.92237 15.0956 6.00051C15.1663 6.07886 15.227 6.17746 15.2699 6.29295C15.3122 6.40711 15.3349 6.53229 15.3349 6.66063C15.3234 7.36156 15.1862 8.05068 14.9335 8.68716C14.68 9.32538 14.3169 9.8946 13.8699 10.3642L15.3186 11.7431C15.9485 11.0813 16.448 10.2924 16.7923 9.42525C17.1366 8.55815 17.3202 7.62696 17.3347 6.68542L17.3348 6.68542L17.3348 6.6748C17.3366 6.30764 17.2727 5.94176 17.1451 5.59751C17.0174 5.2532 16.8271 4.93406 16.5807 4.66088C16.334 4.3875 16.0353 4.16478 15.6985 4.0113C15.3613 3.85764 14.9958 3.7779 14.6241 3.78007L14.6358 5.78004Z" fill="white" />
                                            </svg>

                                            <span class="like_count_hover">{{$post->like_count}}</span>
                                        </div>
                                        <div class="com_block_lent">
                                            <svg class="com_lenta_img" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.26682 0C3.14147 0 2.05834 0.438147 1.25671 1.22415C0.454418 2.01081 0 3.08199 0 4.20316V12.2027C0 13.3238 0.454419 14.395 1.25671 15.1817C2.05834 15.9677 3.14147 16.4058 4.26682 16.4058H4.90023V17.804V19.4018L6.33735 18.7034L11.0648 16.4058H15.7349C16.8602 16.4058 17.9434 15.9677 18.745 15.1817C19.5473 14.395 20.0017 13.3238 20.0017 12.2027V4.20316C20.0017 3.08199 19.5473 2.01081 18.745 1.22415C17.9434 0.438146 16.8602 0 15.7349 0H4.26682ZM2.65694 2.65221C3.08061 2.2368 3.65934 2 4.26682 2H15.7349C16.3424 2 16.9211 2.2368 17.3448 2.65221C17.7678 3.06697 18.0017 3.62526 18.0017 4.20316V12.2027C18.0017 12.7806 17.7678 13.3388 17.3448 13.7536C16.9211 14.169 16.3424 14.4058 15.7349 14.4058H10.8347H10.6045L10.3975 14.5064L6.90023 16.2061V15.4058V14.4058H5.90023H4.26682C3.65934 14.4058 3.08061 14.169 2.65694 13.7536C2.23394 13.3388 2 12.7806 2 12.2027V4.20316C2 3.62526 2.23395 3.06697 2.65694 2.65221ZM13.246 10.7028H14.8794V5.70282H13.246V10.7028ZM10.792 10.7028H9.16716V5.70282H10.792V10.7028ZM5.07951 10.7028H6.71292V5.70282H5.07951V10.7028Z" fill="white" />
                                            </svg>

                                            <span class="com_count_hover">{{$post->com_count}}</span>

                                        </div> 
                                        
                                    </div>
                                <div onclick="showPopUpLenta()" class="lb_t" style="background-image: url('{{asset("/storage/".$post->url)}}');">
                                </div>
                                <div class="lb_b">
                                    <div class="lb_b_cit">
                                        <p>
                                            "{{$post->descr}}” 
                                        </p>
                                    </div>
                                    <div class="lb_b_c">
                                        <div class="cat_l">
                                            Теги:<p>{{$post->tags}}</p>
                                        </div>
                                        <div class="cat_a">
                                        
                                            Автор:<p>{{$post->nickname}}</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
    
                        <div class="lenta_info">
    
                            <div class="lenta_info_block">
                                <form action="/like/{{$post->true_id}}" name="like_form">
                                    <button type="submit" class="like_lenta lenta_b">

                                        <svg class="like_lenta_ico" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0054 0.51979C16.2553 0.17621 15.4472 -0.00157773 14.6283 1.055e-05L14.6258 1.86563e-05C13.5953 0.0046196 12.5878 0.292668 11.6946 0.830344C11.205 1.12505 10.7591 1.48898 10.3665 1.90933C9.76129 1.27073 9.03404 0.76752 8.22316 0.44296C6.9746 -0.0567832 5.60898 -0.0996114 4.33452 0.322889C3.06226 0.744658 1.9658 1.60125 1.19329 2.74395C0.421519 3.88555 0.00769824 5.2598 1.49608e-05 6.6645H0V6.66997C0 11.3425 2.59231 14.4386 5.08349 16.3204C6.32909 17.2613 7.56902 17.9161 8.49532 18.3359C8.9598 18.5463 9.34899 18.6993 9.62546 18.8007C9.76378 18.8514 9.87418 18.8893 9.95199 18.9152C9.9909 18.9281 10.0217 18.938 10.0438 18.945L10.0703 18.9533L10.0786 18.9558L10.0814 18.9567L10.0825 18.957C10.083 18.9572 10.0834 18.9573 10.3725 18L10.0834 18.9573L10.3725 19.0446L10.6615 18.9573L10.3725 18C10.6615 18.9573 10.662 18.9572 10.6624 18.957L10.6635 18.9567L10.6664 18.9558L10.6746 18.9533L10.7012 18.945C10.7233 18.938 10.7541 18.9281 10.793 18.9152C10.8708 18.8893 10.9812 18.8514 11.1195 18.8007C11.396 18.6993 11.7852 18.5463 12.2497 18.3359C13.176 17.9161 14.4159 17.2613 15.6615 16.3204C18.1524 14.4388 20.7444 11.3432 20.745 6.67155V6.66997H19.7451L20.745 6.67155C20.7463 5.80852 20.5941 4.95168 20.2951 4.14937C19.996 3.34701 19.5547 2.61173 18.9921 1.98798C18.4292 1.36403 17.7551 0.863197 17.0054 0.51979ZM10.3725 16.9442C10.4624 16.9766 10.5332 17.0008 10.5825 17.0171C10.6122 17.027 10.634 17.034 10.6474 17.0383L10.6611 17.0425L10.6622 17.0429C10.6619 17.0428 10.6615 17.0427 10.3725 18C10.0834 17.0427 10.0831 17.0428 10.0828 17.0429L10.0839 17.0425L10.0976 17.0383C10.1109 17.034 10.1328 17.027 10.1625 17.0171C10.2118 17.0008 10.2826 16.9766 10.3725 16.9442ZM2 6.67276C2.00102 10.4987 4.09447 13.0668 6.289 14.7246C7.38653 15.5536 8.48972 16.1376 9.32075 16.5141C9.73494 16.7018 10.078 16.8364 10.3141 16.9229L10.3725 16.9442L10.4309 16.9229C10.667 16.8364 11.01 16.7018 11.4242 16.5141C12.2553 16.1376 13.3585 15.5536 14.456 14.7246C16.651 13.0664 18.745 10.4974 18.745 6.66997L18.745 6.66839C18.746 6.04151 18.6352 5.42258 18.421 4.84788C18.2068 4.27325 17.8947 3.75739 17.507 3.32761C17.1195 2.89803 16.665 2.56367 16.1725 2.33812C15.6809 2.11292 15.1582 1.99917 14.6335 2L14.6347 2L14.6303 1.0002L14.6322 2.00001L14.6335 2C13.9734 2.00318 13.3184 2.18728 12.726 2.54387C12.1323 2.90123 11.6167 3.42303 11.2334 4.07162L10.3793 5.51696L9.51514 4.0776C9.01312 3.24143 8.29444 2.62575 7.47997 2.29975C6.66788 1.97471 5.78841 1.94794 4.96386 2.22129C4.13711 2.49537 3.39155 3.06329 2.85018 3.86408C2.30854 4.66528 2.00611 5.64977 2 6.67276ZM2 6.67276L1.99998 6.67544L1.00004 6.66997H2L2 6.67276ZM10.3665 1.90933C10.6914 2.25214 10.9812 2.63398 11.2298 3.04814L10.3725 3.56287L9.51158 3.05412C9.75683 2.63911 10.0436 2.25513 10.3665 1.90933ZM14.6358 5.78004C14.7125 5.77959 14.7914 5.79583 14.8691 5.8312C14.9471 5.86675 15.0251 5.92237 15.0956 6.00051C15.1663 6.07886 15.227 6.17746 15.2699 6.29295C15.3122 6.40711 15.3349 6.53229 15.3349 6.66063C15.3234 7.36156 15.1862 8.05068 14.9335 8.68716C14.68 9.32538 14.3169 9.8946 13.8699 10.3642L15.3186 11.7431C15.9485 11.0813 16.448 10.2924 16.7923 9.42525C17.1366 8.55815 17.3202 7.62696 17.3347 6.68542L17.3348 6.68542L17.3348 6.6748C17.3366 6.30764 17.2727 5.94176 17.1451 5.59751C17.0174 5.2532 16.8271 4.93406 16.5807 4.66088C16.334 4.3875 16.0353 4.16478 15.6985 4.0113C15.3613 3.85764 14.9958 3.7779 14.6241 3.78007L14.6358 5.78004Z" fill="black" />
                                        </svg>
                                        
                                    </button>
                                </form>
                                

                                <button onclick="comApp({{$post->true_id}})" class="com_lenta lenta_b">
                                    <svg class="com_lenta_ico" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.26682 0C3.14147 0 2.05834 0.438147 1.25671 1.22415C0.454418 2.01081 0 3.08199 0 4.20316V12.2027C0 13.3238 0.454419 14.395 1.25671 15.1817C2.05834 15.9677 3.14147 16.4058 4.26682 16.4058H4.90023V17.804V19.4018L6.33735 18.7034L11.0648 16.4058H15.7349C16.8602 16.4058 17.9434 15.9677 18.745 15.1817C19.5473 14.395 20.0017 13.3238 20.0017 12.2027V4.20316C20.0017 3.08199 19.5473 2.01081 18.745 1.22415C17.9434 0.438146 16.8602 0 15.7349 0H4.26682ZM2.65694 2.65221C3.08061 2.2368 3.65934 2 4.26682 2H15.7349C16.3424 2 16.9211 2.2368 17.3448 2.65221C17.7678 3.06697 18.0017 3.62526 18.0017 4.20316V12.2027C18.0017 12.7806 17.7678 13.3388 17.3448 13.7536C16.9211 14.169 16.3424 14.4058 15.7349 14.4058H10.8347H10.6045L10.3975 14.5064L6.90023 16.2061V15.4058V14.4058H5.90023H4.26682C3.65934 14.4058 3.08061 14.169 2.65694 13.7536C2.23394 13.3388 2 12.7806 2 12.2027V4.20316C2 3.62526 2.23395 3.06697 2.65694 2.65221ZM13.246 10.7028H14.8794V5.70282H13.246V10.7028ZM10.792 10.7028H9.16716V5.70282H10.792V10.7028ZM5.07951 10.7028H6.71292V5.70282H5.07951V10.7028Z" fill="black" />
                                    </svg>
                                    
                                </button>

                                

                                <button class="rep_lenta lenta_b">
                                    <svg class="rep_lenta_ico" width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.21056 1.46212C2.00216 0.547683 3.10938 0 4.30025 0H15.8425C17.0334 0 18.1406 0.547683 18.9322 1.46212C19.7199 2.37202 20.1427 3.57891 20.1427 4.81238V14.3333C20.1427 15.5668 19.7199 16.7737 18.9322 17.6836C18.1406 18.598 17.0334 19.1457 15.8425 19.1457H12.9992L10.8274 21.6545L10.0714 22.5279L9.31531 21.6545L7.14353 19.1457H4.30025C3.10938 19.1457 2.00216 18.598 1.21056 17.6836C0.422885 16.7737 0 15.5668 0 14.3333V4.81238C0 3.57892 0.422885 2.37202 1.21056 1.46212ZM4.30025 2C3.74057 2 3.16892 2.25564 2.72268 2.77112C2.27252 3.29113 2 4.02363 2 4.81238V14.3333C2 15.1221 2.27252 15.8546 2.72268 16.3746C3.16892 16.8901 3.74057 17.1457 4.30025 17.1457H7.6005H8.05748L8.35657 17.4912L10.0714 19.4721L11.7862 17.4912L12.0853 17.1457H12.5422H15.8425C16.4022 17.1457 16.9738 16.8901 17.4201 16.3746C17.8702 15.8546 18.1427 15.1221 18.1427 14.3333V4.81238C18.1427 4.02363 17.8702 3.29113 17.4201 2.77112C16.9738 2.25564 16.4022 2 15.8425 2H4.30025ZM9.79213 5.70862H11.307C11.84 5.70862 12.3634 5.83038 12.8456 6.0616C13.3272 6.29253 13.7545 6.62608 14.1075 7.03507C14.4603 7.44381 14.7335 7.92145 14.9174 8.43763C15.1013 8.95379 15.194 9.50289 15.1925 10.0545L14.1926 10.0519H15.1926L15.1925 10.0545C15.1923 10.6042 15.0985 11.1511 14.9142 11.6651C14.7296 12.1799 14.4561 12.656 14.1035 13.0635C13.7506 13.4711 13.3237 13.8035 12.8429 14.0336C12.3614 14.264 11.839 14.3853 11.307 14.3853H5.95056V12.3853H11.307C11.5329 12.3853 11.7609 12.3341 11.9796 12.2295C12.199 12.1245 12.4083 11.9658 12.5913 11.7545C12.7745 11.5428 12.9261 11.2841 13.0316 10.99C13.137 10.696 13.1926 10.3768 13.1926 10.0519L13.1926 10.0493C13.1934 9.72381 13.1385 9.40386 13.0334 9.10888C12.9283 8.81392 12.7768 8.55427 12.5934 8.34184C12.4103 8.12965 12.2006 7.97036 11.9809 7.865C11.7618 7.75995 11.5333 7.70862 11.307 7.70862H9.78064L8.92224 6.71701L9.79213 5.70862Z" fill="black" />
                                    </svg>
                                    <div class="rep_lenta_hover" style="display:none">

                                        <svg class="rep_lenta_img" width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.21056 1.46212C2.00216 0.547683 3.10938 0 4.30025 0H15.8425C17.0334 0 18.1406 0.547683 18.9322 1.46212C19.7199 2.37202 20.1427 3.57891 20.1427 4.81238V14.3333C20.1427 15.5668 19.7199 16.7737 18.9322 17.6836C18.1406 18.598 17.0334 19.1457 15.8425 19.1457H12.9992L10.8274 21.6545L10.0714 22.5279L9.31531 21.6545L7.14353 19.1457H4.30025C3.10938 19.1457 2.00216 18.598 1.21056 17.6836C0.422885 16.7737 0 15.5668 0 14.3333V4.81238C0 3.57892 0.422885 2.37202 1.21056 1.46212ZM4.30025 2C3.74057 2 3.16892 2.25564 2.72268 2.77112C2.27252 3.29113 2 4.02363 2 4.81238V14.3333C2 15.1221 2.27252 15.8546 2.72268 16.3746C3.16892 16.8901 3.74057 17.1457 4.30025 17.1457H7.6005H8.05748L8.35657 17.4912L10.0714 19.4721L11.7862 17.4912L12.0853 17.1457H12.5422H15.8425C16.4022 17.1457 16.9738 16.8901 17.4201 16.3746C17.8702 15.8546 18.1427 15.1221 18.1427 14.3333V4.81238C18.1427 4.02363 17.8702 3.29113 17.4201 2.77112C16.9738 2.25564 16.4022 2 15.8425 2H4.30025ZM9.79213 5.70862H11.307C11.84 5.70862 12.3634 5.83038 12.8456 6.0616C13.3272 6.29253 13.7545 6.62608 14.1075 7.03507C14.4603 7.44381 14.7335 7.92145 14.9174 8.43763C15.1013 8.95379 15.194 9.50289 15.1925 10.0545L14.1926 10.0519H15.1926L15.1925 10.0545C15.1923 10.6042 15.0985 11.1511 14.9142 11.6651C14.7296 12.1799 14.4561 12.656 14.1035 13.0635C13.7506 13.4711 13.3237 13.8035 12.8429 14.0336C12.3614 14.264 11.839 14.3853 11.307 14.3853H5.95056V12.3853H11.307C11.5329 12.3853 11.7609 12.3341 11.9796 12.2295C12.199 12.1245 12.4083 11.9658 12.5913 11.7545C12.7745 11.5428 12.9261 11.2841 13.0316 10.99C13.137 10.696 13.1926 10.3768 13.1926 10.0519L13.1926 10.0493C13.1934 9.72381 13.1385 9.40386 13.0334 9.10888C12.9283 8.81392 12.7768 8.55427 12.5934 8.34184C12.4103 8.12965 12.2006 7.97036 11.9809 7.865C11.7618 7.75995 11.5333 7.70862 11.307 7.70862H9.78064L8.92224 6.71701L9.79213 5.70862Z" fill="white" />
                                        </svg>

                                        <span class="rep_count_hover">121212</span>

                                        <svg class="rep_lenta_bg" width="110" height="48" viewBox="0 0 110 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M108 48C109.105 48 110 47.1046 110 46L110 1.99999C110 0.895424 109.105 -7.55111e-06 108 -7.45455e-06L10 1.11288e-06C8.89543 1.20945e-06 8 0.895433 8 2L8.00001 18.6114L-2.09815e-06 24L8.00001 29.3886L8.00001 46C8.00001 47.1046 8.89544 48 10 48L108 48Z" fill="#151515" />
                                        </svg>

                                    </div>
                                </button>

                                

                            </div>
    
                            <div class="lenta_info_more">
                                <div class="more_block">
                                    <div class="more_circle"></div>
                                    <div class="more_circle"></div>
                                    <div class="more_circle"></div>
                                </div>
                            </div>
    
                        </div>
                        @endforeach
                        
                        @foreach($posts as $post)
                        <div id="post_com{{ $post->id }}" class="blocks_comment">
                            <div class="block_comment">
                                <div class="comments_scroll">
                                    <div class="comments_container">
                                        @foreach($post->comments as $comment)
                                            <div class="comment">
                                                <div class="comments_avatar">
                                                    <img src="{{ asset('img/lenta/avatar_com.png') }}" alt="">
                                                </div>
                                                <div class="comment_info">
                                                    <span class="ncikname">{{ $comment->nickname }}</span>
                                                    <div class="comment_text">{{ $comment->text }}</div>
                                                    <span class="datecomment">{{ $comment->created_at->format('d.m.Y') }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="send_com">
                                    <form class="send_com_form" action="{{ route('comments.store', $post) }}" method="POST">
                                        @csrf
                                        <div class="avatar_author" style="background-image: url('{{ asset('storage/' . $post->image) }}')">
                                        </div>
                                        <textarea maxlength="351" name="text" class="text_send" placeholder="Оставить комментарий..."></textarea>
                                        <button type="submit" class="but_mes">
                                            <svg width="41" height="34" viewBox="0 0 41 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8276 1.1085L40.0291 0.202225L39.1615 0.532764L1.82198 14.7591L0.84925 15.1297L1.74656 15.6574L12.8062 22.1607L13.9556 33.0519L14.0514 33.9605L14.765 33.39L22.028 27.5832L31.9729 33.431L32.5653 33.7794L32.7145 33.1085L39.8276 1.1085ZM21.1053 27.0406L13.8783 22.7911L14.8542 32.0384L21.1053 27.0406ZM14.1592 21.7961L31.8874 32.2206L38.65 1.79778L3.15075 15.323L13.2334 21.2517L37.2571 2.37988L37.8749 3.16626L14.1592 21.7961Z" fill="white" />
                                            </svg>
                                        </button>
                                    </form>
                                    <span class="simvol">Осталось 351/351 символов</span>
                                </div>
                            </div>

                            <div class="block_author">
                                <div class="avatar_author" style="background-image: url('{{ asset('storage/' . $post->image) }}')">
                                </div>
                                <div class="author_info">
                                    <span class="nickname">{{ $post->nickname }}</span>
                                    <span class="name">{{ $post->fio }}</span>
                                    <span class="subcol">{{ $post->subscriber_count }} подписчиков</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                   
                    

                </div>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/cropperjs"></script>
    <script src="{{ asset('js/app.js')}}" defer></script>
    <script src="{{ asset('js/cursor.js')}}" defer></script>
    <script src="{{ asset('js/editimg.js')}}" defer></script>
    <script src="{{ asset('js/main.js')}}" defer></script>
</body>
</html>