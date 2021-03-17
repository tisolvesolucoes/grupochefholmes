<?php 

	$organic_farm_sticky_header = get_theme_mod('organic_farm_sticky_header');

	$organic_farm_custom_style= "";

	if($organic_farm_sticky_header != true){

		$organic_farm_custom_style .='.menu_header.fixed{';

			$organic_farm_custom_style .='position: static;';
			
		$organic_farm_custom_style .='}';
	}