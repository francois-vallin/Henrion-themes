<?php

declare(strict_types=1);

/*
 * Créé le: 2026-03-09T01:36
 * Dernière modification: 2026-03-09T01:36
 */

namespace Henrion\Themes\ClassicChild\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigTest;

/**
 * Extension Twig de présentation pour le thème enfant Classic.
 */
final class ClassicChildThemeExtension extends AbstractExtension
{
    /**
     * Déclare les tests Twig utilisables dans les templates du thème.
     *
     * @return array<int, TwigTest>
     */
    public function getTests(): array
    {
        return [
            new TwigTest('hero_title', [$this, 'isHeroTitle']),
        ];
    }

    /**
     * Vérifie qu'un titre est compatible avec le style hero du thème enfant.
     */
    public function isHeroTitle(string $value): bool
    {
        return mb_strlen(trim($value)) <= 40;
    }
}
