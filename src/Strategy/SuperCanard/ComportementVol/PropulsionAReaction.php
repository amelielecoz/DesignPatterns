<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol;

class PropulsionAReaction implements ComportementVol
{

    public function voler(): void
    {
        echo "Je vole avec un réacteur\n";
    }
}