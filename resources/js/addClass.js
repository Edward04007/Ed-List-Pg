const mark = document.querySelector('.header')

function menu_mark(mark){
        document.querySelector('.mark_01').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_01')
        })

        document.querySelector('.mark_03').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_03')
        })

        document.querySelector('.mark_04').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_04')
        })

}
menu_mark(mark)

const mark_1 = document.querySelector('.menu-lateral')

function lateral_menu_mark(mark_1){
        document.querySelector('.mark_05').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_05')
        })

        document.querySelector('.mark_06').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_06')
        })

        document.querySelector('.mark_07').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_07')
        })

        document.querySelector('.mark_08').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_08')
        })

        document.querySelector('.mark_09').addEventListener('click', () =>{

            localStorage.setItem('mark','.mark_01')
        })

}
lateral_menu_mark(mark_1)

const markClass = localStorage.getItem('mark')

if( markClass == '.mark_03' || markClass == '.mark_04' ){

    document.querySelector(markClass).classList.add('clickMark')
    document.querySelector('.mark_02').classList.add('clickMark')

}else{

    document.querySelector(markClass).classList.add('clickMark')
}
