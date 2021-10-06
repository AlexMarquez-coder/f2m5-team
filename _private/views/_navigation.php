<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'registren' ) ?>"<?php if ( current_route_is( 'registeren' ) ): ?> class="active"<?php endif ?>>Registeren</a>
    </li>
</ul>





<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>