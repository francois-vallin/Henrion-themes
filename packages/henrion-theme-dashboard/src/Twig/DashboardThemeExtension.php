<?php

declare(strict_types=1);

/*
 * Créé le: 2026-03-09T01:36
 * Dernière modification: 2026-03-09T01:36
 */

namespace Henrion\Themes\Dashboard\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Extension Twig de présentation pour le thème Dashboard.
 */
final class DashboardThemeExtension extends AbstractExtension
{
    /**
     * Retourne les filtres Twig exposés par le thème.
     *
     * @return array<int, TwigFilter>
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('dashboard_badge', [$this, 'dashboardBadge']),
        ];
    }

    /**
     * Formate un label court pour un badge visuel de tableau de bord.
     */
    public function dashboardBadge(string $label): string
    {
        return '[' . strtoupper($label) . ']';
    }
}
