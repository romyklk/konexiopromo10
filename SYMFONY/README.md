# Installation de notre environnement de développement symfony

## Prérequis
Pour utiliser symfony 7 sur votre machine, vous devez avoir installé les logiciels suivants:

- php 8.2 ou supérieur (`php -v` pour vérifier la version installée). Pour installer php, suivez les instructions sur le site officiel: https://www.php.net/manual/fr/install.php
  
- composer 2.0 ou supérieur (`composer -v` pour vérifier la version installée).Pour installer composer, suivez les instructions sur le site officiel: https://getcomposer.org/download/

- symfony cli . Pour installer symfony cli, suivez les instructions sur le site officiel: https://symfony.com/download . Pour windows, vous devez installer scoop (https://scoop.sh/) avant d'installer symfony cli.

- git . Pour installer git, suivez les instructions sur le site officiel: https://git-scm.com/book/fr/v2/D%C3%A9marrage-rapide-Installation-de-Git

## Les extensions vscode

Pour faciliter le développement, nous allons installer les extensions suivantes:

- PHP Intelephense (https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
  
- PHP Dockblocker (https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker)
  
- PHP Namespace Resolver (https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver)
  
- Twig Language 2 (https://marketplace.visualstudio.com/items?itemName=mblode.twig-language-2)
  
- DotENV (https://marketplace.visualstudio.com/items?itemName=mikestead.dotenv)

## Présentaion de symfony

Symfony est un framework PHP open-source, libre et gratuit, écrit en PHP et publié sous licence MIT. Il est utilisé pour développer des applications web modulaires, basées sur des composants réutilisables.

Sur le site de symfony , il est écrit: `symfony est un ensemble de composants PHP réutilisables ...et un framework pour les projets web.`

Symfony est l'un des frameworks PHP les plus populaires. Il est utilisé par de nombreuses grandes entreprises comme BlaBlaCar, Spotify, ou encore Deezer,prestashop,Drupal et est utilisé par de nombreux développeurs indépendants.

Symfony est un framework MVC (Modèle-Vue-Contrôleur). Il est basé sur une architecture de composants, qui permet de développer des applications web modulaires et réutilisables. Il est également basé sur le principe de convention plutôt que configuration, ce qui permet de gagner du temps lors du développement.

C'est un framework qui est très bien documenté, et qui est maintenu par une grande communauté de développeurs. Il est également très bien supporté par les IDE, comme PhpStorm ou Visual Studio Code.

## Notion de microservice et monolithe

Symfony nous permet de développer une application monolithe. Un monolithe est une application qui contient toutes les fonctionnalités dans un seul et même projet. C'est le cas de la plupart des applications web, qui contiennent à la fois le front-end et le back-end.

Symfony nous permet également de développer une application microservice. Un microservice est une application qui est composée de plusieurs services, qui communiquent entre eux. Chaque service est indépendant, et peut être développé et déployé séparément. C'est le cas de certaines applications web, qui sont composées de plusieurs services, comme par exemple un service pour le front-end, un service pour le back-end, un service pour l'API, etc.

## Les composants symfony

Symfony est composé de plusieurs composants, qui peuvent être utilisés indépendamment du framework. Ces composants sont des briques de base, qui permettent de développer des applications web modulaires et réutilisables.

Un composant permet de réaliser une tâche spécifique, comme par exemple la gestion des sessions, la gestion des formulaires, la gestion des requêtes HTTP, etc.

Les composants symfony sont des bibliothèques PHP, qui peuvent être installées via composer. Ils sont disponibles sur le site officiel de symfony: https://symfony.com/components


## Plan de cours

- Introduction à symfony
- Installation de notre environnement de développement
- Création d'un projet symfony
- Architecture d'un projet symfony
- Les controllers(Routage, paramètres, redirections, réponses)
- Le moteur de template twig
- Mini projet: Création d'une application de gestion de contacts
- La couche de données (Doctrine)
- Les fixtures
- Les formulaires
- Le composant security
- Le composant mailer
- La mise en production

## Notre première application symfony

Pour créer notre première application symfony, nous allons utiliser la commande :

**WEBAPP** :
`symfony new nom_de_l_application --webapp`. Cette commande va créer une application symfony avec toutes les fonctionnalités activées.

**MICROSERVICE** :
`symfony new nom_de_l_application` . Cette commande va créer une application symfony avec les fonctionnalités minimales.

## Lancer notre application symfony

 Pour lancer notre application, on doit se placer dans le dossier de notre application, puis taper la commande `symfony serve` ou `symfony server:start`. Cette commande va lancer notre application symfony.



