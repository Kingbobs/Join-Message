<?php

namespace Kingbobs\JoinMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("JoinMessage Plugin");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onJoin(PlayerJoinEvent $event)
    {
       $player = $event->getPlayer();
       $name = $player->getName();
    $event->setJoinMessage("\n\n§eWelcome To This Amazing Server§6 " . $name . "§e Have Fun\n\n");

    }
    public function onQuit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        if ($player->isOP()){
            $event->setQuitMessage("\n\n§4server §6>§2> §r" . $name . "Im Sorry To See You Go!\n\n");
        } else 
        $event->setQuitMessage("\n\n§4server §6>§2> §r" . $name . "We WIll Miss You!!\n\n"); 
        }
    }
}
