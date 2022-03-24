<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Categories extends Component
{
	public $cats;
	protected $imageId;

	public function __construct($cats) {
		$this->cats = $this->cats;
	}

	/**
	 * Returns the post terms.
	 *
	 * @return string
	 */
	public function categories() {
		return get_the_terms( $this->post_ID, 'category' );
	}
}
