// alert('yessssssss')


document.addEventListener('scroll', ()=>{
    const navbar=document.querySelector('navbar');
    if(window.screenY > 0){
        navbar.classList.add('active');
    }else{
        navbar.classList.remove('active');

    }
})
