// alert('yessssssss')


document.addEventListener('scroll', ()=>{
    const navbar=document.querySelector('navbar');
    if(window.screenY > 0){
        navbar.classList.add('scrolled');
    }else{
        navbar.classList.remove('scrolled');

    }
})
