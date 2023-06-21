// variaveis do card descrição 
containerDesc = document.querySelector('.container--descricao')
miniMenu = document.querySelector('.desc')
button = document.querySelector('.down--button')
p = document.querySelector('.p--descricao')

//variaveis do card opinião
containerDesc2 = document.querySelector('.container--opiniao')
miniMenu2 = document.querySelector('.desc2')
button2 = document.querySelector('.down--button2')
p2 = document.querySelector('.p--opiniao')
section1 = document.querySelector('.container--section1')


//função para abrir card descrição 
function menuOpen1() {
    if (miniMenu.style.display === 'block') {
        miniMenu.style.display = 'none';
        containerDesc.style.height = '50px'    
        button.src = './assets/option.png'
        containerDesc2.style.transition = 'All 0.2s'
    } else {
        miniMenu.style.display = 'block';
        containerDesc.style.height = '200px'
        containerDesc.style.transition = 'All 0.5s'
        button.src = './assets/down.png'
        section1.style.height = '600px'
    }
}
//função para abrir card opiniao
function menuOpen2() {
    if (miniMenu2.style.display === 'block') {
        miniMenu2.style.display = 'none';
        containerDesc2.style.height = '50px'    
        button2.src = './assets/option.png'
        containerDesc2.style.transition = 'All 0.2s'
        section1.style.height = '500px'
    } else {
        miniMenu2.style.display = 'block';
        containerDesc2.style.height = '200px'
        containerDesc2.style.transition = 'All 0.5s'
        button2.src = './assets/down.png'
        section1.style.height = '600px'
    }
}


