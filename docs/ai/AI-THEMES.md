# AI-THEMES

## Rôle
Les thèmes pilotent le rendu visuel sans porter de logique métier.

## Structure officielle (v0.3.0)
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
  "version": "0.3.0",
  "author": "François Vallin",
  "type": "theme",
  "henrion": {
    "min": "0.3.0",
    "max": "0.3.x"
  }
}
```

## Activation
- Le thème actif est stocké dans `storage/app/themes.json`.
- La résolution de template passe par `ThemeManager` + `ViewRenderer`.

## Préparation v0.4.0
Même stratégie que pour les plugins : conservation dans le dépôt moteur en v0.3.0, externalisation vers `henrion-theme-*` en v0.4.0.
