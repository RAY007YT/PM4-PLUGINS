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
     $this->getLogger()->info("DNJoinUI By BhawaniSingh Enabled ✅");
     
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
public function onJoin(PlayerJoinEvent $event) {
      $player = $event->getPlayer();
      $this->joinui($player);
    $this->getServer()->dispatchCommand($player, "join");
    }
    
 public function joinui($player){
    $form = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $player, int $data = null){
      if($data === null){
        return true;
      } 
       switch($data){
        case 0:
          break;
       }
      });
      $name = $player->getName();
      $form->setTitle("§l§6WELCOME");
      $form->setContent("§eHello $name\n\n§dWelcome To The Server\n§bThis Is A Skyblock Minigame You Need Grind Here And Buy Armors And Tools And Become Most Powerful And Richest Person In This Game.\n\n§9Discord: §bhttps://discord.gg \n§9Owner: §bRAY007YT \n§9SUB TO MY YT CHANNEL =⟩ §aRAY007YT");
      $form->addButton("§l§aOK\n§9»» §r§6Tap To Confirm", 0, "textures/ui/realms_slot_check");
      $form->sendToPlayer($player);
    return $form;
  }
}