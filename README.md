# La boîte à outils qu'on n'a plus besoin de réinventer

Lightning talk (5 minutes) pour le **Forum PHP 2026** — la suite de bundles Symfony
d'Aropixel : une toolbox éprouvée, utilisée sur tous nos projets, et prête pour les
agents IA. Propulsé par [Slidev](https://sli.dev), avec un thème custom aux couleurs
d'[aropixel.com](https://aropixel.com) (couleur d'accent `#56f1c5`, Space Grotesk +
Inter).

Pour lancer le diaporama :

```bash
npm install
npm run dev
```

Puis ouvrir <http://localhost:3030>. Le mode présentateur (avec les notes orateur) est
sur <http://localhost:3030/presenter/>.

Pour exporter en PDF :

```bash
npm run export
```

## Structure

- `slides.md` — tout le contenu. Les notes orateur sont entre `<!-- -->` sous chaque
  slide.
- `aropixel/` — thème custom (calqué sur le principe du thème JoliCode utilisé pour les
  confs AFUP) : couleurs, typographies et layouts (`cover`, `statement`) repris de la
  charte aropixel.com.
- `assets/` — captures réelles de l'AdminBundle (catalogue de composants, color picker,
  édition de collection), réutilisées depuis `doc/assets/` du dépôt `admin-bundle`.
- `public/logo-aropixel.svg` — logo, extrait du header d'aropixel.com.

## Timing

9 slides pour 5 minutes chrono — environ 30 à 35 secondes par slide en moyenne, avec
plus de marge sur la slide « IA-ready » qui porte le message central du talk (l'anecdote
des 3 bugs trouvés et corrigés par un agent cette semaine, via `castor
aropixel:contrib:admin`).

À adapter avant de monter sur scène : le nom du speaker (`Antoine — Aropixel` en slide
de couverture) et le lien de contact final si besoin.
