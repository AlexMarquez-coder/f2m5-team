<ul id="mainmenu">
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Login</a>
    </li>
    <li>
        <a href="<?php echo url( 'over' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Over ons</a>
    </li>
    <li>
        <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active "<?php endif ?>>Contact</a>
    </li>
    <li>
      <button id="aanmeldknop"><a  href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Aanmelden</a></button> 
    </li>
</ul>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>