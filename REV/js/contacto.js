(function(){
    const titlecontacto = [...document.querySelectorAll('.contacto__title')];
    console.log(titlecontacto)

    titlecontacto.forEach(question =>{
        question.addEventListener('click', ()=>{
            let height = 0;
            let answer = question.nextElementSibling;
            let addPadding = question.parentElement.parentElement;

            addPadding.classList.toggle('contacto__padding--add');
            question.children[0].classList.toggle('contacto__arrow--rotate');

            if(answer.clientHeight === 0){
                height = answer.scrollHeight;
            }

            answer.style.height = `${height}px`;
        });
    });
})();