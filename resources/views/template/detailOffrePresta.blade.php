<?php if (!isset($_SESSION)) { session_start(); } ?>
@extends("index")
@section('Content')
<section id="detailOffrePresta">

    <div class = "nav">
        <a href="#web">Développement web</a>
        <a href="#logiciel">Développement logiciel</a>
        <a href="#conseil">Conseil conception</a>
        <a href="#analyse">analyse données</a>
    </div>
    <h3 class="header"> Voici nos offres de prestation en détail : <h3>

    <h1 id="web"> Développement web</h1>

    <h3> Site vitrine </h3>
    <p>Vous souhaitez présenter vos produits ou services de manière attractive, notre Junior peut vous proposer
        des pages aux designs raffinés et élégants mettant en avant votre marque.
    </p>

    <h3> Site E-commerce </h3>
    <p>Nous veillons à vous livrer des sites e-commerce sécurisés et dotés du maximum de fonctionnalités.
        Nos étudiants ingénieurs sont formés pour optimiser l’ergonomie de votre site.
        Notre objectif est de présenter un site attractif pour une expérience client digne des plus grands.
    </p>

    <h3> Referencement SEO </h3>
    <p>Vous ne générez pas assez de trafic sur votre site. Nos équipes maîtrisent les techniques et astuces
        qui vont permettront de mieux positionner votre site sur les moteurs de recherche.
    </p>

    <h3> Referencement SEA </h3>
    <p>Le référencement naturel ne vous permet pas d’atteindre votre ambition, vous souhaitez mettre les moyens
        nécessaires à la propulsion de votre site internet sur les moteurs de recherche.
        Nos étudiants se feront un plaisir de faire la promotion de votre site à travers vos
        visuels ou des mots-clés associés.
    </p>

    <h1 id="logiciel"> Développement logiciel</h1>

    <h3> Interface de programmation (API) </h3>
    <p>Vous souhaitez que vos données ou même vos services soient accessibles pour être réutilisées
        dans d’autres projets, nous vous proposons de développer une API rendant vos données ou services
        accessibles sur internet grâce à un système ordonné de requête.
    </p>

    <h3> Outil de gestion interne </h3>
    <p>Vous nécessitez l’utilisation d’un algorithme pour vous faciliter une tâche longue et répétitive,
        nous avons les connaissances pour penser un algorithme vous permettant de ne plus avoir à réaliser
        cette tâche et donc d’économiser votre temps pour le réinvestir dans d’autres activités plus pertinentes.
        Des exemples de ces outils sont : Reconnaissance optique de caractères, tri de fichiers, etc.
    </p>

    <h3>Application mobile </h3>
    <p>Le développement mobile est un enjeu de plus en plus fort pour gagner en visibilité.
        Si vous souhaitez concevoir une app-mobile, CYJE vous accompagne avec des étudiants qui ont
         l’habitude de travailler sur des projets dans ce domaine. <br>
        De la définition du besoin jusqu’à sa réalisation nous proposerons une conception sur mesure et
        adaptée à votre besoin.
    </p>


    <h1 id="conseil"> Conseil conception </h1>

    <h3> Création de cahier des charges </h3>
    <p>Vous avez un projet en tête et vous souhaitez avancer de manière concrète sur celui-ci.
        Nous vous proposons de construire ensemble un cahier des charges qui vous permettra de clarifier vos besoins,
        trouver des solutions à vos contraintes et planifier au mieux toutes les spécificités entourant votre projet.
    </p>

    <h3> Maquettage </h3>
    <p>Il est important, dans un projet numérique, de penser à la structure et à la hiérarchisation des contenus avant
        même de se lancer dans la programmation. Dans ce but nous mettons à votre service des étudiants pour imaginer
        des interfaces intuitives. Comme de véritables architectes du numérique nous vous présenterons au format numérique
         ou papier des maquettes détaillant les fonctionnalités, les interactions et contenus de votre projet. Cette offre
         peut être utilisée comme une preuve de conception montrant la faisabilité de votre projet.
    </p>

    <h1 id="analyse"> Analyse de données </h1>

    <h3> Extraction de données </h3>
    <p>Vous cherchez à créer une base de données spécifique pour votre entreprise, nos étudiants peuvent explorer
        pour vous un large ensemble de données et sélectionner les informations/variables pertinentes.
        Vous gagnerez un temps précieux dans la structuration de votre base.<br><br>
        Vous n’avez pas de data et vous voulez commencer une stratégie d’utilisation de données en vous basant
        sur des données de site internet public, nous pouvons réaliser une phase d’extraction de données sur des
        sites internet afin de récupérer et centraliser les informations qui vous seront utiles pour une autre activité.
    </p>

    <h3> Nettoyage de données </h3>
    <p>Vos données s’accumulent et vous avez peur d’avoir des erreurs/incohérences dans vos jeux de données.
        Il est temps de rendre vos données “propres” et réutilisables. Nos étudiants sont formés à détecter et
        éliminer toutes les erreurs standard qui peuvent ensuite fausser votre analyse. Ils seront de même en mesure
        de trier vos données afin d’en garder uniquement celle qui vous seront essentiels.
    </p>

    <h3> Interprétation et visualisation </h3>
    <p>Votre base de données est bien structurée mais vous cherchez maintenant à faire parler vos données. Nous pouvons
        réaliser différentes méthodes mathématico-informatique (algorithmes de clustering, Analyses en composantes
        principales, arbres de décision, réseaux de neurones…). Retransmis ensuite sous forme de graphiques nous nous
        chargeons de tirer des tendances et comportements concrets pour adapter au mieux votre
        communication/produits/services.
    </p>

    <h3> Prévisions </h3>
    <p>Vous avez des données sur les années précédentes et vous souhaitez prédire l’année qui arrive,
        nos étudiants pourront vous construire des modèles prédictifs afin d’avoir une vision sur votre avenir.
        Vous aurez à votre disposition de prévisions de l’évolution d’un ou plusieurs paramètres cibles.
    </p>

</section>


@endsection
