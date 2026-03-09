# AI-THEMES

## Rôle
Les thèmes pilotent la couche visuelle sans porter de logique métier.

## Structure officielle (v0.4)
```text
theme-name/
  theme.json
  templates/
  assets/
```

## Manifeste `theme.json`
Exemple :

```json
{
  "name": "henrion-theme-classic",
  "title": "Henrion Classic",
  "description": "Thème classique sobre pour les interfaces Henrion.",
  "version": "0.4.0",
  "author": "Henrion",
  "type": "theme",
  "extends": null,
  "henrion": {
    "min": "0.3.3",
    "max": "0.4.*"
  }
}
```

## Héritage
- `extends` peut cibler un thème parent unique.
- L'enfant surcharge les templates/assets du parent quand un même chemin existe.
- Les boucles d'héritage sont invalides.

## Neutralité technique
Le dépôt décrit des packages de thèmes et leur contrat marketplace, sans dépendre d'un moteur de template particulier.
