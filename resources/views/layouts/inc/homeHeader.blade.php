
		<!DOCTYPE html>

<html lang="en-GB"
	prefix="og: https://ogp.me/ns#" >

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="http://q-hdtv.com/xmlrpc.php">

<title>Q-HD TV - watch TV anywhere you go!</title>
	<style>
	.channelblock{
		height:100px;
		width:100px;
		box-shadow:0 0 10px #fff;
		display: inline-block;
		margin:7px;
		background-image: url("/logo.php?l=/20161123/1479855947047.png");
		background-size:contain;
		background-position:center;
		background-repeat:no-repeat;
		background-color:#fff;
		cursor:pointer;
	}
	.channelblock:hover{
		box-shadow:inset 0 0 10px #aaf;
	}
	.movieblock{
		height:150px;
		width:100px;
		box-shadow:0 0 10px #fff;
		display: inline-block;
		margin:7px;
		background-image: url("/logo.php?l=/20161123/1479855947047.png");
		background-size:cover;
		background-position:center;
		cursor:pointer;
	}
	.movieblock:hover{
		box-shadow:inset 0 0 10px #aaf;
	}
	.moving_channels_div{
		position:absolute;
		left:-1824px;
		width:1824px;
		animation-name: scroll_div_right;
		animation-duration: 40s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;
	}
	@keyframes scroll_div_right {
		0%   {margin-left:0;}
		100%  {margin-left:3648px;}
	}
	.moving_movies_div{
		position:absolute;
		left:-1824px;
		width:1824px;
		animation-name: scroll_div_left;
		animation-duration: 40s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;
	}
	@keyframes scroll_div_left {
		0%  {margin-left:3648px;}
		100%   {margin-left:0;}
	}
	.scrolling_channels{
		width:100%;
		height:114px;
		overflow:hidden;
		position:relative;
	}
	.scrolling_movies{
		width:100%;
		height:174px;
		overflow:hidden;
		position:relative;
	}
	.adelay{animation-delay:20s;}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
	function channel_redirect(url){
		// console.log(url);
		window.location.replace(url);
	}
	$( document ).ready(function() {
		var scrolling_channels_list = [{"ID":"11066","Name":"Kanal 5","KeyPicture":"20170614\/1497426509525.png"},{"ID":"4113","Name":"Al Ann","KeyPicture":"20150910\/1441875703292.png"},{"ID":"7143","Name":"TV4 HD","KeyPicture":"20160919\/1474274734275.jpg"},{"ID":"13987","Name":"Alsumaria","KeyPicture":"20171004\/1507144272703.png"},{"ID":"15488","Name":"Surya Music","KeyPicture":"20180925\/1537864498979.png"},{"ID":"18035","Name":"Lat Cinema30 Ppv","KeyPicture":"20200310\/1583858614170.png"},{"ID":"6091","Name":"Rai 4","KeyPicture":"20160809\/1470735008159.png"},{"ID":"4985","Name":"IFC","KeyPicture":"20160408\/1460098874231.png"},{"ID":"3210","Name":"Al Saha1 Tv","KeyPicture":"20150606\/1433610200220.png"},{"ID":"16573","Name":"CDF Premiun Hd","KeyPicture":"20190102\/1546439578660.png"},{"ID":"18076","Name":"Bahrain Tv","KeyPicture":"20200317\/1584402905912.png"},{"ID":"14243","Name":"Bein Jeem Kids","KeyPicture":"20171212\/1513069302615.png"},{"ID":"6132","Name":"Baby TV","KeyPicture":"20160809\/1470753901077.jpg"},{"ID":"18058","Name":"Lat Beinsports","KeyPicture":"20200311\/1583937343436.png"},{"ID":"10999","Name":"Vintage TV","KeyPicture":"20170609\/1497007681231.png"},{"ID":"15127","Name":"Tunisia Nat 1","KeyPicture":"20141125\/1416941525906.png"},{"ID":"18194","Name":"1st india News","KeyPicture":"null"},{"ID":"15225","Name":"TSN 3","KeyPicture":"20180724\/1532466479984.png"},{"ID":"14132","Name":"Berbere TV","KeyPicture":"20170713\/1499945516944.png"},{"ID":"7074","Name":"Antena Stars","KeyPicture":"20160916\/1474045913841.png"},{"ID":"18096","Name":"Angel Tv Hd","KeyPicture":"20200411\/1586557902051.png"},{"ID":"6054","Name":"Lifetime","KeyPicture":"20161118\/1479469581151.png"},{"ID":"17424","Name":"Bein Sp 12 SD Low","KeyPicture":"20190210\/1549755614967.png"},{"ID":"4132","Name":"Sky Cinema Max","KeyPicture":"20150915\/1442327544992.png"},{"ID":"15659","Name":"C More Sport1","KeyPicture":"20181125\/1543102639962.png"},{"ID":"18009","Name":"Discovery Life","KeyPicture":"20200301\/1583026076772.png"},{"ID":"16467","Name":"TVN Style","KeyPicture":"20181216\/1544924947349.png"},{"ID":"3161","Name":"JSC Mubasher","KeyPicture":"20150315\/1426372463922.png"},{"ID":"6384","Name":"Ary News HD","KeyPicture":"20160818\/1471507359957.jpg"},{"ID":"17821","Name":"Dazn Sport4","KeyPicture":"20190808\/1565284285752.jpg"},{"ID":"17610","Name":"Revand TV","KeyPicture":"20190330\/1553900641656.png"},{"ID":"5102","Name":"Cine Mundo","KeyPicture":"20160414\/1460636419671.png"}];var scrolling_movies_list = [{"ID":"16312","Name":"The Walking Dead S02-EP08","KeyPicture":"\/20181212\/1544618729635.jpg"},{"ID":"17070","Name":"Fifty Shades of Black","KeyPicture":"\/20190116\/1547631915051.jpg"},{"ID":"15139","Name":"Beyond the Reach FR(2014)","KeyPicture":"\/20180717\/1531852015079.jpg"},{"ID":"16026","Name":"Game of Thrones S05-EP05","KeyPicture":"\/20181210\/1544435007682.png"},{"ID":"16146","Name":"Suits S05-EP01","KeyPicture":"\/20181211\/1544526231103.jpg"},{"ID":"16134","Name":"Suits S04-EP02","KeyPicture":"\/20181211\/1544524981202.jpg"},{"ID":"17049","Name":"American Pastoral","KeyPicture":"\/20190116\/1547623279968.jpg"},{"ID":"400","Name":"The Family","KeyPicture":"20141004\/1412454858120.jpg"},{"ID":"16801","Name":"Wonder Woman","KeyPicture":"\/20190110\/1547111940279.jpg"},{"ID":"17218","Name":"Bordo Bereliler Suriye","KeyPicture":"\/20190122\/1548159073429.jpg"},{"ID":"16750","Name":"Siyah Inci Ep-11","KeyPicture":"\/20190109\/1547032667856.jpg"},{"ID":"15997","Name":"Game of Thrones S02 EP02","KeyPicture":"\/20181210\/1544430097170.jpg"},{"ID":"15904","Name":"Prison Break S02-EP10","KeyPicture":"\/20181207\/1544184557012.jpg"},{"ID":"16065","Name":"Gotham S02-EP07","KeyPicture":"\/20181210\/1544447837324.jpg"},{"ID":"16350","Name":"The Walking Dead S05-EP04","KeyPicture":"\/20181212\/1544621926074.jpg"},{"ID":"10179","Name":"Mythica: The Godslayer","KeyPicture":"\/20170405\/1491388903856.jpg"},{"ID":"15922","Name":"Prison Break S03-EP06","KeyPicture":"\/20181207\/1544186139380.jpg"},{"ID":"15191","Name":"Gomorrah S1 -Ep1","KeyPicture":"\/20180722\/1532213517231.jpg"},{"ID":"14177","Name":"Extortion","KeyPicture":"\/20171121\/1511291475746.jpg"},{"ID":"15203","Name":"Abluka (2015)","KeyPicture":"\/20180723\/1532362708660.jpg"},{"ID":"16705","Name":"\u00c7ukur Ep-07","KeyPicture":"\/20190109\/1547018434023.jpg"},{"ID":"16917","Name":"Hababam Sinifi Dokuz Doguruyor","KeyPicture":"\/20190114\/1547452060147.jpg"},{"ID":"17051","Name":"Army of One","KeyPicture":"\/20190116\/1547624085344.jpg"},{"ID":"11701","Name":"Disciples","KeyPicture":"\/20170711\/1499760064182.jpg"},{"ID":"16370","Name":"The Walking Dead S06-EP12","KeyPicture":"\/20181212\/1544623162723.jpg"},{"ID":"16855","Name":"\u00dc\u00e7 Kagit\u00e7i","KeyPicture":"\/20190111\/1547197401580.jpg"},{"ID":"16017","Name":"Game of Thrones S04-EP06","KeyPicture":"\/20181210\/1544433860887.jpg"},{"ID":"14690","Name":"Always Shine-fr","KeyPicture":"\/20180227\/1519759663918.jpg"},{"ID":"15888","Name":"Prison Break S01-EP16","KeyPicture":"\/20181207\/1544182752405.jpg"},{"ID":"15820","Name":"Blindspot S02-EP04","KeyPicture":"\/20181207\/1544169877163.jpg"},{"ID":"15971","Name":"El Chapo S01-Ep03","KeyPicture":"\/20181208\/1544297598683.jpg"},{"ID":"16231","Name":"Homeland S05-EP08","KeyPicture":"\/20181211\/1544534974510.jpg"}];var live_statistic = {"online_users":"3964","channels":"4033","movies":"2201"};var channelUrl= 'http://q-hdtv.com/live-tv/?channelID=', movieUrl= 'http://q-hdtv.com/movies/?movieID=';		/*moving and channel slide list*/
		var scrolling_divs = document.getElementsByClassName('moving_channels_div');
		var k=0;
		for(var j=0;j<scrolling_divs.length;j++)
			for(var i=0;i<16;i++){
				var channel=scrolling_channels_list[k++];
				scrolling_divs[j].innerHTML+="<div class='channelblock' style='background-image:url(https://panel.q-hd.net/logo.php?l="+channel.KeyPicture+");' onclick='javascript:channel_redirect(\""+channelUrl+""+channel.ID+"\");'></div>";
			}
		scrolling_divs = document.getElementsByClassName('moving_movies_div');
		k=0;
		for(j=0;j<scrolling_divs.length;j++)
			for(i=0;i<16;i++){
				var movie=scrolling_movies_list[k++];
				scrolling_divs[j].innerHTML+="<div class='movieblock' style='background-image:url(https://panel.q-hd.net/logo.php?l="+movie.KeyPicture+");' onclick='javascript:channel_redirect(\""+movieUrl+""+movie.ID+"\");'></div>";
			}
	});
	
	</script>
	
<!-- All in One SEO Pack 3.3.5 by Michael Torbert of Semper Fi Web Design[295,331] -->
<meta name="description"  content="Q-HD TV utilizes the latest features of the fast and stable streaming technology .Q-HD is the ideal ex-pact TV for any foreigner who lives abroad his origin" />

<meta name="keywords"  content="q-hd , qhd, iptv, q-hdtv, tv, television, internet television, cdn tv, cloud tv, internet tv, all channels, many channels, computer tv, online tv, online television , watch , watch online" />
<meta name="google-site-verification" content="zDjiNfrOvJK3BPUUjorpQvnY0nO236V_P07kye1v3a8" />

<script type="application/ld+json" class="aioseop-schema">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"http://q-hdtv.com/#organization","url":"http://q-hdtv.com/","name":"QHDTV ","sameAs":[]},{"@type":"WebSite","@id":"http://q-hdtv.com/#website","url":"http://q-hdtv.com/","name":"QHDTV ","publisher":{"@id":"http://q-hdtv.com/#organization"}},{"@type":"WebPage","@id":"http://q-hdtv.com/#webpage","url":"http://q-hdtv.com/","inLanguage":"en-GB","name":"QHDTV ","isPartOf":{"@id":"http://q-hdtv.com/#website"},"about":{"@id":"http://q-hdtv.com/#organization"},"description":"TV Everywhere!"}]}</script>
<link rel="canonical" href="http://q-hdtv.com/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Q-HD IPTV - watch TV anywhere around the globe!" />
<meta property="og:description" content="Q-HD TV utilizes the latest features of the fast and stable streaming technology .Q-HD is the ideal ex-pact TV for any foreigner who lives abroad his origin country" />
<meta property="og:url" content="http://q-hdtv.com/" />
<meta property="og:site_name" content="Q-HD IPTV" />
<meta property="og:image" content="http://tv.likonic.pl/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Q-HD IPTV - watch TV anywhere around the globe!" />
<meta name="twitter:description" content="Q-HD TV utilizes the latest features of the fast and stable streaming technology .Q-HD is the ideal ex-pact TV for any foreigner who lives abroad his origin country" />
<meta name="twitter:image" content="http://tv.likonic.pl/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" />
<!-- All in One SEO Pack -->
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//www.gstatic.com' />
<link rel='dns-prefetch' href='//www.google.com' />
<link rel='dns-prefetch' href='//use.fontawesome.com' />
<link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
<link rel='dns-prefetch' href='//maps.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="QHDTV  &raquo; Feed" href="http://q-hdtv.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="QHDTV  &raquo; Comments Feed" href="http://q-hdtv.com/comments/feed/" />


<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel='stylesheet' id='cptch_stylesheet-css'  href='http://q-hdtv.com/wp-content/plugins/captcha/css/front_end_style.css?ver=4.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='http://q-hdtv.com/wp-includes/css/dashicons.min.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='cptch_desktop_style-css'  href='http://q-hdtv.com/wp-content/plugins/captcha/css/desktop_style.css?ver=4.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='email-subscribers-css'  href='http://q-hdtv.com/wp-content/plugins/email-subscribers/lite/public/css/email-subscribers-public.css' type='text/css' media='all' />
<link rel='stylesheet' id='my_account-css'  href='http://q-hdtv.com/wp-content/plugins/my_account/public/css/my_account-public.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='my_account-alert-css'  href='http://q-hdtv.com/wp-content/plugins/my_account/public/partials/alert.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='my_account-backgroundSlide-css'  href='http://q-hdtv.com/wp-content/plugins/my_account/public/css/backgroundSlide.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='my_account-bootstrap-social-css'  href='http://q-hdtv.com/wp-content/plugins/my_account/public/css/bootstrap-social.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='my_account-MovieTV-css'  href='http://q-hdtv.com/wp-content/plugins/my_account/public/css/MovieTV.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='my_account-intlTelInput-css'  href='http://q-hdtv.com/wp-content/plugins/my_account/public/css/intlTelInput.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='LiveTV-hls-css'  href='http://q-hdtv.com/wp-content/plugins/my_account/public/mediaplayer/hls.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='LiveStatistics-css'  href='https://q-hdtv.com/wp-content/plugins/my_account/public/css/LiveStatistic.css?ver=5.5.1' type='text/css' media='all' />
</style>

<style id='woolentor-widgets-pro-inline-css' type='text/css'>

        
            .woolentor-page-template .woocommerce{
                margin: 0 auto;
                width: 1140px;
            }
        
        
        
        .woocommerce-notices-wrapper{
            margin: 0 auto;
            width: 1140px;
        }
    
        
</style>
<link rel='stylesheet' id='hfe-style-css'  href='http://q-hdtv.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='simple-line-icons-wl-css'  href='http://q-hdtv.com/wp-content/plugins/woolentor-addons/assets/css/simple-line-icons.css?ver=1.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='htflexboxgrid-css'  href='http://q-hdtv.com/wp-content/plugins/woolentor-addons/assets/css/htflexboxgrid.css?ver=1.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='slick-css'  href='http://q-hdtv.com/wp-content/plugins/woolentor-addons/assets/css/slick.css?ver=1.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='woolentor-widgets-css'  href='http://q-hdtv.com/wp-content/plugins/woolentor-addons/assets/css/woolentor-widgets.css?ver=1.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_font-css'  href='//fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C400italic%7CMontserrat%3A400%2C700%7CHomemade+Apple&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_font_all-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600italic%2C600%2C700%2C700italic%2C800%2C800italic&#038;ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_bootstrap_style-css'  href='http://q-hdtv.com/wp-content/themes/zerif-lite/css/bootstrap.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_fontawesome-css'  href='http://q-hdtv.com/wp-content/themes/zerif-lite/css/font-awesome.min.css?ver=v1' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_style-css'  href='http://q-hdtv.com/wp-content/themes/zerif-lite/style.css?ver=v1' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_responsive_style-css'  href='http://q-hdtv.com/wp-content/themes/zerif-lite/css/responsive.css?ver=v1' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='zerif_ie_style-css'  href='http://q-hdtv.com/wp-content/themes/zerif-lite/css/ie.css?ver=v1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='__EPYT__style-css'  href='http://q-hdtv.com/wp-content/plugins/youtube-embed-plus/styles/ytprefs.min.css?ver=13.2.3' type='text/css' media='all' />
<style id='__EPYT__style-inline-css' type='text/css'>

                .epyt-gallery-thumb {
                        width: 33.333%;
                }
                
</style>
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.5.1' type='text/css' media='all' />

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js?ver=5.5.1' id='my_account-jquery-js'></script>

<script type='text/javascript' src='https://use.fontawesome.com/releases/v5.0.6/js/all.js?ver=1.0.0' id='my_account-fontawesome-js'></script>

<script type='text/javascript' src='http://q-hdtv.com/wp-content/plugins/my_account/public/js/ChangePassword.js?ver=1.0.0' id='my_account-changePassword-js'></script>


	<link rel="icon" href="http://q-hdtv.com/wp-content/uploads/2020/10/cropped-logo-512512-1-32x32.png" sizes="32x32" />
<link rel="icon" href="http://q-hdtv.com/wp-content/uploads/2020/10/cropped-logo-512512-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="http://q-hdtv.com/wp-content/uploads/2020/10/cropped-logo-512512-1-180x180.png" />
<meta name="msapplication-TileImage" content="http://q-hdtv.com/wp-content/uploads/2020/10/cropped-logo-512512-1-270x270.png" />
		<style type="text/css" id="wp-custom-css">
			.company-details ul {
    text-align: left ;
    list-style-type: none;
}

.company-details li {
    border-bottom: #979CC7 solid 1px ;
    padding: 10px ;
}

.company-details a {
	color: white ;
}

.company-details a:hover {
	color: #979CC7 ;
}

#tweets {
    height: 430px ;
    overflow: auto ;
}


#newsfeed {
    padding: 30px ;
		background-color: #131A5A ;
		border-radius: 15px ;
		height: 430px ;
		text-align: left ;
}

#newsfeed button{
    width: 92% ;
    height: 50px ;
		border:black solid 1px ;
	text-align: center ;
		

}

#newsfeed label {
    font-size: 18px ;
    margin-top: 30px ;
    color: white ;
		background: none ;
		padding: 0 ;
		width: 50% ;
		border-bottom: #979CC7 	solid 1px ;
		
}

.widget .widget-title:before {
	display: none ;
}

#newsfeed input {
    margin-top: 15px ;
    margin-bottom: 40px ;
		border-radius: 4px ;
		height: 50px ;
		font-size: 18px ;
		border: black solid 1px;
}

.widget-title {
	text-decoration: none;
	background-color: #303C9A;
	border-radius: 5px ;
	padding: 5px ;
	
}

.btn {
	background-color: #2A3BD7 ;
}

.btn:hover {
	background-color: #7D86D7 ;
	text-decoration:underline ;
	text-decoration-color: white ;
}

.separator-one , .contact-us{
	background: rgba(125, 134, 215, 0.7) ;
}

.separator-one .btn {
	background-color: #2A3BD7 ;
}

.separator-one .btn:hover {
	background-color: #7D86D7 ;
	text-decoration-color: white ;
}


.purchase-now  {
	background-color: #5761C0 ;
} 

.testimonial {
	background-color: #40478C ;
}

.rpt_subtitle {
	color: white !important ;
	background-color: #949BE2 ;
}

.rpt_foot {
	background-color: #2A3BD7 !important;
}

#pirate-forms-contact-submit:hover{
	background-color: #7D86D7 ;
	text-decoration-color: white ;
}

.client i {
	color: #C7C9E2 !important;
}

#footer {
	background-color: #131A5A ;
}

.footer-widget-wrap {
	background-color: #1C2474 ;
}

.copyright {
	background-color: #0D1138 ;
}

.copyright a {
	color: white ;
}


@media (max-width: 767px){
	
	.navbar-inverse .navbar-nav ul.sub-menu {
    display: block !important;
}
	
}

::selection {
  background: #a8d1ff;
}

::-moz-selection {
  background: #a8d1ff;
}

.ThemesShowStatsStyles {
	display: inline-block ;
	padding-right: 18% ;
	padding-bottom: 30px ;
}

.ThesShowStatsCustomerStyle {
	font-size: 35px ;
}

.entry-title:after {
	background: #131A5A ;
}

.wsdesk_wrapper .btn-primary {
	margin-top: 10px ;
}
		</style>
		
</head>


	<body class="home blog custom-background theme-zerif-lite woocommerce-no-js ehf-template-zerif-lite ehf-stylesheet-zerif-lite group-blog elementor-default elementor-kit-29195" >



<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">


<header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

	
	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only">Toggle navigation</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

				<a href="http://q-hdtv.com/" class="navbar-brand"><img src="http://q-hdtv.com/wp-content/uploads/2020/10/logo-512512.png" alt="QHDTV "></a>
			</div>

				<nav class="navbar-collapse bs-navbar-collapse collapse" id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<a class="screen-reader-text skip-link" href="#content">Skip to content</a>
		<ul id="menu-top-menu" class="nav navbar-nav navbar-right responsive-nav main-nav-list"><li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-32"><a href="http://q-hdtv.com" aria-current="page">Home</a></li>
<li id="menu-item-20132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20132"><a href="http://q-hdtv.com/about-us/">About Us</a></li>
<li id="menu-item-771" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-771"><a href="http://q-hdtv.com/how-to-watch/">How to watch</a></li>
<li id="menu-item-545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-545"><a href="http://q-hdtv.com/live-tv/">Live TV</a></li>
<li id="menu-item-561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-561"><a href="http://q-hdtv.com/my-account/">Login / Register</a></li>
<li id="menu-item-654" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-654"><a href="http://tv.likonic.pl">Support</a>
<ul class="sub-menu">
	<li id="menu-item-19885" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19885"><a href="http://q-hdtv.com/q-hd-tv-support/">Open a ticket</a></li>
	<li id="menu-item-593" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-593"><a href="http://q-hdtv.com/download/">Download</a></li>
	<li id="menu-item-376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-376"><a href="http://q-hdtv.com/f-a-q/">F.A.Q</a></li>
	<li id="menu-item-831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-831"><a href="http://q-hdtv.com/report/">Report Error</a></li>
	<li id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-76"><a href="http://q-hdtv.com/term-and-condition/">Terms and Conditions</a></li>
	<li id="menu-item-774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-774"><a href="http://q-hdtv.com/tutorials/">Tutorials</a></li>
</ul>
</li>
<li id="menu-item-21134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21134"><a href="http://q-hdtv.com/shop/">Shop</a></li>
</ul>	</nav>
	
		</div>

	</div>
		<!-- / END TOP BAR -->

	<div class="home-header-wrap">

<div class="header-content-wrap"><div class="container"><h1 class="intro-text">QHD TV  Best EXPAT TV </h1><div class="buttons"><a href="http://q-hdtv.com/my-account/" class="btn btn-primary custom-button red-btn">LOGIN / REGISTER 4  free </a><a href="http://q-hdtv.com/live-tv/" class="btn btn-primary custom-button green-btn">Watch Now</a></div></div></div><!-- .header-content-wrap --><div class="clear"></div>
</div>
</header> <!-- / END HOME SECTION  -->