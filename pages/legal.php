<?php
    include "../functions/config.php";
    session_start();
    include "../functions/setLang.php";
    include "../functions/getLang.php";
    include "../locale/". $lang . "/" . $lang . ".php";
    $pageTitle= "Privacy Policy";
    include "../components/header.php";
	$navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
	include $navbarInclude;
?>

<div class="container-fluid px-md-5 my-4 px-4">

    <!-- inicio -->


    <div class="row pt-2 pb-0 d-flex">
      <div class="d-none d-md-flex col-12 g--bg-privacidad d-flex justify-content-center align-items-center mb-3 g--height-220 text-white">
        <h2 class="g--font-size-55 text-uppercase fw-semibold">Privacidad</h2>
      </div>
      <div class="d-block d-md-none col-12 g--bg-cookies d-flex justify-content-center align-items-center mb-3 g--height-150 text-white">
        <h2 class="d-block d-md-none g--font-size-30 text-uppercase fw-semibold">Cookies</h2>
      </div>



      <div class="col-12 col-md-12 bg-light p-4 p-md-5 g--font-size-22 g--text-justify">
	  <h2 class="st1 ps-5 py-3">1.- Who is responsible for the processing of your data?</h2>
		<p class="px-5 st3">
		The responsible for the processing of your personal data is SVEIKI, S.L., (hereinafter, “SVEIKI”), with N.I.F. B- 97044768 and registered office at Calle Cuenca, 5 (Bajos) 46007, Valencia.
		We inform you that the ownership of the domain of our website https://www.sveiki.com/es/ (hereinafter, the "Website"), belongs to SVEIKI.
		Access and/or use of the Website attributes the condition of User (hereinafter, the "User"), and implies acceptance, from said access and/or use, of this Privacy Policy.
		The User may contact SVEIKI at the following email address: info@sveiki.com.
		</p><hr>
		<h2 class="st1 ps-5 py-3">2.- Why is SVEIKI entitled to carry out data processing?</h2>
		<p class="px-5 st3">
		SVEIKI is entitled to process your data in order to carry out the provision of its services.
		SVEIKI takes the protection of your privacy and personal data very seriously. Therefore, your personal information is kept secure and treated with the utmost care.
		This Privacy Policy regulates the access and use of the service (hereinafter, the "Service") that SVEIKI makes available to the User interested in the services and Content hosted on the Website.
		</p><hr>
		<h2 class="st1 ps-5 py-3">3.- What are the purposes of the processing of your personal data by SVEIKI?</h2>
		<p class="px-5 st3">
		Your personal data collected by SVEIKI may be used for the following purposes:
		(i) The provision of services offered through the Website.
		(ii) The sending of SVEIKI commercial communications about its services by letter, telephone, email, SMS/MMS, or by other equivalent electronic means of communication.
		</p><hr>
		<h2 class="st1 ps-5 py-3">4.- Veracity of the data provided by Users and data of minors</h2>
		<p class="px-5 st3">
		The User guarantees that the personal data provided is true and is responsible for notifying SVEIKI of any modification thereof. The User will be responsible, in any case, for the veracity of the data provided, SVEIKI reserving the right to exclude from the registered Services any User who has provided false data, without prejudice to other actions that proceed by Law.
		</p><hr>
		<h2 class="st1 ps-5 py-3">5.- Data retention</h2>
		<p class="px-5 st3">	
		The personal data provided will be kept by SVEIKI as long as the User does not express his desire to unsubscribe from SVEIKI services, and this in order to receive information about company products.
		</p><hr>
		<h2 class="st1 ps-5 py-3">6.- Rights of the User in relation to their data</h2>
		<p class="px-5 st3">The User has the right to</p>
			<ol class=" mx-5 px-5">
				<li class="pe-4">Access your personal data.</li>
				<li class="pe-4">Request the rectification of inaccurate data.</li>
				<li class="pe-4">Request its deletion.</li>
				<li class="pe-4">Request the limitation of the processing of your data.</li>
				<li class="pe-4">Oppose the processing of your data.</li>
				<li class="pe-4">Request its portability.</li>
				<li class="pe-4">Not be subject to automated individual decisions.</li>
				<li class="pe-4">In addition, the User may exercise their right to be forgotten.</li>
			</ol>
		<p class="px-5 st3">
		The User can exercise all these rights at the following email address info@sveiki.com, indicating the reason for their request and providing a copy of their D.N.I.<br>
		Without prejudice to any other administrative resource or judicial action, the User shall have the right to file a claim with a Control Authority, particularly in the Member State in which they have their habitual residence, place of work or place of the alleged infringement, in in the event that you consider that the processing of your personal data is not adequate to the regulations, as well as in the event that the exercise of your rights is not satisfied. The supervisory authority to which the claim has been filed will inform the claimant about the course and result of the claim.
		</p><hr>
		<h2 class="st1 ps-5 py-3">8.- Data security</h2>
		<p class="px-5 st3">
		The protection of the privacy and personal data of Users is very important to SVEIKI. Therefore, SVEIKI does everything in its power to prevent your data from being misused, allowing access to it only to authorized personnel.<br>
		SVEIKI maintains the security levels of personal data protection in accordance with the applicable regulations and has established all the technical means at its disposal to prevent the loss, misuse, alteration, unauthorized access and theft of the data that the User provides through of the Website, without prejudice to informing you that Internet security measures are not impregnable.<br>
		SVEIKI undertakes to comply with the duty of secrecy and confidentiality regarding personal data in accordance with the applicable legislation, as well as to grant them safe treatment in the assignments and international transfers of data that, where appropriate, may occur.<br >		
		In those services of the Website that require registration as a User, a password must be chosen. The User is responsible for maintaining the confidentiality of this password, as well as for all activities that occur in the session started with his name and password.<br>
		The User undertakes to notify SVEIKI as soon as possible of the unauthorized use of his Username and/or password or any other security breach. SVEIKI will not be responsible for any damages or losses that may arise due to non-compliance with this obligation by the User.
		</p><hr>
		<h2 class="st1 ps-5 py-3">9.- Acceptance and Consent.</h2>
		<p class="px-5 st3">
		El Usuario declara haber sido informado de las condiciones sobre protección de datos personales, aceptando y consintiendo el tratamiento de estos por parte de SVEIKI, en la forma y para las finalidades indicadas en la presente Política de Privacidad.
		</p>



	  </div>
      



      


    </div>




    <!-- fin -->

</div>












    <?php include "../components/footer.php";

    

?>