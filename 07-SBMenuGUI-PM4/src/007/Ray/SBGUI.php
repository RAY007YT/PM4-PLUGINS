<?php

namespace 007\Ray;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;

use pocketmine\item\Item;
use pocketmine\utils\TextFormat;
use pocketmine\utils\TextFormat as TF;

use muqsit\invmenu\InvMenu;
use muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\transaction\InvMenuTransactionResult;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;
use pocketmine\event\player\PlayerDropItemEvent;

use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\network\mcpe\protocol\LevelEventPacket;

class SBGUI extends PluginBase implements Listener {
  public function onEnable(){
    $this->getLogger()->info("SBMenuGUI By BhawaniSingh Enabled ✅");
    
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    
     if (!InvMenuHandler::isRegistered()) {
       InvMenuHandler::register($this);
     }
  }
  
public function onJoin(PlayerJoinEvent $event) {
      $sender = $event->getPlayer();
      $item = Item::get(399, 0, 1);
      $item->setCustomName("§r§l§aSKYBLOCK MENU\n§r§d(Right-Click)");
      $sender->getInventory()->setItem(8, $item, true);
    }


public function onClick(PlayerInteractEvent $event) {
      $sender = $event->getPlayer();
      $item = $event->getItem();
      if ($item->getId() === 399 && $item->getCustomName() === "§r§l§aSKYBLOCK MENU\n§r§d(Right-Click)") {
        $this->sbmenupe($sender);
      }
    }

public function onTransaction(InventoryTransactionEvent $event) {
      $transaction = $event->getTransaction();
      foreach ($transaction->getActions() as $action) {
        $item = $action->getSourceItem();
        $source = $transaction->getSource();
        if ($source instanceof Player && $item->getId() === 399 && $item->getCustomName() === "§r§l§aSKYBLOCK MENU\n§r§d(Right-Click)") {
          $event->setCancelled();
        }
      }
    }
  
  public function sbmenupe($player) {
    $menu = InvMenu::create(InvMenu::TYPE_DOUBLE_CHEST);
    $menu->readonly();
    $menu->setName("§l§6SKYBLOCK MENU");
    $inventory = $menu->getInventory();
      $inventory->setItem(0, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(1, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(2, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(3, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(4, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(5, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(6, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(7, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(8, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(9, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(10, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(11, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(12, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(13, Item::get(397, 3, 1)->setCustomName("§r§l§e§r§l§eYOUR PROFILE\n§r§eName §f" . $player->getName() . "\n§r§cHealth §f" . $player->getHealth() . "\n§r§aDefence §f" . $player->getArmorPoints() . "\n§r§bStrength §f100\n§r§2Speed §f100\n§r§6Intelligence §f100%\n§r§9First Played §f" . $player->getFirstPlayed()));
	    $inventory->setItem(14, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(15, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(16, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(17, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(18, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(19, Item::get(283, 0, 1)->setCustomName("§r§l§eSKILLS\n\n§r§7Click To View Your\n§r§7Skills Progress.\n\n§r§l§dClick To View"));
	    $inventory->setItem(20, Item::get(307, 0, 1)->setCustomName("§r§l§eKITS\n\n§r§7Click To View\n§r§7For Get Kits.\n\n§r§l§dClick To View"));
	    $inventory->setItem(21, Item::get(403, 0, 1)->setCustomName("§r§l§eRECIPES BOOK\n\n§r§7Click To View\n§r§7Custom Recipes.\n\n§r§l§dClick To View"));
	    $inventory->setItem(22, Item::get(296, 0, 1)->setCustomName("§r§l§eSHOP\n\n§r§7Click To View\n§r§7Server Shop.\n\n§r§l§dClick To View"));
	    $inventory->setItem(23, Item::get(386, 0, 1)->setCustomName("§r§l§eQUESTS\n\n§r§7Click To View Your\n§r§7Quests Progress.\n\n§r§l§dClick To View"));
	    $inventory->setItem(24, Item::get(116, 0, 1)->setCustomName("§r§l§eENCHANT SHOP\n\n§r§7Click To View Server\n§r§7Enchant Shop.\n\n§r§l§dClick To View"));
	    $inventory->setItem(25, Item::get(52, 0, 1)->setCustomName("§r§l§eSPAWNER SHOP\n\n§r§7Click To Open Spawner\n§r§7Shop For Purchase.\n\n§r§l§dClick To Open"));
	    $inventory->setItem(26, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(27, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(28, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(29, Item::get(373, 12, 1)->setCustomName("§r§l§ePOITION SHOP\n\n§r§7Click To View Server\n§r§7Poition Shop.\n\n§r§l§dClick To View"));
	    $inventory->setItem(30, Item::get(397, 1, 1)->setCustomName("§r§l§eMINION SHOP\n\n§r§7Click To View Server\n§r§7Minion Shop.\n\n§r§l§dClick To View"));
	    $inventory->setItem(31, Item::get(58, 0, 1)->setCustomName("§r§l§eWORK BENCH\n\n§r§7Click To Open Work\n§r§7Bench For Crafting.\n\n§r§l§dClick To Open"));
	    $inventory->setItem(32, Item::get(396, 0, 1)->setCustomName("§r§l§eAUCTION HOUSE\n\n§r§7Click To Open Server\n§r§7Auction For Bid Items.\n\n§r§l§dClick To Open"));
	    $inventory->setItem(33, Item::get(41, 0, 1)->setCustomName("§r§l§eBANK\n\n§r§7Click To Open Server\n§r§7Bank Menu.\n\n§r§l§dClick To Open"));
	    $inventory->setItem(34, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(35, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(36, Item::get(145, 0, 1)->setCustomName("§r§l§eBLACKSMITH\n\n§r§7Click To Open\n§r§7Server Blacksmith.\n\n§r§l§dClick To View"));
	    $inventory->setItem(44, Item::get(2, 0, 1)->setCustomName("§r§l§eISLAND MENU\n\n§r§7Click To Open\n§r§7Your Island Menu.\n\n§r§l§dClick To Open"));
	    $inventory->setItem(38, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(39, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(40, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(41, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(42, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(43, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(37, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(45, Item::get(345, 0, 1)->setCustomName("§r§l§eFAST TRAVEL\n\n§r§7Click To Open Server\n§r§7Travel Menu.\n\n§r§l§dClick To Open"));
	    $inventory->setItem(46, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(47, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(48, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(49, Item::get(-161, 0, 1)->setCustomName("§r§cCLOSE"));
	    $inventory->setItem(50, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(51, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(52, Item::get(160, 15, 1)->setCustomName("§r"));
	    $inventory->setItem(53, Item::get(266, 0, 1)->setCustomName("§r§l§eBAZAAR\n\n§r§7Click To Open Server\n§r§7Bazaar Menu.\n\n§r§l§dClick To Open"));
	    $menu->setListener(\Closure::fromCallable([$this, "SkyMenu"]));
	         $menu->send($player);
		return true;
	}
	
	public function SkyMenu(InvMenuTransaction $action) : InvMenuTransactionResult{
		$item = $action->getOut();
		$player = $action->getPlayer();
    if($item->getId() == 283 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "skills");
			});
		}
    if($item->getId() == 307 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			 $this->getServer()->dispatchCommand($player, "kit");
			});
		}
    if($item->getId() == 403 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "recipes");
			});
		}
		if($item->getId() == 296 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "shop");
			});
		}
		if($item->getId() == 386 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "quest");
			});
		}
		if($item->getId() == 116 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "eshop");
			});
		}
		if($item->getId() == 52 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "shop Spawners");
			});
		}
		if($item->getId() == 373 && $item->getDamage() == 12){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "shop Potions");
			});
		}
		if($item->getId() == 397 && $item->getDamage() == 1){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "shop Minions");
			});
		}
		if($item->getId() == 58 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "customtable");
			});
		}
		if($item->getId() == 396 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "ah");
			});
		}
		if($item->getId() == 41 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "bank");
			});
		}
		if($item->getId() == 145 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "blacksmith");
			});
		}
		if($item->getId() == 2 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "skyblock");
			});
		}
		if($item->getId() == 345 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "fasttravel");
			});
		}
		if($item->getId() == -161 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			});
		}
		if($item->getId() == 266 && $item->getDamage() == 0){
        	$inv = $action->getAction()->getInventory();
			$inv->onClose($player);
			return $action->discard()->then(function(Player $player) : void{
			$this->getServer()->dispatchCommand($player, "bazaar");
			});
		}
        return $action->discard();
	 }
}