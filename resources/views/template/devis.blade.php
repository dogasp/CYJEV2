<?php if (!isset($_SESSION)) { session_start(); } ?>
@extends("index")
@section('Content')
<!-- ======= Section Devis ======= -->
<section id="devis">
    <div class="container-fluid">
        <div class="map mb-4 mb-lg-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1307.8550734305643!2d2.069125758248931!3d49.03511959482629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f5265e747f91%3A0x85090c7cd00fd8de!2sCY%20Junior%20Engineering!5e0!3m2!1sfr!2sfr!4v1592989953667!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
        </div>

        <div class="row">
            <div class="col-lg contact">
                <div class="section-header">
                    <h3>Nous contacter</h3>
                </div>

                <div class="col justify-content-center">
                    <div class="col info">
                        <i class="ion-ios-location-outline"></i>
                        <p>Avenue du Parc, Cergy 95000</p>
                    </div>
                    <div class="col info">
                        <i class="ion-ios-email-outline"></i>
                        <p>contact@cyje.fr</p>
                    </div>
                    <div class="col info">
                        <i class="ion-ios-telephone-outline"></i>
                        <p>+33 6 38 21 85 16</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="section-header">
                    <h3>Obtenez un devis</h3>
                </div>
                <div class="form">
                    <form id="php-contact-form" role="form" class="php-email-form" method="POST" action="{{ route('sendemail') }}">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6"> <!-- Telephonne -->
                                <input type="email" class="form-control" name="phone" id="phone" placeholder="Votre n° de telephonne" />
                                <div class="validate"></div>
                            </div>
							<div class="form-group col-lg-6">
								<select name="reason">
                                    <option data-display="Pour quelle raison nous contactez-Vous ?" value="">Pour quelle raison nous contactez-Vous ?</option>
									<option value="Déposer un appel d'offre">Déposer un appel d'offre</option>
									<option value="Demander un partenariat">Demander un partenariat</option>
									<option value="Demander un contact presse">Demander un contact presse</option>
									<option value="Signaler un problème sur le site">Signaler un problème sur le site</option>
									<option value="Autre">Autre</option>
								</select>
							</div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
								<select name="company">
                                    <option data-display="De quel type d'entreprise provenez vous ?" value="" >De quel type d'entreprise provenez vous ?</option>
									<option value="Entrepreneur">Entrepreneur</option>
									<option value="PME/TPE">PME/TPE</option>
									<option value="Grand Compte">Grand Compte</option>
									<option value="Association/Collectivité">Association/Collectivité</option>
									<option value="Junior-Entreprise">Junior-Entreprise</option>
									<option value="Autre">Autre</option>
								</select>
							</div>
                            <div class="form-group col-lg-6">
                                <select name="knowledge">
                                    <option data-display="Comment nous avez-vous connu ?" value="" >Comment nous avez-vous connu ?</option>
                                    <option value="Site">Site</option>
                                    <option value="CYTech">CYTech</option>
                                    <option value="Bouche à oreille">Bouche à oreille</option>
                                    <option value="Réseaux Sociaux">Réseaux Sociaux</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="eErci de taper votre message ic" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
							<input type="hidden" id="token" value="<?/*=$_SESSION['sec']*/?>" name="token"/>
							<input type="hidden" name="recaptcha_response" id="recaptchaResponse"/>
                            <div class="loading">Chargement</div>
                        </div>
                        <div class="sent-message" style="display:none">
                            <strong>Votre message à bien été envoyé. Merci !</strong>
                        </div>
                        <div class="text-center"><button class="btn-devis" type="submit">Envoyer</button></div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</section><!-- End Contact Section -->
@endsection
