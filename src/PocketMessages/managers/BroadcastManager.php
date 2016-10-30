<?php namespace PocketMessages\managers;

use PocketMessages\PocketMessages;

class BroadcastManager{

  private $plugin;

  public function __construct(PocketMessages $plugin){
    $this->plugin = $plugin;
  }
  
}
