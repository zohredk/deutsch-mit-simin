<?php

namespace RT\ThePostGrid\Controllers\Api;

use RT\ThePostGrid\Helpers\Fns;

class ImageSizeV1{
	public function __construct(){
		add_action("rest_api_init", [$this, 'register_image_size_route']);
	}

	public function register_image_size_route(){
		register_rest_route( 'rttpg/v1', 'image-size',array(
			'methods'  => 'GET',
			'callback' => [$this, 'get_image_sizes'],
			'permission_callback' => function() { return true; }
		));
	}

	public function get_image_sizes(){
		$data = Fns::get_all_image_sizes_guten();
		return rest_ensure_response($data);
	}

}