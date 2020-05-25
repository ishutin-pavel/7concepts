
<div class="modal-fade">
   <div class="modal__holder">
    <div class="modal-popup">
       <div class="modal__container">
            <h2 class="client__header client__header--modal">Введите свои данные</h2>
            <h3 class="desc__header desc__header--modal">Введите своё имя и телефон</h3>
            <?=do_shortcode('[contact-form-7 id="271" title="Заказ"]');?>
            <div class="close">
                <img src="<?=get_template_directory_uri();?>/img/header_body/close1.png" alt="">
            </div>
       </div>
    </div>
   </div>
</div>

<footer class="footer">
  <div class="header__nav header__nav--footer">
    <div class="nav__element nav__element--footer nav__logo nav__logo--footer">
      <a href="/">
          <img src="<?php the_field('head_logo', 'option'); ?>" alt="Logo" class="nav__element">
      </a>
    </div><br class="footer__br">
    <div class="nav__element nav__element--footer nav__adress">
        <ul class="nav__list nav__list--footer">
            <li><?=get_field('head_city', 'option') ? get_field('head_city', 'option') : null; ?></li>
            <li><?=get_field('head_address', 'option') ? get_field('head_address', 'option') : null; ?></li>
        </ul>
    </div><br class="footer__br">
    <div class="nav__element nav__element--footer nav__phone">
        <ul class="nav__list nav__list--footer">
            <? if (get_field('head_phone1', 'option')) : ?>
            <li><img src="<?=get_template_directory_uri();?>/img/header_nav/smartphone.png" alt="smartphone"><?=get_field('head_phone1', 'option')?></li>
            <? endif; ?>
            <? if (get_field('head_phone2', 'option')) : ?>
            <li><img src="<?=get_template_directory_uri();?>/img/header_nav/telephone.png" alt="telephone" class="img__telephone"><?=get_field('head_phone2', 'option')?></li>
            <? endif; ?>
        </ul>
    </div><br class="footer__br">
    <div class="nav__element nav__element--footer nav__mail">
        <ul class="nav__list nav__list--footer">
            <? if (get_field('head_mail', 'option')) : ?>
            <li><img src="<?=get_template_directory_uri();?>/img/header_nav/email.png" alt="email"><?=get_field('head_mail', 'option');?></li>
            <? endif; ?>
            <li><img src="<?=get_template_directory_uri();?>/img/header_nav/instagram.png" alt="instagram"><?=get_field('head_insta', 'option');?></li>
        </ul>
    </div>
  </div>
</footer>
    
    <div class="copyright">
        <p class="copyright__text">
            <?=get_field('copy', 'option');?>
			<!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=61666252&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/61666252/3_0_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0; margin-left:20px" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="61666252" data-lang="ru" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(61666252, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/61666252" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
        </p>
    </div>

<?php wp_footer(); ?>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(54690487, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/54690487" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144889594-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144889594-1');
    </script>

    <script src="//code.jivosite.com/widget.js" jv-id="DxCDs0f2gd" async></script>

</body>
</html>
