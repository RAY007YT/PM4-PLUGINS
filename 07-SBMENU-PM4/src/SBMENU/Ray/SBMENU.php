<?php

declare(strict_types=1);

namespace SBMENU\Ray;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\item\ItemFactory;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;


use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;
use pocketmine\event\player\PlayerDropItemEvent;

use jojoe77777\FormAPI\SimpleForm;
use jojoe77777\FormAPI\CustomForm;

class SBMENU extends PluginBase implements Listener {
    public function onEnable() : void {
      $this->getLogger()->info("===========SBMENU By RAY007YT Is Enable=============");
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }


    public function onJoin(PlayerJoinEvent $event) {
        $sender = $event->getPlayer();
        $item = ItemFactory::getInstance()->get(399, 0, 1);
        $item->setCustomName("§r§l§aSKYBLOCK-MENU\n§r§e(Right-Click)");
        $sender->getInventory()->setItem(8, $item, true);
      }
  
  
    public function onClick(PlayerInteractEvent $event) {
        $sender = $event->getPlayer();
        $item = $event->getItem();
        if ($item->getId() === 399 && $item->getCustomName() === "§r§l§aSKYBLOCK-MENU\n§r§e(Right-Click)") {
           $this->sbmenu($sender);
        }
      }


      public function onTransaction(InventoryTransactionEvent $event) {
        $transaction = $event->getTransaction();
        foreach ($transaction->getActions() as $action) {
          $item = $action->getSourceItem();
          $source = $transaction->getSource();
          if ($source instanceof Player && $item->getId() === 399 && $item->getCustomName() === "§r§l§aSKYBLOCK-MENU\n§r§e(Right-Click)") {
            $event->cancel();
          }
        }
      }


      public function sbmenu(Player $player) {
          $form = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(Function (Player $player, int $data = null){
              if($data === null) {
                  return true;
                }
              switch($data) {
                  case 0:

                    $this->getServer()->dispatchCommand($player, "skyblock");

                  break;


                  case 1:
                    $this->getServer()->dispatchCommand($player, "Shop");
                  break;
                  

                  case 2:
                    $this->getServer()->dispatchCommand($player, "Enchantshop");
                  break;
                  

                  case 3:
                    $this->getServer()->dispatchCommand($player, "Sell");
                  break;
                
                
                  case 4:
                    $this->getServer()->dispatchCommand($player, "INV-craft");
                  break;
                
                
                  case 5:
                    $this->getServer()->dispatchCommand($player, "TRAVEL");
                  break;
                 
                  
                  case 6:
                    $this->getServer()->dispatchCommand($player, "Repair");
                  break;


                  case 7:
                    $this->getServer()->dispatchCommand($player, "Quest");
                  break;


                  case 8:
                    $this->getServer()->dispatchCommand($player, "Skills");
                  break;


                  case 9:

                    $this->getServer()->dispatchCommand($player, "Shop");

                  break;
                  

                  case 10:
                    $this->getServer()->dispatchCommand($player, "Enchantshop");
                  break;
                  

                  case 11:
                    $this->getServer()->dispatchCommand($player, "Sell");
                  break;
                
                
                  case 12:
                    $this->getServer()->dispatchCommand($player, "INV-craft");
                  break;
                
                
                  case 13:
                    $this->getServer()->dispatchCommand($player, "TRAVEL");
                  break;
                 
                  
                  case 14:
                    $this->getServer()->dispatchCommand($player, "Repair");
                  break;


                  case 15:
                    $this->getServer()->dispatchCommand($player, "Quest");
                  break;
                }
            });
  $form->setTitle("§l§cSKYBLOCK");
  $form->setContent("§dPlease Select The Next Menu:", 0, );
  $form->addButton("§l§eSKILLS\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/sword");
  $form->addButton("§l§eRECIPE BOOK\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/icon_book_writable");
  $form->addButton("§l§eYOUR PROFILE\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/profile_glyph_color");
  $form->addButton("§l§eSHOP\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/store_home_icon");
  $form->addButton("§l§eQUESTS\n§l§9»» §l§3TAP TO OPEN", 0, "textures/items/bow_pulling_2");
  $form->addButton("§l§eENCHANTMENT SHOP\n§l§9»» §l§3TAP TO OPEN", 0, "textures/blocks/enchanting_table_top");
  $form->addButton("§l§eENDER CHEST\n§l§9»» §l§3TAP TO OPEN", 0, "textures/blocks/ender_chest_front");
  $form->addButton("§l§ePOTIONS SHOP\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/icon_potion");
  $form->addButton("§l§ePETS\n§l§9»» §l§3TAP TO OPEN", 0, "textures/entity/fox/arctic_fox");
  $form->addButton("§l§eWORK BENCH\n§l§9»» §l§3TAP TO OPEN", 0, "textures/blocks/crafting_table_top");
  $form->addButton("§l§eAUCTION HOUSE\n§l§9»» §l§3TAP TO OPEN", 0, "textures/items/diamond");
  $form->addButton("§l§eBANK\n§l§9»» §l§3TAP TO OPEN", 0, "textures/items/gold_nugget");
  $form->addButton("§l§eBLACKSMITH\n§l§9»» §l§3TAP TO OPEN", 0, "textures/ui/anvil_icon");
  $form->addButton("§l§eBAZAAR\n§l§9»» §l§3TAP TO OPEN", 0, "textures/items/raw_gold");
  $form->addButton("§l§eTRAVEL ISLAND\n§l§9»» §l§3TAP TO OPEN", 0, "textures/blocks/grass_side_carried");
  $form->addButton("§l§eFAST TRAVEL\n§l§9»» §l§3TAP TO OPEN", 0, "textures/items/ender_pearl");
            $form->sendToPlayer($player);
            return $form;
        }
}