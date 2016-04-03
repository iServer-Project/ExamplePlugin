<?php

namespace ExamplePlugin;

use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;

class BroadcastPluginTask extends PluginTask{

	public function onRun($currentTick){
		Server::getInstance()->broadcastTip(C::GOLD."Welcome to ".C::AQUA."Diamond ".C::GREEN."Realms ".C::YELLOW."P".C::RED"E\n".C::GRAY."-=[ ".C::YELLOW.count($this->getServer()->getOnlinePlayers).C::WHITE. "/ "C::YELLOW.$this->getServer()->getMaxPlyers().C::GRAY." ]=-");
	}
}
