<?php

namespace Drupal\paraseed_media\Plugin\media\Source;

use Drupal\entity_browser_generic_embed\FileInputExtensionMatchTrait;
use Drupal\entity_browser_generic_embed\InputMatchInterface;
use Drupal\media\Plugin\media\Source\File as DrupalCoreMediaFile;

/**
 * Input-matching version of the Varbase Media File media source.
 */
class ParaseedMediaFile extends DrupalCoreMediaFile implements InputMatchInterface {

  use FileInputExtensionMatchTrait;

}
