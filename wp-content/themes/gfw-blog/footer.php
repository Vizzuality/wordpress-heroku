<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package GFW blog
 */
?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
      <?php do_action( 'gfw_blog_credits' ); ?>

      <div class="footer-share">
        <p>Because deforestation matters.</p>

        <div class="visit-link">
          <a href="http://www.globalforestwatch.org/">Visit GFW website</a>
        </div>
      </div>
    </div>

    <div class="footer-logos">
      <div class="logos">
        <p><strong>Partners</strong></p>
        <a href="http://earthengine.google.org/" class="footer-logo google" target="_blank"></a>
        <a href="http://www.esri.com/" class="footer-logo esri" target="_blank"></a>
        <a href="http://www.geog.umd.edu/" class="footer-logo universitymaryland" target="_blank"></a>
        <a href="http://www.unep.org/" class="footer-logo unep" target="_blank"></a>
        <a href="http://www.imazon.org.br/pagina-inicial-en?set_language=en&amp;cl=en" class="footer-logo imazon last" target="_blank"></a>
        <a href="http://www.cgdev.org/" class="footer-logo cfgd" target="_blank"></a>
        <a href="http://osfac.net/index.php?lang=en" class="footer-logo osfac" target="_blank"></a>
        <a href="http://globalforestwatch.ca/" class="footer-logo gfwca" target="_blank"></a>
        <a href="http://www.scanex.ru/ru/index.html" class="footer-logo scannex" target="_blank"></a>
        <a href="http://www.transparentworld.ru/ru/" class="footer-logo twrus last" target="_blank"></a>
        <a href="http://www.regjeringen.no/nb/dep/kld.html?id=668" class="footer-logo norwegian" target="_blank"></a>
        <a href="http://www.usaid.gov/climate/tfa2020" class="footer-logo usaid" target="_blank"></a>
        <a href="http://www.thegef.org/gef/" class="footer-logo gef" target="_blank"></a>
        <a href="https://www.gov.uk/government/organisations/department-for-international-development" class="footer-logo ukaid" target="_blank"></a>
        <a href="http://tiliafund.org/" class="footer-logo tilia last" target="_blank"></a>
      </div>
    </div>

    <div class="footer-address">
      <a href="http://www.wri.org" class="footer-logo wri last" target="_blank"></a>
      <address>10 G Street NE Suite 800, Washington, DC 20002, USA<br />Phone +1 (202) 729-7600 / Fax +1 (202) 729-7610 Email <a href="mailto:gfw@wri.org">gfw@wri.org</a></address>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- social -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&status=0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script type="text/javascript">
(function() {
  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  po.src = 'https://apis.google.com/js/plusone.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

</body>
</html>