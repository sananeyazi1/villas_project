<?php

namespace Drupal\elastic_search\Plugin;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Provides the Field mapper plugin plugin manager.
 */
class FieldMapperManager extends DefaultPluginManager {

  /**
   * Constructor for FieldMapperPluginManager objects.
   *
   * @param \Traversable                                  $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface      $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces,
                              CacheBackendInterface $cache_backend,
                              ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/FieldMapper',
                        $namespaces,
                        $module_handler,
                        'Drupal\elastic_search\Plugin\FieldMapperInterface',
                        'Drupal\elastic_search\Annotation\FieldMapper');

    $this->alterInfo('elastic_search_field_mapper_info');
    $this->setCacheBackend($cache_backend,
                           'elastic_search_field_mapper_plugins');
  }

}
