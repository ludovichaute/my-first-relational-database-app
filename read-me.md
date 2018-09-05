# MY FIRST RELATIONAL DATABASE APP
 © 2018 Becode Corporation.  All rights reserved.

## Consigne principale

Coder une web application qui réponde aux besoins et envies de Jean-Christian à savoir : gérer ses contacts, ses fournisseurs, ses clients et ses factures via son navigateur. (Ainsi il pourra travailler même de chez lui et s'adonner au télé-travail.)

## Objectifs 


- "jolis urls": utiliser des paramètres URL et des noms de fichiers différents (chercher "tutorial pretty url php htaccess")
- Bien utiliser la sanitization pour éviter les injections SQL dans votre DB (un esprit malveillant pourrait tenter de delete l'intégralité de votre DB)
- Valider les données afin que Ranu n'encode pas n'importe quoi
- Contruire une base de données relationnelles fonctionnelle
- utiliser des jointures correctes en SQL
- Utiliser des alias dans vos requêtes SQL
- Implémenter un CRUD :
   - réaliser une interface qui permette de lire des données
   - réaliser une interface qui permette d'ajouter des données
   - réaliser une interface qui permette de modifier des données
   - réaliser une interface qui permette de supprimer des données
- Crypter le mot de passe dans la base de données (il ne doit pas apparaître en clair)
- Utiliser la structure MVC pour organiser vos fichiers et les fonctionnalités
- Utiliser un *router*
- Mettre en place des variables de session en php
- Permettre ou non l'accès à certaines pages en fonction des permissions stockées dans la session de l'utilisateur

N'oubliez pas de mettre le fichier SQL permettant de recréer la structure et les données dans votre repo.

## Les données dont Jean-Christian a besoin

**Absolument et non négociable** : les données relatives aux personnes, sociétés et factures.

Pour les personnes, il nous faudra :  

- le nom
- le prénom
- le téléphone
- l'adresse e-mail

Pour les sociétés :  

- désignation sociale de la société (son nom)
- l'adresse de la société
- le pays
- le n° de TVA
- le n° de téléphone

Pour les factures  :  

- le numéro de la facture
- la date de la facture
- objet (= motif de la prestation)

Pour le type (d'entreprises)
- le type.

**Notes**

- Concernant les relations entre les tables, il faudra :
  - societes --- type
  - societes --- factures
  - personnes --- factures
  - personnes --- societes



## Liste des objectifs d'apprentissage obligatoires

Chaque membre du groupe doit faire au moins ceci :  

1. **backend dev : modélisation conceptuelle des données**  
Évaluation : schéma visuel de la BD relationnelle présent dans le readme (utiliser mysqlWorkbench ou https://www.quickdatabasediagrams.com)

!("/views/dbchrichri.png/")

2. **backend dev : éviter les injections SQL**  
Évaluation : les scripts php traitant les formulaires empêchent l'injection SQL d'être potentiellement exécutée.

3. **backend dev : validation des formulaires**  
Évaluation : chaque controleur d'ajout/edition/effacement implémente la séquence sanitiser / valider / exécuter / afficher.

4. **backend dev : CRUD**  
Évaluation : chaque apprenant•e réalise le CRUD d'un des composants de l'application.

5. **backend dev : MVC**  
Évaluation : l'application est structurée de manière à utiliser un *router* et de manière à séparer autant que possible le calcul de l'affichage (le moins de php possible dans les templates, juste boucle et commandes d'affichage tels que `echo`).

6. **sysadmin : déploiement**  
Évaluation : l'équipe a trouvé et déployé l'application sur un hébergement adapté; l'application est fonctionnelle (les CRUD fonctionnent).

7. **backend dev : afficher les erreurs à proximité des champs concernés**  
Évaluation : lorsque j'introduis volontairement des erreurs dans le formulaire (maladress ou tentative d'injection SQL), le html du ou des messages d'erreurs s'affiche à proximité du champ concerné.


## Notre divisions des tâches 

Nous avons ensemble créé notre base de donnée 
Ludovic s'est chargé de generer les tables et fonctions
Julie s'est occupé de front ainsi que du login/logout niveau backend

Nous avons enfin rassemblé notre travail sur la branche master le jour-J
Nous avons après cela encore modifié certaines choses.

## Notre ressenti

Nous n'avons pas su terminer le travail à temps ! 
La récupération des données fut la tâche la plus difficile à mettre en oeuvre. 
Le MVC nous a préoccupé au départ puis nous nous y sommes habitué rapidement

