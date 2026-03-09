# AI-THEMES

## Rôle
Les thèmes Henrion encapsulent la couche visuelle Twig et exposent un manifeste local `theme.json` consommé par le core au runtime.

## Architecture officielle
Le modèle de publication/exécution est organisé en trois niveaux :

1. **Marketplace** : catalogue des packages publiés.
2. **Package thème** : dossier distribué contenant code, templates et assets.
3. **Manifest thème** (`theme.json`) : source de vérité runtime pour le core.

> Le core Henrion lit `theme.json` dans le thème installé. Le catalogue marketplace n'est pas la source de vérité runtime.

## Structure minimale d'un package thème
```text
theme-name/
  theme.json
  templates/
  assets/
  src/
  README.md
```

## Format officiel de `theme.json`
```json
{
  "name": "henrion-theme-dashboard",
  "title": "Henrion Dashboard",
  "description": "Thème minimal du panneau d'administration",
  "type": "theme",
  "version": "0.4.0",
  "roles": ["admin"],
  "parent": null,
  "requires": [],
  "regions": ["header", "content", "sidebar", "footer"],
  "twig": {
    "extension": "src/Twig/DashboardThemeExtension.php"
  },
  "henrion": {
    "min": "0.3.5.2",
    "max": "0.4.*"
  }
}
```

### Champs obligatoires
- `name`
- `title`
- `description`
- `type`
- `version`
- `roles`
- `henrion`

### Contraintes clés
- `type` doit valoir `theme`.
- `roles` ne peut pas être vide.
- Rôles autorisés : `public`, `admin`.

### Champs importants
- `parent` : héritage de thème.
- `requires` : dépendances entre thèmes.
- `regions` : régions de layout.
- `twig.extension` : extension Twig chargée dynamiquement par le core.

## Rôles attendus côté runtime
- Henrion doit disposer d'un thème actif `public`.
- Henrion doit disposer d'un thème actif `admin`.
- Le dépôt de référence fournit :
  - `henrion-theme-classic` (`public`)
  - `henrion-theme-dashboard` (`admin`)

## Héritage
- Résolution : `enfant -> parent -> parent du parent`.
- Le parent doit exister dans les thèmes installés.
- Les boucles d'héritage sont interdites.
- Les templates et assets de l'enfant surchargent ceux du parent.

## Compatibilité Henrion
- Les thèmes de ce dépôt ciblent Henrion `>= 0.3.5.2`.
- Borne haute recommandée : `0.4.*`.
