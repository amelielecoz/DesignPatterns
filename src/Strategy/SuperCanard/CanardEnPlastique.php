<?php

namespace Amelielecoz\DesignPatterns\Strategy\SuperCanard;

class CanardEnPlastique extends Canard
{
    public function afficher(): void
    {
        echo "Je suis un canard en plastique";
    }

    public function nager(): void
    {
        echo "Je flotte";
    }
}