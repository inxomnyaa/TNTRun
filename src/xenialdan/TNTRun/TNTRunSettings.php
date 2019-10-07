<?php

namespace xenialdan\TNTRun;

use pocketmine\Player;
use xenialdan\gameapi\DefaultSettings;

class TNTRunSettings extends DefaultSettings
{
    public $gamemode = Player::ADVENTURE;
    public $noDamageTeam = true;
    public $noEnvironmentDamage = true;
    public $clearInventory = true;
    public $noBlockDrops = true;
    public $immutableWorld = true;
    public $noBreak = true;
    public $noBuild = true;
    public $noBed = true;
    public $noPickup = true;
    public $startNoWalk = false;
    public $noDropItem = true;
    public $noDamageEntities = true;
    public $noDamageEnemies = true;
    public $noFallDamage = true;
    public $noExplosionDamage = true;
    public $noDrowningDamage = true;
    public $noInventoryEditing = true;
    /** @var int */
    public $maxPlayers = 16;
}