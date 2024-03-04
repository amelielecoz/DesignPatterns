<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol;

class NePasVoler implements ComportementVol
{
    public function voler(): void
    {
        echo "Je ne vole pas\n";
    }
}