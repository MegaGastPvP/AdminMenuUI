<?php

namespace KITSUI;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityLevelChangeEvent;

use pocketmine\entity\Effect;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

use pocketmine\command\ConsoleCommandSender;

use pocketmine\event\player\PlayerMoveEvent;

use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener {


    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "KitsUI Enabled");
    }

    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "KitsUI Disabled");
    }
   
     
     
    public function onCommand(CommandSender $sender, Command $cmd, string $label,array $args) : bool {
		
		switch($cmd->getName()){
		
         case "kits":
				if($sender instanceof Player) {
					
						$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
						if($api === null || $api->isDisabled()){
						// CHECK THIS ?
						}
						$form = $api->createSimpleForm(function (Player $sender, array $data){

						$result = $data[0];
						if($result === null){ // Closed form without submitting
						// CHECK THIS ?
						}
							switch($result){
								
								case 0:
									break;
								case 1:
									$command = "defaultkits";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 2:
									$command = "rankkits";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
                       case 3:
                          $command = "specialkits";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
								
							}
					
						});

						
					$form->setTitle(TextFormat::BOLD . "BrandPE Kits - Select");
					$form->setContent("Select A Kit Type");
					
              $form->addButton("Kit Types:", 1, "");
					$form->addButton("Default Kits", 1, "");
					$form->addButton("Rank Kits", 1, "");
					$form->addButton("Limited Edition Kits", 1, "");
					
					$form->sendToPlayer($sender);

				}
			case "defaultkits":
				if($sender instanceof Player) {
					
						$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
						if($api === null || $api->isDisabled()){
						// CHECK THIS ?
						}
						$form = $api->createSimpleForm(function (Player $sender, array $data){

						$result = $data[0];
						if($result === null){ // Closed form without submitting
						// CHECK THIS ?
						}
							switch($result){
								
								case 0:
								  $command = "kits";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 1:
									$command = "bpekits crafter";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 2:
									$command = "bpekits weekly";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 3:
									$command = "bpekits monthly";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								
							}
					
						});

						
					$form->setTitle(TextFormat::BOLD . "BrandPE Kits - Default Kits");
					$form->setContent("Select A Kit");
					
					$form->addButton("Back", 1, "");
					$form->addButton("Crafter", 1, "");
					$form->addButton("Weekly", 1, "");
					$form->addButton("Monthly", 1, "");
					
					$form->sendToPlayer($sender);

				}
				case "rankkits":
				if($sender instanceof Player) {
					
						$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
						if($api === null || $api->isDisabled()){
						// CHECK THIS ?
						}
						$form = $api->createSimpleForm(function (Player $sender, array $data){

						$result = $data[0];
						if($result === null){ // Closed form without submitting
						// CHECK THIS ?
						}
							switch($result){
								
								case 0:
									 $command = "kits";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 1:
									$command = "bpekits Titan";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 2:
									$command = "bpekits Lord";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 3:
									$command = "bpekits DemonLord";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 4:
									$command = "bpekits OverLord";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 5:
									$command = "bpekits God";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 6:
									$command = "bpekits KoTH";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								case 7:
									$command = "bpekits Brand";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								
							}
					
						});

						
					$form->setTitle(TextFormat::BOLD . "BrandPE Kits - Rank Kits");
					$form->setContent("Select A Kit");
					
					$form->addButton("Back", 1, "");
					$form->addButton("Titan", 1, "");
					$form->addButton("Lord", 1, "");
					$form->addButton("Demon Lord", 1, "");
					$form->addButton("Over Lord", 1, "");
					$form->addButton("God", 1, "");
					$form->addButton("KoTH", 1, "");
					$form->addButton("Brand", 1, "");
					
					$form->sendToPlayer($sender);

				}
				case "specialkits":
				if($sender instanceof Player) {
					
						$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
						if($api === null || $api->isDisabled()){
						// CHECK THIS ?
						}
						$form = $api->createSimpleForm(function (Player $sender, array $data){

						$result = $data[0];
						if($result === null){ // Closed form without submitting
						// CHECK THIS ?
						}
							switch($result){
								
								case 0:
									 $command = "kits";
									$this->getServer()->getCommandMap()->dispatch($sender, $command);
									break;
								
							}
					
						});

						
					$form->setTitle(TextFormat::BOLD . "BrandPE Kits - Limited Edition Kits");
					$form->setContent("Coming Soon!");
					$form->addButton("Back", 1, "");
					$form->sendToPlayer($sender);

				}
				else{
					$sender->sendMessage(TextFormat::RED . "Use this Command in-game.");
					return true;
				}
			break;

		}
		return true;
    }

	
}





