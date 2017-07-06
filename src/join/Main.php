<?php

namespace joinServer;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\event\PlayerQuitEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

public function onEnable(){
 $this->getServer()->getLogger()->info("joinServer has been enabled");
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
 }
public function onJoin(PlayerJoinEvent $event)
  $player = $event->getPlayer();
    if($player->isOp()){
      $event->setJoinMessage(TextFormat::RED . $player->getName() . TextFormat::YELLOW."al Op d5l");
    } else {
  $event->setJoinMessage(TextFormat::GREEN . $player->getName() . TextFormat::YELLOW . "al Op d5l");
  }
 }
public function onQuit(PlayerQuitEvent $event){
 $player = $event->getPlayer();
   if($player->isOp()){
     $event->setQuitMessage(TextFormat::RED . $player->getName() TextFormat::AQUA . "al Op 6l3");
  } else {
 $event->setQuitMessage(TextFormat::RED . $player->getName() . TextFormat::AQUA . "al Player 6l3");
  }
 }
}
