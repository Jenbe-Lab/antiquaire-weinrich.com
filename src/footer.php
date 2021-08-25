<footer class="footer">
  <div class="container">
    <p class="footer__contact-message">
      Pour tout rendez-vous ou demande d'informations supplémentaires, contactez-nous !
    </p>

    <div class="footer__contact-wrapper">
      <div class="footer__contact">
        <div class="footer__contact-label">Tél.</div>
        <div class="footer__contact-value"><a href="tel:0658084516">06 58 08 45 16</a></div>
      </div>
      <div class="footer__contact">
        <div class="footer__contact-label">Mél.</div>
        <div class="footer__contact-value"><a
            href="mailto:antiquaireweinrich@gmail.com">antiquaireweinrich@gmail.com</a>
        </div>
      </div>
      <div class="footer__contact">
        <div class="footer__contact-label">Tél.</div>
        <div class="footer__contact-value">
          8b Rue Alfred Krieger<br>
          57070 Saint-Julien-lès-Metz
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="legal">
  <div class="legal__copyright">
    Copyright &copy; Stéphane Weinrich - 2021-
    <script>document.write(new Date().getFullYear().toString(10))</script>
    . Tous droits réservés.
  </div>

  <?php wp_nav_menu([
    'menu'            => 'footer',
    'container'       => 'nav',
    'container_class' => 'legal__nav',
  ]); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>