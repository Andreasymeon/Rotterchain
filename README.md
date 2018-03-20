# Rotterchain

## Objectif:

Réaliser une Dapp à présenter lors du hackaton dans la catégorie “improving existing process”.
Utiliser une solution Blockchain afin de rendre le commerce internationnal aussi simple et transparent que le commerce de village.

## Idée explorée:

automatiser l’émission des documents relatifs à l’envoi et à la réception de cargo au travers d’une Dapp.

## Fonctionnalités:

- créer une commande au moyen du formulaire.
- envoyer la commande pour validation
- payer sur la blockchain
- générer une lettre de cédit ainsi que les autres documents générables.
- moyen de géolocaliser le coli et de le suivre
- une fois le coli recu libérer les fonds

## Design:

simple épurer profetionnel

## Architecture:

### pas login
- Home : invitation à login ou register + explication du site .

- Register : nom d’entreprise + secteur activity, object social, where are you => 			numéro de TVA, mot de passe login .
### login
- home : fil d’actualité ( appels d’offres + offres selon le profil) 

- contract: liste des contracts en cours.

- notification: regroupe les offres.

- new : bouton permetant d’établir un nouveau contract.=> choice achat ou vente ;

Achat: formulaire => the bar the recherche
			=> formulaire appel d’offre
      soit page partnaire soit liste de produit , ISO => tva => carte du produit = tout le formulaire du contrat.
      => market place to vendeur attente de validation…

Vente: Formulaire => photo de produit, nom, ISO, Q minimum, Descritpion mail contact contractor(seller)


## Acteurs impliqués:

Acheteur

Vendeu

Transporteur

Gouvrernements

## Idée d’évolution.

La géolocalisation  des paquets grace à IOT permettant  tracabilité et transparence des produits ce qui induit la confiance et est est un atout commercial indéniable.

la géolocalisation des chargements ainsi que l’automatisation de la procédure implique la génération de nombreuse données,,  en les utilisants dans la mesure de respect de confidentialité qui intervienne dans ce domaine, il est possible  de proposer ces datas aux companie afin de les aider dans leur logistic, élément clé du secteur et/ou d’implémenter une solution de machine learning tentant daméliorer cela pour eux.

commandes groupées pour particuliers.

Commande vocale / assistant d’utilisation : si trop de fonctionnalités sont disponnible   il est utile d’avoir un moyen d’aider l’utilisateur à s’y retrouvé.
