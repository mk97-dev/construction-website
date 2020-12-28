<!DOCTYPE html>
<html>
    <head>
        <title>Cite Contruction Management</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
<!-- Main container -->
<div class="container">
	<!-- Menu toggle for mobile version -->
	<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
	<!-- Menu -->
	<nav id="ml-menu" class="menu">
		<!-- Close button for mobile version -->
		<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
		<div class="menu__wrap">
			<ul data-menu="main" class="menu__level">
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-1" href="#">Vegetables</a></li>
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-2" href="#">Fruits</a></li>
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-3" href="#">Grains</a></li>
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-4" href="#">Mylk & Drinks</a></li>
			</ul>
			<!-- Submenu 1 -->
			<ul data-menu="submenu-1" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Stalk Vegetables</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Roots & Seeds</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Cabbages</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Salad Greens</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Mushrooms</a></li>
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-1-1" href="#">Sale %</a></li>
			</ul>
			<!-- Submenu 1-1 -->
			<ul data-menu="submenu-1-1" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Fair Trade Roots</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Dried Veggies</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Our Brand</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Homemade</a></li>
			</ul>
			<!-- Submenu 2 -->
			<ul data-menu="submenu-2" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Citrus Fruits</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Berries</a></li>
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-2-1" href="#">Special Selection</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Tropical Fruits</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Melons</a></li>
			</ul>
			<!-- Submenu 2-1 -->
			<ul data-menu="submenu-2-1" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Exotic Mixes</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Wild Pick</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Vitamin Boosters</a></li>
			</ul>
			<!-- Submenu 3 -->
			<ul data-menu="submenu-3" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Buckwheat</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Millet</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Quinoa</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Wild Rice</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Durum Wheat</a></li>
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-3-1" href="#">Promo Packs</a></li>
			</ul>
			<!-- Submenu 3-1 -->
			<ul data-menu="submenu-3-1" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Starter Kit</a></li>
				<li class="menu__item"><a class="menu__link" href="#">The Essential 8</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Bolivian Secrets</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Flour Packs</a></li>
			</ul>
			<!-- Submenu 4 -->
			<ul data-menu="submenu-4" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Grain Mylks</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Seed Mylks</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Nut Mylks</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Nutri Drinks</a></li>
				<li class="menu__item"><a class="menu__link" data-submenu="submenu-4-1" href="#">Selection</a></li>
			</ul>
			<!-- Submenu 4-1 -->
			<ul data-menu="submenu-4-1" class="menu__level">
				<li class="menu__item"><a class="menu__link" href="#">Nut Mylk Packs</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Amino Acid Heaven</a></li>
				<li class="menu__item"><a class="menu__link" href="#">Allergy Free</a></li>
			</ul>
		</div>
	</nav>
	<div class="content">
		<p class="info">Please choose a category</p>
		<!-- Ajax loaded content here -->
	</div>
</div>
<!-- /view -->
<script src="js/classie.js"></script>
<script src="js/dummydata.js"></script>
<script src="js/main.js"></script>
<script>
(function() {
	var menuEl = document.getElementById('ml-menu'),
		mlmenu = new MLMenu(menuEl, {
			// breadcrumbsCtrl : true, // show breadcrumbs
			// initialBreadcrumb : 'all', // initial breadcrumb text
			backCtrl : false, // show back button
			// itemsDelayInterval : 60, // delay between each menu item sliding animation
			onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
		});

	// mobile menu toggle
	var openMenuCtrl = document.querySelector('.action--open'),
		closeMenuCtrl = document.querySelector('.action--close');

	openMenuCtrl.addEventListener('click', openMenu);
	closeMenuCtrl.addEventListener('click', closeMenu);

	function openMenu() {
		classie.add(menuEl, 'menu--open');
	}

	function closeMenu() {
		classie.remove(menuEl, 'menu--open');
	}

	// simulate grid content loading
	var gridWrapper = document.querySelector('.content');

	function loadDummyData(ev, itemName) {
		ev.preventDefault();

		closeMenu();
		gridWrapper.innerHTML = '';
		classie.add(gridWrapper, 'content--loading');
		setTimeout(function() {
			classie.remove(gridWrapper, 'content--loading');
			gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
		}, 700);
	}
})();
</script>
</body>
</html>