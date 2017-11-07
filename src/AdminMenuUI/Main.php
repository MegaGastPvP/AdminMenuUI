<?php
namespace AdminMenuUI;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\entity\Effect;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor; 
use pocketmine\command\ConsoleCommandSender;
use jojoe77777\FormAPI;
class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "AdminMenuUI for BrandPE.");
    }	
    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "AdminMenuUI disabled.");
    }	
    public function onCommand(CommandSender $sender, Command $cmd, string $label,array $args) : bool {
	        switch($cmd->getName()){	
		        case "adminmenu":
		            if($sender->hasPermission("adminmenu.use"){		
				if($sender instanceof Player) {									
					$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");					
			                if($api === null || $api->isDisabled()){				
 				        }				
				        $form = $api->createSimpleForm(function (Player $sender, array $data){
				        $result = $data[0];				
				        if($result === null){					
				        }       
					        switch($result){							
					     	        case 0:														
	      						       $command = "menu";
							       $this->getServer()->getCommandMap()->dispatch($sender, $command);
							       break;								
						        case 1:
						 	       $command = "banui";
							       $this->getServer()->getCommandMap()->dispatch($sender, $command);	
							       break;
							case 2:
							       $command = "kickui";
							       $this->getServer()->getCommandMap()->dispatch($sender, $command);
							       break;
							case 3:
							       $command = "tpui";
							       $this->getServer->getCommandMap()->dispatch($sender, $command);
					        }					
					});					
					$form->setTitle("AdminMenu Screen");
					$form->setContent("Please choose your destination.");
					$form->addButton(TextFormat::BOLD . "Main Menu");
					$form->addButton(TextFormat::BOLD . "Ban");
					$form->addButton(TextFormat::BOLD . "Kick");
					$form->addButton(TextFOrmat::BOLD . "Teleport to a player");
					$form->sendToPlayer($sender);
					// END				
				}else{
				        $sender->sendMessage(TextFormat::RED . "use this command ingame mighty console wielder");
			s	}
			    }
		        case "tpui":       
				if($sender->hasPermission("tpui.use"){		
				if($sender instanceof Player) {									
					$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");					
			                if($api === null || $api->isDisabled()){				
 				        }				
				        $form = $api->createSimpleForm(function (Player $sender, array $data){
				        $result = $data[0];				
				        if($result === null){					
				        }       
					        switch($result){							
					     	        case 0:														
	      						       $command = "menu";
							       $this->getServer()->getCommandMap()->dispatch($sender, $command);
							       break;								
						        case 1:
						 	       $command = "tpui";
							       $this->getServer()->dispatchCommand($sender, trim(implode(" ", ["tp ".$result.""])));	
							       break;							
					        }					
					});					
					$form->setTitle("AdminMenu Screen");
					$form->setContent("Please choose your destination.");
					$form->addButton(TextFormat::BOLD . "Main Menu");
					$form->addInput("Who your teleporting to"); 
					$form->addButton(TextFormat::BOLD . "Ban");
					$form->addButton(TextFormat::BOLD . "Kick");
					$form->addButton(TextFOrmat::BOLD . "Teleport to a player");
					$form->sendToPlayer($sender);
					// END				
				}else{
				        $sender->sendMessage(TextFormat::RED . "use this command ingame mighty console wielder");
				}
			    }
			break;		
		}
		return true;
    }	
}
