<?php

declare(strict_types=1);

/*
 * Créé le: 2026-03-09T03:03
 * Dernière modification: 2026-03-09T03:03
 */

namespace Henrion\Themes\PublicAurora\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Extension Twig de présentation pour le thème public Aurora.
 */
final class PublicAuroraThemeExtension extends AbstractExtension
{
    /**
     * @return array<int, TwigFunction>
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('aurora_tagline', [$this, 'auroraTagline']),
        ];
    }

    public function auroraTagline(): string
    {
        return 'Conçu pour une expérience publique fluide.';
    }
}
