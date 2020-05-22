<section class="services" id="services">
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
</section>
