function toggleParagraph() {
    var paragraph = document.getElementById("hidden-paragraph");

    if (paragraph.style.display === "none") {
        paragraph.style.display = "block";
    } else {
        paragraph.style.display = "none";
    }
}
