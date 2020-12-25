const video = document.querySelector('.video')
menu(video)
function menu(video){
        document.querySelector('.icon1').addEventListener('click', () =>{

                video.classList.toggle('mostrar')
        })
        document.querySelector('.conteudo').addEventListener('click', () =>{

                video.classList.remove('mostrar')     
        })
}