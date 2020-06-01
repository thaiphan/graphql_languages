<?php

namespace Drupal\graphql_languages\Plugin\GraphQL\DataProducer;

use Drupal\graphql\Plugin\DataProducerPluginCachingInterface;
use Drupal\graphql\Plugin\GraphQL\DataProducer\DataProducerPluginBase;

/**
 * @DataProducer(
 *   id = "languages",
 *   name = @Translation("Load Languages"),
 *   description = @Translation("Loads a list of languages."),
 *   produces = @ContextDefinition("any",
 *     label = @Translation("Languages")
 *   ),
 * )
 */
class Languages extends DataProducerPluginBase implements DataProducerPluginCachingInterface {
  public function resolve() {
    return \Drupal::languageManager()->getLanguages();
  }
}
