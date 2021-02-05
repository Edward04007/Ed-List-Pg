/* Adicionando e removendo classes do menu infeiror para mostrar Div  */
const atividade = document.querySelector('.subMenu')

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
menu(atividade)
/*  Adicionando e removendo classes para mostrar menu lateral */
const menuL = document.querySelector('.menu-lateral')

function menuLA(menuL){
    document.querySelector('.menu').addEventListener('click', () =>{
            menuL.classList.toggle('mostrar-menu')
        })
}
menuLA(menuL)
/* Aplicando tema ao menu */
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

/* Validação de qual tema foi definido como padrão */
if(localStorage.getItem('theme')){

    theme_defaul_menu.classList.add('theme-dark-menu')

}else{

    theme_defaul_menu.classList.add('theme-defaul-menu')
}
