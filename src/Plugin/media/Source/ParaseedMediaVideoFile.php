<?php

namespace Drupal\paraseed_media\Plugin\media\Source;

use Drupal\entity_browser_generic_embed\FileInputExtensionMatchTrait;
use Drupal\entity_browser_generic_embed\InputMatchInterface;
use Drupal\media\Plugin\media\Source\VideoFile as DrupalCoreMediaVideoFile;

/**
 * Input-matching version of the Varbase Media Video File media source.
 */
class ParaseedMediaVideoFile extends DrupalCoreMediaVideoFile implements InputMatchInterface {

  use FileInputExtensionMatchTrait;

}
