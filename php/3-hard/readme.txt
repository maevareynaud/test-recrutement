Explication de la refactorisation 

Pour chaque classe, j'ai :
- mis les propriétés de la classe juste au dessus du constructeur pour une question de
lisibilité

J'ai décidé de créer l'interface MovieType pour définir les comportements spécifiques 
des différents types de films, ici, les charges et les points de fidélité. 

En créant cette interface, nous pouvons supprimer les constantes de la classes Movie
qui n'était pas explicit et ajouté la propriété type pour la classe Movie, ce qui est plus logique
selon moi car un film est toujours catégorisé.

Ces deux changements allègent le code de la methode getStatementInformation() et la rendent 
plus compréhensible. 
