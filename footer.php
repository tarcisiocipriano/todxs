<?php
/**
 * The template for displaying the footer
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Todxs
*/
?>
    <footer class="footer">

      <section class="footer__content py-4">
        <div class="container">
          <div class="row">
            <div class="footer__content__payment col-12 col-lg-6 pb-3 pb-lg-0">
              <h4 class="text-center text-lg-left">Formas de pagamento</h4>
              <ul class="d-flex align-items-center justify-content-center justify-content-lg-start">
                <li><span class="icon icon--payment-mastercard"></span></li>
                <li><span class="icon icon--payment-visa"></span></li>
                <li><span class="icon icon--payment-hipercard"></span></li>
                <li><span class="icon icon--payment-american-express"></span></li>
                <li><span class="icon icon--payment-elo"></span></li>
                <li><span class="icon icon--payment-boleto"></span></li>
              </ul>
            </div>
            <div class="footer__content__social col-12 col-lg-6 pt-3 pt-lg-0">
              <ul class="h-100 d-flex justify-content-center justify-content-lg-end align-items-end">
                <!-- to-do: add links -->
                <li><span class="icon icon--social-facebook"></span></li>
                <li><span class="icon icon--social-instagram"></span></li>
                <li><span class="icon icon--social-whatsapp"></span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="footer__copyright py-4">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 text-center text-lg-left">
              <p>Ⓒ <?php echo date('Y'); ?> - Sex Shop Todxs - Todos os direitos reservados.</a></p>
            </div>
            <div class="col-12 col-lg-4 text-center text-lg-right">
              <p>Desenvolvido por <a href="https://tarcisiocipriano.com/"><strong>Tarcísio Cipriano</strong></a></p>
            </div>
          </div>
        </div>
      </section>

    </footer>

  </div>
<?php wp_footer(); ?>
</body>
</html>