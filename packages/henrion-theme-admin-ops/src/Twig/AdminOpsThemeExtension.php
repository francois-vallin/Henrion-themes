<?php

declare(strict_types=1);

/*
 * Créé le: 2026-03-09T03:03
 * Dernière modification: 2026-03-09T03:03
 */

namespace Henrion\Themes\AdminOps\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Extension Twig de présentation pour le thème admin Ops.
 */
final class AdminOpsThemeExtension extends AbstractExtension
{
    /**
     * @return array<int, TwigFilter>
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('ops_counter', [$this, 'opsCounter']),
        ];
    }

    public function opsCounter(int $value): string
    {
        return sprintf('Ops: %d', $value);
    }
}
