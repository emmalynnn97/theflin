const items = document.querySelectorAll('.masonry-gallery-outer .item');
const grid = document.querySelector('.masonry-gallery-outer');
var currActive;
items.forEach(item=>{
	item.addEventListener("click", ()=>{
		if(item.classList.contains('active')){
			item.classList.remove('active');
		}
		else{
			item.classList.add('active');
			currActive = item;
		}
	})
})
window.addEventListener("click", ()=>{
	items.forEach(item=>{
		if(item !== currActive){
			item.classList.remove('active');
		}
	})
})