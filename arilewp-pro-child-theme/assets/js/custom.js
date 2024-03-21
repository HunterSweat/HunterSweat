function toggleParagraph() {
    var paragraph = document.getElementById("hidden-paragraph");

    if (paragraph.style.display === "none") {
        paragraph.style.display = "block";
    } else {
        paragraph.style.display = "none";
    }
}

function test() {
    var accordion = document.getElementsByClassName('container');
    var i;


    for (i = 0; i < accordion.length; i++) {
        accordion[i].addEventListener('click', function () {
            this.classList.toggle('active');
        })
    }
}

