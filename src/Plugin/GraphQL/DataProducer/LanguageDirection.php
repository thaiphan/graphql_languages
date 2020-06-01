<?php

namespace Drupal\graphql_languages\Plugin\GraphQL\DataProducer;

use Drupal\Core\Language\Language;
use Drupal\graphql\Plugin\DataProducerPluginCachingInterface;
use Drupal\graphql\Plugin\GraphQL\DataProducer\DataProducerPluginBase;

/**
 * @DataProducer(
 *   id = "language_direction",
 *   name = @Translation("Language direction"),
 *   description = @Translation("Returns the language directory."),
 *   produces = @ContextDefinition("string",
 *     label = @Translation("Language directory")
 *   ),
 *   consumes = {
 *     "language" = @ContextDefinition("language",
 *       label = @Translation("Language")
 *     )
 *   }
 * )
 */
class LanguageDirection extends DataProducerPluginBase implements DataProducerPluginCachingInterface {

  public function resolve(Language $language) {
    return $language->getDirection();
  }
}
