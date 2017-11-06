<?php
namespace WarpUI;

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
        $this->getLogger()->info(TextFormat::GREEN . "WarpUI for CastleRaid.");
    }	
    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "WarpUI disabled.");
    }	
    public function onCommand(CommandSender $sender, Command $cmd, string $label,array $args) : bool {
		            switch($cmd->getName()){	
			                  case "warpme":
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
	      						                                           $this->getServer()->dispatchCommand(new ConsoleCommandSender, "tp " . $sender . " 0 0 0");					
								                                               break;								
							                                          case 1:
								// If tp {player} 0 0 0 is for op command use this so console will tp player

								$this->getServer()->dispatchCommand(new ConsoleCommandSender, "tp " . $sender . " 0 0 0");

								

								// If tp player is for everybody use this

								//$command1 = "tp {player} 0 0 0";

								//$this->getServer()->getCommandMap()->dispatch($sender, $command1};

								break;

							

						}

					

					});

					

					$form->setTitle("Warp Screen");

					$form->setContent("Please choose your destination.");

					$form->addButton(TextFormat::BOLD . "Shop");

					$form->addButton(TextFormat::BOLD . "PvP");	

					$form->sendToPlayer($sender);

					// END

					

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
