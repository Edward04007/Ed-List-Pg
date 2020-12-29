const atividade = document.querySelector('.subMenu')

menu(atividade)
function menu(atividade){
        document.querySelector('.button').addEventListener('click', () =>{

            atividade.classList.toggle('mostrar')
        })
        document.querySelector('.content').addEventListener('click', () =>{

            atividade.classList.remove('mostrar')
        })
        document.querySelector('.menu-lateral').addEventListener('click', () =>{

            atividade.classList.remove('mostrar')
        })
}

const menuL = document.querySelector('.menu-lateral')
menuLA(menuL)

function menuLA(menuL){
    document.querySelector('.menu').addEventListener('click', () =>{
            menuL.classList.toggle('mostrar-menu')
        })
}

const theme_defaul_menu  = document.querySelector('.menu-lateral');
const theme_defaul_cont  = document.querySelector('.content');
theme_menu(theme_defaul_menu, theme_defaul_cont );

function theme_menu(theme_defaul_menu, theme_defaul_cont ){
    document.querySelector('.mode_dark').addEventListener('click', () =>{

        if(localStorage.getItem('theme')){

            theme_defaul_menu.classList.remove('theme-dark-menu');
            theme_defaul_menu.classList.add('theme-defaul-menu');

            theme_defaul_cont.classList.remove('theme-dark');
            theme_defaul_cont.classList.add('theme-default');

        }else{

            theme_defaul_menu.classList.remove('theme-defaul-menu');
            theme_defaul_menu.classList.add('theme-dark-menu');

            theme_defaul_cont.classList.remove('theme-default');
            theme_defaul_cont.classList.add('theme-dark');

        }
    })
}

if(localStorage.getItem('theme')){

    theme_defaul_menu.classList.add('theme-dark-menu')

}else{

    theme_defaul_menu.classList.add('theme-defaul-menu')
}
