<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","TITLE","NAME","SECOND_NAME","LAST_NAME","PERSONAL_PROFESSION","PERSONAL_WWW"),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array("EMAIL","TITLE","NAME","SECOND_NAME","LAST_NAME","PERSONAL_PROFESSION","PERSONAL_WWW"),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>