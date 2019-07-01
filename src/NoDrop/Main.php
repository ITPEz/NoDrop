<?php

namespace NoDrop;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;

class Main extends PluginBase implements Listener
{
  public function onEnable()
  {
    $this->getServer()->loadLevel("SafeZone");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDrop(PlayerDropItemEvent $ev)
  {
    $pl = $ev->getPlayer();
    if ($pl->getLevel()->getName() == "SafeZone") {
      $ev->setCancelled();
    }
  }
}
