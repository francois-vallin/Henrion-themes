# THEME-CONTRACT

## Portée
Contrat officiel des thèmes Henrion pour la logique v0.4, compatible à partir de Henrion `0.3.3`.

## Structure minimale obligatoire
```text
theme-name/
  theme.json
  templates/
  assets/
```

- `theme.json` décrit le manifeste du thème.
- `templates/` contient les fichiers de templates du thème (convention neutre recommandée : `.view`).
- `assets/` contient les ressources statiques du thème (CSS, JS, polices, fichiers texte, etc.).

## Manifeste (`theme.json`)

### Champs requis
- `name` (string, kebab-case)
- `title` (string)
- `description` (string)
- `version` (semver)
- `author` (string)
- `type` (`theme`)
- `extends` (string ou `null`)
- `henrion.min` (string semver)
- `henrion.max` (string semver ou wildcard)

### Compatibilité Henrion
- `henrion.min` doit être `0.3.3` ou supérieur.
- Pour les thèmes de ce dépôt v0.4, la borne cible est :
  - `henrion.min = 0.3.3`
  - `henrion.max = 0.4.*`

## Héritage de thèmes (`extends`)

Un thème peut déclarer un parent via `extends`.

### Règles de validité
- Un seul parent est autorisé.
- Si `extends` est renseigné, le thème parent doit exister dans le catalogue/installation.
- Les boucles d'héritage sont interdites (`A -> B -> A`, etc.).

### Résolution parent/enfant
- Les templates sont cherchés d'abord dans le thème enfant, puis dans le parent.
- Les assets suivent la même logique : enfant prioritaire, parent en repli.
- Les métadonnées du manifeste enfant prévalent sur celles du parent, sauf politique spécifique du consommateur.

## Contraintes d'intégrité
- Le manifeste doit être un JSON valide.
- Le champ `type` doit être strictement `theme`.
- Le dépôt ne définit aucun moteur de rendu : il documente uniquement la structure de package et le contrat d'échange.
