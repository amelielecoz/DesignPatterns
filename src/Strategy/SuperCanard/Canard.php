<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard;

use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementCancan\ComportementCancan;
use Amelielecoz\DesignPatterns\Strategy\SuperCanard\ComportementVol\ComportementVol;

class Canard
{
    private ComportementCancan $comportementCancan;
    private ComportementVol $comportementVol;

    public function __construct(
        ComportementCancan $comportementCancan,
        ComportementVol $comportementVol
    ){
        $this->comportementCancan = $comportementCancan;
        $this->comportementVol = $comportementVol;
    }

    public function afficher(): void
    {
        echo "Je suis un canard en plastique";
    }

    public function effectuerCancan(): void
    {
        $this->comportementCancan->cancaner();
    }

    public function effectuerVol(): void
    {
        $this->comportementVol->voler();
    }

    public function nager(): void
    {
        echo "Tous les canards flottent, même les leurres!";
    }

    public function setComportementCancan(ComportementCancan $comportementCancan): void
    {
        $this->comportementCancan = $comportementCancan;
    }

    public function setComportementVol(ComportementVol $comportementVol): void
    {
        $this->comportementVol = $comportementVol;
    }
}