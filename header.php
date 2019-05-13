<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSCorp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="menu">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() ?>./assets/img/menu/Logo.png" alt="">
        </div>

        <div class="second_section">
            <input type="checkbox" class="checkbox" id="menu-mobile" />
            <nav role="navigation">

                <label for="menu-mobile" class="toggle-button" onclick>
                    <img src="<?php echo get_template_directory_uri() ?>./assets/img/menu/Logo.png" alt="">
                    <i class="fas fa-bars"></i>
                </label>

                <?php wp_nav_menu( array(
                    'theme_location' => 'header-menu', 
                    'container' => false,
                    'walker' => new Jscorp_Header_Menu,
                ) ) ?>

                <!-- <ul class="menu_items">

                    <li class="menu_item">
                        <a href="#">Главная</a>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>

                        <input type="radio" name="raz" class="checkbox" id="js-corporation" />
                        <nav role="navigation">
                            <label for="js-corporation" onclick>
                                JS corporation
                            </label>

                            <ul class="submenu">
                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Специалистам<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Новаторам<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Проекты<span> -</span></a>
                                </li>
                            </ul>
                        </nav>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>

                        <input type="radio" name="raz" class="checkbox" id="directions" />
                        <nav role="navigation">
                            <label for="directions" onclick>
                                Направления
                            </label>

                            <ul class="submenu">
                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">FanTech<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">TransTech<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">UrbanTech<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">SocialTech<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">TechNet<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">FinTech<span> -</span></a>
                                </li>
                            </ul>
                        </nav>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>

                        <input type="radio" name="raz" class="checkbox" id="partnership" />
                        <nav role="navigation">
                            <label for="partnership" onclick>
                                Партнерство
                            </label>

                            <ul class="submenu">
                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Университетам<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Компаниям<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Госструктурам<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Инвесторам<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Наставникам<span> -</span></a>
                                </li>
                            </ul>
                        </nav>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>
                        <a href="#">Блог</a>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>

                        <input type="radio" name="raz" class="checkbox" id="about-us" />
                        <nav role="navigation">
                            <label for="about-us" onclick>
                                О нас
                            </label>

                            <ul class="submenu">
                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Команда<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">FAQs<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Контакты<span> -</span></a>
                                </li>

                                <li>
                                    <div class="menu_line"></div>
                                    <a href="#">Дайджест<span> -</span></a>
                                </li>
                            </ul>
                        </nav>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>
                        <a href="#">Условия использования</a>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>
                        <a href="#">Privacy police</a>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>
                        <a href="#">Coockie</a>
                    </li>

                    <li class="menu_item">
                        <div class="menu_line"></div>
                        <div class="row contacts1">

                            <img src="img/menu/JScorplogos3.png" alt="">

                            <div class="row">
                                <div class="row vk">
                                    <i class="fab fa-vk"></i>
                                </div>

                                <div class="row tel">
                                    <i class="fab fa-telegram-plane"></i>
                                </div>

                                <div class="row in">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                            </div>


                        </div>
                    </li>

                </ul> -->
            </nav>
        </div>

        <div class="row contacts">
            <div class="row vk">
                <i class="fab fa-vk"></i>
            </div>

            <div class="row tel">
                <i class="fab fa-telegram-plane"></i>
            </div>

            <div class="row in">
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>

    </div>