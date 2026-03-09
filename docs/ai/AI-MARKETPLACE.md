# AI-MARKETPLACE

## Rôle
La marketplace publie un **catalogue de packages** de thèmes et permet l'installation one-click. Elle ne décrit pas le fonctionnement runtime interne des thèmes.

## Endpoint de référence
- Catalogue JSON : `public/index.json`
- Exposition HTTP attendue : `http://localhost:8083/index.json`

## Format officiel du catalogue
```json
{
  "name": "henrion-themes",
  "type": "marketplace",
  "version": "0.4.0",
  "repository": "Henrion-themes",
  "packages": [
    {
      "name": "henrion-theme-classic",
      "type": "theme",
      "version": "0.4.0",
      "checksum": "sha256:...",
      "size": 791,
      "henrion": {
        "min": "0.3.5.2",
        "max": "0.4.*"
      },
      "path": "packages/henrion-theme-classic"
    }
  ]
}
```

## Règles de validation
- Clés en anglais uniquement.
- JSON strict valide.
- `size` numérique (octets).
- `checksum` au format `sha256:<64_hex>`.
- `path` relatif à la racine HTTP de la marketplace.

## Séparation des responsabilités
- **Marketplace** : publication, indexation, installation des packages.
- **Core Henrion** : validation de `theme.json`, compatibilité, dépendances, héritage, Twig.
