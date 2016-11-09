<?php namespace PocketMessages;

use PocketMessages\managers\BroadcastManager;
use PocketMessages\tasks\BroadcastTask;

use pocketmine\plugin\PluginBase;

class PocketMessages extends PluginBase{

  public $broadcasts = [];
  public $timers = [];
  public $plainkeys = [];
  
  public function onEnable(){
    $this->saveDefaultConfig();
    $this->getBroadcastManager()->setup();
    $this->getServer()->getScheduler()->scheduleRepeatingTask(new BroadcastTask($this), 20);
  }
  
  public function getBroadcastManager(){
    return new BroadcastManager($this);
  }
  
  public function translateColors($msg){
    $char = $this->getConfig()->get("color-symbol");
    $msg = str_replace($char."1", TextFormat::DARK_BLUE, $msg);
    $msg = str_replace($char."2", TextFormat::DARK_GREEN, $msg);
    $msg = str_replace($char."3", TextFormat::DARK_AQUA, $msg);
    $msg = str_replace($char."4", TextFormat::DARK_RED, $msg);
    $msg = str_replace($char."5", TextFormat::DARK_PURPLE, $msg);
    $msg = str_replace($char."6", TextFormat::GOLD, $msg);
    $msg = str_replace($char."7", TextFormat::GRAY, $msg);
    $msg = str_replace($char."8", TextFormat::DARK_GRAY, $msg);
    $msg = str_replace($char."9", TextFormat::BLUE, $msg);
    $msg = str_replace($char."0", TextFormat::BLACK, $msg);
    
    $msg = str_replace($char."a", TextFormat::GREEN, $msg);
    $msg = str_replace($char."b", TextFormat::AQUA, $msg);
    $msg = str_replace($char."c", TextFormat::RED, $msg);
    $msg = str_replace($char."d", TextFormat::LIGHT_PURPLE, $msg);
    $msg = str_replace($char."e", TextFormat::YELLOW, $msg);
    $msg = str_replace($char."f", TextFormat::WHITE, $msg);
  }
  
}
