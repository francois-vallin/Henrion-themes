# MARKETPLACE-CONTRACT

## Portée
Contrat de publication/consommation des packages marketplace.

## Catalogue
- Un index JSON expose la liste des packages.
- Chaque package déclare : nom, type, version, compatibilité Henrion.

## Types supportés
- `plugin`
- `theme`

## Compatibilité
Chaque package doit déclarer un bloc `henrion` :
- `min`
- `max`

## Stratégie v0.3.0
Le contrat est formalisé, sans éclatement des dépôts. L'éclatement est réservé à v0.4.0.
