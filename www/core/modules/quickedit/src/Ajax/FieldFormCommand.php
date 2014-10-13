<?php

/**
 * @file
 * Contains \Drupal\quickedit\Ajax\FieldFormCommand.
 */

namespace Drupal\quickedit\Ajax;

/**
 * AJAX command for passing a rendered field form to Quick Edit's JavaScript
 * app.
 */
class FieldFormCommand extends BaseCommand {

  /**
   * Constructs a FieldFormCommand object.
   *
   * @param string $data
   *   The data to pass on to the client side.
   */
  public function __construct($data) {
    parent::__construct('quickeditFieldForm', $data);
  }

}
