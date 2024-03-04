<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard;

use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementCancan\Cancan;
use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol\VolerAvecDesAiles;

class Colvert extends Canard
{
    public function __construct(Cancan $comportementCancan, VolerAvecDesAiles $comportementVol)
    {
        parent::__construct($comportementCancan, $comportementVol);
    }

    public function afficher(): void
    {
        echo "Je suis un vrai colvert";
    }

    public function nager(): void
    {
        echo "Je nage comme un colvert";
    }
}
