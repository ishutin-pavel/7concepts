<?
/*
Template name: Главная
 */

?>

<? get_header(); ?>
            <meta name="yandex-verification" content="899fb00728790d7f" />
            <div class="container">
              <div class="body__name">
                Студия дизайн интерьера<br>жилых и коммерческих объектов
              </div>
              <h1 class="body__header">СДЕЛАЕМ СТИЛЬНЫЙ ДИЗАЙН В РАМКАХ ВАШЕГО БЮДЖЕТА И РЕАЛИЗУЕМ ЕГО С ПРОВЕРЕННЫМИ СТРОИТЕЛЯМИ И МЕБЕЛЬЩИКАМИ</h1>
            </div><!-- .container -->
<?php /*
            <h1 class="body__header">
                <?=get_field('main_title');?>
                <?=get_field('main_subtitle');?>
            </h1>
            <h2 class="body__sub">
              <?//=get_field('main_subtitle');?>
            </h2>
 */ ?>

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
        </div>

    </div>

    <div class="stages">
        <h2 class="client__header">
            Этапы <span class="client__header client__header--yellow">работ</span>
        </h2>
      <img class="stages__img stages__img_0" src="/wp-content/uploads/2020/05/infographic_0.png">
      <img class="stages__img stages__img_1" src="/wp-content/uploads/2020/05/infographic_1.png">
      <img class="stages__img stages__img_2" src="/wp-content/uploads/2020/05/infographic_2.png">
      <img class="stages__img stages__img_3" src="/wp-content/uploads/2020/05/infographic_3.png">
      <img class="stages__img stages__img_4" src="/wp-content/uploads/2020/05/infographic_4.png">
      <img class="stages__img stages__img_5" src="/wp-content/uploads/2020/05/infographic_5.png">
      <img class="stages__img stages__img_6" src="/wp-content/uploads/2020/05/infographic_6.png">
      <img class="stages__img stages__img_7" src="/wp-content/uploads/2020/05/infographic_7.png">
      <img class="stages__img stages__img_8" src="/wp-content/uploads/2020/05/infographic_8.png">
    </div>


    <div class="ourprojects" id="opp">

        <h2 class="client__header">
            Наши <span class="client__header client__header--yellow">проекты</span>
        </h2>

           <div class="projects__gallery">

          <?
            if (get_field('job_job')) :
              foreach (get_field('job_job') as $key1 => $val) :
          ?>
          <div class="projects__holder">
               <div class="lowcarousel__hover lowcarousel__hover--gallery">
                  <h3 class="hover__header hover__header--gallery"><?=$val['title'];?></h3>
                  <p class="hover__text hover__text--gallery"><?=$val['kv'];?></p>
               </div>

               <img src="<?=$val['job_main_img'];?>" alt="1" class="projects__image">
               <a data-fancybox="gallery-<?=$key1;?>" data-src="#modal<?=$key1;?>" href="javascript:;" class="img__text img__text--1">Просмотр</a>
               <div class="modal-window modal-window--img" id="modal<?=$key1;?>" style="display: none; padding: 0;">
               <img class="gallery__img" src="<?=$val['jobs_img'][0]['img'];?>" alt="0">
               </div>

              <?
                if ($val['jobs_img']) :
                  foreach (array_slice($val['jobs_img'], 1) as $key => $img) :
              ?>
                <div data-fancybox="gallery-<?=$key1;?>" class="modal-window modal-window--img" id="modal<?=$key1;?>" style="display: none; padding: 0;">
                  <img class="gallery__img" src="<?=$img['img'];?>" alt="<?=$key+1;?>">
                </div>
              <?
                  endforeach;
                endif;
              ?>
           </div>
          <?
              endforeach;
            endif;
          ?>
           </div>

        </div>

    <div class="realprojects" id="realprojects">
        <h2 class="client__header client__header--real">
            <?=get_field('project_title');?>
        </h2>

        <div class="owl-carousel owl-theme">


        <?
          if (get_field('projects')) :
            foreach (get_field('projects') as $proj) :
              echo '<div>'.$proj['pr_link'].'</div>';
            endforeach;
          endif;
        ?>

        </div>

    </div>

  <div class="realprojects" id="simpleproject">
       <h2 class="client__header client__header--real">
            <?=get_field('project_simple_title');?>
        </h2>
    <div class="container">
      <?=do_shortcode( get_field('project_simple') );?>
    </div>
  </div>



    <div class="services" id="services">
       <div class="services__text">
        <h2 class="client__header client__header--mb">
            <?=get_field('serv_title');?>
        </h2>
        <p class="services__desc"><?=get_field('serv_subtitle');?></p>
       </div>

        <div class="table__bg">
        <div class="topscroll">
            <div class="fake"></div>
        </div>
        <div class="services__table">
        <table>
            <tr class="table__heading">
                <th class="table__headingelemnt">Наименование услуги</th>
                <th class="table__headingelemnt table__headingelemnt--yellow table__headingelemnt--yellow--border">"Бюджет"</th>
                <th class="table__headingelemnt table__headingelemnt--yellow">"Стандарт"</th>
                <th class="table__headingelemnt table__headingelemnt--yellow">"Премиум"</th>
            </tr>
            <?
              if (get_field('serv_cat')) :
                foreach (get_field('serv_cat') as $key2 => $cat) :
            ?>

            <tr class="title_serv">
                <td><h3 class="row__heading row__heading--padding"><?=$cat['cat_title'];?></h3></td>
            </tr>
            <?
                  if ($cat['serv_serv']) :
                    foreach ($cat['serv_serv'] as $key => $ser) :


            ?>
                    <tr>
                        <td><span class="table__listnumber"><?=$key+1?>.</span> <?=$ser['service'];?> </td>
                        <td class="table__tick">
                          <? if ($ser['ser_karkas'] == 1) : ?>
                            <img src="<?=get_template_directory_uri();?>/img/services/tick.png" alt="tick">
                          <? endif; ?>
                        </td>
                        <td class="table__tick">
                          <? if ($ser['serv_ex'] == 1) : ?>
                            <img src="<?=get_template_directory_uri();?>/img/services/tick.png" alt="tick">
                          <? endif; ?>
                        </td>
                        <td class="table__tick">
                          <? if ($ser['serv_vip'] == 1) : ?>
                            <img src="<?=get_template_directory_uri();?>/img/services/tick.png" alt="tick">
                          <? endif; ?>
                        </td>
                    </tr>
            <?
                    endforeach;
                  endif;
                endforeach;
              endif;
            ?>

            <tr>
                <td></td>
                <td>
                    <a href="#" class="show-modal">
                        <div class="body__button body__button--services">
                            Стоимость
                        </div>
                    </a>

                </td>
                <td>
                    <a href="#" class="show-modal">
                        <div class="body__button body__button--services">
                            Стоимость
                        </div>
                    </a>
                </td>
                <td>
                    <a href="#" class="show-modal">
                        <div class="body__button body__button--services">
                            Стоимость
                        </div>
                    </a>
                </td>
            </tr>
        </table>

        </div>

    </div>
    </div>


    <div class="sale">
      <div class="container">
        <h2 class="client__header client__header--cost sale__title">УНИКАЛЬНОЕ ПРЕДЛОЖЕНИЕ: ЗАКАЖИТЕ РАЗРАБОТКУ ДИЗАЙН-КОНЦЕПЦИИ В КОЛЛАЖАХ ВСЕГО ЗА 200 ТГ ЗА КВ.М! РАЗРАБОТКА ИДЕАЛЬНОЙ ПЛАНИРОВКИ ВСЕГО ЗА 100 ТГ ЗА КВ.М</h2>
      </div>
    </div>

    <div class="consult">
        <h2 class="client__header client__header--cost">
            <?=get_field('consult_title');?>
        </h2>
        <div class="consult__form">
          <?=do_shortcode( get_field('consult_sc') );?>
        </div>
    </div>

    <div class="cost__bg">

        <div class="cost" id="cost">

        <h2 class="client__header client__header--cost">
            <?=get_field('price_title');?>
        </h2>

        <div class="owl-carousel owl-theme owl-theme--low">
          <?
            if (get_field('price_styles')) :
              foreach (get_field('price_styles') as $price) :
          ?>
            <div class="carousel__photo carousel__photo--low carousel__photo--1">
                <img src="<?=$price['style_img'];?>" alt="1">
                <div class="lowcarousel__hover lowcarousel__hover--1">
                    <p class="hover__text"><?=$price['style_name'];?></p>
                    <h3 class="hover__header"><?=$price['style_title'];?></h3>
                    <p class="hover__text"><?=$price['style_size'];?></p>
                </div>
            </div>
          <?
              endforeach;
            endif;
          ?>
        </div>
    </div>

<div class="we-help">
  <div class="container">
    <h2 class="client__header client__header--cost">Чем еще мы можем быть вам <span class="client__header--yellow">полезны</span></h2>
    <p>Частенько к нам обращаются клиенты, которые столкнулись с непрофессионализмом тех или иных подрядчиков, вследствие чего потеряли свое время и деньги. Мы собрали наиболее популярные ошибки, которые совершает среднестатистический человек, когда сталкивается с необходимостью ремонта своего жилья или помещения для бизнеса. Вы можете ознакомиться с ними бесплатно и получать полезные лайфхаки на почту, если не хотите повторить ошибки менее осведомленных людей.</p>
    <h2 class="client__header client__header--cost we-help__title">Скачайте бесплатно чек-листы, которые уберегут вас от ошибок в дизайне и ремонте, сэкономив ваши деньги и нервы</h2>
    <p>Чек-лист: <a href="#" class="show-cf-499">10 самых дорогостоящих ошибок в ремонте. Не повторите их!</a></p>
    <p>Чек-лист: <a href="#" class="show-cf-498">10 самых серьезных косяков в чертежах дизайнера</a></p>
    <p>Чек-лист: <a href="#" class="show-cf-500">Как правильно выбрать рабочую бригаду, не ошибившись в их профессионализме</a></p>


<div class="modal-fade cf-499">
   <div class="modal__holder">
    <div class="modal-popup">
       <div class="modal__container">
            <h2 class="client__header client__header--modal">10 ошибок в ремонте</h2>
            <h3 class="desc__header desc__header--modal">Введите своё имя и телефон</h3>
            <?php echo do_shortcode('[contact-form-7 id="499" title="Чек лист - 10 ошибок в ремонте"]'); ?>
            <div class="close">
                <img src="<?=get_template_directory_uri();?>/img/header_body/close1.png" alt="">
            </div>
       </div>
    </div>
   </div>
</div>

<div class="modal-fade cf-498">
   <div class="modal__holder">
    <div class="modal-popup">
       <div class="modal__container">
            <h2 class="client__header client__header--modal">10 ошибок в чертежах</h2>
            <h3 class="desc__header desc__header--modal">Введите своё имя и телефон</h3>
            <?php echo do_shortcode('[contact-form-7 id="498" title="Чек лист - 10 ошибок в чертежах"]'); ?>
            <div class="close">
                <img src="<?=get_template_directory_uri();?>/img/header_body/close1.png" alt="">
            </div>
       </div>
    </div>
   </div>
</div>

<div class="modal-fade cf-500">
   <div class="modal__holder">
    <div class="modal-popup">
       <div class="modal__container">
            <h2 class="client__header client__header--modal">Как выбрать бригаду?</h2>
            <h3 class="desc__header desc__header--modal">Введите своё имя и телефон</h3>
            <?php echo do_shortcode('[contact-form-7 id="500" title="Чек лист - как выбрать рабочую бригаду"]'); ?>
            <div class="close">
                <img src="<?=get_template_directory_uri();?>/img/header_body/close1.png" alt="">
            </div>
       </div>
    </div>
   </div>
</div>

  </div><!-- .we-help -->
</div>
<?php /*
      <div class="consult">
          <h2 class="client__header client__header--cost">
              <?=get_field('consult_title');?>
          </h2>
          <div class="consult__form">
            <?=do_shortcode( get_field('consult_sc') );?>
          </div>
      </div>
*/ ?>

    </div>


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

        <div class="owl-carousel owl-theme owl-theme--low">
          <?
            if (get_field('otziv_styles')) :
              foreach (get_field('otziv_styles') as $price) :
          ?>
            <div class="carousel__photo carousel__photo--low carousel__photo--1">
                <img src="<?=$price['otziv_img'];?>" alt="1">
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
                 <?=get_field('plus_down')?>
                  <img src="<?=get_template_directory_uri();?>/img/client/quotes.png" alt="quote" class="quote__img">
                  <img src="<?=get_template_directory_uri();?>/img/client/quotes1.png" alt="quote" class="quote__img quote__img--1">
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

    <div class="graph">
         <h2 class="calculate__header calculate__header--margin">
            <?=get_field('graf_title')?>
        </h2>

        <div class="graph__content graph__content--desktop">
            <div class="content__left">
                <div class="left__block left__block--up">
                    <?=get_field('graf_red')?>
                </div>
                <div class="left__block left__block--down">
                    <?=get_field('graf_blue')?>
                </div>
            </div>
            <div class="content__middle">
                <img src="<?=get_field('think_img')?>" alt="graph">
            </div>
            <div class="content__right">
                <div class="right__block right__block--up">
                    <?=get_field('graf_green')?>
                </div>
                <div class="right__block right__block--down">
                    <?=get_field('graf_violet')?>
                </div>
            </div>
        </div>

        <div class="graph--mobile">
            <div class="graph--mobileimg">
                <img class="mobilegraph__img" src="<?=get_field('think_img')?>" alt="graph">
            </div>
            <div class="graph--mobiletext">
                <?=get_field('graf_red')?>
            </div>
            <div class="graph--mobiletext">
                <?=get_field('graf_blue')?>
            </div>
            <div class="graph--mobiletext">
                <?=get_field('graf_green')?>
            </div>
            <div class="graph--mobiletext">
                <?=get_field('graf_violet')?>
            </div>
        </div>
    </div>

  <div id="blog" class="blog"  style="background: url('<?=get_field('consult_bg');?>');background-size:cover;background-repeat: no-repeat;">
    <div class="container">
      <h2 class="client__header">
        Блог
      </h2>
      <?php
      $my_posts = get_posts('post_status=publish');
      foreach ($my_posts as $post) :
      setup_postdata($post);
      $i++;
      if ($i==5) echo '<div class="hidden">';
      ?>
      <p>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </p>
      <?php endforeach; ?>
      <?php
        if ($i>=5) echo '</div>
        <a href="#" class="more">Показать еще</a>';
      ?>
    </div>
  </div>

<?
get_footer();
