# AI-CONVENTIONS

## Conventions générales
- Langage principal : PHP 8+ avec `declare(strict_types=1);`.
- Nommage des classes : `PascalCase`.
- Nommage des services et variables : `camelCase`.
- Nommage des plugins/thèmes : `kebab-case`.

## Conventions plugins
- Un plugin est contenu dans `plugins/<plugin-name>/`.
- Fichiers d'entrée standard : `plugin.json`, `<plugin-name>.php`, `routes.php`, `menu.php`.
- Le bootstrap plugin renvoie idéalement un callable.
- Les routes sont un tableau de triplets `[METHOD, PATH, HANDLER]`.

## Conventions thèmes
- Un thème est contenu dans `themes/<theme-name>/`.
- Fichier manifeste : `theme.json`.
- Templates dans `templates/`, assets dans `assets/`.

## Conventions runtime
- Plugins actifs : `storage/app/plugins.json`.
- Thème actif : `storage/app/themes.json`.
- Données métiers JSON : `storage/data/`.
- Logs : `storage/logs/`.

## Conventions de version
- Version moteur : SemVer (`MAJOR.MINOR.PATCH`).
- Compatibilité plugin/thème déclarée via bornes Henrion (`henrion.min`, `henrion.max`).
- La v0.3.0 formalise les contrats sans changement métier.
