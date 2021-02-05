/* Aplicando tema */
const theme  = document.getElementsByClassName('root');
const theme_bar = document.getElementsByClassName('header');
const theme_camp = document.getElementsByClassName('div-form');
const theme_color_font = document.getElementsByClassName('font');

themes(theme,theme_bar,theme_camp,theme_color_font);

 function themes(theme,theme_bar,theme_camp,theme_color_font){
    document.querySelector('.mode_dark').addEventListener('click', () =>{

        if(localStorage.getItem('theme')){

                localStorage.removeItem('theme');
            for (var i = 0, len =   theme.length; i < len; i++){
                const array =   theme[i];

                array.classList.remove('theme-dark');
                array.classList.add('theme-default');
            }

            for (var i = 0, len =  theme_bar.length; i < len; i++){
                const array =  theme_bar[i];

                array.classList.remove('theme-dark-bar');
                array.classList.add('theme-default-bar');
            }

            for (var i = 0, len =  theme_camp.length; i < len; i++){
                const array =  theme_camp[i];

                array.classList.remove('theme-dark-camp');
                array.classList.add('theme-default-camp');
            }

            for (var i = 0, len =  theme_color_font.length; i < len; i++){
                const array =  theme_color_font[i];

                array.classList.remove('theme-dark-color-font');
                array.classList.add('theme-defaul-color-font');
            }

        }else{

            localStorage.setItem('theme','1');
            for (var i = 0, len =  theme.length; i < len; i++){
                const array =  theme[i];

                array.classList.remove('theme-default');
                array.classList.add('theme-dark');
            }

            for (var i = 0, len =  theme_bar.length; i < len; i++){
                const array =  theme_bar[i];

                array.classList.remove('theme-default-bar');
                array.classList.add('theme-dark-bar');
            }

            for (var i = 0, len =  theme_camp.length; i < len; i++){
                const array =  theme_camp[i];

                array.classList.remove('theme-default-camp');
                array.classList.add('theme-dark-camp');
            }

            for (var i = 0, len =  theme_color_font.length; i < len; i++){
                const array =  theme_color_font[i];

                array.classList.remove('theme-defaul-color-font');
                array.classList.add('theme-dark-color-font');
            }
        }
    })

}
