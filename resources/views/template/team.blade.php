<?php if (!isset($_SESSION)) { session_start(); } $nav_about = "active" ?>
@extends("index")
@section('Content')
<!-- ======= equipe Section ======= -->
<section id="equipe">
    <div class="container-fluid" style="padding: 0; height:100%;">
        <div class="parallax"></div>

        <div class="section-header">
            <h3>Qui sommes nous ?</h3>
            <p style="text-align:justify">Nous sommes le troisième mandat de CYJE. Nous continuons sur notre 
                mandat à pérenniser notre Junior. Cela semble porter ses fruits car nous sommes devenus l'année dernière Junior-Initiative, dernière étape avant de devenir Junior-Entreprise.</br>
Cette année notre ambition majeure est de devenir Junior-Entreprise. </br></br>
Notre équipe est composée d’élèves qui viennent qui préparent des diplômes d’ingénieurs avec des spécialités différentes : informatique, data analyse et mathématiques. Depuis peu notre école 
s’est agrandit avec de nouvelles filières, notamment le génie civil et la biotechnologie. Nous nous devons donc de construire une structure solide pour que notre Junior puisse grandir en même temps que notre école et que de nouveaux projets se construisent dans les prochaines années (intégrer les compétences de ces filières dans nos prestations par exemple)</p>
        </div>

        <h1>Histoire de la junior</h1>
        <div class="timeline">
            <ul>
                <!--<li class="right">
                    <div>
                        <time>2022-2023</time> Meilleur mandat de l'histoire de la junior 😉
                    </div>
                </li>-->
                <li class="left">
                    <div>
                        <time>2021</time> Partenariat avec Alten
                    </div>
                </li>
                <li class="right">
                    <div>
                        <time>2021</time> Passage de marque Junior-Initiative
                    </div>
                </li>
                <li class="left">
                    <div>
                        <time>2020</time> Cap'Eisti devient CYJE
                    </div>
                </li>
                <li class="right">
                    <div>
                        <time>2019</time> Réintégration du mouvement
                    </div>
                </li>
                <li class="left">
                    <div>
                        <time>2009</time> Radiation du mouvement
                    </div>
                </li>
                <li class="right">
                    <div>
                        <time>2004</time> Jet'Eisti devient Cap'Eisti
                    </div>
                </li>
                <li class="left">
                    <div>
                        <time>1988</time> E.R.I.C. devient Jet'Eisti
                    </div>
                </li>
                <li class="right">
                    <div>
                        <time>1984</time> Création de E.R.I.C.
                    </div>
                </li>
            </ul>
        </div>

    </div>
</section><!-- End Team Section -->

@endsection
