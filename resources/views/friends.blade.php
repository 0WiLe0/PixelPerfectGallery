<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Друзья</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/friends.css">

    <script src="js/app.js" defer></script>
    <script src="js/cursor.js" defer></script>
    <script src="js/main.js" defer></script>
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

    <button onclick="themeRem()" class="theme">
        <div class="theme_fon" ></div>
        <div class="moon_light"></div>
    </button>


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
            <a class="profile" href="/profile">
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
        <div class="container_friends">
            <div class="frends">
                <div class="title_friends friends animate__animated animate__fadeInDownBig animate__delay-1s">
                    <h2>Друзья</h2>
                </div>
                <div class="friends_box friends animate__animated animate__fadeInUpBig animate__delay-2s">
                        <form class="search_friends" action="">
                            <input class="search" type="text" placeholder="Поиск друзей">
                            <input class="btn" type="submit" value="⌕">
                        </form>
                    <div class="friends_s">
                        <div class="friends_block">

                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>
    
                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>

                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>
    
                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>

                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>
    
                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>

                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>
    
                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>

                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>
    
                            <div class="friend">
                                <div class="friends_info">
                                    <div class="friend_img">
                                        <img src="img/friends/avat.png" alt="">
                                    </div>
                                    <div class="friend_t">
                                        <p class="friend_n">Wile</p>
                                        <p class="friend_p">125 подписчиков</p>
                                        <p class="date_f">12.06.2023</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a class="prof" href=""><img src="img/friends/prof.svg" alt="">Профиль друга</a>
                                    <a class="send" href=""><img src="img/friends/com.svg" alt="">Написать сообщение</a>
                                    <a class="add" href=""><img src="img/friends/profadd.svg" alt="">Добавить в друзья</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>