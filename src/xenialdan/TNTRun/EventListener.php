<?php

namespace xenialdan\TNTRun;

use pocketmine\block\BlockIds;
use pocketmine\block\TNT;
use pocketmine\event\entity\EntityExplodeEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use xenialdan\gameapi\API;
use xenialdan\gameapi\Arena;

/**
 * Class EventListener
 * @package xenialdan\TNTRun
 * Primes TNT blocks
 */
class EventListener implements Listener
{

    public function onMove(PlayerMoveEvent $ev)
    {
        if (API::isArenaOf(Loader::getInstance(), ($player = $ev->getPlayer())->getLevel()) && API::isPlaying($player, Loader::getInstance())) {
            $arena = API::getArenaByLevel(Loader::getInstance(), $player->getLevel());
            if ($arena->state === Arena::INGAME) {
                if ($ev->getFrom()->floor()->equals($ev->getTo()->floor())) {
                    $pos1 = $ev->getFrom()->floor()->subtract(0, 1);
                    $pos2 = $ev->getFrom()->subtract(0, 1.5)->floor();
                    $blockP1 = $ev->getFrom()->getLevel()->getBlock($pos1);
                    $blockP2 = $ev->getFrom()->getLevel()->getBlock($pos2);
                    if ($blockP1->getId() === BlockIds::TNT) {
                        /** @var TNT $blockP1 */
                        $blockP1->ignite(30);
                    }
                    if ($blockP2->getId() === BlockIds::TNT) {
                        /** @var TNT $blockP2 */
                        $blockP2->ignite(30);
                    }
                }
            }
        }
    }

    public function onExplode(EntityExplodeEvent $ev)
    {
        if (API::isArenaOf(Loader::getInstance(), $ev->getEntity()->getLevel())) {
            $ev->setBlockList([]);
            $ev->setCancelled();
        }
    }
}