<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>//css/reset.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>//css/style.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>//css/owl.carousel.css" />
<script src="<?=SITE_TEMPLATE_PATH?>//js/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>//js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>//js/scripts.js"></script>
	<!--[if lte IE 6]>
	<style type="text/css">

		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/overlay.png', sizingMethod = 'crop');
		}

		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/product-overlay.png', sizingMethod = 'crop');
		}

	</style>
	<![endif]-->

	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <header class="header">
      <div class="inner-wrap">
          <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
          </div>
          <div class="main-phone-block">
              <a href="tel:84952128506" class="phone"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/file.php"
	)
);?></a>
              <div class="shedule">время работы с 9-00 до 18-00</div>
          </div>
          <div class="actions-block">
              <form action="/" class="main-frm-search">
                  <input type="text" placeholder="Поиск">
                  <button type="submit"></button>
              </form>
              <nav class="menu-block">
								<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"FORGOT_PASSWORD_URL" => "/login/zabyli-parol.php",
		"PROFILE_URL" => "/login/user.php",
		"REGISTER_URL" => "/login/registratsiya.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth"
	),
	false
);?>
              </nav>
          </div>
      </div>
  </header>
  <!-- /header -->
  <!-- nav -->
  <nav class="nav">
      <div class="inner-wrap">
          <div class="menu-block popup-wrap">
              <a href="" class="btn-menu btn-toggle"></a>
							<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
              <div class="menu-overlay"></div>
          </div>
      </div>
  </nav>
  <!-- /nav -->
  <!-- breadcrumbs -->
  <div class="breadcrumbs-box">
      <div class="inner-wrap">
          <a href="">Главная</a>
          <a href="">Мебель</a>
          <span>Выставки и события</span>
      </div>
  </div>
  <!-- /breadcrumbs -->
  <!-- page -->
  <div class="page">
      <!-- content box -->
      <div class="content-box">
          <!-- content -->
          <div class="content">
              <div class="cnt">
                				<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
