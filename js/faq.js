const items = document.querySelectorAll('.faq-questions .faq-question');
var currActive;
items.forEach(item=>{
	item.addEventListener("click", (e)=>{
		if(item.classList.contains('active')){
			item.classList.remove('active');
			item.querySelector('.question-toggle').innerHTML = "+";
		}
		else{
			item.classList.add('active');
			currActive = item;
			item.querySelector('.question-toggle').innerHTML = "-";
		}
	})
})
window.addEventListener("click", ()=>{
	items.forEach(item=>{
		if(item !== currActive){
			item.classList.remove('active');
			item.querySelector('.question-toggle').innerHTML = "+";
		}
	})
})
