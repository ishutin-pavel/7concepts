<?
/*
Template name: Главная
 */
get_header();


/*
 * Первый блок
 */
require get_template_directory() . '/' . 'template-blocks/first.php';

/*
 * Этапы работы
 */
require get_template_directory() . '/' . 'template-blocks/stages.php';

/*
 * Наши проекты
 */
require get_template_directory() . '/' . 'template-blocks/ourprojects.php';

/*
 * Видео реализованных проектов
 */
require get_template_directory() . '/' . 'template-blocks/realprojects.php';

/*
 * Пример рабочего проекта
 */
require get_template_directory() . '/' . 'template-blocks/plan.php';


/*
 * Пакеты услуг
 */
require get_template_directory() . '/' . 'template-blocks/services.php';


/*
 * Уникальное предложение
 */
require get_template_directory() . '/' . 'template-blocks/sale.php';


/*
 * Консультация
 */
require get_template_directory() . '/' . 'template-blocks/consult.php';

/*
 * Цены
 */
require get_template_directory() . '/' . 'template-blocks/cost.php';

/*
 * Чем мы можем быть полезны
 */
require get_template_directory() . '/' . 'template-blocks/we-help.php';




/* отключил клиент
<div class="consult">
    <h2 class="client__header client__header--cost">
        <?=get_field('consult_title');?>
    </h2>
    <div class="consult__form">
      <?=do_shortcode( get_field('consult_sc') );?>
    </div>
</div>
*/

?>

    <div class="calculate" style="background: url('<?=get_field('consult_bg');?>');background-size:cover;background-repeat: no-repeat;">

    <div class="team" id="team">
        <h2 class="client__header client__header--mb">
            <?=get_field('com_title')?>
        </h2>

       <div class="team__content">
           <img class="team__contentimg" src="<?=get_field('com_img')?>" alt="team">

           <div class="team_description">
                <img src="<?=get_template_directory_uri();?>/img/team/team__border.png" alt="" class="team__border">
                <?=get_field('com_txt')?>
           </div>
       </div>
    </div>


    <div class="cost" id="otziv" style="padding-bottom:50px;">

        <h2 class="client__header client__header--cost">
            <?=get_field('otziv_title');?>
        </h2>

        <div class="otziv-slider owl-carousel owl-theme owl-theme--low">
          <?
            if (get_field('otziv_styles')) :
              foreach (get_field('otziv_styles') as $price) :
          ?>
            <div class="carousel__photo carousel__photo--low carousel__photo--1">
                <img class="owl-lazy" data-src="<?=$price['otziv_img'];?>" alt="1">
                <div class="lowcarousel__hover lowcarousel__hover--1">
                </div>
            </div>
          <?
              endforeach;
            endif;
          ?>
        </div>
    </div>


  <div class="client" id="client">
      <h2 class="client__header">
        <?=get_field('plus_title');?>
      </h2>

      <div class="container">
          <div class="row client__uprow">
              <div class="col-md-6 col-xl-6 client__desc client__desc--border">
                  <img src="<?=get_template_directory_uri();?>/img/client/add-button.png" alt="plus" class="desc__img">
                  <h3 class="desc__header">
                      Вы наш клиент, если ...
                  </h3>
                  <ul class="desc__list">
                    <?
                      if (get_field('plus_plus')) :
                        foreach (get_field('plus_plus') as $val) :
                    ?>
                      <li class="desc__listelement">
                        <?=$val['plus'];?>
                      </li>
                    <?
                        endforeach;
                      endif;
                    ?>
                      <!-- <li class="desc__listelement">
                          Хотите реализовать дизайн как можно раньше<br class="desktop__br"> и заехать в уютную современную квартиру<br> с функциональной планировкой
                      </li>
                      <li class="desc__listelement">
                          Не хотите ходить на стройку и выяснять отношения<br class="desktop__br"> с прорабами
                      </li>
                      <li class="desc__listelement">
                          Располагаете необходимым количеством средств<br class="desktop__br"> (от 100 тыс. тг/м2) для быстрой реализации ремонта<br class="desktop__br"> и непрерывной поставки материалов
                      </li>
                      <li class="desc__listelement">
                          Вы очень заняты и ресурс времени для Вас превыше всего
                      </li> -->
                  </ul>
              </div>
              <!-- <div class="col-xl-12 client__line client__line--mobile"></div> -->
              <div class="col-md-6 col-xl-6 client__desc">
                  <img src="<?=get_template_directory_uri();?>/img/client/minus.png" alt="plus" class="desc__img">
                  <h3 class="desc__header">
                      Вы не наш клиент, если ...
                  </h3>
                  <ul class="desc__list">
                    <?
                      if (get_field('plus_minus')) :
                        foreach (get_field('plus_minus') as $val) :
                    ?>
                      <li class="desc__listelement desc__listelement--bg">
                           <?=$val['minus'];?>
                      </li>
                    <?
                        endforeach;
                      endif;
                    ?>
                      <!-- <li class="desc__listelement desc__listelement--bg">
                          Вы хотите получить только красивые картинки,<br class="desktop__br"> которые рискуют остаться нереализованными
                      </li>
                      <li class="desc__listelement desc__listelement--bg">
                          Готовы заниматься дизайном полгода
                      </li>
                      <li class="desc__listelement desc__listelement--bg">
                          Вы не доверяете профессионализму дизайнера<br class="desktop__br"> и хотите диктовать и контролировать все сами
                      </li> -->
                  </ul>
              </div>
              <div class="col-xl-12 client__line client__line--desktop"></div>
          </div>
              <div class="client__quote">
                 <img src="<?=get_template_directory_uri();?>/img/client/quotes.png" alt="quote" class="quote__img quote__img_start">
                 <?php echo get_field('plus_down'); ?>
                 <img src="<?=get_template_directory_uri();?>/img/client/quotes1.png" alt="quote" class="quote__img quote__img_end quote__img--1">
              </div>

          <a href="#" class="show-modal">
              <div class="body__button body__button--client">Получить консультацию</div>
          </a>

  </div>
  </div>



        <div class="calculate__header" id="calculate">
            <h2>
            Рассчитать стоимость
            </h2>
            <img class="calculate__border1" src="<?=get_template_directory_uri();?>/img/calculate/calculate__header--border.png" alt="calculate__header--border">
            <img class="calculate__border2" src="<?=get_template_directory_uri();?>/img/calculate/calculate__header--border1.png" alt="calculate__header--border">
        </div>

        <?=do_shortcode(get_field('calc_sc'));?>
    </div>


<?php

/*
 * Если Вы все ещё думаете, что дизайн это дорого
 */
require get_template_directory() . '/' . 'template-blocks/graph.php';

/*
 * Блог
 */
require get_template_directory() . '/' . 'template-blocks/blog.php';


get_footer();
