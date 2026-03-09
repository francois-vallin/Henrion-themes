# AI-CONVENTIONS

## Conventions générales
- Nommage des thèmes : `kebab-case`.
- Manifestes et catalogues : JSON valide, lisible, indenté à 2 espaces.
- Versions : SemVer (`MAJOR.MINOR.PATCH`).

## Conventions thèmes
- Un thème est contenu dans `packages/<theme-name>/`.
- Fichier manifeste : `theme.json` (source de vérité runtime).
- Rendu HTML : Twig uniquement (aucune vue PHP).
- Templates dans `templates/`, assets dans `assets/`, extension Twig optionnelle dans `src/`.
- Le champ `type` d'un thème doit valoir `theme`.
- Les champs `roles` et `henrion` sont obligatoires.
- `roles` ne peut pas être vide et n'accepte que `public` et/ou `admin`.

## Conventions marketplace
- Le catalogue est publié via `public/index.json`.
- Chaque package thème déclare au minimum :
  - `name`, `type`, `version`, `checksum`, `size`, `henrion.min`, `henrion.max`, `path`
- Le catalogue est un index de distribution : il ne remplace jamais le manifeste local `theme.json`.

## Conventions de compatibilité
- Compatibilité thèmes via bornes Henrion (`henrion.min`, `henrion.max`).
- À partir de la logique v0.3.5.2 de ce dépôt :
  - `henrion.min >= 0.3.5.2`
  - cible recommandée : `henrion.max = 0.4.*`
