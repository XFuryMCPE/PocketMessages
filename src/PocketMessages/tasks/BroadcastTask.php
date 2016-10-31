<?php namespace PocketMessages\tasks;

use pocketmine\scheduler\PluginTask;

use PocketMessages\PocketMessages;

class BroadcastTask extends PluginTask{

  public function __construct(PocketMessages $plugin){
    parent::__construct($plugin);
    $this->plugin = $plugin;
  }
  
  public function onRun($currentTick){
    //TODO: Broadcasts duh!!!!
  }
  
}
