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
const configureModal = (plan)=>{
    const currData = plan.path[0].dataset;
    document.querySelector('.floorplan-size').innerHTML = `${currData.size} Sq. Ft`;
    document.querySelector('.floorplan-title').innerHTML = currData.title;
    document.querySelector('.floorplan-price').innerHTML = `<span>$</span>${currData.price}/mo`
}
floorplans.forEach(plan=>{
    plan.addEventListener('click', plan=>{configureModal(plan)})
    plan.addEventListener('click', openModal)
})
window.addEventListener('click', (event) => {
if (event.target == modal) {
    closeModal();
}
})