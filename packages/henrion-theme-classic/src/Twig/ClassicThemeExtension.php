<?php

declare(strict_types=1);

/*
 * Créé le: 2026-03-09T01:36
 * Dernière modification: 2026-03-09T01:36
 */

namespace Henrion\Themes\Classic\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Extension Twig de présentation pour le thème Classic.
 *
 * Cette extension expose uniquement des helpers visuels légers,
 * sans logique métier applicative.
 */
final class ClassicThemeExtension extends AbstractExtension
{
    /**
     * Retourne les fonctions Twig exposées par le thème.
     *
     * @return array<int, TwigFunction>
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('classic_branding', [$this, 'classicBranding']),
        ];
    }

    /**
     * Fournit un libellé de branding pour l'entête du thème.
     */
    public function classicBranding(): string
    {
        return 'Henrion Classic';
    }
}
