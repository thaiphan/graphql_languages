<?php

namespace Drupal\graphql_languages\Plugin\GraphQL\DataProducer;

use Drupal\Core\Language\Language;
use Drupal\graphql\Plugin\DataProducerPluginCachingInterface;
use Drupal\graphql\Plugin\GraphQL\DataProducer\DataProducerPluginBase;

/**
 * @DataProducer(
 *   id = "language_name",
 *   name = @Translation("Language name"),
 *   description = @Translation("Returns the language name."),
 *   produces = @ContextDefinition("string",
 *     label = @Translation("Language name")
 *   ),
 *   consumes = {
 *     "language" = @ContextDefinition("language",
 *       label = @Translation("Language")
 *     )
 *   }
 * )
 */
class LanguageName extends DataProducerPluginBase implements DataProducerPluginCachingInterface {

  public function resolve(Language $language) {
    return $language->getName();
  }
}
