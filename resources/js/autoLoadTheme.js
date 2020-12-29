const theme  = document.getElementsByClassName('root');
const theme_bar = document.getElementsByClassName('header');
const theme_camp = document.getElementsByClassName('div-form');
const theme_color_font = document.getElementsByClassName('font');

if(localStorage.getItem('theme')){

    for (var i = 0, len =  theme.length; i < len; i++){
        const array =  theme[i];
        array.classList.add('theme-dark')
    }

    for (var i = 0, len =  theme_bar.length; i < len; i++){
        const array =  theme_bar[i];
        array.classList.add('theme-dark-bar')
    }

    for (var i = 0, len =  theme_camp.length; i < len; i++){
        const array =  theme_camp[i];
        array.classList.add('theme-dark-camp')
    }

    for (var i = 0, len =  theme_color_font.length; i < len; i++){
        const array =  theme_color_font[i];
        array.classList.add('theme-dark-color-font')
    }

}else{
    for (var i = 0, len =   theme.length; i < len; i++){
        const array =   theme[i];
        array.classList.add('theme-default')
    }

    for (var i = 0, len =  theme_bar.length; i < len; i++){
        const array =  theme_bar[i];
        array.classList.add('theme-default-bar')
    }

    for (var i = 0, len =  theme_camp.length; i < len; i++){
        const array =  theme_camp[i];
        array.classList.add('theme-default-camp')
    }

    for (var i = 0, len =  theme_color_font.length; i < len; i++){
        const array =  theme_color_font[i];
        array.classList.add('theme-defaul-color-font')
    }

}
