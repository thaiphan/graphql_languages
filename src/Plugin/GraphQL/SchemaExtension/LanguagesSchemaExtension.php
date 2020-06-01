<?php

namespace Drupal\graphql_languages\Plugin\GraphQL\SchemaExtension;

use Drupal\graphql\GraphQL\ResolverBuilder;
use Drupal\graphql\GraphQL\ResolverRegistryInterface;
use Drupal\graphql\Plugin\GraphQL\SchemaExtension\SdlSchemaExtensionPluginBase;

/**
 * @SchemaExtension(
 *   id = "graphql_languages_extension",
 *   name = "GraphQL languages extension",
 *   description = "A simple extension to return available languages.",
 * )
 */
class LanguagesSchemaExtension extends SdlSchemaExtensionPluginBase {

  public function registerResolvers(ResolverRegistryInterface $registry) {
    $builder = new ResolverBuilder();

    $this->addQueryFields($registry, $builder);
    $this->addLanguageFields($registry, $builder);

    return $registry;
  }

  /**
   * @param \Drupal\graphql\GraphQL\ResolverRegistryInterface $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addLanguageFields(ResolverRegistryInterface $registry, ResolverBuilder $builder) {
    $registry->addFieldResolver('Language', 'id',
      $builder->compose(
        $builder->produce('language_id')
          ->map('language', $builder->fromParent())
      )
    );

    $registry->addFieldResolver('Language', 'name',
      $builder->compose(
        $builder->produce('language_name')
          ->map('language', $builder->fromParent())
      )
    );

    $registry->addFieldResolver('Language', 'direction',
      $builder->compose(
        $builder->produce('language_direction')
          ->map('language', $builder->fromParent())
      )
    );
  }

  /**
   * @param \Drupal\graphql\GraphQL\ResolverRegistryInterface $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addQueryFields(ResolverRegistryInterface $registry, ResolverBuilder $builder) {
    $registry->addFieldResolver('Query', 'languages',
      $builder->produce('languages')
    );
  }
}
