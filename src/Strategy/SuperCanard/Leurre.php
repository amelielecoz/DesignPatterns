<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard;

use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementCancan\CanardMuet;
use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol\VolerAvecDesAiles;

class Leurre extends Canard
{
    public function __construct(CanardMuet $comportementCancan, VolerAvecDesAiles $comportementVol)
    {
        parent::__construct($comportementCancan, $comportementVol);
    }

    public function afficher(): void
    {
        echo "Je suis un leurre";
    }

    public function nager(): void
    {
        echo "Tous les canards flottent, même les leurres!";
    }
}
