'use strict';
// ********************** Categories Appear  ******************************

const categoryAll = document.querySelectorAll('.mainPageCategory');

const categoriesOptions = {
	rootMargin: "0px 0px -150px 0px" 
};

const categoriesObserver = new IntersectionObserver(function(entries, categoriesObserver){
	entries.forEach(entry => {
		if(!entry.isIntersecting){
			// return;
			entry.target.classList.remove('categoryApear');
		} else {
			entry.target.classList.toggle('categoryApear');
			// categoriesObserver.unobserve(entry.target);
		}
	})
}, categoriesOptions);

categoryAll.forEach(category => {
	categoriesObserver.observe(category);
});


// ********************** Categories Appear  *******************************