# AI-MARKETPLACE

## Rôle
La marketplace publie un **catalogue de packages** de thèmes. Elle ne décrit pas le fonctionnement interne runtime des thèmes.

## Endpoint de référence
- Catalogue JSON : `public/index.json`
- Exemple d'exposition HTTP : `http://localhost:8083/index.json`

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
        "min": "0.3.3",
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
- **Marketplace** : publication, indexation et distribution des packages.
- **Core Henrion** : lecture/validation du `theme.json`, héritage, Twig, templates et assets.
