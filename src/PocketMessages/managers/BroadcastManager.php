<?php namespace PocketMessages\managers;

use PocketMessages\PocketMessages;

class BroadcastManager{

  private $plugin;

  public function __construct(PocketMessages $plugin){
    $this->plugin = $plugin;
  }
  
  public function setup(){
    $config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
    $config = $config->getAll();
    foreach($config as $thing => $things){
      if(is_numeric($thing)){
        $broadcasts = [];
        switch($things["order"]){
          case "normal":
            $broadcasts = $things["broadcasts"];
          break;
          case "reversed":
            //TODO: Finish
          break;
          case "random":
            $this->shuffle($thing);
          break;
        }
        $this->plugin->broadcasts[$thing] = $broadcasts;
      }
    }
  }
  
  public function getBroadcasts($interval, $new = true){
    if($new){
      $config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
      $config = $config->getAll();
      $broadcasts = $config[$interval]["broadcasts"];
    }else{
      $broadcasts = $this->plugin->broadcasts[$interval];
    }
    return $broadcasts;
  }
  
  public function isShuffle($interval){
  }
  
  public function shuffle($invertal){
  }
  
}
