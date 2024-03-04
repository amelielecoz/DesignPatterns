<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol;

class VolerAvecDesAiles implements ComportementVol
{
    public function voler(): void
    {
        echo "Je vole avec des ailes\n";
    }
}