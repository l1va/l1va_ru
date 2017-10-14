		<div class="top-lang-switch">
			<?php 
				if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher ();
			?>
		</div>

/**
OR:
		<div>
			<a href="?lang=ru" class="has-image"     style="text-decoration:none">
				<img src="/wp-content/plugins/wp-multilang/flags/ru.png" alt="Russian (RU)"/>
			</a>
			<a href="?lang=en" class="has-image"     style="text-decoration:none">
				<img src="/wp-content/plugins/wp-multilang/flags/en.png" alt="English (US)"/>
			</a>
		</div>
*/
