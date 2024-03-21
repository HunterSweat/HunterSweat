

function test() {
    const accordion = document.getElementsByClassName('container');
    var i;


    for (i = 0; i < accordion.length; i++) {
        accordion[i].addEventListener('click', function () {
            this.classList.toggle('active');
        })
    }
}

