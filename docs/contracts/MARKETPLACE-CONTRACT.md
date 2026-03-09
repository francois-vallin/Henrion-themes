# MARKETPLACE-CONTRACT

## Portée
Contrat officiel du catalogue marketplace publié par le dépôt `Henrion-themes`.

## Structure du catalogue
Le catalogue est exposé via `public/index.json`.

Champs racine :
- `name` (string)
- `type` (valeur stricte `marketplace`)
- `version` (semver)
- `repository` (string)
- `packages` (array)

## Structure d'une entrée `packages`
Champs requis :
- `name` (string)
- `type` (valeur stricte `theme`)
- `version` (semver)
- `checksum` (`sha256:<64_hex>`)
- `size` (integer, octets)
- `henrion.min` (string, `>= 0.3.5.2` pour ce dépôt)
- `henrion.max` (string)
- `path` (chemin relatif à la racine HTTP du catalogue)

## Règles
- Le catalogue décrit uniquement des **packages**.
- Le runtime ne doit pas dépendre du catalogue pour exécuter un thème.
- La source de vérité runtime reste le `theme.json` local de chaque thème installé.
- Le consommateur doit vérifier récupération JSON, validité JSON et compatibilité de package.
