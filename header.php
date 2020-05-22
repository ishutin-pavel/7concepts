<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Дизайн интерьера в Нур-Султане (Астана). Берем дизайн-проекты «под ключ». Начнем ремонт через 2 недели."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="yandex-verification" content="899fb00728790d7f" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="/wp-content/themes/concepts/css/main.css">
</head>
<body>
    <div class="header" id="header">
        <div class="header__nav">
               <div class="nav__icons">
                    <div class="nav__element nav__logo nav__logo--mobile">
                        <img src="<?php the_field('head_logo', 'option'); ?>" alt="Logo" class="nav__element">
                    </div>
					<?php if ( is_single()==false ) : ?>
                    <div class="nav__element nav__menu nav__menu--mobile" id="navigation--buttonmob">
                        <img src="<?=get_template_directory_uri();?>/img/header_nav/menu.png" alt="menu">
                    </div>
					<?php endif;  ?>
               </div>
                   <div class="nav__element nav__logo nav__logo--desktop">
                        <img src="<?php the_field('head_logo', 'option'); ?>" alt="Logo" class="nav__element">
                    </div>
                    <div class="nav__element nav__element--mobile nav__adress">
                        <ul class="nav__list">
                            <li><?=get_field('head_city', 'option') ? get_field('head_city', 'option') : null; ?></li>
                            <li><?=get_field('head_address', 'option') ? get_field('head_address', 'option') : null; ?></li>
                            <!-- <li>пр. Сарыарка <span class="roboto__number">15</span>, ВП- <span class="roboto__number">3</span></li> -->
                        </ul>
                    </div>
                    <div class="nav__element nav__element--mobile nav__phone">
                        <ul class="nav__list">
                            <? if (get_field('head_phone1', 'option')) : ?>
                            <li><a class="nav__link" href="https://wa.me/<?=str_replace(['(',')','+',' ','-'], '', get_field('head_phone1', 'option'))?>"><img class="nav__img" src="<?=get_template_directory_uri();?>/img/header_nav/smartphone.png" alt="smartphone"><?=get_field('head_phone1', 'option');?></a></li>
                            <? endif; ?>
                            <? if (get_field('head_phone2', 'option')) : ?>
                            <li><img class="nav__img img__telephone" src="<?=get_template_directory_uri();?>/img/header_nav/telephone.png" alt="telephone"><?=get_field('head_phone2', 'option');?></li>
                            <? endif; ?>
                        </ul>
                    </div>
                    <div class="nav__element nav__element--mobile nav__mail">
                        <ul class="nav__list">
                            <? if (get_field('head_mail', 'option')) : ?>
                            <li><img class="nav__img" src="<?=get_template_directory_uri();?>/img/header_nav/email.png" alt="email"><?=get_field('head_mail', 'option');?></li>
                            <? endif; ?>
                            <? if (get_field('head_insta', 'option')) : ?>
                            <li><a class="nav__link" href="<?=get_field('head_insta_link', 'option');?>" target="_blank"><img class="nav__img" src="<?=get_template_directory_uri();?>/img/header_nav/instagram.png" alt="instagram"><?=get_field('head_insta', 'option');?></a></li>
                            <? endif; ?>
                        </ul>
                    </div>
					 <?php if ( is_single()==false ) : ?>
                    <div class="nav__element nav__menu nav__menu--desktop" id="navigation--buttondesk">
                        <img src="<?=get_template_directory_uri();?>/img/header_nav/menu.png" alt="menu">
                    </div>
					<?php endif;  ?>
        </div>
        
    <?php if ( is_single()==false ) : ?>
        <div class="header__body" style="background: url('<?=get_field('main_bg', 6)?>') no-repeat;background-size: cover;">
              
        <div class="header__menu">   

            <?
                wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => 'Primary',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu__list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                    'add_li_class'    => 'menu__element',
                ) );
            ?>

         </div>   
       <?php endif;  ?>  
