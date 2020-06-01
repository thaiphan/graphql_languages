<?php

namespace Drupal\graphql_languages\Plugin\GraphQL\DataProducer;

use Drupal\Core\Language\Language;
use Drupal\graphql\Plugin\DataProducerPluginCachingInterface;
use Drupal\graphql\Plugin\GraphQL\DataProducer\DataProducerPluginBase;

/**
 * @DataProducer(
 *   id = "language_id",
 *   name = @Translation("Load language ID"),
 *   description = @Translation("Returns the language ID."),
 *   produces = @ContextDefinition("string",
 *     label = @Translation("Language ID")
 *   ),
 *   consumes = {
 *     "language" = @ContextDefinition("language",
 *       label = @Translation("Language")
 *     )
 *   }
 * )
 */
class LanguageId extends DataProducerPluginBase implements DataProducerPluginCachingInterface {

  public function resolve(Language $language) {
    return $language->getId();
  }
}
