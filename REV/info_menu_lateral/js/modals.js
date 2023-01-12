    /*--===== Abrir modales =====--*/

    const modals = document.querySelectorAll('.modal');
    const cardBtns = document.querySelectorAll('.card_btn');
    const closeBtns = document.querySelectorAll('.close_btn');

    const openModal = (index) => {
      modals[index].classList.add('open');
    };

    const closeModal = (index) => {
      modals[index].classList.remove('open');
    };


    // Abrir cuando se hace click en el boton
    cardBtns.forEach((currCardBtn, index) => {
      currCardBtn.addEventListener('click', () => {
        openModal(index);
      });
    });


    // Cerrar modal
    closeBtns.forEach((currCloseBtn, index) => {
      currCloseBtn.addEventListener('click', () => {
        closeModal(index);
      });
    });




    // cerrar modal abierto
    window.addEventListener('click', (e) => {
      if (e.target.className === 'modal_wrapper') {
        modals.forEach((currModal) => {
          currModal.classList.remove('open');
        });
      }
    });