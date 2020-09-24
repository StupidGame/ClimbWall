<?php

namespace matsuo\mabodoufu;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\Server;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use matsuo\TeamAPI\TeamAPI;

class Main extends PluginBase implements Listener{


  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  } 

  public function onMove(PlayerMoveEvent $event){
     
   $player = $event->getPlayer();
     if ($player->isSneaking()) {
      $effect = new EffectInstance(Effect::getEffect(EFFECT::SPEED), 0.05, 3, false);
      $player->addEffect($effect);
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

