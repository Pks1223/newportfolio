const update_bar = document.querySelector('.bar');
console.log(update_bar);

function update() {
 update_bar.style.width = `${((window.scrollY) / (document.body.scrollHeight - window.innerHeight) * 100)}%`
 requestAnimationFrame(update)
}
update();
// scroll top button code
const scroll = () => {
 window.scroll({
  top: 0,
  behavior: "smooth"
 });
};

document.querySelector("#click").onclick = scroll
let CopyRigthYear = document.getElementById('year');
CopyRigthYear.textContent = new Date().getFullYear();
