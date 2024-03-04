<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard;

require_once 'vendor/autoload.php';

use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol\PropulsionAReaction;
use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol\VolerAvecDesAiles;

class MiniSimulateur
{
    public function __invoke(): void
    {
        $prototype = new PrototypeCanard();
        $prototype->afficher();
        $prototype->effectuerCancan();
        $prototype->effectuerVol();
        echo "\n";

        $prototype->setComportementVol(new VolerAvecDesAiles());
        $prototype->effectuerVol();
        $prototype->setComportementVol(new PropulsionAReaction());
        $prototype->effectuerVol();
        echo "\n";
    }
}

$simulateur = new MiniSimulateur();
$simulateur();