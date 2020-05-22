<section class="ourprojects" id="opp">
  <h2 class="client__header">Наши <span class="client__header client__header--yellow">проекты</span></h2>
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
</section>
