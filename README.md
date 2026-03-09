# Henrion-themes

Dépôt officiel des thèmes de référence Henrion et du catalogue marketplace associé.

## Architecture cible
Le système de thèmes est unifié autour de trois briques :

1. **Catalogue marketplace** (`public/index.json`) : index des packages publiés.
2. **Package thème** (`packages/<theme-name>/`) : contenu distribuable.
3. **Manifest thème** (`theme.json`) : source de vérité runtime consommée par le core Henrion.

## Règle principale
La marketplace n'est pas la source de vérité runtime.
Le core Henrion doit lire et valider le `theme.json` de chaque thème installé.

## Structure d'un package thème
```text
packages/henrion-theme-*/
  theme.json
  templates/
  assets/
  src/
  README.md
```

## Documentation
- `docs/ai/AI-CONVENTIONS.md`
- `docs/ai/AI-THEMES.md`
- `docs/ai/AI-MARKETPLACE.md`
- `docs/contracts/THEME-CONTRACT.md`
- `docs/contracts/MARKETPLACE-CONTRACT.md`
