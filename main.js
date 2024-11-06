const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const formdata = new FormData(form);

    fetch('https://api.dveripidloga.com/sendemail/', {
        method: 'POST',
        body: formdata
    })

})