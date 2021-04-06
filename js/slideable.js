const isElementXPercentInViewport = function (el, percentVisible) {
    let
      rect = el.getBoundingClientRect(),
      windowHeight = (window.innerHeight || document.documentElement.clientHeight);

    return !(
      Math.floor(100 - (((rect.top >= 0 ? 0 : rect.top) / +-(rect.height / 1)) * 100)) < percentVisible ||
      Math.floor(100 - ((rect.bottom - windowHeight) / rect.height) * 100) < percentVisible
    )
  };
	const slideables = document.querySelectorAll('.slideable');
	window.addEventListener("scroll",()=>{
			slideables.forEach(item=>{
				if(isElementXPercentInViewport(item ,75 )){
					if(item.classList.contains('slideable-left')){
						item.classList.remove('slideable-left');
					}
					if(item.classList.contains('slideable-right')){
						item.classList.remove('slideable-right');
					}
				}
			})
	})
	