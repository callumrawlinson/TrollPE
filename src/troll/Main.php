<?php

namespace troll;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
class Main extends PluginBase implements Listener {
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Galaxy Core launched");
  }
  public function oncommand(CommandSender $sender, Command $cmd, string  $label, array $args) : bool {
    switch($cmd->getName()){
      case "spawn";
        if($sender instanceof Player) {
          if($this->getServer()->isLevelLoaded("world")) {
            $sender->teleport($this->getServer()->getLevelByName("world")->getSafeSpawn());
          } else {
            $this->getServer->loadLevel("world");
            $sender->teleport($this->getServer()->getLevelByName("world")->getSafeSpawn());
          } 
        } else {
          $sender->sendMessage("Sorry, but this command can only be used in-game.");
        }
        return true;
      case "lobby";
        if($sender instanceof Player) {
          if($this->getServer()->isLevelLoaded("world")) {
            $sender->teleport($this->getServer()->getLevelByName("world")->getSafeSpawn());
          } else {
            $this->getServer->loadLevel("world");
            $sender->teleport($this->getServer()->getLevelByName("world")->getSafeSpawn());
          } 
        } else {
          $sender->sendMessage("Sorry, but this command can only be used in-game.");
        }
        return true;
      case "hub";
        if($sender instanceof Player) {
          if($this->getServer()->isLevelLoaded("world")) {
            $sender->teleport($this->getServer()->getLevelByName("world")->getSafeSpawn());
          } else {
            $this->getServer->loadLevel("world");
            $sender->teleport($this->getServer()->getLevelByName("world")->getSafeSpawn());
          } 
        } else {
          $sender->sendMessage("Sorry, but this command can only be used in-game.");
        }
        return true;
      case "feed":
        if($sender instanceof Player) {
          $sender->setFood(20);
          $sender->setSaturation(20);
        } else {
          $sender->sendMessage("Sorry, but this command can only be used in-game.");
        }
      default:
        return false;
    }
  }
}
