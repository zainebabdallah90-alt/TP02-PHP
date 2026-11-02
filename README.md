# TP02-PHP
# TP 2 — Tableaux et fonctions en PHP

**Matière :** Développement Web côté serveur  
**Niveau :** 2ème année Licence  
**Langage :** PHP  
**Système :** Ubuntu 24.04  

## Activité 1 — Premier tableau PHP

**1. Combien d’éléments contient le tableau ?**  
Le tableau contient 4 éléments.

**2. Quel est l’indice du premier élément ?**  
L’indice du premier élément est 0.

**3. Quel est l’indice du dernier élément ?**  
L’indice du dernier élément est 3.

**4. Que produit `echo $etudiants[2];` ?**  
Cette instruction affiche `Nour`.

**5. Que se passe-t-il avec `$etudiants[4]` ?**  
L’indice 4 n’existe pas dans le tableau. PHP affiche un avertissement indiquant que cet indice n’est pas défini.

## Activité 2 — Parcourir avec for

**1. Quel est le rôle de `count()` ?**  
La fonction `count()` retourne le nombre d’éléments du tableau.

**2. Pourquoi utilise-t-on `<` et non `<=` ?**  
On utilise `<` pour éviter d’accéder à un indice inexistant, car les indices commencent à 0.

**3. Pourquoi ne pas écrire directement 4 ?**  
Parce que le nombre d’étudiants peut changer. `count()` permet d’adapter automatiquement la boucle à la taille du tableau.

## Activité 3 — Parcourir avec foreach

**Dans quels cas foreach est-il plus pratique que for ?**  
`foreach` est plus pratique pour parcourir tous les éléments d’un tableau sans utiliser d’indice ni gérer un compteur.

## Activité 9 — Première fonction

**1. Quel est le rôle du paramètre ?**  
Le paramètre permet de transmettre une valeur à la fonction afin qu’elle puisse l’utiliser.

**2. Pourquoi une fonction évite-t-elle de répéter du code ?**  
Une fonction permet de regrouper des instructions et de les réutiliser plusieurs fois en appelant simplement son nom.

## Activité 10 — Fonction avec return

**Quelle est la différence entre une fonction qui utilise echo et une fonction qui utilise return ?**  
`echo` affiche directement un résultat à l’écran, tandis que `return` renvoie une valeur qui peut être stockée dans une variable ou utilisée dans une autre opération.

## Activité 14 — Moyenne de la classe

**1. Combien de paramètres possède la fonction ?**  
La fonction possède un seul paramètre : `$etudiants`.

**2. Que représente `$etudiants` ?**  
Il représente un tableau contenant les informations des étudiants, notamment leurs moyennes.

**3. Pourquoi utilise-t-on foreach ?**  
On utilise `foreach` pour parcourir tous les étudiants et additionner leurs moyennes.

**4. Que retourne la fonction ?**  
La fonction retourne la moyenne générale de la classe.

## Activité 18 — Séparer les fonctions

**1. Pourquoi séparer les fonctions ?**  
Cela permet d’organiser le code, de faciliter sa lecture, sa maintenance et sa réutilisation.

**2. Que fait require_once ?**  
`require_once` inclut un fichier PHP une seule fois, afin d’éviter de charger plusieurs fois les mêmes fonctions.

**3. Pourquoi utilise-t-on ../ ?**  
`../` permet de remonter d’un niveau dans l’arborescence des dossiers pour accéder à un fichier situé dans le dossier parent.

## Activité 19 — Mini-projet : Gestion des étudiants

Le mini-projet permet de gérer plusieurs étudiants, d’afficher leurs informations, de calculer la moyenne de la classe, de compter les étudiants admis, de rechercher un étudiant et de filtrer les étudiants selon une moyenne minimale.

**Défi : Trouver le meilleur étudiant**

La fonction `trouverMeilleurEtudiant($etudiants)` permet de rechercher l’étudiant qui possède la moyenne la plus élevée dans le tableau.

## Activité 21 — Questions de réflexion

**1. Pourquoi utiliser un tableau plutôt que `$etudiant1`, `$etudiant2`, etc. ?**  
Un tableau permet de regrouper plusieurs étudiants dans une seule variable et de parcourir facilement leurs informations avec des boucles.

**2. Quelle différence entre `$etudiants[0]` et `$etudiant["nom"]` ?**  
`$etudiants[0]` permet d’accéder au premier élément d’un tableau indexé. `$etudiant["nom"]` permet d’accéder à la valeur associée à la clé `nom` dans un tableau associatif.

**3. Pourquoi une fonction améliore-t-elle la réutilisation du code ?**  
Une fonction permet d’écrire un traitement une seule fois et de l’utiliser plusieurs fois sans répéter les mêmes instructions.

**4. Quelle différence entre echo et return ?**  
`echo` affiche une valeur à l’écran, tandis que `return` renvoie une valeur à la fonction appelante.

**5. Pourquoi séparer les fonctions dans un fichier ?**  
Cela permet de mieux organiser le programme, de simplifier le fichier principal et de réutiliser les fonctions dans plusieurs fichiers PHP.

## Bilan

Ce TP m’a permis d’apprendre à créer et manipuler des tableaux indexés et associatifs en PHP, à parcourir leurs éléments avec `for` et `foreach`, et à utiliser des fonctions avec paramètres et valeurs de retour. J’ai également appris à rechercher et filtrer des étudiants, à calculer des statistiques sur une classe et à organiser le code dans plusieurs fichiers.
