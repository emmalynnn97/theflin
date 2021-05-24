const modal = document.querySelector("#emma-utils-modal");
const closeBtn = document.querySelector(".modal-close");

// A method to close the modal
const closeModal = () => {
    modal.style.display = "none";
}
// Set close button to close modal on click
closeBtn.addEventListener('click', closeModal);

// Collect all of the floorplan selectors on the page
const floorplans = document.querySelectorAll('.floorplan-selector');

// A method to open the modal
const openModal = () => {
    modal.style.display = "block";
}

//A method to configure the modal data based on the selected floor plan
const configureModal = (plan)=>{
    const currData = plan.target.dataset;
    document.querySelector('.floorplan-size').innerHTML = `${currData.size} Sq. Ft`;
    document.querySelector('.floorplan-title').innerHTML = currData.title;
    document.querySelector('.floorplan-price').innerHTML = `<span>$</span>${currData.price}/mo`;
    document.querySelector('.modal-content .floorplan img').src=currData.img;
    document.querySelector('.modal-content .floorplan-btn').href=currData.img;
}

// Iterate over the floorplans and add event listeners for configuring and opening the modal
floorplans.forEach(plan=>{
    plan.addEventListener('click', plan=>{configureModal(plan)})
    plan.addEventListener('click', openModal)
})

// This handles the event in which a user clicks outside of the modal
window.addEventListener('click', (event) => {
if (event.target == modal) {
    closeModal();
}
})