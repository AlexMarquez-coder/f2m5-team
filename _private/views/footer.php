<?php $this->layout('layouts::website'); ?>

<div id="footer">
	<div>
		<div>
		<ul>
		<li><a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( '' ) ): ?>  class="active"<?php endif ?>>Home</a>	</li>
		<li><a href="<?php echo url( 'over_ons' ) ?>"<?php if ( current_route_is( '' ) ): ?>  class="active"<?php endif ?>>Over ons</a>	</li>
		<li><a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( '' ) ): ?> class="active"<?php endif ?>>Contact</a></li>		
		<li><a href="<?php echo url( 'blog.detail' ) ?>"<?php if ( current_route_is( 'index' ) ): ?> class="active"<?php endif ?>>Tijdelijk Blog</a></li>
		</ul>
		</div>
	</div>
	<div>
		<div>
		</div>
	</div>
	<div>
		<div>
		</div>
	</div>
</div>