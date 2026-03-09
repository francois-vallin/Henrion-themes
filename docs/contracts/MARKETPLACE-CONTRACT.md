# MARKETPLACE-CONTRACT

## Portée
Contrat de publication/consommation du catalogue marketplace de ce dépôt de thèmes (logique v0.4).

## Structure du catalogue
Le catalogue est un JSON exposé via `public/index.json` avec la structure suivante :

- `name` (string)
- `type` (`marketplace`)
- `version` (semver)
- `repository` (string)
- `packages` (array)

## Entrées `packages`
Chaque entrée de `packages` doit représenter un package de thème et inclure :

- `name` (string)
- `type` (doit valoir `theme`)
- `version` (semver)
- `checksum` (string)
- `size` (integer, en octets)
- `henrion.min` (string)
- `henrion.max` (string)

Au moins un champ d'accès au package est obligatoire :
- `path` (chemin local/référentiel), ou
- `download` (URL de téléchargement)

## Compatibilité Henrion
- Compatibilité minimale attendue : `henrion.min = 0.3.3`.
- Pour les packages publiés dans ce dépôt v0.4, la borne haute cible est `henrion.max = 0.4.*`.

## Règles spécifiques à ce dépôt
- Ce catalogue est dédié aux thèmes (`type = theme`).
- Aucune donnée de preview/screenshot n'est publiée à ce stade.
- Le dépôt décrit des packages de thèmes et leur contrat marketplace, sans imposer de dépendance à une technologie de rendu spécifique.
