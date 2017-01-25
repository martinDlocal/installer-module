<?php namespace Anomaly\InstallerModule\Installer;

class InstallerThread extends Thread {
    public function run($installers, $key, $container) {
      $installer = $installers->get($key);
      $container->call($installer->getTask());
      $_SESSION["install_".$key] = true;
    }
}
