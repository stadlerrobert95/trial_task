let jobs = document.getElementById("references-grid");
let contents = jobs.getElementsByClassName("references-content");
console.log(contents);

let menu = document.getElementsByClassName("references-menu-elements");
console.log(menu);
for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", () => {
        for (let j = 0; j < contents.length; j++) {
            /*if(contents[i].children[0].innerHTML (menu[i].innerHTML)){*/

                console.log(contents[i].children[0].innerHTML.toUpperCase().includes(menu[i].children[0].innerHTML.toUpperCase()));
            console.log(menu[i].children[0].innerHTML.toUpperCase());
            }
        })

}