let jobs = document.getElementById("references-grid");
let contents = jobs.getElementsByClassName("references-content");
console.log(contents);

let menu = document.getElementsByClassName("references-menu-elements");
console.log(menu);

//TODO Implement correct logic and replacement to filter

for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", () => {
        let menuName = menu[i].children[0].innerHTML.toUpperCase();
        if(menuName.includes("ÖSSZES")) {
            menuName = "";
        }
        for (let j = 0; j < contents.length; j++) {
            let contentTags = contents[j].children[0].innerHTML.toUpperCase();
            console.log(contentTags.includes(menuName));
            console.log(contentTags);
            console.log(menuName);
            }
        })

}