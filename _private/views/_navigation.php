
<ul id="mainmenu">
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'over_ons' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Over ons</a>
    </li>
    <li>
        <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Contact</a>
    </li>
    <li>
       <button id="aanmeldknop"><a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Aanmelden</a></button> 
    </li>
</ul>




