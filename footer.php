	<footer>
		<nav class="footer-menu">
<!-- this is the 'Secondary' menu -->
<?php
wp_nav_menu( array( 
    'theme_location' => 'footer-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
		</nav>
	</footer>
	</div><!-- This closes the 'container' div opened in 'header.php' -->
	</div><!-- This closes the 'wrapper' div opened in 'header.php' -->
</body>
</html>