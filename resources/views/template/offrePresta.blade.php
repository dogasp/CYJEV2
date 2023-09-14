<?php if (!isset($_SESSION)) { session_start(); } ?>
@extends("index")
@section('Content')
<!-- ======= equipe Section ======= -->
<section id="offrePresta">
    <div class="container-fluid" style="padding: 0; height:100%;">
        <div class="parallax"></div>
         <div class="section-header">
            <h3>Nos offres de prestations</h3>
            <p>CY Junior Engineering vous accompagne dans vos projets grâce à notre large gamme d'offres</p>
        </div>
 <div class="cards">
      <div class="card" style="grid-column:1; grid-row:1;">
        <div class="card_image"><img src="{{asset('img/offresDePrestation/devWeb2.png')}}" alt=""></div>
        <div class="card_content">
          <h2 class="card_title">Développement Web</h2>
          <p class="card_text">  Au sein de CY Junior Engineering, il y a de nombreux étudiants déterminés et passionnés par le développement de site internet et prêts à réaliser vos projets. Les étudiants sont formés à toutes les bases techniques du domaine : des langages de programmation basiques (HTML/CSS/Javascript/PHP) en passant par les bases de données, frameworks et CMS tels que WordPress.
            Les nombreux projets et travaux réalisés au cours des 5 années d’école nous permettent de vous proposer une étude sur mesure et adaptée à votre besoin.
            </p>
        </div>
          <div class="bouton"> <a class="btn card_btn" href="/detailOffres">En savoir plus</a> </div>
      </div>

      <div class="card" style="grid-column:2; grid-row:1;">
        <div class="card_image"><img src="{{asset('img/offresDePrestation/devLog.jpg')}}" alt=""></div>
        <div class="card_content">
          <h2 class="card_title">Développement Logiciel</h2>
          <p class="card_text">ToDo: L’élaboration de systèmes complets, depuis la définition du besoin jusqu’à leur
                                réalisation, est un de nos domaine d’expertise. L’ensemble des projets et travaux
                                réalisés sur notre cycle ingénieur nous permettent de vous proposer une étude sur
                                mesure et adaptée à votre besoin.</p>
        </div>
          <div class="bouton"> <a class="btn card_btn" href="/detailOffres#logiciel">En savoir plus</a> </div>
      </div>

      <div class="card" style="grid-column:1; grid-row:2;">
        <div class="card_image"><img src="{{asset('img/offresDePrestation/devMob2.png')}}" alt=""></div>
        <div class="card_content">
          <h2 class="card_title">Conseil Conception</h2>
          <p class="card_text">  Au sein de CY Junior Engineering, les étudiants ont un fort attrait pour la conception de projet de A à Z et aiment entreprendre. Nous serons à même de mobiliser leurs talents pour vous apporter les meilleurs conseils afin passer du stade de simple idée à un projet concret.</p>
        </div>
         <div class="bouton"> <a class="btn card_btn" href="/detailOffres#conseil">En savoir plus</a> </div>
      </div>

      <div class="card" style="grid-column:2; grid-row:2;">
        <div class="card_image"><img src="{{asset('img/offresDePrestation/devLog.jpg')}}" alt=""></div>
        <div class="card_content">
          <h2 class="card_title">Analyse de données</h2>
          <p class="card_text"> CY Tech est une école proposant une majeure Mathématique appliquées formant chaque année de nombreux ingénieurs dans le domaine de la Data Science, Big data ou encore de l’intelligence artificielle. Les étudiants sauront tirer le meilleur de vos données et vous aider à en dégager un maximum de valeur.
            </p>

        </div>
          <div class="bouton"> <a class="btn card_btn" href="/detailOffres#analyse">En savoir plus</a> </div>
      </div>
    </div>
</section><!-- End Team Section -->

@endsection
