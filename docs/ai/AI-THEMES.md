# AI-THEMES

## Rôle
Les thèmes Henrion encapsulent la couche visuelle et exposent un manifeste local `theme.json` consommé par le core au runtime.

## Architecture officielle
Le modèle de publication/exécution est organisé en trois niveaux :

1. **Marketplace** : catalogue des packages publiés.
2. **Package thème** : dossier distribué contenant code, templates et assets.
3. **Manifest thème** (`theme.json`) : source de vérité runtime pour le core.

> Le core Henrion doit lire le manifeste du thème installé. Le catalogue marketplace n'est pas la source de vérité runtime.

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
  "name": "henrion-theme-classic",
  "title": "Henrion Classic",
  "description": "Thème classique Henrion",
  "type": "theme",
  "version": "0.4.0",
  "parent": null,
  "regions": ["header", "content", "sidebar", "footer"],
  "twig": {
    "extension": "src/Twig/ClassicThemeExtension.php"
  },
  "henrion": {
    "min": "0.3.5.1",
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
- `henrion`

### Champs importants
- `parent` : héritage de thème.
- `regions` : régions de layout.
- `twig.extension` : extension Twig chargée dynamiquement par le core.

## Héritage
- Résolution : `enfant -> parent -> parent du parent`.
- Le parent doit exister dans les thèmes installés.
- Les boucles d'héritage sont interdites.
- Les templates et assets de l'enfant surchargent ceux du parent.

## Compatibilité Henrion
- Les thèmes de ce dépôt ciblent Henrion `>= 0.3.5.1`.
- Borne haute recommandée : `0.4.*`.
