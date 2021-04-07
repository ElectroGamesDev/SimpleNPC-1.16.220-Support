<?php

declare(strict_types=1);

namespace brokiem\snpc\entity\npc;

use brokiem\snpc\entity\BaseNPC;
use pocketmine\entity\Entity;

class ChickenNPC extends BaseNPC {

    public const SNPC_ENTITY_ID = Entity::CHICKEN;

    public $height = 0.7;
    public $width = 1;
}
