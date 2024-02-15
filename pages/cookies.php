<?php
    include "../functions/config.php";
    session_start();
    include "../functions/setLang.php";
    include "../functions/getLang.php";
    include "../locale/". $lang . "/" . $lang . ".php";
    $pageTitle= "Cookies";
    include "../components/header.php";
	$navbarInclude = (isset($_SESSION['nivel_usuario']) && $_SESSION['nivel_usuario'] == 1) ? "../components/navbarUser.php" : "../components/navbar.php";
	include $navbarInclude;
?>

<div class="container-fluid px-md-5 my-4 px-4">

    <!-- inicio -->

    <div class="row pt-2 pb-0 d-flex">
      <div class="d-none d-md-flex col-12 g--bg-cookies d-flex justify-content-center align-items-center mb-3 g--height-220 text-white">
        <h2 class="g--font-size-55 text-uppercase fw-semibold">Cookies</h2>
      </div>
      <div class="d-block d-md-none col-12 g--bg-cookies d-flex justify-content-center align-items-center mb-3 g--height-150 text-white">
        <h2 class="d-block d-md-none g--font-size-30 text-uppercase fw-semibold">Cookies</h2>
      </div>



      <div class="col-12 col-md-12 bg-light p-4 p-md-5 g--font-size-22 g--text-justify">
      <h2 class="st1 ps-5 py-3">Cookies Policy</h2>
      <p class="px-1 px-md-5 st3">
		Below you will find information about what cookies are, what type of cookies this portal uses, how you can disable cookies in your browser and how to specifically disable the installation of third-party cookies. If you do not find the specific information you are looking for, please contact grpd@kdweb.es
		<br><br>
		For more specific information on the processing of personal data through the use of cookies or other identification mechanisms, please read our Privacy Policy.
		</p><hr>
		<h2 class="st1 ps-5 py-3">What are Cookies</Q></h2>
		<p class="px-1 px-md-5 st3">
		Cookies are small files that some platforms, such as web pages, can install in the browser of your computer, smartphone, tablet or connected television. Its functions can be very varied: store your browsing preferences, collect statistical information, allow certain technical features, etc. Sometimes, cookies are used to store basic information about the user's browsing habits, to the point, depending on the case, of being able to recognize it.
		</p><hr>
		<h2 class="st1 ps-5 py-3">How we use cookies?</h2>
		<p class="px-1 px-md-5 st3">Browsing this portal means that the following types of cookies can be installed:</p>
			<ol class="px-1 px-md-5">
				<li class="pe-4"><b>Performance improvement cookies:</b>This type of cookie retains your preferences for certain tools or services so that you do not have to reconfigure them each time you visit our portal and, in some cases, may be provided by third parties. Some examples are: the volume level of audiovisual players, article ordering preferences or supported video playback speeds. In the case of electronic commerce, they allow you to keep information about your shopping cart. Our website uses third-party services that may install cookies to improve performance.</li>
				<li class="pe-4"><b>Statistical analysis cookies: </b>They are those that, well treated by us or by third parties, allow us to quantify the number of visitors and statistically analyze the use made by users of our services. Thanks to this we can study the navigation through our website, and thus improve the offer of products or services that we offer. This analysis is done using tools provided by third parties such as Google Analitycs or ComScore. This analysis is done using tools provided by third parties such as Google Analytics or ComScore.</li>
				<li class="pe-4"><b>Geolocation cookies:</b> If you consent to their installation, these cookies will be used by programs that try to locate the geographical position of the computer, smartphone, tablet or connected television, to offer you more appropriate content and services.</li>
				<li class="pe-4"><b>Log cookies:</b> When you register on our portal, cookies are generated that identify you as a registered user and indicate when you have identified yourself on the portal. These cookies are used to identify your user account and its associated services. These cookies are kept as long as you do not leave the account, close the browser or turn off the device. These cookies may be used in combination with analytical data to individually identify your preferences on our portal. For this we contract with companies that provide us with their services and that install their cookies on our behalf.</li>
				<li class="pe-4"><b>Own content recommendation cookies:</b> They are those that, well treated by us or by third parties, allow us to effectively manage the advertising spaces of our website, adapting the content of the advertisement to the content of the requested service or the use you make of our website. Thanks to it we can know your internet browsing habits and show you advertising related to your browsing profile. If you consent to its installation, we use our own cookies to know your content and browsing preferences to create profiles. For this we contract with companies that provide us with their services and that install their cookies on our behalf.</li>
				<li class="pe-4"><b>Third-party content recommendation cookies:</b> They are those that are used by other companies with which we have agreements and allow us to offer you content that is appropriate to your preferences when you browse our portal or, even, through other portals. Only if you so indicate, these companies will install their cookies and offer you content based on your preferences.</li>
				<li class="pe-4"><b>Own advertising cookies:</b> They are those that allow us to effectively manage the advertising spaces of our website, adapting the content of the advertisement to your preferences. Thanks to them we can know your browsing habits on our portal and show you advertising related to your browsing profile. If you consent to their installation, we can install our own advertising cookies to know your browsing preferences and create advertising profiles that we can offer to our advertisers. For this we contract with companies that provide us with their advertising services and that install their cookies on our behalf.</li>
				<li class="pe-4"><b>Third-party advertising cookies:</b> They are those that other companies use to effectively manage their advertising spaces on our website, adapting the content of the advertisement to their preferences. Thanks to them, these companies can learn about your browsing habits on our portal and other Internet portals and show you advertising related to your browsing profile. Only if you so indicate, these companies will install their cookies and offer you content based on your preferences. The companies that serve personalized advertising have their own privacy policies, which you can consult here.</li>
				<li class="pe-4"><b>Other third-party cookies:</b> On some of our pages, third-party cookies can be installed to manage and improve the services they offer. An example of this use are the links to social networks that allow us to share our content.</li>
			</ol><hr>
		<h2 class="st1 ps-5 py-3">How can I set my preferences?</h2>
		<p class="px-1 px-md-5 st3">We offer you several options. You can configure your preferences regarding our portal and third parties that install cookies by accessing your <b>Privacy Area</b>, which you will find access to at the bottom of all our pages. You can also allow, block or delete cookies installed on your computer by configuring your internet browser options. In the event that you block them, certain services that require their use may not be available to you.<br>
		Below we offer you links where you will find information on how you can activate your preferences in the main browsers:</p>
			<ol class=" mx-5 px-1 px-md-5">
				<li class="pe-4"><a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank">Google Chrome</a></li>
				<li class="pe-4"><a href="https://support.mozilla.org/es/kb/cookies-informacion-que-los-sitios-web-guardan-en-?redirectlocale=en-US&amp;redirectslug=Cookies" target="_blank">Mozilla Firefox</a></li>
				<li class="pe-4"><a href="https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">Internet Explorer </a></li>
				<li class="pe-4"><a href="https://support.apple.com/kb/ph21411?locale=es_ES" target="_blank">Safari </a></li>
				<li class="pe-4"><a href="https://support.apple.com/es-es/HT201265" target="_blank">Safari para IOS (iPhone, iPad) </a></li>
				<li class="pe-4"><a href="http://www.macromedia.com/support/documentation/es/flashplayer/help/settings_manager07.html" target="_blank">Cookies Flash</a></li>
			</ol>
		<p class="px-1 px-md-5 st3">
		Finally, you can go to various advertising organizations where, in addition to finding useful information, you can configure, provider by provider, your preferences regarding third-party advertising cookies. Specifically, we highlight:
		</p>
			<ul class="mx-5 px-1 px-md-5">
				<li class="pe-4"><a href="http://www.youronlinechoices.com/es/" target="_blank">Your Online Choices</a></li>
				<li class="pe-4"><a href="http://optout.aboutads.info/?lang=EN&amp;c=2" target="_blank">Digital Advertising Alliance (DAA) </a></li>
				<li class="pe-4"><a href="http://optout.networkadvertising.org/?c=1" target="_blank">Network Advertising Initiative (NAI) </a></li>
			</ul>
		<p class="px-1 px-md-5 st3">
		If you wish to contact us regarding our cookie policy, you can do so at <a href="mailto:grpd@kdweb.es">grpd@kdweb.es</a>






      


    </div>




    <!-- fin -->

</div>
</div>












    <?php include "../components/footer.php";

    

?>