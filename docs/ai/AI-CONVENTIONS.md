# AI-CONVENTIONS

## Conventions générales
- Nommage des thèmes : `kebab-case`.
- Manifestes et catalogues : JSON valide, lisible, indenté à 2 espaces.
- Versions : SemVer (`MAJOR.MINOR.PATCH`).

## Conventions thèmes
- Un thème est contenu dans `packages/<theme-name>/`.
- Fichier manifeste : `theme.json`.
- Templates dans `templates/`, assets dans `assets/`.
- Le champ `type` d'un thème doit valoir `theme`.

## Conventions marketplace
- Le catalogue est publié via `public/index.json`.
- Chaque package thème déclare au minimum :
  - `name`, `type`, `version`, `checksum`, `size`, `henrion.min`, `henrion.max`
  - un accès package (`path` ou `download`)

## Conventions de compatibilité
- Compatibilité thèmes via bornes Henrion (`henrion.min`, `henrion.max`).
- À partir de la logique v0.4 de ce dépôt :
  - `henrion.min >= 0.3.3`
  - cible recommandée : `henrion.max = 0.4.*`
