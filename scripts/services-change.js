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

});