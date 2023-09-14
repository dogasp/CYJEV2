    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
                <div class="container">
                    <div class="row">

                    <div class="col-lg-5 col-md-6 footer-info">
                        <h3>CYJE</h3>
                        <p>Notre Junior se montre à votre entière disposition, n’hésitez pas à nous contacter directement
                            sur notre site web ou sur nos différents réseaux (Facebook et linkedIn) pour tous types d’informations. <br>
                            En espérant que vous avez apprécié nous connaître un peu plus.<br>
                            À bientôt – L’équipe de CYJE
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li class="active"><a href="/#pageDeGarde">Accueil</a></li>
                            <li><a href="/offres">Nos prestations</a></li>
                            <li><a href="/team">À propos</a></li>
                            <li class="devis"><a href="/devis">Obtenir un devis</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact ">
                        <h4>Contactez nous</h4>
                        <p>
                            Avenue du Parc <br>
                            Cergy, 95000<br>
                            France <br>
                            <strong>Email:</strong> <a href="mailto:contact@cyje.fr"> contact@cyje.fr </a>
                        </p>

                        <div class="social-links">
                            <a target="_blank" href="https://www.facebook.com/CYJuniorEngineering/" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company/cyjunior/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>CYJE</strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- offrePresta JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('vendor/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
    <!-- Nice-Select JS File -->
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>


    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>


    <!-- Script to display SweetAlert before sending mail form -->
    <script>
        $('.btn-devis').click(function myFunction(e){
            e.preventDefault();
            var data = $(this).serialize();
            Swal.fire({
                title: "Êtes-vous sûr ?",
                text: "Un mail va être envoyé à CYJE",
                showCancelButton: true,
                confirmButtonText: "Oui",
                cancelButtonText: "Annuler",
            }).then((WillPost) => {
                if (WillPost.isConfirmed){
                    $('#php-contact-form').submit();
                }
            });
            return true;
        })
    </script>


    </body>


</html>

