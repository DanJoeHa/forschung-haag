			</div>
		</article>
		
		<nav id="menu">
			<?php
				foreach( $conf['pages'] as $page ){
					echo '<a href="index.php?p=' . $page['id'] . '" title="' . $page['title'] . '" target="_self">';
					echo $page['title'];
					echo '</a>';
				}
			?>
		</nav>	
	
	</body>
</html>