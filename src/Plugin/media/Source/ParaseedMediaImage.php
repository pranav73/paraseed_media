<?php

namespace Drupal\paraseed_media\Plugin\media\Source;

use Drupal\entity_browser_generic_embed\FileInputExtensionMatchTrait;
use Drupal\entity_browser_generic_embed\InputMatchInterface;
use Drupal\media\Plugin\media\Source\Image as DrupalCoreMediaImage;

/**
 * Input-matching version of the Varbase Media Image media source.
 */
class ParaseedMediaImage extends DrupalCoreMediaImage implements InputMatchInterface {

  use FileInputExtensionMatchTrait;

}
