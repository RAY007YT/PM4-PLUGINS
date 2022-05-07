<?php

namespace 007\Ray;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\item\Item;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;
use pocketmine\event\player\PlayerDropItemEvent;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use jojoe77777\FormAPI\SimpleForm;
use jojoe77777\FormAPI\CustomForm;

class Join extends PluginBase implements Listener {
public function onEnable(){
     $this->getLogger()->info("DNJoinMessage By RAY007YT Enabled ✅");
     
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
public function onJoin(PlayerJoinEvent $event) {
      $player = $event->getPlayer();
      $name = $player->getName();
      $player->sendMessage("§l§6=======================================\n\n§l§eHello $name\n\n§l§dWelcome TO THE SERVER\n§l§bThis Is A Minigame There You Need Grind\n§l§bAnd Become Most Powerful And Richest\n§l§bPerson In This Game.\n\n§l§9DISCORD =⟩ §ahttps://discord.gg =⟩ \n§l§9OWNER =⟩ §aRAY007YT \n§l§9Author =⟩ §aRAY007YT");
       $this->getServer()->dispatchCommand($player, "join");
     }
}