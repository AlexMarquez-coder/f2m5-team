<ul id="mainmenu">
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( '' ) ): ?>  class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'over_ons' ) ?>"<?php if ( current_route_is( '' ) ): ?>  class="active"<?php endif ?>>Over ons</a>
    </li>
	<li>
        <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Contact</a>
    </li>
    <li>
    <a href="<?php echo url( 'blog.detail' ) ?>"<?php if ( current_route_is( 'index' ) ): ?> class="active"<?php endif ?>>Tijdelijk Blog</a>
    </li>
    <li>
       <button id="aanmeldknop"><a href="<?php echo url( 'register.form' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Aanmelden</a></button> 
    </li>
    
    <div class="user-menu">
    <?php if(isLoggedIn()):?>
    <em><?php echo getLoggedInUserEmail(); ?></em>
    <?php endif; ?>
    
        <?php if(isLoggedIn()):?>
            <li>
                <a href="<?php echo url( 'logout' ) ?>">Uitloggen</a>
            </li>
        <?php else: ?>
            <li>
                <a href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ): ?> class="active"<?php endif ?>>Inloggen</a>
            </li>
        <?php endif;?>   
    
</div>
</ul>

