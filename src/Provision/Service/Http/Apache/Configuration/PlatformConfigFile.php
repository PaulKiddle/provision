<?php
/**
 * @file Server.php
 *
 *       Apache Configuration for Server Context.
 * @see \Provision_Config_Apache_Server
 * @see \Provision_Config_Http_Server
 * @see \Provision_Config_Http_Server
 */

namespace Aegir\Provision\Service\Http\Apache\Configuration;

use Aegir\Provision\ConfigFile;

class PlatformConfigFile extends ConfigFile {
  
  const SERVICE_TYPE = 'apache';
  
  public $template = 'platform.tpl.php';
  public $description = 'platform configuration file';
  
  function filename() {
      $file = 'platform.' . $this->context->name . '.conf';
      return $this->context->getProvision()->getConfig()->get('config_path') . '/' . $this->service->provider->name . '/' . $this->service->getType() . '/platform.d/' . $file;
  }
    
    function process()
    {
        parent::process();
    }
}