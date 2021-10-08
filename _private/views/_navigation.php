<ul id="mainmenu">
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( '/login' ) ): ?> class="active"<?php endif ?>>Login</a>
    </li>
    <li>
        <a href="<?php echo url( 'over_ons' ) ?>"<?php if ( current_route_is( '/over' ) ): ?> class="active"<?php endif ?>>Over ons</a>
    </li>
    <li>
        <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active "<?php endif ?>>Contact</a>
    </li>
    <li>
      <a class="menu-btn" href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>
    </li>
</ul>



<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>