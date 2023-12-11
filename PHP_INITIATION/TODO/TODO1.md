# TODO 1:

Écrivez une fonction appelée "verifierMoyenne" qui prend en paramètre une note , une matière , le prénom et le collège d'un élève et qui affiche la phrase suivante :
Si la moyenne est supérieure ou égale à 10, on affiche "Bravo [prénom] ! Vous êtes reçu(e) au [collège] !"
Si la moyenne est supérieure ou égale à 8 et inférieure à 10, on affiche "Vous devez passer l'examen de rattrapage en [matière] !"
Si la moyenne est inférieure à 8, on affiche "Désolé [prénom] ! Vous êtes recalé(e) !"

Si aucun nom de collège n'est passé en paramètre, alors le collège par défaut est "Collège de France"
Si la note de l'élève n'est pas un nombre, on affiche "La note doit être un nombre !"
Si la note de l'élève n'est pas comprise entre 0 et 20, on affiche "La note doit être comprise entre 0 et 20 !"
Si le prénom de l'élève n'est pas une chaîne de caractères, on affiche "Le prénom doit être une chaîne de caractères !"
Si la matière n'est pas une chaîne de caractères, on affiche "La matière doit être une chaîne de caractères !"

Si la note est comprise entre 17 et 20, on affiche "Très bien"