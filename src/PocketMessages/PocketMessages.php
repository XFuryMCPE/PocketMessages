<?php namespace PocketMessages;

use pocketmine\plugin\PluginBase;

class PocketMessages extends PluginBase{

  public $broadcasts = [];
  public $counts = [];
  
  public function onEnable(){
    $this->saveDefaultConfig();
  }
  
}
