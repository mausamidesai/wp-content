<?php
// search form
?>


<form role="search" method="get" class="search-form flex-container" action="<?php echo esc_url( home_url()); ?>">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search …" value="" name="s">
				</label>
				<button type="submit" class="search-submit" value="Search">&#128269;</button>
</form>