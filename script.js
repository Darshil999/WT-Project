var menu = document.querySelector('#menu-btn');
var navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
	menu.classList.toggle('fa-times');
	navbar.classList.toggle('active');
}

window.onscroll = () =>{
	menu.classList.remove('fa-times');
	navbar.classList.remove('active');
}



var swiper = new Swiper(".home-slider", {
	loop:true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	
});

var swiper = new Swiper(".reviews-slider", {
	loop:true,
	spaceBetween:20,
	autoHeight:true,
	grabCursor:true,
	breakpoints:{
		640: {
				slidesPerView: 1,
				

			},
		768: {
			slidesPerView:2,
		},

		1024: {
			slidesPerView: 3,
		},

		},
	},
);

var loadMoreBtn = document.querySelector('.packages .load-more ')
var currentItem = 3;

loadMoreBtn.onclick = () =>{
	var boxes = [...document.querySelectorAll('.packages .box-container .box')];
	for (var i = currentItem; i<currentItem + 3; i++)








	
	{
		boxes[i].style.display = 'inline-block';

	};
	currentItem += 3;
	if(currentItem >= boxes.length)
	{
		loadMoreBtn.style.display = 'none';
	}

	 // Get a reference to the select element
	 var selectElement = document.getElementById('redirect');

	 // Add an event listener to detect changes in the select element
	 selectElement.addEventListener('change', function () {
		 // Get the selected option's value
		 var selectedOptionValue = selectElement.value;
 
		 // Check if the selected option is not the default
		 if (selectedOptionValue !== 'default') {
			 // Redirect to the selected page
			 window.location.href = selectedOptionValue;
		 }
	 });

};










         




