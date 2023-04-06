window.onload = services();

function services() {
    console.log("services");
    let images = document.getElementsByClassName("services-image");
    let paragraph = document.getElementById("services-paragraph");
    let header = document.getElementById("services-selected-header");
    for (let i = 0; i < images.length; i++) {
        images[i].classList.remove("active");
    }
    for (let i = 0; i < images.length; i++) {

        images[i].addEventListener("click", (event) => {
            console.log(images)
            for (let j = 0; j < images.length; j++) {
                images[j].classList.remove("active");
            }
            images[i].classList.add("active");
            header.innerHTML = toSentenceCase(images[i].getAttribute("alt"));
            paragraph.innerHTML = (toSentenceCase(images[i].getAttribute("alt") + " ").repeat(10));

            console.log(images[i]);
        })

    }

    function toSentenceCase(str) {
        return str.toLowerCase().charAt(0).toUpperCase() + str.slice(1);
    }
}
    let section = document.getElementById("services-section");

    let newSection =
        "    <div class=\"services-content\">\n" +
        "        <div class=\"section-header services\">Outsourcing</div>\n" +
        "        <div class=\"services-paragraph\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n" +
        "            Praesent ut tortor ante. Ut pretium nec mauris ac porta.\n" +
        "            Vivamus non lectus eu ipsum volutpat porttitor.</div>\n" +
        "        <a class=\"menu radius services-button\" href=\"about.php\">&rarr;</a>" +
        "    </div>\n" +
        "        <div class=\"services-images outsourcing-background\">\n" +
        "            <img id=\"coding\" class=\"services-outsourcing-image\" src=\"resources/oc-outsourcing-emblem.png\" alt=\"coding\">\n" +
        "    </div>";
    let temp = section.innerHTML;
    window.addEventListener("scroll", () => {
        if (section.getBoundingClientRect().top < 100) {
            section.innerHTML = newSection;
        } else {
            section.innerHTML = temp;
        }
        services();
    });