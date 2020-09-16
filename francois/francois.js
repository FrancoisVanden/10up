/**
 * The main js file
 */
document.addEventListener("DOMContentLoaded", function(){
	let searchToggle = 1;
	let menuToggle = 1;

	const menuSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'><path d='M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z'/></svg>";
	const searchSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'><path d='M12.9 14.32a7.947 7.947 0 0 1-4.908 1.682 8 8 0 1 1 6.305-3.075l.013-.018 5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 1 0 0 12z'/></svg>";
	const closeSvg = "<svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'><path d='M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z'/></svg>";

	let menuDisplay = document.getElementById("menu-icon");
	let searchDisplay = document.getElementById("search-display");
	let searchBar = document.getElementById("search-bar");
	let tempMenuContainer = document.getElementsByClassName('menu-francois-container');
	let menuContainer = tempMenuContainer[0];

	if (menuDisplay) {
		menuDisplay.addEventListener('click', function() {
			menuToggle++;
			menuState(menuToggle);
		});
	}

	if (searchDisplay) {
		searchDisplay.addEventListener('click', function() {
			searchToggle++;
			searchState(searchToggle)
		});
	}

	function menuState(toggle) {
		if ((toggle % 2) == 0) {
			menuDisplay.style.backgroundColor = "#004EAE";
			menuDisplay.innerHTML = closeSvg;
			menuContainer.style.display = "flex";
		} else {
			menuDisplay.style.backgroundColor = "transparent";
			menuDisplay.innerHTML = menuSvg;
			menuContainer.style.display = "none";
		}
	}

	function searchState(toggle) {
		if ((searchToggle % 2) == 0) {
			searchBar.style.display = "block";
			searchDisplay.style.backgroundColor = "#004EAE";
			searchDisplay.innerHTML = closeSvg;
		} else {
			searchBar.style.display = "none";
			searchDisplay.style.backgroundColor = "transparent";
			searchDisplay.innerHTML = searchSvg;
		}
	}
});