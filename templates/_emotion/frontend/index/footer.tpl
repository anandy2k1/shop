{*<div id="footer">

	{block name='frontend_index_footer_menu'}
		{include file='frontend/index/menu_footer.tpl'}
		<div class="clear"></div>
	{/block}

</div>

	{block name='frontend_index_footer_copyright'}
	<div class="bottom">
		{block name='frontend_index_footer_vatinfo'}
		<div class="footer_info">
            {if $sOutputNet}
				<p>{s name='FooterInfoExcludeVat'}&nbsp;{/s}</p>
			{else}
				<p>{s name='FooterInfoIncludeVat'}&nbsp;{/s}</p>
			{/if}
		</div>
		{/block}
		<div class="footer_copyright">
			<span>{s name="IndexCopyright"}Copyright &copy; 2012 shopware AG{/s}</span>
		</div>
	</div>
	{/block}*}


<div class="footer-main">
    <div class="footer-line1"></div>
    <br class="clear">

    <div class="info">
        <div class="info-left">
            <img src="{link file='frontend/_resources/images/beruns.png'}" alt="">
            <div class="info-div">
                <span class="info-text">Die Lotusblume ist in vielen östlichen Kulturen ein Symbol für Reinheit, Friede und Schönheit. Den besonderen Ruf erhält die Lotusblume aufgrund ihrer außergewöhnlichen Oberflächenstruktur die Wasser, Staubpartikel, Schlamm sowie Mikroorganismen abperlen und damit stets in vollendeter Schönheit erblühen lässt.</span>
            </div>
        </div>
        <div class="info-center">
            <img src="{link file='frontend/_resources/images/ZertifizierteBioQual.png'}" alt="">
            <img src="{link file='frontend/_resources/images/GOTSLOGO.png'}" alt="">
            <br class="clear">
                    <span class="info-text">
                        Organic certified by BCS<br>
                        Licence no. 21988
                    </span>
        </div>
        <div class="info-right">
            <img src="{link file='frontend/_resources/images/BesucheunsaufFaceboo.png'}" alt="">

            <div>

                <div class="info-right-right">
                    <br>
                    <div id="fb-root"></div>
                    <script type="text/javascript">(function(d, s, id) {
                            var js, fjs= d.getElementsByTagName(s)[0];
                            if(d.getElementById(id)) return;
                            js= d.createElement(s); js.id = id;
                            js.src= "//connect.facebook.net/de_DE/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                </div>
                {*<div class="fb-like-box" data-href="https://www.facebook.com/lotuscrafts" data-width="292" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>*}
                <div class="fb-like-box" data-href="https://www.facebook.com/lotuscrafts" data-width="300" data-height="The height of the plugin in pixels (optional)." data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
            </div>
        </div>
    </div>
    <br class="clear">
    <div class="line margin-top-40"></div>
    <br class="clear">
    <div id="footer">
    {block name='frontend_index_footer_menu'}
        {include file='frontend/index/menu_footer.tpl'}
        <div class="clear"></div>
    {/block}
    </div>
{*    <div class="footer-main-2">
        <div class="footer1">
            <h3 class="font-handsean">Kundeservice</h3>
            <ul class="nev">
                <li><a href="#">Kotakt</a></li>
                <li><a href="#">Versandkosten</a></li>
                <li><a href="#">Retouren/Umtausch</a></li>
                <li><a href="#">Impressum</a></li>
                <li><a href="#">AGB</a></li>
                <li><a href="#">Widerruf</a></li></ul>
        </div>
        <div class="footer2">
            <h3 class="font-handsean">
                Beratung & mehr
            </h3>
            <ul class="nev">
                <li><a href="#">Stoffe und Farben</a></li>
                <li><a href="#">Warum Bio-Baumwolle?</a></li>
                <li><a href="#">GOTS Zertifizierung</a></li>
                <li><a href="#">Welches Meditationskissen?</a></li></ul>
        </div>
        <div class="footer3">
            <h3 class="font-handsean">
                Gewerbekunden
            </h3>
            <ul class="nev">
                <li><a href="#">Yogalehrerrabatt</a></li>
                <li><a href="#">Gewerbekunden</a></li>
                <li><a href="#">Händlerzugang</a></li></ul>
        </div>
        <div class="footer4">
            <h3 class="font-handsean">
                Newsletter
            </h3>


            <span class="info-text">Abonnieren Sie den kostenlosen DemoShop Newsletter und verpassen Sie keine Neuigkeit oder Aktion mehr aus dem DemoShop. </span>
            <form action="{url controller='newsletter'}" method="post">

                <input type="hidden" value="1" name="subscribeToNewsletter" />

                <div class="fieldset newsletter-footer">
                    <input type="text" name="newsletter" id="newsletter_input" value="{s name="IndexFooterNewsletterValue"}Ihre E-Mail Adresse{/s}" class="news" />
                    <input type="submit" class="submit" id="newsletter" value="Anmelden" />
                </div>
            </form>
            *}{*<br><Br class="clear">*}{*
            *}{*<a  class="news-submit" href="#"><img src="images/Anmelden.png"></a>*}{*
        </div>
    </div>*}
    <br class="clear">
    <div class="footer-line"></div>

    <div class="footer-images">
        <div class="footer-images-left">
            <img src="{link file='frontend/_resources/images/Wirversendenmit.png'}" alt="">
            <img src="{link file='frontend/_resources/images/DHLLOGO.png'}" alt="">
        </div>
        <div class="footer-images-right">
            <img src="{link file='frontend/_resources/images/Einfachundsicherbeza.png'}" alt="">
            <img src="{link file='frontend/_resources/images/MasterCardLOGO.png'}" alt="">
            <img src="{link file='frontend/_resources/images/VisaLOGO.png'}" alt="">
            <img src="{link file='frontend/_resources/images/PayPalLOGO.png'}" alt="">
            <img src="{link file='frontend/_resources/images/SofortLOGO.png'}" alt="">
        </div>
    </div>
    <br class="clear">
    <div class="line"></div>
    <br class="clear"><br>
</div>