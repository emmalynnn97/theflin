const sidebar = document.querySelector('.sidebar');
const sidebarToggle = document.querySelector('.sidebar .toggle');
function toggleClass(el,className){
	!el.classList.contains(className) ? el.classList.add(className) : el.classList.remove(className);
}
sidebarToggle.addEventListener("click", ()=>toggleClass(sidebar, 'hidden'));
