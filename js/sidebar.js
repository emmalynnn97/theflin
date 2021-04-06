const sidebar = document.querySelector('.sidebar');
const sidebarToggle = document.querySelector('.sidebar > .toggle');
const phone = document.querySelector('.sidebar > .icon-col > .phone');
const email = document.querySelector('.sidebar > .icon-col > .email');
const flinLocation = document.querySelector('.sidebar > .icon-col > .location');
function toggleClass(el,className){
	!el.classList.contains(className) ? el.classList.add(className) : el.classList.remove(className);
}
phone.addEventListener("click", ()=>toggleClass(phone,'active'));
email.addEventListener("click", ()=>toggleClass(email,'active'));
flinLocation.addEventListener("click", ()=>toggleClass(flinLocation,'active'));
sidebarToggle.addEventListener("click", ()=>toggleClass(sidebar, 'hidden'));
