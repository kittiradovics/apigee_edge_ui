<?php

declare(strict_types = 1);

namespace Drupal\apigee_edge_ui;

use Drupal\Core\Entity\EntityInterface;
use Drupal\apigee_edge\Entity\ListBuilder\AppListBuilder;

/**
 * Advanced list builder for developer apps.
 */
class BetterAppListBuilder extends AppListBuilder {

  use BetterAppListTrait;

  /**
   * {@inheritdoc}
   */
  public function render(): array {
    $build = parent::render();
    $this->buildAppListContent($build);
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultOperations(EntityInterface $entity): array {
    return $this->getBetterOperations($entity);
  }

}
