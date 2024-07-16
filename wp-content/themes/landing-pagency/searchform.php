<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e('Search this site...','landing-pagency'); ?>" onblur="if (this.value == '') {this.value = '<?php esc_attr_e('Search this site...','landing-pagency'); ?>';}" onfocus="if (this.value == '<?php esc_attr_e('Search this site...','landing-pagency'); ?>') {this.value = '';}" >
		<input type="submit" value="<?php esc_attr_e( 'Search', 'landing-pagency' ); ?>" />
	</fieldset>
</form>
