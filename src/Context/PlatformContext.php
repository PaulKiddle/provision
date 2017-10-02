<?php

namespace Aegir\Provision\Context;

use Aegir\Provision\Context;

/**
 * Class PlatformContext
 *
 * @package Aegir\Provision\Context
 *
 * @see \Provision_Context_platform
 */
class PlatformContext extends Context {
  static function option_documentation() {
    $options = array(
      'remote_host' => 'server: host name; default localhost',
      'script_user' => 'server: OS user name; default current user',
      'aegir_root' => 'server: Aegir root; default ' . getenv('HOME'),
      'master_url' => 'server: Hostmaster URL',
    );
    return $options;
  }
}
