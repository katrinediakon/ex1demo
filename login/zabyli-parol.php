<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("забыли пароль");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "",
		"AUTH_REGISTER_URL" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>