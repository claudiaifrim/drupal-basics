<?php
/**
 * @file
 * Contains \Drupal\unibuc\Plugin\Block\LinksBlock.
 */
namespace Drupal\hello_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Provides a custom block.
 *
 * @Block(
 *   id = "unibuc_hello_block",
 *   admin_label = @Translation("A block that shows a simple message."),
 *   category = @Translation("Blocks")
 * )
 */
class HelloBlock extends BlockBase implements BlockPluginInterface {

    /**
     * {@inheritdoc}
     */
    public function build() {
      return array(
        '#markup' => $this->t('This is my first Drupal block.')
      );
    }
}
