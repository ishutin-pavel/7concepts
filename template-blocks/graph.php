<section class="graph">

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

</section>
