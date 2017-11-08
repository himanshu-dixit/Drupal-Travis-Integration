<?php

namespace Drupal\drd_agent\Commands;

use Drush\Commands\DrushCommands;

/**
 * Class Base.
 *
 * @package Drupal\drd_agent
 */
class Drush extends DrushCommands {

  /**
   * Configure this domain for communication with a DRD instance.
   *
   * @command drd:agent:setup
   * @param string $token
   *  Base64 encoded and serialized array of all variables required such that DRD can communicate with this domain in the future
   * @aliases drd-agent-setup
   */
  public function setup($token) {
    $_SESSION['drd_agent_authorization_values'] = $token;
    $service = \Drupal::service('drd_agent.setup');
    $service->execute();
    unset($_SESSION['drd_agent_authorization_values']);
  }

}
