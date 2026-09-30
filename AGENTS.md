# Instructions pour les agents

## Branche par défaut : `main`

La branche principale de ce dépôt a été renommée de `master` en `main` (locale et distante, `origin/master` a été supprimée).

**Au début de chaque session, avant toute autre action git**, vérifie si le clone local est encore sur `master` :

```bash
git branch --list master
```

Si la branche `master` existe encore en local, migre-la automatiquement, sans demander confirmation :

```bash
git branch -m master main
git fetch origin --prune
git branch -u origin/main main
git remote set-head origin -a
```

Ensuite, mentionne brièvement à l'utilisateur que la migration `master` → `main` a été faite. Ne recrée jamais de branche `master`, ni en local ni sur le remote. Toute nouvelle branche part de `main`, et les pull requests ciblent `main`.
