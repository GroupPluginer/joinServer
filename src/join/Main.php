<?php

namespace join;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

public function onEnable(){
 $this->getServer()->getLogger()->info("joinServer has been enabled");
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
 }
public function onJoin(PlayerJoinEvent $event){
  $player = $event->getPlayer();
    if($player->isOp()){
      $event->setJoinMessage(TextFormat::RED . $player->getName() . TextFormat::GREEN . " OP d5l");
    } else {
  $event->setJoinMessage(TextFormat::GREEN . $player->getName() . TextFormat::RED . " d5l");
  }
 }
public function onQuit(PlayerQuitEvent $event){
 $player = $event->getPlayer();
   if($player->isOp()){
     $event->setQuitMessage(TextFormat::RED . $player->getName() . TextFormat::YELLOW . " Op 6l3");
  } else {
 $event->setQuitMessage(TextFormat::RED . $player->getName() . TextFormat::GREEN . " 6l3");
  }
 }
}
