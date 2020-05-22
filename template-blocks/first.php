  <div class="container">
    <div class="body__name">
      Студия дизайн интерьера<br>жилых и коммерческих объектов
    </div>
    <h1 class="body__header">СДЕЛАЕМ СТИЛЬНЫЙ ДИЗАЙН В РАМКАХ ВАШЕГО БЮДЖЕТА<br>И РЕАЛИЗУЕМ ЕГО С ПРОВЕРЕННЫМИ СТРОИТЕЛЯМИ И МЕБЕЛЬЩИКАМИ</h1>
  </div><!-- .container -->

  <a href="#" class="show-modal">
      <div class="body__button">Подробнее</div>
  </a>

  <div class="container body__cardcontainer">
      <div class="row">
      <? if (get_field('main_benefit')) :
      foreach (get_field('main_benefit') as $val) :
      ?>
        <div class="col-12 col-md-6 col-xl-6 body__card">
            <img src="<?=$val['logo'];?>" alt="security"  class="card__img--security">
            <p class="card__text--security"><?=$val['benefit'];?></p>
        </div>
      <?
      endforeach;
      endif;
      ?>
      </div>
  </div>

  </div><!-- .header__body -->
</div><!-- .header -->
