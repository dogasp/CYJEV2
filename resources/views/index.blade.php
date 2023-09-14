@include('template.header')
 <script src="https://www.google.com/recaptcha/api.js?render=6Lf8Qv0UAAAAAN32ahPGVZDRTw5DbV6LmTOFeBCH"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lf8Qv0UAAAAAN32ahPGVZDRTw5DbV6LmTOFeBCH', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	@yield("Content")
	

<!-- Footer -->
@include("template.footer")
