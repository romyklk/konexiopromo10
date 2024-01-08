
Créez un projet PHP contenant deux classes dans des namespaces différents. La première classe s'appellera `Calculator` et sera dans le namespace `Math`, et la deuxième classe s'appellera `Logger` et sera dans le namespace `Utils`.

La classe `Calculator` devra avoir une méthode statique appelée `add` qui prendra deux paramètres entiers et renverra leur somme.

La classe `Logger` devra avoir une méthode statique appelée `log` qui prendra un paramètre de chaîne de caractères et l'affichera à l'écran.

Dans un fichier `index.php`, importez les deux classes depuis leurs namespaces respectifs et utilisez-les pour effectuer une addition et afficher le résultat à l'aide de la méthode `log` du Logger.

Assurez-vous que les namespaces sont correctement utilisés et que les classes sont accessibles depuis le fichier index.php.

Voici un exemple de structure de fichiers pour votre projet :
- TP/
  - Math/
    - Calculator.php
  - Utils/
    - Logger.php
  - index.php
