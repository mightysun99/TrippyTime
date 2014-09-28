<?php //Start of a php code

namespace mightysun99\TrippyTime; //namespace of the code

use pocketmine\command\Command; //Uses Pocketmine SRC Command
use pocketmine\command\CommandSender; //Uses Pocketmine SRC Command
use pocketmine\command\ConsoleCommandSender; //Uses Pocketmine SRC Command

class Main extends PluginBase{ //class

    public function onEnable(){  //function when plugin enable
        $this->getLogger()->info("TrippyTime has been enabled."); //sends message
    } 
    
    public function onDisable(){ //function when plugin disable
        $this->getLogger()->info("TrippyTime has been disabled."); //sends message
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){ //adds a functions
      case "TrippyTime": //adds the command line
        
