<?php

/**
 * @file
 * Contains \Drupal\dartharth_brandist\Plugin\Block\Brands.
 */

namespace Drupal\dartharth_brandist\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "brands",
 *   admin_label = @Translation("Brands Block"),
 *   category = @Translation("DarthArth")
 * )
 */
class Brands extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {

		$items = array();

		return array(
			'#items' => $items,
			'#theme' => 'brands',
		);
	}
}
