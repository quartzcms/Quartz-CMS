<div class="custom">
	<?php
		$al_options = $params['article'];
		$al_show_title = !empty($al_options['show_title']) ? true : false;
		$al_show_description = !empty($al_options['show_description']) ? true : false;
		$al_show_time = !empty($al_options['show_time']) ? true : false;
		$al_show_date = !empty($al_options['show_date']) ? true : false;
		
		if ($al_show_title):
		?>
			<h2><?php echo $al_fetch_modules->title ?></h2>
		<?php
		endif;
		if ($al_show_date || $al_show_time):
		?>
			<ul>
				<?php if ($al_show_date): ?>
					<li><?php echo $al_fetch_modules->date ?></li>
				<?php endif; ?>
				<?php if ($al_show_time): ?>
					<li><?php echo $al_fetch_modules->time ?></li>
				<?php endif; ?> 
			</ul>
		<?php
		endif;
		if ($al_show_description):
		?>
			<div id='content-item'><?php echo $al_fetch_modules->content ?></div>
		<?php
		endif;
	?>
</div>