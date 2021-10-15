<a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( 'register.form' ) ): ?> <?php endif ?>>
<img src="/Logo simpel.webp" id="logo" > </img> </a>
<ul id="mainmenu">

	<div>
	
	</div>
    <li>
        <a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( 'register.form' ) ): ?>  class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'over_ons' ) ?>"<?php if ( current_route_is( '' ) ): ?>  class="active"<?php endif ?>>Over ons</a>
    </li>
	<li>
        <a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Registeren</a>
    </li>
    <li>
       <button id="aanmeldknop"><a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Aanmelden</a></button> 
    </li>
	
</ul>