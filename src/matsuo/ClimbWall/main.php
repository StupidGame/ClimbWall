<?php

namespace matsuo\ClimbWall;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\Server;


class Main extends PluginBase implements Listener{


  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  } 

  public function onMove(PlayerMoveEvent $event){
     
   $player = $event->getPlayer();
     if ($player->isSneaking()) {
       if($player->getTargetBlock(1)->getId()!== 0){
       $player->setCanClimbWalls(true); 
        }else{
       $player->setCanClimbWalls(false);
        }
        }else{ 
          $player->setCanClimbWalls(false);
        }
  }  
}
