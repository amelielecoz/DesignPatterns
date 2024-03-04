<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard;

use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementCancan\Coincoin;
use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol\NePasVoler;

class PrototypeCanard extends Canard
{
    public function __construct()
    {
        parent::__construct(new Coincoin(), new NePasVoler());
    }

    public function afficher(): void
    {
        echo "Je suis un prototype de canard\n";
    }
}
