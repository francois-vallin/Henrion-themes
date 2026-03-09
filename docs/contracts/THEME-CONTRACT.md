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

## Manifest `theme.json`

### Champs obligatoires
- `name` (string, kebab-case)
- `title` (string)
- `description` (string)
- `type` (valeur stricte `theme`)
- `version` (semver)
- `henrion.min` (string)
- `henrion.max` (string, wildcard autorisé)

### Champs importants
- `parent` (string ou `null`)
- `regions` (array de strings)
- `twig.extension` (string, chemin relatif vers la classe d'extension Twig)

### Exemple normatif
```json
{
  "name": "henrion-theme-classic",
  "title": "Henrion Classic",
  "description": "Thème classique Henrion",
  "type": "theme",
  "version": "0.4.0",
  "parent": null,
  "regions": ["header", "content", "sidebar", "footer"],
  "twig": {
    "extension": "src/Twig/ClassicThemeExtension.php"
  },
  "henrion": {
    "min": "0.3.5.1",
    "max": "0.4.*"
  }
}
```

## Héritage
- Le parent déclaré dans `parent` doit exister.
- Les boucles d'héritage sont interdites.
- Résolution attendue : enfant puis chaîne des parents.
- Les templates/assets de l'enfant prévalent sur le parent.

## Responsabilités du core
Le core Henrion doit :
- scanner les thèmes installés ;
- lire `theme.json` ;
- valider compatibilité, héritage et extension Twig ;
- charger templates, assets et extensions Twig.
