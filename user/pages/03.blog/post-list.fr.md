---
title: Accueil
class: home

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.descendants
    order:
        by: date
        dir: desc
    limit: 20
    pagination: true

feed:
    description: Titre Flux RSS
    limit: 10
---

