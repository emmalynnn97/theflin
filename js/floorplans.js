const modal = document.querySelector("#emma-utils-modal");
const closeBtn = document.querySelector(".modal-close");
const closeModal = () => {
    modal.style.display = "none";
}

closeBtn.addEventListener('click', closeModal);
const floorplans = document.querySelectorAll('.floorplan-selector');

const openModal = () => {
    modal.style.display = "block";
}
floorplans.forEach(plan=>{
    plan.addEventListener('click', openModal)
})
window.addEventListener('click', (event) => {
if (event.target == modal) {
    closeModal();
}
})