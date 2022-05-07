function arrow_scroll() {
 const arrow = document.getElementById("arrow");
 const arrow_link = document.getElementById("arrow-link");
 if (arrow.className == "arrow down") {
  arrow.className = "arrow up";
  arrow_link.setAttribute("href", "#Projects")

 } 
 else if (arrow.className == "arrow up") {
  arrow.className = "arrow down"
  arrow_link.setAttribute("href", "#About")
 }
}
const arrow1 = document.getElementById("arrow");

document.addEventListener('scroll', () => {
 if (window.scrollY < 1) {
  arrow1.className = "arrow down";
 }
 if (window.scrollY > 620) {
  arrow1.className = "arrow up";
 }
});
