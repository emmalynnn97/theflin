	const header = document.querySelector('#site-header');
	const headerItems = document.querySelectorAll('.menu-item a')
	const innerNav = document.querySelector('.header-inner');
	const logo = document.querySelector('.custom-logo');
	const hamburger = document.querySelector('.mobile-nav-toggle > img');
	const phoneNumber = document.querySelector('.flin-phone-number');
	var prevHeight;
	var prevWidth;
	function getDistY(){
		return document.documentElement.scrollTop || window.pageYOffset;
	}
	function shrinkNav(header, headerItems){
		header.style.background='white';
		headerItems.forEach(item=>item.classList.add('retracted'));
		innerNav.style.height='50px';
		logo.src="/wp-content/uploads/2021/01/Asset-2.png";
		hamburger.src='/wp-content/uploads/2021/01/Hamburger_BLK.png'
		prevWidth = logo.width;
		logo.width='';
		prevHeight = logo.height;
		logo.height='';
		logo.style.width='100px';
		phoneNumber.style.color='#303f52';
	}
	function growNav(header, headerItems){
		header.style.background='rgba(0,0,0,.25)';
		headerItems.forEach(item=>item.classList.remove('retracted'));
		innerNav.style.height='146px';
		logo.src='/wp-content/uploads/2021/01/logo.png'
		hamburger.src='/wp-content/uploads/2021/01/Hamburger-1.png'
		logo.width=prevWidth;
		logo.height=prevHeight;
		logo.style.width='auto';
		phoneNumber.style.color='#c6a36b';
	}
	const shrinkOn = 50;
	function handleScroll(){
		getDistY() > shrinkOn ? shrinkNav(header, headerItems) : growNav(header, headerItems)
	}
	document.addEventListener("scroll",handleScroll)