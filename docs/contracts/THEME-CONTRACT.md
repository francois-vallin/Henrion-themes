# THEME-CONTRACT

## Portée
Contrat officiel d'un package thème Henrion et de son manifeste `theme.json`, consommé directement par le core au runtime.

## Structure minimale obligatoire
```text
theme-name/
  theme.json
  templates/
  assets/
  src/
  README.md
```

## Moteur de rendu
- Twig est l'unique moteur de rendu.
- Aucune vue PHP n'est autorisée.

## Manifest `theme.json`

### Champs obligatoires
- `name` (string, kebab-case)
- `title` (string)
- `description` (string)
- `type` (valeur stricte `theme`)
- `version` (semver)
- `roles` (array non vide)
- `henrion.min` (string)
- `henrion.max` (string, wildcard autorisé)

### Champs importants
- `parent` (string ou `null`)
- `requires` (array de dépendances de thèmes)
- `regions` (array de strings)
- `twig.extension` (string, chemin relatif vers la classe d'extension Twig)

### Contraintes `roles`
- Valeurs autorisées : `public`, `admin`.
- Un thème doit déclarer au moins un rôle.

### Exemple normatif
```json
{
  "name": "henrion-theme-dashboard",
  "title": "Henrion Dashboard",
  "description": "Thème minimal du panneau d'administration",
  "type": "theme",
  "version": "0.4.0",
  "roles": ["admin"],
  "parent": null,
  "requires": [],
  "regions": ["header", "content", "sidebar", "footer"],
  "twig": {
    "extension": "src/Twig/DashboardThemeExtension.php"
  },
  "henrion": {
    "min": "0.3.5.2",
    "max": "0.4.*"
  }
}
```

## Héritage
- Le parent déclaré dans `parent` doit exister.
- Les boucles d'héritage sont interdites.
- Résolution attendue : enfant puis chaîne des parents.
- Les templates/assets de l'enfant prévalent sur le parent.

## Dépendances
- Les thèmes requis via `requires` doivent être installés pour permettre l'activation.

## Responsabilités du core
Le core Henrion doit :
- scanner les thèmes installés ;
- lire `theme.json` ;
- valider compatibilité, rôles, dépendances, héritage et extension Twig ;
- charger templates, assets et extensions Twig.
