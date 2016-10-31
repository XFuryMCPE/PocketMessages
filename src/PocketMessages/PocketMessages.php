<?php namespace PocketMessages;

use PocketMessages\managers\BroadcastManager;

use pocketmine\plugin\PluginBase;

class PocketMessages extends PluginBase{

  public $broadcasts = [];
  public $timers = [];
  
  public function onEnable(){
    $this->saveDefaultConfig();
    $this->getBroadcastManager()->setup();
  }
  
  public function getBroadcastManager(){
    return new BroadcastManager($this);
  }
  
}
