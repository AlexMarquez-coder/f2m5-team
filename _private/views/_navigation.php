<nav id="mainmenu" class="flex items-center justify-between flex-wrap bg-grey-darkest p-6 fixed w-full z-10 pin-t">
	<div class="flex items-center flex-no-shrink text-white mr-6">
	</div>

	<div class="block lg:hidden">
		<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-white hover:border-white">
			<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
		</button>
	</div>

	<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
		<ul class="list-reset lg:flex justify-end flex-1 items-center">
			<li class="mr-3">
				<a class="inline-block py-2 px-4 text-white no-underline" href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( '' ) ): ?>class="inline-block py-2 px-4 text-white no-underline"<?php endif ?>>Home</a>
			</li>
			<li class="mr-3">
				<a  href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( 'register.form' ) ): ?> class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" <?php endif ?>>Register</a>
			</li>
			<li class="mr-3">
				<a href="?php echo url( 'over' ) ?>"<?php if ( current_route_is( '' ) ): ?>  class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4"  <?php endif ?>>About</a>
			</li>
			<li class="mr-3">
				<a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( '' ) ): ?>  class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" <?php endif ?>>Contact</a>
			</li>
			<li class="mr-3">
				<a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4"  <?php endif ?>>Login</a>
			</li>
		</ul>
	</div>
</nav>

<script>
	//Javascript to toggle the menu
	document.getElementById('nav-toggle').onclick = function(){
	document.getElementById("nav-content").classList.toggle("hidden");
	}
</script>