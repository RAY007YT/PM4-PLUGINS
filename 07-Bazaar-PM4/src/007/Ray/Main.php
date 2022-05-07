<?php

namespace Form\Meow;

use pocketmine\plugin\PluginBase;
use pocketmine\events\Listener;
use pocketmine\player\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use Form\Meow\libs\jojoe77777\FormAPI\SimpleForm;
class Main extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("Enabled By RAY007YT!");
    }

    public function onDisable(): void {
        $this->getLogger()->info("Plugin Disabled!");
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {

        if($command->getName() == "bazaar"){
            if($sender instanceof Player){
                $this->newSimpleForm($sender);
            } else {
                $sender->sendMessage("Run Command In-game Only");
            }
        }

        return true;
    }

    public function newSimpleForm($player){
        $form = new SimpleForm(function(Player $player, int $data = null){
            if($data === null){
                return true;
            }

            switch($data){
                case 0:
                    $this->getServer()->getCommandMap()->dispatch($player, "sell hand");
                break;

                case 1:
                    $this->getServer()->getCommandMap()->dispatch($player, "sell ores");
                break;

                case 2:
                    $this->getServer()->getCommandMap()->dispatch($player, "sell inv");
                break;
            }

        });
        $form->setTitle("Bazaar Menu");
        $form->setContent("Your Bazaar Menu!");
        $form->addButton("Sell Hand\nClick To Sell", "0", "textures/items/gold_ingot");
        $form->addButton("Sell Ores\nClick To Sell", "0", "textures/items/emerald");
        $form->addButton("Sell Inv\nClick To Open Sell", "0", "textures/items/diamond");
        $form->sendToPlayer($player);
        return $form;
    }

}
