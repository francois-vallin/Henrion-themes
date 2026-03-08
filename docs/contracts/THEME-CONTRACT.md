# THEME-CONTRACT

## Portée
Contrat officiel des thèmes Henrion à partir de la v0.3.0.

## Structure obligatoire
```text
theme-name/
  theme.json
  templates/
  assets/
```

## Manifeste (`theme.json`)
Champs requis :
- `name` (string)
- `title` (string)
- `version` (semver)
- `author` (string)
- `type` = `theme`
- `henrion.min` / `henrion.max`

## Rendu
- Les templates sont résolus via `ThemeManager` + `ViewRenderer`.
- Le thème ne doit pas embarquer de logique métier.
