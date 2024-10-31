<?php
/**
 * Plugin Name: Roomcloud
 * Plugin URI: http://www.roomcloud.net
 * Description: A Plugin to add roomcloud booking form to hotel website using [roomcloud] shortcode
 * Version: 2.0.25
 * Author: Tecnes Milano Srl
 * Author URI: http://www.roomcloud.net
 * License: GPL2
 */
add_shortcode('roomcloud_v2', 'rc_booking_v2');
add_shortcode('roomcloud', 'rc_booking');

add_shortcode('roomcloud_multi_v2', 'rc_booking_multi_v2');
add_shortcode('roomcloud_multi', 'rc_booking_multi');

add_shortcode('roomcloud_vertical', 'rc_booking_vertical');
add_shortcode('roomcloud_vertical_v2', 'rc_booking_vertical_v2');

add_shortcode('roomcloud_iframe', 'rc_iframe');
add_shortcode('roomcloud_iframe_v2', 'rc_iframe_v2');

add_shortcode('roomcloud_iframeResizer', 'rc_iframeResizer');


function loadDictionary($apt){

	$dictionary=Array();	

	$dictionary["bg_adults"]="възрастни";
	$dictionary["bg_adult"]="възрастен";
	$dictionary["bg_children"]="деца";
	$dictionary["bg_child"]="дете";
	$dictionary["bg_rooms"]="стаи";
	$dictionary["bg_room"]="стая";
	$dictionary["bg_add_room"]="добавете стая";
	$dictionary["bg_remove_room"]="премахнете камерата";
	$dictionary["bg_done"]="Свършен";
	$dictionary["bg_promo_code"]="промоционален код";
	$dictionary["bg_room_error"]="моля, добавете 1 човек или премахнете стаята";
	$dictionary["bg_checkin"]="check in";
	$dictionary["bg_checkout"]="check out";
	$dictionary["bg_search"]="Търсене";
	$dictionary["bg_age"]="Възраст";
	$dictionary["bg_night"]="нощ";
	$dictionary["bg_nights"]="нощи";

	$dictionary["cz_adults"]="Dospělí";
	$dictionary["cz_adult"]="dospělý";
	$dictionary["cz_children"]="děti";
	$dictionary["cz_child"]="dítě";
	$dictionary["cz_rooms"]="místnosti";
	$dictionary["cz_room"]="pokoj, místnost";
	$dictionary["cz_add_room"]="přidat pokoj";
	$dictionary["cz_remove_room"]="vyjměte kameru";
	$dictionary["cz_done"]="Hotovo";
	$dictionary["cz_promo_code"]="propagační kód";
	$dictionary["cz_room_error"]="prosím přidejte 1 osobu nebo odeberte pokoj";
	$dictionary["cz_checkin"]="check in";
	$dictionary["cz_checkout"]="check out";
	$dictionary["cz_search"]="Vyhledávání";
	$dictionary["cz_age"]="Stáří";
	$dictionary["cz_night"]="noc";
	$dictionary["cz_nights"]="noci";

	$dictionary["de_adults"]="Erwachsene";
	$dictionary["de_adult"]="Erwachsene";
	$dictionary["de_children"]="Kinder";
	$dictionary["de_child"]="Kind";
	$dictionary["de_rooms"]="Räume";
	$dictionary["de_room"]="Zimmer";
	$dictionary["de_add_room"]="Zimmer hinzufügen";
	$dictionary["de_remove_room"]="Kamera entfernen";
	$dictionary["de_done"]="getan";
	$dictionary["de_promo_code"]="Aktionscode";
	$dictionary["de_room_error"]="Bitte fügen Sie 1 Person hinzu oder entfernen Sie das Zimmer";
	$dictionary["de_checkin"]="check in";
	$dictionary["de_checkout"]="check out";
	$dictionary["de_search"]="Suche";
	$dictionary["de_age"]="Alter";
	$dictionary["de_night"]="Nacht";
	$dictionary["de_nights"]="Nächte";

	$dictionary["en_adults"]="adults";
	$dictionary["en_adult"]="adult";
	$dictionary["en_children"]="children";
	$dictionary["en_child"]="child";
	$dictionary["en_rooms"]="rooms";
	$dictionary["en_room"]="room";
	$dictionary["en_add_room"]="add room";
	$dictionary["en_remove_room"]="remove room";
	$dictionary["en_done"]="done";
	$dictionary["en_promo_code"]="promotion code";
	$dictionary["en_room_error"]="please add 1 person or remove the room";
	$dictionary["en_checkin"]="check in";
	$dictionary["en_checkout"]="check out";
	$dictionary["en_search"]="search";
	$dictionary["en_age"]="age";
	$dictionary["en_night"]="night";
	$dictionary["en_nights"]="nights";

	$dictionary["es_adults"]="adultos";
	$dictionary["es_adult"]="adulto";
	$dictionary["es_children"]="niños";
	$dictionary["es_child"]="niño";
	$dictionary["es_rooms"]="habitaciones";
	$dictionary["es_room"]="habitación";
	$dictionary["es_add_room"]="Añadir habitación";
	$dictionary["es_remove_room"]="quitar la cámara";
	$dictionary["es_done"]="hecho";
	$dictionary["es_promo_code"]="Código Promocional";
	$dictionary["es_room_error"]="por favor agregue 1 persona o elimine la habitación";
	$dictionary["es_checkin"]="check in";
	$dictionary["es_checkout"]="check out";
	$dictionary["es_search"]="buscar";
	$dictionary["es_age"]="La edad";
	$dictionary["es_night"]="noche";
	$dictionary["es_nights"]="noches";

	$dictionary["fr_adults"]="adultes";
	$dictionary["fr_adult"]="adulte";
	$dictionary["fr_children"]="enfants";
	$dictionary["fr_child"]="enfant";
	$dictionary["fr_rooms"]="pièces";
	$dictionary["fr_room"]="chambre";
	$dictionary["fr_add_room"]="ajouter de la place";
	$dictionary["fr_remove_room"]="retirer la caméra";
	$dictionary["fr_done"]="fini";
	$dictionary["fr_promo_code"]="code promotionnel";
	$dictionary["fr_room_error"]="veuillez ajouter 1 personne ou supprimer la chambre";
	$dictionary["fr_checkin"]="check in";
	$dictionary["fr_checkout"]="check out";
	$dictionary["fr_search"]="chercher";
	$dictionary["fr_age"]="Âge";
	$dictionary["fr_night"]="nuit";
	$dictionary["fr_nights"]="nuits";

	$dictionary["hr_adults"]="odrasle osobe";
	$dictionary["hr_adult"]="odrasla osoba";
	$dictionary["hr_children"]="djece";
	$dictionary["hr_child"]="djete";
	$dictionary["hr_rooms"]="sobe";
	$dictionary["hr_room"]="soba";
	$dictionary["hr_add_room"]="dodaj sobu";
	$dictionary["hr_remove_room"]="ukloniti sobu";
	$dictionary["hr_done"]="učinjeno";
	$dictionary["hr_promo_code"]="Promotivni kod";
	$dictionary["hr_room_error"]="dodajte 1 osobu ili uklonite sobu";
	$dictionary["hr_checkin"]="prijaviti se";
	$dictionary["hr_checkout"]="provjeri";
	$dictionary["hr_search"]="Dob";
	$dictionary["hr_age"]="traži";
	$dictionary["hr_night"]="noć";
	$dictionary["hr_nights"]="noći";

	$dictionary["hu_adults"]="felnőttek";
	$dictionary["hu_adult"]="felnőtt";
	$dictionary["hu_children"]="gyermekek";
	$dictionary["hu_child"]="gyerek";
	$dictionary["hu_rooms"]="szobák";
	$dictionary["hu_room"]="szoba";
	$dictionary["hu_add_room"]="szoba hozzáadása";
	$dictionary["hu_remove_room"]="szoba törlése";
	$dictionary["hu_done"]="kész";
	$dictionary["hu_promo_code"]="promóciós kód";
	$dictionary["hu_room_error"]="kérjük, adjon hozzá 1 főt, vagy törölje a szobát";
	$dictionary["hu_checkin"]="check in";
	$dictionary["hu_checkout"]="check out";
	$dictionary["hu_search"]="keresés";
	$dictionary["hu_age"]="Kor";
	$dictionary["hu_night"]="éjszaka";
	$dictionary["hu_nights"]="éjszakák";

	$dictionary["it_adults"]="adulti";
	$dictionary["it_adult"]="adulto";
	$dictionary["it_children"]="bambini";
	$dictionary["it_child"]="bambino";
	$dictionary["it_rooms"]="camere";
	$dictionary["it_room"]="camera";
	$dictionary["it_add_room"]="aggiungi camera";
	$dictionary["it_remove_room"]="rimuovi camera";
	$dictionary["it_done"]="fatto";
	$dictionary["it_promo_code"]="codice promozione";
	$dictionary["it_room_error"]="per favore aggiungi 1 persona o rimuovi la camera";
	$dictionary["it_checkin"]="check in";
	$dictionary["it_checkout"]="check out";
	$dictionary["it_search"]="cerca";
	$dictionary["it_age"]="età";
	$dictionary["it_night"]="notte";
	$dictionary["it_nights"]="notti";

	$dictionary["jp_adults"]="大人";
	$dictionary["jp_adult"]="大人";
	$dictionary["jp_children"]="子供達";
	$dictionary["jp_child"]="赤ちゃん";
	
	$dictionary["jp_rooms"]="部屋";
	$dictionary["jp_room"]="カメラ";
	$dictionary["jp_add_room"]="カメラを追加する";
	$dictionary["jp_remove_room"]="カメラを外す";
	$dictionary["jp_done"]="ファット";
	$dictionary["jp_promo_code"]="販売促進コード";
	$dictionary["jp_room_error"]="1人追加するか、部屋を削除してください";
	$dictionary["jp_checkin"]="check in";
	$dictionary["jp_checkout"]="check out";
	$dictionary["jp_search"]="探す";
	$dictionary["jp_age"]="年";
	$dictionary["jp_night"]="夜";
	$dictionary["jp_nights"]="夜";

	$dictionary["nl_adults"]="volwassenen";
	$dictionary["nl_adult"]="volwassene";
	$dictionary["nl_children"]="kinderen";
	$dictionary["nl_child"]="baby";
	$dictionary["nl_rooms"]="kamers";
	$dictionary["nl_room"]="camera";
	$dictionary["nl_add_room"]="camera toevoegen";
	$dictionary["nl_remove_room"]="camera verwijderen";
	$dictionary["nl_done"]="vet";
	$dictionary["nl_promo_code"]="promotie code";
	$dictionary["nl_room_error"]="gelieve 1 persoon toe te voegen of de kamer te verwijderen";
	$dictionary["nl_checkin"]="check in";
	$dictionary["nl_checkout"]="check out";
	$dictionary["nl_search"]="zoeken";
	$dictionary["nl_age"]="Leeftijd";
	$dictionary["nl_night"]="nacht";
	$dictionary["nl_nights"]="nachten";

	$dictionary["pl_adults"]="dorośli ludzie";
	$dictionary["pl_adult"]="dorosły";
	$dictionary["pl_children"]="dzieci";
	$dictionary["pl_child"]="dziecko";
	$dictionary["pl_rooms"]="pokoje";
	$dictionary["pl_room"]="kamera";
	$dictionary["pl_add_room"]="dodaj kamerę";
	$dictionary["pl_remove_room"]="usuń kamerę";
	$dictionary["pl_done"]="grubas";
	$dictionary["pl_promo_code"]="kod promocyjny";
	$dictionary["pl_room_error"]="dodaj 1 osobę lub usuń pokój";
	$dictionary["pl_checkin"]="check in";
	$dictionary["pl_checkout"]="check out";
	$dictionary["pl_search"]="Szukaj";
	$dictionary["pl_age"]="Wiek";
	$dictionary["pl_night"]="noc";
	$dictionary["pl_nights"]="noce";

	$dictionary["pt_adults"]="adultos";
	$dictionary["pt_adult"]="adulto";
	$dictionary["pt_children"]="crianças";
	$dictionary["pt_child"]="bebê";
	$dictionary["pt_rooms"]="quartos";
	$dictionary["pt_room"]="Câmera";
	$dictionary["pt_add_room"]="adicionar câmera";
	$dictionary["pt_remove_room"]="remover câmera";
	$dictionary["pt_done"]="fatto";
	$dictionary["pt_promo_code"]="Código de promoção";
	$dictionary["pt_room_error"]="por favor, adicione 1 pessoa ou remova a sala";
	$dictionary["pt_checkin"]="check in";
	$dictionary["pt_checkout"]="check out";
	$dictionary["pt_search"]="procurar";
	$dictionary["pt_age"]="Era";
	$dictionary["pt_night"]="noite";
	$dictionary["pt_nights"]="noites";

	$dictionary["ru_adults"]="Взрослые";
	$dictionary["ru_adult"]="адюльто";
	$dictionary["ru_children"]="дети";
	$dictionary["ru_child"]="детка";
	$dictionary["ru_rooms"]="номера";
	$dictionary["ru_room"]="камера";
	$dictionary["ru_add_room"]="добавить камеру";
	$dictionary["ru_remove_room"]="удалить камеру";
	$dictionary["ru_done"]="фатто";
	$dictionary["ru_promo_code"]="Промо-Код";
	$dictionary["ru_room_error"]="пожалуйста, добавьте 1 человека или удалите комнату";
	$dictionary["ru_checkin"]="check in";
	$dictionary["ru_checkout"]="check out";
	$dictionary["ru_search"]="поиск";
	$dictionary["ru_age"]="Возраст";
	$dictionary["ru_night"]="ночь";
	$dictionary["ru_nights"]="ночи";

	$dictionary["zh_adults"]="成年人";
	$dictionary["zh_adult"]="成人";
	$dictionary["zh_children"]="孩子们";
	$dictionary["zh_child"]="婴儿";
	$dictionary["zh_rooms"]="房间";
	$dictionary["zh_room"]="相机";
	$dictionary["zh_add_room"]="添加相机";
	$dictionary["zh_remove_room"]="移除相机";
	$dictionary["zh_done"]="胖子";
	$dictionary["zh_promo_code"]="促销代码";
	$dictionary["zh_room_error"]="请添加1人或移除房间";
	$dictionary["zh_checkin"]="check in";
	$dictionary["zh_checkout"]="check out";
	$dictionary["zh_search"]="搜索";
	$dictionary["zh_age"]="年龄";
	$dictionary["zh_night"]="夜晚";
	$dictionary["zh_nights"]="夜晚";


	if ("1"==$apt){
		
		$dictionary["bg_rooms"]="апартаменти";
		$dictionary["bg_room"]="апартамент";
		$dictionary["bg_add_room"]="добавете апартамент";
		$dictionary["bg_remove_room"]="премахнете апартамента";
		$dictionary["cz_rooms"]="byty";
		$dictionary["cz_room"]="byt";
		$dictionary["cz_add_room"]="přidat byt";
		$dictionary["cz_remove_room"]="odstranit byt";
		$dictionary["de_rooms"]="Wohnungen";
		$dictionary["de_room"]="Wohnung";
		$dictionary["de_add_room"]="Wohnung hinzufügen";
		$dictionary["de_remove_room"]="Wohnung entfernen";
		$dictionary["en_rooms"]="apartments";
		$dictionary["en_room"]="apartment";
		$dictionary["en_add_room"]="add apartment";
		$dictionary["en_remove_room"]="remove apartment";
		$dictionary["es_rooms"]="apartamentos";
		$dictionary["es_room"]="Departamento";
		$dictionary["es_add_room"]="Añadir Apartamento";
		$dictionary["es_remove_room"]="quitar apartamento";
		$dictionary["fr_rooms"]="appartements";
		$dictionary["fr_room"]="appartement";
		$dictionary["fr_add_room"]="ajouter un appartement";
		$dictionary["fr_remove_room"]="supprimer l\'appartement";
		$dictionary["hr_rooms"]="appartements";
		$dictionary["hr_room"]="appartement";
		$dictionary["hr_add_room"]="ajouter un appartement";
		$dictionary["hr_remove_room"]="ukloniti stan";
		$dictionary["hu_rooms"]="apartmanok";
		$dictionary["hu_room"]="lakás";
		$dictionary["hu_add_room"]="lakás hozzáadása";
		$dictionary["hu_remove_room"]="távolítsa el a kamerát";
		$dictionary["it_rooms"]="appartamenti";
		$dictionary["it_room"]="appartamento";
		$dictionary["it_add_room"]="aggiungi appartamento";
		$dictionary["it_remove_room"]="rimuovi appartamento";
		$dictionary["jp_rooms"]="アパート";
		$dictionary["jp_room"]="アパート";
		$dictionary["jp_add_room"]="アパートを追加する";
		$dictionary["jp_remove_room"]="アパートを削除します";
		$dictionary["nl_rooms"]="appartementen";
		$dictionary["nl_room"]="appartement";
		$dictionary["nl_add_room"]="appartement toevoegen";
		$dictionary["nl_remove_room"]="appartement verwijderen";
		$dictionary["pl_rooms"]="mieszkanie";
		$dictionary["pl_room"]="apartament";
		$dictionary["pl_add_room"]="dodaj mieszkanie";
		$dictionary["pl_remove_room"]="usuń mieszkanie";
		$dictionary["pt_rooms"]="apartamentos";
		$dictionary["pt_room"]="apartamento";
		$dictionary["pt_add_room"]="adicionar apartamento";
		$dictionary["pt_remove_room"]="remover apartamento";
		$dictionary["ru_rooms"]="квартиры";
		$dictionary["ru_room"]="квартира";
		$dictionary["ru_add_room"]="добавить квартиру";
		$dictionary["ru_remove_room"]="снять квартиру";
		$dictionary["zh_rooms"]="公寓";
		$dictionary["zh_room"]="公寓";
		$dictionary["zh_add_room"]="添加公寓";
		$dictionary["zh_remove_room"]="移除公寓";
	
	}else 	if ("2"==$apt){
	    
	    $dictionary["bg_rooms"]="настаняване";
	    $dictionary["bg_room"]="настаняване";
	    $dictionary["bg_add_room"]="добавяне на квартира";
	    $dictionary["bg_remove_room"]="премахване на настаняване";
	    $dictionary["cz_rooms"]="ubytování";
	    $dictionary["cz_room"]="ubytování";
	    $dictionary["cz_add_room"]="přidat ubytování";
	    $dictionary["cz_remove_room"]="odstranit ubytování";
	    $dictionary["de_rooms"]="Unterkünfte";
	    $dictionary["de_room"]="Unterkunft";
	    $dictionary["de_add_room"]="Unterkunft hinzufügen";
	    $dictionary["de_remove_room"]="Unterkunft entfernen";
	    $dictionary["en_rooms"]="accommodations";
	    $dictionary["en_room"]="accommodation";
	    $dictionary["en_add_room"]="add accommodation";
	    $dictionary["en_remove_room"]="remove accommodation";
	    $dictionary["es_rooms"]="alojamientos";
	    $dictionary["es_room"]="alojamiento";
	    $dictionary["es_add_room"]="Añadir Alojamiento";
	    $dictionary["es_remove_room"]="quitar alojamiento";
	    $dictionary["fr_rooms"]="hébergements";
	    $dictionary["fr_room"]="hébergement";
	    $dictionary["fr_add_room"]="ajouter un hébergement";
	    $dictionary["fr_remove_room"]="supprimer l\'hébergement";
	    $dictionary["hr_rooms"]="smještaj";
	    $dictionary["hr_room"]="smještaj";
	    $dictionary["hr_add_room"]="dodaj smještaj";
	    $dictionary["hr_remove_room"]="ukloni smještaj";
	    $dictionary["hu_rooms"]="szállások";
	    $dictionary["hu_room"]="szállás";
	    $dictionary["hu_add_room"]="szállás hozzáadása";
	    $dictionary["hu_remove_room"]="szállás eltávolítása";
	    $dictionary["it_rooms"]="sistemazioni";
	    $dictionary["it_room"]="sistemazione";
	    $dictionary["it_add_room"]="aggiungi sistemazione";
	    $dictionary["it_remove_room"]="rimuovi sistemazione";
	    
	    $dictionary["jp_rooms"]="宿泊施設";
	    $dictionary["jp_room"]="宿泊施設";
	    $dictionary["jp_add_room"]="宿泊施設を追加";
	    $dictionary["jp_remove_room"]="宿泊施設を削除";
	    
	    $dictionary["nl_rooms"]="accommodaties";
	    $dictionary["nl_room"]="accommodatie";
	    $dictionary["nl_add_room"]="accommodatie toevoegen";
	    $dictionary["nl_remove_room"]="verwijder accommodatie";
	    
	    $dictionary["pl_rooms"]="zakwaterowanie";
	    $dictionary["pl_room"]="zakwaterowanie";
	    $dictionary["pl_add_room"]="dodaj nocleg";
	    $dictionary["pl_remove_room"]="usuń zakwaterowanie";
	    
	    $dictionary["pt_rooms"]="alojamentos";
	    $dictionary["pt_room"]="alojamento";
	    $dictionary["pt_add_room"]="adicionar alojamento";
	    $dictionary["pt_remove_room"]="remover alojamento";
	    
	    $dictionary["ru_rooms"]="проживание";
	    $dictionary["ru_room"]="проживание";
	    $dictionary["ru_add_room"]="добавить жилье";
	    $dictionary["ru_remove_room"]="удалить жилье";
	    
	    $dictionary["zh_rooms"]="住宿";
	    $dictionary["zh_room"]="住宿";
	    $dictionary["zh_add_room"]="添加住宿";
	    $dictionary["zh_remove_room"]="删除住宿";
	}

return $dictionary;
	
	
}

function getLocale($lang){
	
		if ($lang=="bg") return "bg";
	    if ($lang=="cz") return "cs";
	    if ($lang=="de") return "de";
	    if ($lang=="en") return "en-gb";
	    if ($lang=="es") return "es";
	    if ($lang=="fr") return "fr";
	    if ($lang=="hr") return "hr";
	    if ($lang=="hu") return "hu";
	    if ($lang=="it") return "it";
	    if ($lang=="jp") return "ja";
	    if ($lang=="nl") return "nl";
	    if ($lang=="pl") return "pl";
	    if ($lang=="pt") return "pt";
	    if ($lang=="ru") return "ru";
	    if ($lang=="zh") return "zh-cn";
	
	return "en-gb";
}

function e($val){

   //return $val;
   return sanitize_text_field($val);
}
function rc_iframe($atts){
	

/*
echo("hotel:");
echo($_POST['hotel']);
echo('<br>');
echo("page_id:");
echo($_GET['page_id']);
echo('<br>');
echo("lang:");
echo($_GET['lang']);
echo('<br>');
*/

	
	$hotel=$atts["hotel"];
	  
   if(!$hotel && $_GET['hotel']!=null){	   
	   $hotel=e($_GET['hotel']);
	  
	}

	if(!$hotel && $_POST['hotel']!=null){	   
	   $hotel=e($_POST['hotel']);
	  
	}
		
	$hotel=intval($hotel);
	
	if(!$hotel)
		$hotel='';
	  
   $pin=e($_POST['pin']);
   
   if(!$pin )
		$pin=e($_GET['pin']);
   
   if(strlen($pin) > 20)
      $pin='';


	  
   $start_day=e($_POST['start_day']);
	if(!$start_day )
		$start_day=e($_GET['start_day']);
   if(strlen($start_day) <> 2)
      $start_day='';
   
   $start_month=e($_POST['start_month']);
	if(!$start_month)
		$start_month=e($_GET['start_month']);
	
   if(strlen($start_month)  <> 2)
      $start_month='';
	  
   $start_year=e($_POST['start_year']);
	if(!$start_year)
		$start_year=e($_GET['start_year']);
   if(strlen($start_year)  <> 4)
      $start_year='';
   
   
	$end_day=e($_POST['end_day']);
	if(!$end_day)
		$end_day=e($_GET['end_day']);
			
   if(strlen($end_day)  <> 2)
      $end_day='';
	  
   $end_month=e($_POST['end_month']);
	if(!$end_month)
		$end_month=e($_GET['end_month']);
		
   if(strlen($end_month)  <> 2)
      $end_month='';
	  
	  
   $end_year=e($_POST['end_year']);
	if(!$end_year)
		$end_year=e($_GET['end_year']);
   if(strlen($end_year)  <> 4)
      $end_year='';
	  
	  
   $lang=e($_POST['lang']);
	if(!$lang)
		$lang=e($_GET['lang']);
   if(strlen($lang) <> 2)
      $lang='';
   
   $adults=e($_POST['adults']);
	if(!$adults)
		$adults=e($_GET['adults']);
		
   $adults=intval($adults);
   if(!$adults)
	  $adults='';
   
   
   $children=e($_POST['children']);
	if(!$children)
		$children=e($_GET['children']);
	$children=intval($children);
   if(!$children)
	  $children='';

   $chlda = '';
   $chld = $children;
   
   if($chld>0){
     for ($x=0; $x<$chld; $x++) {
        $ar='child_'.$x;
	    $a=e($_POST[$ar]);
		if(!$a)
			$a=e($_GET[$ar]);
	    $a=intval($a);
  	    if(!$a)
		   $a='';
		
		$chlda=$chlda.'&child_'.$x.'='.$a;
     } 
   }
	
	$showCrossed=e($_POST['showCrossed']);
	if(!$showCrossed)
		$showCrossed=e($_GET['showCrossed']);

	if ($showCrossed==null) $showCrossed="";

   echo('<iframe frameborder="0" width="100%" height="2200" src="');

   echo('https://booking.roomcloud.net/be/se1/hotel.jsp?hotel='.$hotel.'&pin='.$pin.'&start_day='.$start_day.'&start_month='.$start_month.'&start_year='.$start_year.'&end_day='.$end_day.'&end_month='.$end_month.'&end_year='.$end_year.'&r=1&a=1&lang='.$lang.'&t=0&n=0&adults='.$adults.'&children='.$children.$chlda.'&showCrossed='.$showCrossed);

   echo('"></iframe>');
 
   return;
}

function rc_iframeResizer($atts){
	

	$hotel=$atts["hotel"];
	  
   if(!$hotel && $_GET['hotel']!=null){	   
	   $hotel=e($_GET['hotel']);
	  
	}

	if(!$hotel && $_POST['hotel']!=null){	   
	   $hotel=e($_POST['hotel']);
	  
	}
		
	$hotel=intval($hotel);
	
	if(!$hotel)
		$hotel='';
	  
   $pin=e($_POST['pin']);
   
   if(!$pin )
		$pin=e($_GET['pin']);
   
   if(strlen($pin) > 20)
      $pin='';

	  
   $start_day=e($_POST['start_day']);
	if(!$start_day )
		$start_day=e($_GET['start_day']);
   if(strlen($start_day) <> 2)
      $start_day='';
   
   $start_month=e($_POST['start_month']);
	if(!$start_month)
		$start_month=e($_GET['start_month']);
	
   if(strlen($start_month)  <> 2)
      $start_month='';
	  
   $start_year=e($_POST['start_year']);
	if(!$start_year)
		$start_year=e($_GET['start_year']);
   if(strlen($start_year)  <> 4)
      $start_year='';
   
   
	$end_day=e($_POST['end_day']);
	if(!$end_day)
		$end_day=e($_GET['end_day']);
			
   if(strlen($end_day)  <> 2)
      $end_day='';
	  
   $end_month=e($_POST['end_month']);
	if(!$end_month)
		$end_month=e($_GET['end_month']);
		
   if(strlen($end_month)  <> 2)
      $end_month='';
	  
	  
   $end_year=e($_POST['end_year']);
	if(!$end_year)
		$end_year=e($_GET['end_year']);
   if(strlen($end_year)  <> 4)
      $end_year='';
	  
	  
   $lang=e($_POST['lang']);
	if(!$lang)
		$lang=e($_GET['lang']);
   if(strlen($lang) <> 2)
      $lang='';
   
   $adults=e($_POST['adults']);
	if(!$adults)
		$adults=e($_GET['adults']);
		
   $adults=intval($adults);
   if(!$adults)
	  $adults='';
   
   
   $children=e($_POST['children']);
	if(!$children)
		$children=e($_GET['children']);
	$children=intval($children);
   if(!$children)
	  $children='';

   $chlda = '';
   $chld = $children;
   
   if($chld>0){
     for ($x=0; $x<$chld; $x++) {
        $ar='child_'.$x;
	    $a=e($_POST[$ar]);
		if(!$a)
			$a=e($_GET[$ar]);
	    $a=intval($a);
  	    if(!$a)
		   $a='';
		
		$chlda=$chlda.'&child_'.$x.'='.$a;
     } 
   }
   
	$showCrossed=e($_POST['showCrossed']);
	if(!$showCrossed)
		$showCrossed=e($_GET['showCrossed']);

	if ($showCrossed==null) $showCrossed="";


	echo('<script type="text/javascript" src="https://booking.roomcloud.net/be/js/iframeResizer.min.js"></script>');
   echo('<iframe frameborder="0" width="100%"  src="');

   echo('https://booking.roomcloud.net/be/se1/hotel.jsp?hotel='.$hotel.'&pin='.$pin.'&start_day='.$start_day.'&start_month='.$start_month.'&start_year='.$start_year.'&end_day='.$end_day.'&end_month='.$end_month.'&end_year='.$end_year.'&r=1&a=1&lang='.$lang.'&t=0&n=0&adults='.$adults.'&children='.$children.$chlda.'&showCrossed='.$showCrossed);

   echo('"></iframe>');
 
	echo('<script type="text/javascript">');
	echo('iFrameResize({');
	echo('checkOrigin: false,');
	echo('enablePublicMethods: true,');
	echo('bodyBackground: "transparent"');
	echo('});');
	echo('</script>');
	
   return;
   
   
	
}



function rc_booking($atts){
	
	
	ob_start();

   if($atts["page_id"]!=null)
      $host="?page_id=".$atts["page_id"];

	$first_dow=$atts["first_dow"];
   	if($first_dow== null)
       $first_dow="0";
       
   $lang=$atts["lang"];
   if($lang== null)
       $lang="en";

   $curr=$atts["curr"];
   if($curr== null)
       $curr="EUR";

	$adults=$atts["adults"];
   if($adults== null)
		$adults=1;

   $hotel=$atts["hotel"];
   if($hotel == null)
       $hotel="";
   
   $showCrossed=$atts["showcrossed"];
   if($showCrossed == null) $showCrossed="";
   
   $openDropdownsOnTop=$atts["open_dropdowns_on_top"];
   if($openDropdownsOnTop == null) $openDropdownsOnTop="false";
   
   $hide_children=$atts["hide_children"];
   $hide_pin=$atts["hide_pin"];

	
   
	wp_register_script('wp_se1_js_horizontal_template', plugin_dir_url(__FILE__) . '/JS/wp_se1_horizontal_template.js');
	wp_enqueue_script('wp_se1_js_horizontal_template');
	
	wp_register_style( 'wp_se1_css_horizontal_template', plugin_dir_url(__FILE__).'/CSS/wp_se1_horizontal_template.css' );
	wp_enqueue_style('wp_se1_css_horizontal_template');

	/*#################					LITEPICKER					########################################*/

	wp_register_script('wp_js_litepicker', plugin_dir_url(__FILE__) . '/JS/litepicker.js');
	wp_enqueue_script('wp_js_litepicker');
	
	wp_register_script( 'wp_js_litepicker_mobilefriendly', plugin_dir_url(__FILE__).'/JS/litepicker_mobilefriendly.js' );
	wp_enqueue_script('wp_js_litepicker_mobilefriendly');
	
	wp_register_style( 'wp_css_litepicker', plugin_dir_url(__FILE__).'/CSS/litepicker.css' );
	wp_enqueue_style('wp_css_litepicker');

	$apt=$atts["apt"];
	    	
	$dictionary=loadDictionary($apt);
	$locale=getLocale($lang);
	
	$color=$atts["color"];
	if($color==null)$color="";

	$load_jquery=false;
	if($atts["load_jquery"]!=null)
      $load_jquery=$atts["load_jquery"];
	
	$jquery='<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';

	if($load_jquery)
		echo($jquery);
		
	

?>


	<!-- FONT AWSOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
	<!-- MOMENT JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.min.js"></script>
	
	
	<?php
														
			if($hide_children=='1'){
		?>										
			
			<style>
			
				div.children-row {
				
					display:none;
				}
			</style>
		<?php											
			}
			
			if($hide_pin=='1'){
			
		?>										
			
			<style>
			
				div.promotional-code-input {
				
					display:none;
				}
			</style>
		<?php											
			}
        ?>

		<div id="search_room_box" class="notranslate">
		
			<form name="formSearch" id="formSearch" action="https://booking.roomcloud.net/be/se1/hotel.jsp" method="post">

				<?php 
				    
				if($hide_pin=='1'){
				
				?>
					<input type="hidden" name="hide_pin" value="1">
				<?php											
        			}
                ?>
				
				<input type="hidden" name="curr" value="<?php echo($curr); ?>">
				<input type="hidden" name="lang" value="<?php echo($lang); ?>">
				
				<input type="hidden" name="showCrossed" id="showCrossed" value="<?php echo ($showCrossed)?>">

				<div id="search-items" >

					<div id="research-tab">
						
						<div class="rc-row">

						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3" id="search_group_div">	
								
									<div class="rc-input-group" id="calendar_search_group">
										<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-calendar dates_calendar src-icon" aria-hidden="true"></i></span>
										<input class="form-control" name="search_calendar" id="search_calendar" value="" autocomplete="off" onfocus="blur();"/>
										
										<input type="hidden" name="hotel" id="hotel" value="<?php echo ($hotel); ?>">
										
										<input type="hidden" name="start_day" id="start_day">
										<input type="hidden" name="start_month" id="start_month"> 
										<input type="hidden" name="start_year" id="start_year">
										<input type="hidden" name="end_day" id="end_day"> 										
										<input type="hidden" name="end_month" id="end_month">
										<input type="hidden" name="end_year" id="end_year"> 										
										
										
									</div>
									
							</div>		
										
						

						
		
							
						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-4 rc-col-lg-3"  id="rooms_search">
		
								<div class="rc-dropdown">
		
									<div class="rc-input-group" id="travelers_group">
									
										<span class="input-group-addon" ><i class="fa fa-male src-icon" aria-hidden="true"></i></span>
										<input class="form-control" id="travelers" autocomplete="off" 
											value="<?php if ($adults==1) echo ("1 ".$dictionary[$lang.'_adult']);
														else echo ($adults." ".$dictionary[$lang.'_adults']);?>"/>

										
														
									</div>
									
									<div class="rc-dropdown-menu fw" id="traveler_details">
										<div id="rooms_container">
											<div id="room_0_container" class="rm-cnt"><!--  ROOM CONTAINER  -->
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-12">
														
															<span class="room-error" id="room_error_0"></span>
																											
													</div>
													<div class="rc-col-xs-6">
															

													</div>
													
													<div class="rc-col-xs-6"></div>
												</div>
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-6 rc-text-center">
															
														<div class="rc-text-center div-room-adult-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang.'_adults']);?></span>
															<span class="icon-span">
																<i class="fa fa-male occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
	
														</div>
													</div>
												
													<div class="rc-col-xs-6 rc-text-align-auto">
																		
														<div class=" rc-text-center inline-block div-room-adult-quantity">
															<span class="box-btn-round btn-less <?php if ($adults==1) echo ("disabled_btn") ?>" id="adults_less_0">-</span>								
														 	<div class="form-search-div" >
								
																<span id="adults_span_0" class="src-span"><?php echo ($adults); ?></span>
																<input type="hidden" id="adults_0" name="adults" value="<?php echo ($adults); ?>"/>
						
															</div>
																			
															<span class="box-btn-round btn-plus " id="adults_more_0">+</span>
														</div>
													
													</div>
												
												</div>
												<div class="rc-row children-row">
													
													<div class="rc-col-xs-6 rc-text-center app_child_cnt">
													
														<div class=" rc-text-center div-room-child-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang.'_children']); ?></span>
															<span class="icon-span">
																<i class="fa fa-child occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
														</div>
													</div>
													
													<div class="rc-col-xs-6 rc-text-align-auto app_child_cnt">
													
														<div class=" rc-text-center inline-block div-room-child-quantity">
															<span class="box-btn-round btn-less disabled_btn" id="children_less_0">-</span>
															<div class="form-search-div">									
																<span class="src-span" id="children_span_0">0</span>
																<input type="hidden" name="children" id="children_0" value="0"/>
															</div>
															<span class="box-btn-round btn-plus " id="children_more_0">+</span>
														</div>
													
													</div>
															
												</div>			
				
														
												<div class="rc-row children-row" id="room_0_children_append_container"><!--  START CHILDREN AGES   -->
	
												</div>	<!--  END CHILDREN AGES   -->
													
											</div><!-- END ROOM CONTAINER  -->
							
										
										</div>
										
										
										

										
										<div id="close-btn-div" class="rc-text-center">
											<button class="button btn btn-block  be-btn" id="close_dropdown" type="button" class="rc-text-center">
											
												<span class="rc-close-btn"><?php echo ($dictionary[$lang."_done"]); ?></span>
																								
											</button>
										
										</div>
										
										
									</div>
								</div>						
							</div>



							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3 promotional-code-input">
							
								<div class="rc-input-group" id="promo_search_group">
								
									<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-tag src-icon" aria-hidden="true"></i></span>
									<input class="form-control" id="pin" name="pin" placeholder="<?php echo $dictionary[$lang."_promo_code"]; ?>"/>
									
								</div>
								
							</div>

							
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-2 rc-col-lg-3 rc-text-center">
							
								<button class="button btn btn-block  be-btn" type="button" id="btn-search">
									<i class="fa fa-search" aria-hidden="true"></i>
									
								</button>
							
							</div>
							 
						</div>
						
					</div>
				</div>
			</form>
		</div> 


	<script>

	var openDropdownsOnTop=<?php echo ($openDropdownsOnTop=="true"?"true":"false")?>;
	var first_dow=<?php echo ($first_dow); ?>;
	var str_adult=" <?php echo ($dictionary[$lang.'_adult']); ?>";
	var str_adults=" <?php echo ($dictionary[$lang.'_adults']); ?>";
	var str_child=" <?php echo ($dictionary[$lang.'_child']); ?>";
	var str_children=" <?php echo ($dictionary[$lang.'_children']); ?>";
	var str_room="<?php echo ($dictionary[$lang.'_room']); ?>";
	var str_rooms="<?php echo ($dictionary[$lang.'_rooms']); ?>";
	var str_remove_room="<?php echo ($dictionary[$lang.'_remove_room']); ?>";
	var str_room_error="<?php echo ($dictionary[$lang.'_room_error']); ?>";
	var str_age="<?php echo ($dictionary[$lang.'_age']); ?>";
	var str_night="<?php echo ($dictionary[$lang.'_night']); ?>";
	var str_nights="<?php echo ($dictionary[$lang.'_nights']); ?>";
	
	var locale='<?php echo ($locale);?>';
	

	
	var color='<?php echo ($color);?>';
		if (color!=""){ 
		
		document.documentElement.style.setProperty('--blu-color', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-in-range-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-brightness', '1.2');
		document.documentElement.style.setProperty('--litepicker-day-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-prev-month-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-next-month-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-start-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-start-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-end-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-end-color-bg', '#'+color);
	}
	
	</script>

<?php

	$output_string=ob_get_contents();;
	ob_end_clean();
	return $output_string;
	
}

function rc_booking_v2($atts){

 	ob_start();

   $host="http://booking.roomcloud.net/be/se1/hotel.jsp?";
   if($atts["page_id"]!=null)
      $host="?page_id=".$atts["page_id"];

	$first_dow=$atts["first_dow"];
   	if($first_dow== null)
       $first_dow="0";

   $lang=$atts["lang"];
   if($lang== null)
       $lang="en";

   $curr=$atts["curr"];
   if($curr== null)
       $curr="EUR";

   $adults=$atts["adults"];
   if($adults== null)
		$adults=1;

   $hide_children=$atts["hide_children"];
   $hide_pin=$atts["hide_pin"];
   
	$showCrossed=$atts["showcrossed"];
	if($showCrossed == null) $showCrossed="";
	
   $openDropdownsOnTop=$atts["open_dropdowns_on_top"];
   if($openDropdownsOnTop == null) $openDropdownsOnTop="false";
	
	

   $hotel=$atts["hotel"];
   if($hotel == null)
       $hotel="";
   
       
    $property_id=$atts["property_id"];
    $room_type_id=$atts["room_type_id"];
   
	wp_register_script('wp_se2_js_horizontal_template', plugin_dir_url(__FILE__) . '/JS/wp_se2_horizontal_template.js');
	wp_enqueue_script('wp_se2_js_horizontal_template');
	
	wp_register_style( 'wp_se2_css_horizontal_template', plugin_dir_url(__FILE__).'/CSS/wp_se2_horizontal_template.css' );
	wp_enqueue_style('wp_se2_css_horizontal_template');


	/*#################					LITEPICKER					########################################*/

	wp_register_script('wp_js_litepicker', plugin_dir_url(__FILE__) . '/JS/litepicker.js');
	wp_enqueue_script('wp_js_litepicker');
	
	wp_register_script( 'wp_js_litepicker_mobilefriendly', plugin_dir_url(__FILE__).'/JS/litepicker_mobilefriendly.js' );
	wp_enqueue_script('wp_js_litepicker_mobilefriendly');
	
	wp_register_style( 'wp_css_litepicker', plugin_dir_url(__FILE__).'/CSS/litepicker.css' );
	wp_enqueue_style('wp_css_litepicker');

	$apt=$atts["apt"];
		
	$dictionary=loadDictionary($apt);
	$locale=getLocale($lang);
	$color=$atts["color"];
	if($color==null)$color="";


	$load_jquery=false;
	if($atts["load_jquery"]!=null)
      $load_jquery=$atts["load_jquery"];
	$jquery='<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';

	if($load_jquery)
		echo($jquery);
   
?>

	<!-- FONT AWSOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

	<!-- MOMENT JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.min.js"></script>

	<?php
													
		if($hide_children=='1'){
	?>										
		
		<style>
		
			div.children-row {
			
				display:none;
			}
		</style>
	<?php											
		}
		if($hide_pin=='1'){
		    
		    ?>
			
			<style>
			
				div.promotional-code-input {
				
					display:none;
				}
			</style>
		<?php											
			}
	   ?>



		<div id="search_room_box" class="notranslate">
		
			<form name="formSearch" id="formSearch" action="https://booking.roomcloud.net/be/se2/hotel.jsp" method="post">

				<input type="hidden" name="curr" value="<?php echo($curr) ?>">
				<input type="hidden" name="lang" value="<?php echo($lang) ?>">
				<?php 
				    
				if($hide_pin=='1'){
				
				?>
					<input type="hidden" name="hide_pin" value="1">
				<?php											
        			}
                ?>
				<input type="hidden" name="showCrossed" id="showCrossed" value="<?php echo ($showCrossed)?>">

				<div id="search-items">

					<div id="research-tab">
						
						<div class="rc-row">

						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3" id="search_group_div">	
								
									<div class="rc-input-group" id="calendar_search_group">
										<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-calendar dates_calendar src-icon" aria-hidden="true"></i></span>
										<input class="form-control" name="search_calendar" id="search_calendar" value="" autocomplete="off" onfocus="blur();"/>
										<input type="hidden" name="checkin" id="checkin">
										<input type="hidden" name="checkout" id="checkout"> 
										<input type="hidden" name="hotel" value="<?php echo ($hotel)?>">
										<?php
										if($property_id!=null){
										    
										    echo "<input type=\"hidden\" name=\"propertyId\" value=\"".$property_id."\">";
										}
										
										if($room_type_id!=null){
										    
										    echo "<input type=\"hidden\" name=\"roomTypeId\" value=\"".$room_type_id."\">";
										}
										
										?>
										
										
									</div>
									
							</div>		
										
						

						
		
							
						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-4 rc-col-lg-3"  id="rooms_search">
		
								<div class="rc-dropdown">
		
									<div class="rc-input-group" id="travelers_group">
									
										<span class="input-group-addon" ><i class="fa fa-male src-icon" aria-hidden="true"></i></span>
										<input class="form-control" id="travelers" autocomplete="off" 
											value="<?php 
											
														echo "1 ".$dictionary[$lang.'_room']." - ";
														
														if ($adults==1) echo ("1 ".$dictionary[$lang.'_adult']);
														else echo ($adults." ".$dictionary[$lang.'_adults']);
													?>"/>

										
														
									</div>
									
									<div class="rc-dropdown-menu fw" id="traveler_details">
										<div id="rooms_container">
											<div id="room_0_container" class="rm-cnt"><!--  ROOM CONTAINER  -->
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-12">
														
															<span class="room-error" id="room_error_0"></span>
																											
													</div>
													<div class="rc-col-xs-6">
															
														<div class="rc-text-right room-num-div">
														
															<span class="room-num-span" id="room-num-span-0"><?php echo ($dictionary[$lang.'_room'])?> 1</span>
															
															
	
														</div>
													</div>
													
													<div class="rc-col-xs-6"></div>
												</div>
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-6 rc-text-center">
															
														<div class="rc-text-center div-room-adult-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang.'_adults']); ?></span>
															<span class="icon-span">
																<i class="fa fa-male occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
	
														</div>
													</div>
												
													<div class="rc-col-xs-6 rc-text-align-auto">
																		
														<div class=" rc-text-center inline-block div-room-adult-quantity">
															<span class="box-btn-round btn-less <?php if ($adults==1) echo ("disabled_btn")?>" id="adults_less_0">-</span>								
														 	<div class="form-search-div" >
								
																<span id="adults_span_0" class="src-span"><?php echo ($adults) ?></span>
																<input type="hidden" id="adults_0" name="adults" value="<?php echo ($adults) ?>"/>
						
															</div>
																			
															<span class="box-btn-round btn-plus " id="adults_more_0">+</span>
														</div>
													
													</div>
												
												</div>
												
												
												<div class="rc-row  children-row">
													
													<div class="rc-col-xs-6 rc-text-center app_child_cnt">
													
														<div class=" rc-text-center div-room-child-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang.'_children']); ?></span>
															<span class="icon-span">
																<i class="fa fa-child occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
														</div>
													</div>
													
													<div class="rc-col-xs-6 rc-text-align-auto app_child_cnt">
													
														<div class=" rc-text-center inline-block div-room-child-quantity">
															<span class="box-btn-round btn-less disabled_btn" id="children_less_0">-</span>
															<div class="form-search-div">									
																<span class="src-span" id="children_span_0">0</span>
																<input type="hidden" name="children" id="children_0" value="0"/>
															</div>
															<span class="box-btn-round btn-plus " id="children_more_0">+</span>
														</div>
													
													</div>
															
												</div>			
												
														
												<div class="rc-row  children-row" id="room_0_children_append_container"><!--  START CHILDREN AGES   -->
	
												</div>	<!--  END CHILDREN AGES   -->
												
												
											</div><!-- END ROOM CONTAINER  -->
							
										
										</div>
										
										
										
										<div id="room_add_div" class="rc-text-right"> 
										<hr class="last-hr">
										<span id="room_add_span"><?php echo ($dictionary[$lang.'_add_room']); ?> +</span>
										</div>
										
										<div id="close-btn-div" class="rc-text-center">
											<button class="button btn btn-block  be-btn" id="close_dropdown" type="button" class="rc-text-center">
											
												<span class="rc-close-btn"><?php echo ($dictionary[$lang."_done"]); ?></span>
												
												
											</button>
										
										</div>
										
										
									</div>
								</div>						
							</div>



							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3 promotional-code-input">
							
								<div class="rc-input-group" id="promo_search_group">
								
									<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-tag src-icon" aria-hidden="true"></i></span>
									<input class="form-control" id="pin" name="pin" placeholder="<?php echo $dictionary[$lang."_promo_code"]; ?>"/>
									
								</div>
								
							</div>

							
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-2 rc-col-lg-3 rc-text-center">
							
								<button class="button btn btn-block  be-btn" type="button" id="btn-search">
									<i class="fa fa-search" aria-hidden="true"></i>
									
								</button>
							
							</div>
							 
						</div>
						
					</div>
				</div>
			</form>
		</div> 
		

	<script>

	var openDropdownsOnTop=<?php echo ($openDropdownsOnTop=="true"?"true":"false")?>;
	var first_dow=<?php echo ($first_dow); ?>;
	var str_adult=" <?php echo ($dictionary[$lang.'_adult']); ?>";
	var str_adults=" <?php echo ($dictionary[$lang.'_adults']); ?>";
	var str_child=" <?php echo ($dictionary[$lang.'_child']); ?>";
	var str_children=" <?php echo ($dictionary[$lang.'_children']); ?>";
	var str_room="<?php echo ($dictionary[$lang.'_room']); ?>";
	var str_rooms="<?php echo ($dictionary[$lang.'_rooms']); ?>";
	var str_remove_room="<?php echo ($dictionary[$lang.'_remove_room']); ?>";
	var str_room_error="<?php echo ($dictionary[$lang.'_room_error']); ?>";
	var str_age="<?php echo ($dictionary[$lang.'_age']); ?>";
	var str_night="<?php echo ($dictionary[$lang.'_night']); ?>";
	var str_nights="<?php echo ($dictionary[$lang.'_nights']); ?>";

	var locale='<?php echo ($locale);?>';
	var color='<?php echo ($color);?>';
		if (color!=""){ 
		
		document.documentElement.style.setProperty('--blu-color', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-in-range-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-brightness', '1.2');
		document.documentElement.style.setProperty('--litepicker-day-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-prev-month-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-next-month-color-hover', '#'+color);
		
		document.documentElement.style.setProperty('--litepicker-is-start-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-start-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-end-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-end-color-bg', '#'+color);
	}
	</script>	
		
<?php
}

function rc_iframe_v2($atts){


	
	$hotel=$atts["hotel"];
	  
   if(!$hotel && $_GET['hotel']!=null){	   
	   $hotel=e($_GET['hotel']);
	  
	}

	if(!$hotel && $_POST['hotel']!=null){	   
	   $hotel=e($_POST['hotel']);
	  
	}
		
	$hotel=intval($hotel);
	
	if(!$hotel)
		$hotel='';
	
   $pin=e($_POST['pin']);
   
   if(!$pin )
		$pin=e($_GET['pin']);
   
   if(strlen($pin) > 20)
      $pin='';

	  
   $checkin=e($_POST['checkin']);
	if(!$checkin )
		$checkin=e($_GET['checkin']);
   if(strlen($checkin) <> 8)
      $checkin='';
   
   $checkout=e($_POST['checkout']);
	if(!$checkout )
		$checkout=e($_GET['checkout']);
   if(strlen($checkout) <> 8)
      $checkout='';

   $curr=e($_POST['curr']);
	if(!$curr)
		$curr=e($_GET['curr']);
   if(strlen($curr) <> 3)
      $curr='';	  
	  
   $lang=e($_POST['lang']);
	if(!$lang)
		$lang=e($_GET['lang']);
   if(strlen($lang) <> 2)
      $lang='';
   
   $adults=e($_POST['adults']);
	if(!$adults)
		$adults=e($_GET['adults']);
		
   $adults=intval($adults);
   if(!$adults)
	  $adults='';

   $height=$atts["height"];

   if(!$height)
	  $height='90';
	
	$hide_children=$atts["hide_children"];
	
	
   echo('<iframe frameborder="0" width="100%" style="height: '.$height.'vh;" src="');

   echo('https://booking.roomcloud.net/be/se2/hotel.jsp?hotel='.$hotel.'&pin='.$pin.'adults='.$adults.'&lang='.$lang.'&curr='.$currency);

   echo('"></iframe>');
 
   return;
}

function rc_booking_vertical($atts){
	
    ob_start();
    
   if($atts["page_id"]!=null)
      $host="?page_id=".$atts["page_id"];

	$first_dow=$atts["first_dow"];
   	if($first_dow== null)
       $first_dow="0";
       
   $lang=$atts["lang"];
   if($lang== null)
       $lang="en";

	$curr=$atts["curr"];
   if($curr== null)
       $curr="EUR";

	$adults=$atts["adults"];
   if($adults== null)
		$adults=1;

   $hotel=$atts["hotel"];
   if($hotel == null)
       $hotel="";
   
	$hide_children=$atts["hide_children"];
	$hide_pin=$atts["hide_pin"];
	
	$showCrossed=$atts["showcrossed"];
    if($showCrossed == null) $showCrossed="";


	/*##########################				LITEPICKER					########################################*/



	wp_register_script('wp_js_litepicker', plugin_dir_url(__FILE__) . '/JS/litepicker.js');
	wp_enqueue_script('wp_js_litepicker');
	
	wp_register_script( 'wp_js_litepicker_mobilefriendly', plugin_dir_url(__FILE__).'/JS/litepicker_mobilefriendly.js' );
	wp_enqueue_script('wp_js_litepicker_mobilefriendly');
	
	wp_register_style( 'wp_css_litepicker', plugin_dir_url(__FILE__).'/CSS/litepicker.css' );
	wp_enqueue_style('wp_css_litepicker');

	/*######################					TEMPLATE				#####################################*/

	wp_register_script('wp_se1_js_vertical_template', plugin_dir_url(__FILE__) . '/JS/wp_se1_vertical_template.js');
	wp_enqueue_script('wp_se1_js_vertical_template');
	
	wp_register_style( 'wp_se1_css_vertical_template', plugin_dir_url(__FILE__).'/CSS/wp_se1_vertical_template.css' );
	wp_enqueue_style('wp_se1_css_vertical_template');

	$apt=$atts["apt"];
	
	$dictionary=loadDictionary($apt);
	$locale=getLocale($lang);
	$color=$atts["color"];
	if($color==null)$color="";
	
	$load_jquery=false;
	if($atts["load_jquery"]!=null)
      $load_jquery=$atts["load_jquery"];
	$jquery='<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';

	if($load_jquery)
		echo($jquery);	
		
	
?>


	<!-- FONT AWSOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

	<!-- MOMENT JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.min.js"></script>

	<?php
													
		if($hide_children=='1'){
	?>										
		
		<style>
		
			div.children-row {
			
				display:none;
			}
		</style>
	<?php											
		}
		if($hide_pin=='1'){
		    
		    ?>
			
			<style>
			
				div.promotional-code-input {
				
					display:none;
				}
			</style>
		<?php											
			}
	?>



		<div id="search_room_box" class="notranslate">
		
			<form name="formSearch" id="formSearch" action="https://booking.roomcloud.net/be/se1/hotel.jsp" method="post">

				<?php 
				    
				if($hide_pin=='1'){
				
				?>
					<input type="hidden" name="hide_pin" value="1">
				<?php											
        			}
                ?>
				<input type="hidden" name="curr" value="<?php echo($curr) ?>">
				<input type="hidden" name="lang" value="<?php echo($lang) ?>">

				<input type="hidden" name="showCrossed" id="showCrossed" value="<?php echo ($showCrossed)?>">

				<div id="search-items" >

					<div id="research-tab">
						
						<div class="rc-row mrg-top">
							<div class="rc-col-xs-12 rc-text-center">
								<div class="title"><hr><span class="search-titles"><?php echo ($dictionary[$lang."_checkin"]."/".$dictionary[$lang."_checkout"]); ?></span><hr></div>
							</div>

						</div>
			  
						<div class="rc-row" id="calendar_row">
						
							<div class="rc-col-xs-12 rc-col-12" id="search_group_div">	
								
								
								
									<div class="rc-input-group" id="calendar_search_group">
										<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-calendar dates_calendar" aria-hidden="true"></i></span>
										<input class="form-control" name="search_calendar" id="search_calendar" value="" autocomplete="off" onfocus="blur();"/>
										<input type="hidden" name="hotel" id="hotel" value="<?php echo ($hotel)?>">
										<input type="hidden" name="start_day" id="start_day">
										<input type="hidden" name="start_month" id="start_month"> 
										<input type="hidden" name="start_year" id="start_year">
										<input type="hidden" name="end_day" id="end_day"> 										
										<input type="hidden" name="end_month" id="end_month">
										<input type="hidden" name="end_year" id="end_year"> 										
										

										
									</div>
										
							
								
							</div>		
						</div>
					
		
					
						<div class="rc-row mrg-top"  >
							<div class="rc-col-xs-12 rc-col-12">
								<div class="title"><hr><span class="search-titles"><?php echo ($dictionary[$lang."_room"]); ?></span><hr></div>
							</div>
						</div>
		
		
						<div class="rc-row"  id="rooms_search-row">
							<div class="rc-col-xs-12 rc-col-12"  id="rooms_search">
		
								
									<div id="room_0_container" class="rm-cnt mrg-top"><!--  ROOM CONTAINER  -->
									
										<div class="rc-row rc-text-center">
										
											<div class="rc-col-xs-12" id="room_error_0"></div>
										
										</div>
									 	<div class="rc-row rc-text-center">        
											<div class="rc-col-lg-12 rc-col-md-12 rc-col-sm-12 rc-col-xs-12 rc-col-12 col-rooms" id="room_body_div_0">
												<div class="div-room-num rc-text-left rc-col-xs-12 rc-col-12"><!-- Room#  remove add  -->
													<span class="room-number" id="room_0_header_room_number"> #1 </span>
														
													<div class=" rc-text-left inline-block div-room-action-add">
		
													</div>
		
														
												</div>
												<div class="rc-row"><!-- ADULTS and CHILDREN-->
												
													<div class="rc-col-xs-12">
														<span class="room-error" id="room_error_0"></span>
													</div>
												
													<div class="rc-col-xs-6 rc-col-6 rc-text-center">
													
														
															
																<div class="rc-text-center inline-block div-room-adult-occupancy">
																	<i class="fa fa-male occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
																</div>
														
														
														
																<div class=" rc-text-center inline-block div-room-adult-quantity">
																	<span class="box-btn btn-less <?php if ($adults==1) echo ("disabled_btn") ?>" id="adults_less_0">-</span>								
																
																	<div class="form-search-div" >
				
																				<span id="adults_span_0" class="src-span"><?php echo ($adults); ?></span>
																				<input type="hidden" id="adults_0" name="adults" value="<?php echo ($adults); ?>"/>
		
																	</div>
															
																	<span class="box-btn btn-plus " id="adults_more_0">+</span>
																</div>
															
														
													 </div>
													<div class="rc-col-xs-6 rc-col-6 rc-text-right app_child_cnt children-row">
														<div class=" rc-text-center inline-block div-room-child-occupancy">
															<i class="fa fa-child occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
														</div>
														<div class=" rc-text-center inline-block div-room-child-quantity">
														
															<span class="box-btn btn-less disabled_btn" id="children_less_0">-</span>
														
																<div class="form-search-div">									
																	<span class="src-span" id="children_span_0">0</span>
																	<input type="hidden" name="children" id="children_0" value="0"/>
																</div>
														
															<span class="box-btn btn-plus " id="children_more_0">+</span>
														
														</div>
													</div>
												</div>
												
												</div>
						
											</div>
											
											<div class="rc-row children-row" id="room_0_children_append_container"><!--  START CHILDREN AGES   -->
												<div class="rc-col-xs-12 rc-col-12">				
		
												</div>
											</div>	<!--  END CHILDREN AGES   -->
										
									</div><!-- END ROOM CONTAINER  -->
														
							</div>
						</div><!--  END DIV rooms_search_row -->

					
		
				
						<div class="rc-row mrg-top" id="pin_div">
							<div class="rc-col-xs-12 rc-col-12 promotional-code-input">
								<input class="form-control" name="pin" placeholder="<?php echo $dictionary[$lang."_promo_code"]; ?>"/>
							</div>
						</div>
					
		
						
						<div class="rc-row mrg-top div-search-button">
							
							<div class="rc-col-xs-12 rc-col-12 rc-text-center">
							
								<button class="button btn btn-block  be-btn" type="button" id="btn-search">
									<?php echo ($dictionary[$lang."_search"]); ?>
									
								</button>
							
							</div>
							 
						</div>
						
					</div>
				</div>
			</form>
		</div> 
		
	<script>

	var str_adult=" <?php echo ($dictionary[$lang.'_adult']); ?>";
	var first_dow=<?php echo ($first_dow); ?>;
	var str_adults=" <?php echo ($dictionary[$lang.'_adults']); ?>";
	var str_child=" <?php echo ($dictionary[$lang.'_child']); ?>";
	var str_children=" <?php echo ($dictionary[$lang.'_children']); ?>";
	var str_room="<?php echo ($dictionary[$lang.'_room']); ?>";
	var str_rooms="<?php echo ($dictionary[$lang.'_rooms']); ?>";
	var str_remove_room="<?php echo ($dictionary[$lang.'_remove_room']); ?>";
	var str_room_error="<?php echo ($dictionary[$lang.'_room_error']); ?>";
	var str_age="<?php echo ($dictionary[$lang.'_age']); ?>";
	var str_night="<?php echo ($dictionary[$lang.'_night']); ?>";
	var str_nights="<?php echo ($dictionary[$lang.'_nights']); ?>";
	
	var locale='<?php echo ($locale);?>';
	var color='<?php echo ($color);?>';
		if (color!=""){ 
		
		document.documentElement.style.setProperty('--blu-color', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-in-range-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-brightness', '1.2');
		document.documentElement.style.setProperty('--litepicker-day-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-prev-month-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-next-month-color-hover', '#'+color);
		
		document.documentElement.style.setProperty('--litepicker-is-start-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-start-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-end-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-end-color-bg', '#'+color);
	}

	</script>		
<?php
	$output_string=ob_get_contents();;
	ob_end_clean();
	return $output_string;
	
}

function rc_booking_vertical_v2($atts){
	
   ob_start();


   if($atts["page_id"]!=null)
      $host="?page_id=".$atts["page_id"];

	$first_dow=$atts["first_dow"];
   	if($first_dow== null)
       $first_dow="0";
       
   $lang=$atts["lang"];
   if($lang== null)
       $lang="en";

	$curr=$atts["curr"];
   if($curr== null)
		$curr="EUR";

	$adults=$atts["adults"];
   if($adults== null)
		$adults=1;


   $hotel=$atts["hotel"];
   if($hotel == null)
       $hotel="";
   
       
   $property_id=$atts["property_id"];
   
   $room_type_id=$atts["room_type_id"];
   
   $hide_children=$atts["hide_children"];
   $hide_pin=$atts["hide_pin"];
	$showCrossed=$atts["showcrossed"];
   if($showCrossed == null) $showCrossed="";
  
	
	/*##########################				LITEPICKER					########################################*/



	wp_register_script('wp_js_litepicker', plugin_dir_url(__FILE__) . '/JS/litepicker.js');
	wp_enqueue_script('wp_js_litepicker');
	
	wp_register_script( 'wp_js_litepicker_mobilefriendly', plugin_dir_url(__FILE__).'/JS/litepicker_mobilefriendly.js' );
	wp_enqueue_script('wp_js_litepicker_mobilefriendly');
	
	wp_register_style( 'wp_css_litepicker', plugin_dir_url(__FILE__).'/CSS/litepicker.css' );
	wp_enqueue_style('wp_css_litepicker');

	/*######################					TEMPLATE				#####################################*/

	wp_register_script('wp_se2_js_vertical_template', plugin_dir_url(__FILE__) . '/JS/wp_se2_vertical_template.js');
	wp_enqueue_script('wp_se2_js_vertical_template');
	
	wp_register_style( 'wp_se2_css_vertical_template', plugin_dir_url(__FILE__).'/CSS/wp_se2_vertical_template.css' );
	wp_enqueue_style('wp_se2_css_vertical_template');

	$apt=$atts["apt"];
		
	$dictionary=loadDictionary($apt);
	$locale=getLocale($lang);
	$color=$atts["color"];
	if($color==null)$color="";
		
	$load_jquery=false;
	if($atts["load_jquery"]!=null)
      $load_jquery=$atts["load_jquery"];
	$jquery='<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';

	if($load_jquery)
		echo($jquery);
?>



	
	
	<!-- FONT AWSOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

	<!-- MOMENT JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.min.js"></script>

	<?php
													
		if($hide_children=='1'){
	?>										
		
		<style>
		
			div.children-row {
			
				display:none;
			}
		</style>
	<?php											
		}
		if($hide_pin=='1'){
		    
		    ?>
			
			<style>
			
				div.promotional-code-input {
				
					display:none;
				}
			</style>
		<?php											
			}
	?>



  <div id="search_room_box" class="notranslate">
		
			<form name="formSearch" id="formSearch" action="https://booking.roomcloud.net/be/se2/hotel.jsp" method="post">
			
				<?php 
				    
				if($hide_pin=='1'){
				
				?>
					<input type="hidden" name="hide_pin" value="1">
				<?php											
        			}
                ?>
				<input type="hidden" name="curr" value="<?php echo($curr) ?>">
				<input type="hidden" name="lang" value="<?php echo($lang) ?>">
				<input type="hidden" name="showCrossed" id="showCrossed" value="<?php echo ($showCrossed)?>">
				<div id="search-items" >

					<div id="research-tab">
						
						<div class="rc-row mrg-top">
							<div class="rc-col-xs-12 rc-text-center">
								<div class="title"><hr><span class="search-titles"><?php echo ($dictionary[$lang."_checkin"]."/".$dictionary[$lang."_checkout"]); ?></span><hr></div>
							</div>

						</div>
			  
						<div class="rc-row" id="calendar_row">
						
							<div class="rc-col-xs-12 rc-col-12" id="search_group_div">	
								
								
								
									<div class="rc-input-group" id="calendar_search_group">
										<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-calendar dates_calendar" aria-hidden="true"></i></span>
										<input class="form-control" name="search_calendar" id="search_calendar" value="" autocomplete="off" onfocus="blur();"/>
										<input type="hidden" name="checkin" id="checkin">
										<input type="hidden" name="checkout" id="checkout"> 
										<input type="hidden" name="hotel" value="<?php echo ($hotel)?>">
										<?php
										if($property_id!=null){
										    
										    echo ("<input type=\"hidden\" name=\"propertyId\" value=\"".$property_id."\">");
										    
										}
										if($room_type_id!=null){
										    
										    echo ("<input type=\"hidden\" name=\"roomTypeId\" value=\"".$room_type_id."\">");
										}
										?>
									</div>
										
							
								
							</div>		
						</div>
					
		
					
						<div class="rc-row mrg-top"  >
							<div class="rc-col-xs-12 rc-col-12">
								<div class="title"><hr><span class="search-titles"><?php echo ($dictionary[$lang."_room"]); ?></span><hr></div>
							</div>
						</div>
		
		
						<div class="rc-row"  id="rooms_search-row">
							<div class="rc-col-xs-12 rc-col-12"  id="rooms_search">
		
								
									<div id="room_0_container" class="rm-cnt mrg-top"><!--  ROOM CONTAINER  -->
									
										<div class="rc-row rc-text-center">
										
											<div class="rc-col-xs-12" id="room_error_0"></div>
										
										</div>
									 	<div class="rc-row rc-text-center">        
											<div class="rc-col-lg-12 rc-col-md-12 rc-col-sm-12 rc-col-xs-12 rc-col-12 col-rooms" id="room_body_div_0">
												<div class="div-room-num rc-text-left rc-col-xs-12 rc-col-12"><!-- Room#  remove add  -->
													<span class="room-number" id="room_0_header_room_number"> #1 </span>
														
													<div class=" rc-text-left inline-block div-room-action-add">
		
													</div>
		
														
												</div>
												<div class="rc-row"><!-- ADULTS and CHILDREN-->
												
													<div class="rc-col-xs-12">
														<span class="room-error" id="room_error_0"></span>
													</div>
												
													<div class="rc-col-xs-6 rc-col-6 rc-text-center">
													
														
															
																<div class="rc-text-center inline-block div-room-adult-occupancy">
																	<i class="fa fa-male occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
																</div>
														
														
														
																<div class=" rc-text-center inline-block div-room-adult-quantity">
																	<span class="box-btn btn-less <?php if ($adults==1) echo ("disabled_btn") ?>" id="adults_less_0">-</span>								
																
																	<div class="form-search-div" >
				
																				<span id="adults_span_0" class="src-span"><?php echo ($adults); ?></span>
																				<input type="hidden" id="adults_0" name="adults" value="<?php echo ($adults); ?>"/>
		
																	</div>
															
																	<span class="box-btn btn-plus " id="adults_more_0">+</span>
																</div>
															
														
													 </div>
													<div class="rc-col-xs-6 rc-col-6 rc-text-right app_child_cnt children-row">
														<div class=" rc-text-center inline-block div-room-child-occupancy">
															<i class="fa fa-child occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
														</div>
														<div class=" rc-text-center inline-block div-room-child-quantity">
														
															<span class="box-btn btn-less disabled_btn" id="children_less_0">-</span>
														
																<div class="form-search-div">									
																	<span class="src-span" id="children_span_0">0</span>
																	<input type="hidden" name="children" id="children_0" value="0"/>
																</div>
														
															<span class="box-btn btn-plus " id="children_more_0">+</span>
														
														</div>
													</div>
												</div>
												
												</div>
						
											</div>
											
											<div class="rc-row children-row" id="room_0_children_append_container"><!--  START CHILDREN AGES   -->
												<div class="rc-col-xs-12 rc-col-12">				
		
												</div>
											</div>	<!--  END CHILDREN AGES   -->
										
									</div><!-- END ROOM CONTAINER  -->
														
							</div>
						</div><!--  END DIV rooms_search_row -->
						<div class="rc-row div-search-button">
							<div class="rc-col-xs-12 rc-col-12 src-room-add">
								<button id="room_header_add" type="button" class="button btn btn-block be-btn room_header_span_add"><?php echo $dictionary[$lang."_add_room"]; ?></button>	
							</div>
						</div>
					
		
				
						<div class="rc-row mrg-top" id="pin_div">
							<div class="rc-col-xs-12 rc-col-12 promotional-code-input">
								<input class="form-control" name="pin" placeholder="<?php echo $dictionary[$lang."_promo_code"]; ?>"/>
							</div>
						</div>
					
		
						
						<div class="rc-row mrg-top div-search-button">
							
							<div class="rc-col-xs-12 rc-col-12 rc-text-center">
							
								<button class="button btn btn-block  be-btn" type="button" id="btn-search">
									<?php echo ($dictionary[$lang."_search"]); ?>
									
								</button>
							
							</div>
							 
						</div>
						
					</div>
				</div>
			</form>
		</div>
		
	<script>

	var str_adult=" <?php echo ($dictionary[$lang.'_adult']); ?>";
	var first_dow=<?php echo ($first_dow); ?>;
	var str_adults=" <?php echo ($dictionary[$lang.'_adults']); ?>";
	var str_child=" <?php echo ($dictionary[$lang.'_child']); ?>";
	var str_children=" <?php echo ($dictionary[$lang.'_children']); ?>";
	var str_room="<?php echo ($dictionary[$lang.'_room']); ?>";
	var str_rooms="<?php echo ($dictionary[$lang.'_rooms']); ?>";
	var str_remove_room="<?php echo ($dictionary[$lang.'_remove_room']); ?>";
	var str_room_error="<?php echo ($dictionary[$lang.'_room_error']); ?>";
	var str_age="<?php echo ($dictionary[$lang.'_age']); ?>";
	var str_night="<?php echo ($dictionary[$lang.'_night']); ?>";
	var str_nights="<?php echo ($dictionary[$lang.'_nights']); ?>";
	
	var locale='<?php echo ($locale);?>';
	var color='<?php echo ($color);?>';
		if (color!=""){ 
		
		document.documentElement.style.setProperty('--blu-color', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-in-range-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-brightness', '1.2');
		document.documentElement.style.setProperty('--litepicker-day-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-prev-month-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-next-month-color-hover', '#'+color);
		
		document.documentElement.style.setProperty('--litepicker-is-start-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-start-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-end-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-end-color-bg', '#'+color);
	}
	</script>
<?php
	
	$output_string=ob_get_contents();;
	ob_end_clean();
	return $output_string;
	
}

function rc_booking_multi($atts){
	
 	ob_start();
 
	if($atts["page_id"]!=null)
		$host="?page_id=".$atts["page_id"];

	$first_dow=$atts["first_dow"];
   	if($first_dow== null)
       $first_dow="0";
       
	$lang=$atts["lang"];
	if($lang==null){
		$lang="en";
	}

	$curr=$atts["curr"];
	if($curr== null)
		$curr="EUR";

	$adults=$atts["adults"];
	if($adults== null)
		$adults=1;

	$hotel=$atts["hotel"];
	if($hotel == null)
		$hotel="";
		
	$hide_children=$atts["hide_children"];
	$hide_pin=$atts["hide_pin"];
	$group_ids=$atts["multi_id"];
	if($group_ids== null)
		$group_ids=$hotel;

	$group_names=$atts["multi_desc"];
	if($group_names== null)
		$group_names="Hotel";

	$showCrossed=$atts["showcrossed"];
   if($showCrossed == null) $showCrossed="";

   $openDropdownsOnTop=$atts["open_dropdowns_on_top"];
   if($openDropdownsOnTop == null) $openDropdownsOnTop="false";

	$ids=explode(";",$group_ids);
	$names=explode(";",$group_names);


	wp_register_script('wp_se1_js_horizontal_template_multi_hotel', plugin_dir_url(__FILE__) .'/JS/wp_se1_horizontal_template_multi_hotel.js');
	wp_enqueue_script('wp_se1_js_horizontal_template_multi_hotel');

	wp_register_style( 'wp_se1_css_horizontal_template_multi_hotel', plugin_dir_url(__FILE__).'/CSS/wp_se1_horizontal_template_multi_hotel.css' );
	wp_enqueue_style('wp_se1_css_horizontal_template_multi_hotel');

	/*#################					LITEPICKER					########################################*/

	wp_register_script( 'wp_js_litepicker_mobilefriendly', plugin_dir_url(__FILE__).'/JS/litepicker_mobilefriendly.js' );
	wp_enqueue_script('wp_js_litepicker_mobilefriendly');

	wp_register_script('wp_js_litepicker', plugin_dir_url(__FILE__) . '/JS/litepicker.js');
	wp_enqueue_script('wp_js_litepicker');
	
	wp_register_style( 'wp_css_litepicker', plugin_dir_url(__FILE__).'/CSS/litepicker.css' );
	wp_enqueue_style('wp_css_litepicker');

	$apt=$atts["apt"];
		
	$dictionary=loadDictionary($apt);
	$locale=getLocale($lang);
	$color=$atts["color"];
	if($color==null)$color="";

	$load_jquery=false;
	if($atts["load_jquery"]!=null)
      $load_jquery=$atts["load_jquery"];
	$jquery='<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';

	if($load_jquery)
		echo($jquery);
?>


	
	
	<!-- FONT AWSOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

	<!-- MOMENT JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.min.js"></script>

	<?php
													
		if($hide_children=='1'){
	?>										
		
		<style>
		
			div.children-row {
			
				display:none;
			}
		</style>
	<?php											
		}
		if($hide_pin=='1'){
		    
		    ?>
			
			<style>
			
				div.promotional-code-input {
				
					display:none;
				}
			</style>
		<?php											
			}
	?>

		

		<div id="search_room_box" class="notranslate">
		
			<form name="formSearch" id="formSearch" action="https://booking.roomcloud.net/be/se1/hotel.jsp" method="post">
			
				<?php 
				    
				if($hide_pin=='1'){
				
				?>
					<input type="hidden" name="hide_pin" value="1">
				<?php											
        			}
                ?>
				<input type="hidden" name="curr" value="<?php echo($curr) ?>">
				<input type="hidden" name="lang" value="<?php echo($lang) ?>">
			
				<input type="hidden" name="showCrossed" id="showCrossed" value="<?php echo ($showCrossed)?>">
			
				<div id="search-items" >

					<div id="research-tab">
						
						<div class="rc-row">


							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-2"  id="hotel_search">
						
						
								<div class="rc-input-group">
									<span class="input-group-addon"><i class="fa fa-building-o dates_calendar src-icon" aria-hidden="true"></i></span>
									<select name="hotel" id="hotel" class="form-control">
										
										<?php
										
											for ($j=0;$j<sizeOf($ids);$j++){

												echo ("<option value=\"".$ids[$j]."\">".$names[$j]."</option>");
												
											}
										
										?>

									</select>
								
								</div>
							</div>
						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3" id="search_group_div">	
								
									<div class="rc-input-group" id="calendar_search_group">
										<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-calendar dates_calendar src-icon" aria-hidden="true"></i></span>
										<input class="form-control" name="search_calendar" id="search_calendar" value="" autocomplete="off" onfocus="blur();"/>
										
										<input type="hidden" name="start_day" id="start_day">
										<input type="hidden" name="start_month" id="start_month"> 
										<input type="hidden" name="start_year" id="start_year">
										<input type="hidden" name="end_day" id="end_day"> 										
										<input type="hidden" name="end_month" id="end_month">
										<input type="hidden" name="end_year" id="end_year"> 										
										
										
									</div>
									
							</div>		
										
						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3"  id="rooms_search">
		
								<div class="rc-dropdown">
		
									<div class="rc-input-group" id="travelers_group">
									
										<span class="input-group-addon" ><i class="fa fa-male src-icon" aria-hidden="true"></i></span>
										<input class="form-control" id="travelers" autocomplete="off" value="1 <?php echo ($dictionary[$lang."_room"]); ?> - 1 <?php echo ($dictionary[$lang."_adult"]); ?>"/>

										
														
									</div>
									
									<div class="rc-dropdown-menu fw" id="traveler_details">
										<div id="rooms_container">
											<div id="room_0_container" class="rm-cnt"><!--  ROOM CONTAINER  -->
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-12">
														
															<span class="room-error" id="room_error_0"></span>
																											
													</div>
													<div class="rc-col-xs-6">
															
														<div class="rc-text-right room-num-div">
														
															<span class="room-num-span" id="room-num-span-0"><?php echo ($dictionary[$lang."_room"]); ?> 1</span>
															
															
	
														</div>
													</div>
													
													<div class="rc-col-xs-6"></div>
												</div>
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-6 rc-text-center">
															
														<div class="rc-text-center div-room-adult-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang."_adults"]); ?></span>
															<span class="icon-span">
																<i class="fa fa-male occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
	
														</div>
													</div>
												
													<div class="rc-col-xs-6 rc-text-align-auto">
																		
														<div class=" rc-text-center inline-block div-room-adult-quantity">
															<span class="box-btn-round btn-less <?php if ($adults==1) echo ("disabled_btn") ?>" id="adults_less_0">-</span>								
														 	<div class="form-search-div" >
								
																<span id="adults_span_0" class="src-span"><?php echo ($adults); ?></span>
																<input type="hidden" id="adults_0" name="adults" value="<?php echo ($adults); ?>"/>
						
															</div>
																			
															<span class="box-btn-round btn-plus " id="adults_more_0">+</span>
														</div>
													
													</div>
												
												</div>
												<div class="rc-row children-row">
													
													<div class="rc-col-xs-6 rc-text-center app_child_cnt">
													
														<div class=" rc-text-center div-room-child-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang."_children"]); ?></span>
															<span class="icon-span">
																<i class="fa fa-child occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
														</div>
													</div>
													
													<div class="rc-col-xs-6 rc-text-align-auto app_child_cnt">
													
														<div class=" rc-text-center inline-block div-room-child-quantity">
															<span class="box-btn-round btn-less disabled_btn" id="children_less_0">-</span>
															<div class="form-search-div">									
																<span class="src-span" id="children_span_0">0</span>
																<input type="hidden" name="children" id="children_0" value="0"/>
															</div>
															<span class="box-btn-round btn-plus " id="children_more_0">+</span>
														</div>
													
													</div>
															
												</div>			
				
														
												<div class="rc-row children-row" id="room_0_children_append_container"><!--  START CHILDREN AGES   -->
	
												</div>	<!--  END CHILDREN AGES   -->
													
											</div><!-- END ROOM CONTAINER  -->
							
										
										</div>
										
										
										

										
										<div id="close-btn-div" class="rc-text-center">
											<button class="button btn btn-block  be-btn" id="close_dropdown" type="button" class="rc-text-center">
											
												<span class="rc-close-btn"><?php echo ($dictionary[$lang."_done"]); ?></span>
												
											</button>
										
										</div>
										
										
									</div>
								</div>						
							</div>


							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-2 promotional-code-input">
							
								<div class="rc-input-group" id="promo_search_group">
								
									<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-tag src-icon" aria-hidden="true"></i></span>
									<input class="form-control" id="pin" name="pin" placeholder="<?php echo ($dictionary[$lang."_promo_code"]); ?>"/>
									
								</div>
								
							</div>

							
							<div class="rc-col-xs-12 rc-col-sm-12 rc-col-md-12 rc-col-lg-2 rc-text-center">
							
								<button class="button btn btn-block  be-btn" type="button" id="btn-search">
									<i class="fa fa-search" aria-hidden="true"></i>
									
								</button>
							
							</div>
							 
						</div>
						
					</div>
				</div>
			</form>
		</div> 
		
	<script>

	var openDropdownsOnTop=<?php echo ($openDropdownsOnTop=="true"?"true":"false")?>;
	var first_dow=<?php echo ($first_dow); ?>;
	var str_adult=" <?php echo ($dictionary[$lang.'_adult']); ?>";
	var str_adults=" <?php echo ($dictionary[$lang.'_adults']); ?>";
	var str_child=" <?php echo ($dictionary[$lang.'_child']); ?>";
	var str_children=" <?php echo ($dictionary[$lang.'_children']); ?>";
	var str_room="<?php echo ($dictionary[$lang.'_room']); ?>";
	var str_rooms="<?php echo ($dictionary[$lang.'_rooms']); ?>";
	var str_remove_room="<?php echo ($dictionary[$lang.'_remove_room']); ?>";
	var str_room_error="<?php echo ($dictionary[$lang.'_room_error']); ?>";
	var str_age="<?php echo ($dictionary[$lang.'_age']); ?>";
	var str_night="<?php echo ($dictionary[$lang.'_night']); ?>";
	var str_nights="<?php echo ($dictionary[$lang.'_nights']); ?>";

	var locale='<?php echo ($locale);?>';
	var color='<?php echo ($color);?>';
		if (color!=""){ 
		
		document.documentElement.style.setProperty('--blu-color', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-in-range-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-brightness', '1.2');
		document.documentElement.style.setProperty('--litepicker-day-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-prev-month-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-next-month-color-hover', '#'+color);
		
		document.documentElement.style.setProperty('--litepicker-is-start-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-start-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-end-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-end-color-bg', '#'+color);
	}
	</script>
<?php
	
	$output_string=ob_get_contents();;
	ob_end_clean();
	return $output_string;
}

function rc_booking_multi_v2($atts){
	
    ob_start();
    
   if($atts["page_id"]!=null)
      $host="?page_id=".$atts["page_id"];

	$first_dow=$atts["first_dow"];
   	if($first_dow== null)
       $first_dow="0";
       
   $lang=$atts["lang"];
   if($lang== null)
       $lang="en";
       
   $curr=$atts["curr"];
   if($curr== null)
       $curr="EUR";
   	$adults=$atts["adults"];
   if($adults== null)
		$adults=1;
	
	$group_ids=$atts["group_ids"];
   if($group_ids== null)
		$group_ids=$hotel;

   $hotel=$atts["hotel"];
   if($hotel == null)
       $hotel="";
   
   $property_id=$atts["property_id"];
   $room_type_id=$atts["room_type_id"];
   

	$hide_children=$atts["hide_children"];
	$hide_pin=$atts["hide_pin"];
	$group_ids=$atts["multi_id"];
	if($group_ids== null)
		$group_ids=$hotel;

	$group_names=$atts["multi_desc"];
	if($group_names== null)
		$group_names="Hotel";

	$ids=explode(";",$group_ids);
	$names=explode(";",$group_names);
 
	$showCrossed=$atts["showcrossed"];
   if($showCrossed == null) $showCrossed="";

   $openDropdownsOnTop=$atts["open_dropdowns_on_top"];
   if($openDropdownsOnTop == null) $openDropdownsOnTop="false";
 
	wp_register_script('wp_se2_js_horizontal_template_multi_hotel', plugin_dir_url(__FILE__) . '/JS/wp_se2_horizontal_template_multi_hotel.js');
	wp_enqueue_script('wp_se2_js_horizontal_template_multi_hotel');
	
	wp_register_style( 'wp_se2_css_horizontal_template_multi_hotel', plugin_dir_url(__FILE__).'/CSS/wp_se2_horizontal_template_multi_hotel.css' );
	wp_enqueue_style('wp_se2_css_horizontal_template_multi_hotel');

	/*#################					LITEPICKER					########################################*/

	wp_register_script('wp_js_litepicker', plugin_dir_url(__FILE__) . '/JS/litepicker.js');
	wp_enqueue_script('wp_js_litepicker');
	
	wp_register_script( 'wp_js_litepicker_mobilefriendly', plugin_dir_url(__FILE__).'/JS/litepicker_mobilefriendly.js' );
	wp_enqueue_script('wp_js_litepicker_mobilefriendly');
	
	wp_register_style( 'wp_css_litepicker', plugin_dir_url(__FILE__).'/CSS/litepicker.css' );
	wp_enqueue_style('wp_css_litepicker');

	$apt=$atts["apt"];
	
	
	$dictionary=loadDictionary($apt);
	$locale=getLocale($lang);
	$color=$atts["color"];
	if($color==null)$color="";

	$load_jquery=false;
	if($atts["load_jquery"]!=null)
      $load_jquery=$atts["load_jquery"];
	$jquery='<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';

	if($load_jquery)
		echo($jquery);

?>

	
	
	
	<!-- FONT AWSOME -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
	
		<!-- MOMENT JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.min.js"></script>

	
	<?php
													
		if($hide_children=='1'){
		    
	?>										
		
		<style>
		
			div.children-row {
			
				display:none;
			}
		</style>
	<?php											
		}
		if($hide_pin=='1'){
		    
		    ?>
			
			<style>
			
				div.promotional-code-input {
				
					display:none;
				}
			</style>
		<?php											
			}
	?>




		<div id="search_room_box" class="notranslate">
		
			<form name="formSearch" id="formSearch" action="https://booking.roomcloud.net/be/se2/hotel.jsp" method="post">
			
				<?php 
				    
				if($hide_pin=='1'){
				
				?>
					<input type="hidden" name="hide_pin" value="1">
				<?php											
        			}
                ?>
				<input type="hidden" name="curr" value="<?php echo($curr) ?>">
				<input type="hidden" name="lang" value="<?php echo($lang) ?>">

				<input type="hidden" name="showCrossed" id="showCrossed" value="<?php echo ($showCrossed)?>">

				<div id="search-items" >

					<div id="research-tab">
						
						<div class="rc-row">


							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-2"  id="hotel_search">
						
						
								<div class="rc-input-group">
									<span class="input-group-addon"><i class="fa fa-building-o dates_calendar src-icon" aria-hidden="true"></i></span>
									<select name="hotel" id="hotel" class="form-control">
										
	
										<?php
										
											for ($j=0;$j<sizeOf($ids);$j++){

												echo ("<option value=\"".$ids[$j]."\">".$names[$j]."</option>");
												
											}
										?>
										
									</select>
								
								</div>
							</div>
						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3" id="search_group_div">	
								
									<div class="rc-input-group" id="calendar_search_group">
										<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-calendar dates_calendar src-icon" aria-hidden="true"></i></span>
										<input class="form-control" name="search_calendar" id="search_calendar" value="" autocomplete="off" onfocus="blur();"/>
										<input type="hidden" name="checkin" id="checkin">
										<input type="hidden" name="checkout" id="checkout"> 
										
									</div>
									
							</div>		
										
						
							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-3"  id="rooms_search">
		
								<div class="rc-dropdown">
		
									<div class="rc-input-group" id="travelers_group">
									
										<span class="input-group-addon" ><i class="fa fa-male src-icon" aria-hidden="true"></i></span>
										<input class="form-control" id="travelers" autocomplete="off" value="1 <?php echo ($dictionary[$lang.'_room'])?> - 1 <?php echo ($dictionary[$lang.'_adult'])?>"/>

										
														
									</div>
									
									<div class="rc-dropdown-menu fw" id="traveler_details">
										<div id="rooms_container">
											<div id="room_0_container" class="rm-cnt"><!--  ROOM CONTAINER  -->
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-12">
														
															<span class="room-error" id="room_error_0"></span>
																											
													</div>
													<div class="rc-col-xs-6">
															
														<div class="rc-text-right room-num-div">
														
															<span class="room-num-span" id="room-num-span-0"><?php echo ($dictionary[$lang.'_room'])?> 1</span>
															
															
	
														</div>
													</div>
													
													<div class="rc-col-xs-6"></div>
												</div>
											
												<div class="rc-row">	
												
													<div class="rc-col-xs-6 rc-text-center">
															
														<div class="rc-text-center div-room-adult-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang.'_adults'])?></span>
															<span class="icon-span">
																<i class="fa fa-male occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
	
														</div>
													</div>
												
													<div class="rc-col-xs-6 rc-text-align-auto">
																		
														<div class=" rc-text-center inline-block div-room-adult-quantity">
															<span class="box-btn-round btn-less <?php if ($adults==1) echo ("disabled_btn") ?>" id="adults_less_0">-</span>								
														 	<div class="form-search-div" >
								
																<span id="adults_span_0" class="src-span"><?php echo ($adults); ?></span>
																<input type="hidden" id="adults_0" name="adults" value="<?php echo ($adults); ?>"/>
						
															</div>
																			
															<span class="box-btn-round btn-plus " id="adults_more_0">+</span>
														</div>
													
													</div>
												
												</div>
												<div class="rc-row children-row">
													
													<div class="rc-col-xs-6 rc-text-center app_child_cnt">
													
														<div class=" rc-text-center div-room-child-occupancy flex">
														
															<span class="name-span"><?php echo ($dictionary[$lang."_children"]); ?></span>
															<span class="icon-span">
																<i class="fa fa-child occupancy-icon src-occupancy-icon" aria-hidden="true"></i>
															</span>
															
														</div>
													</div>
													
													<div class="rc-col-xs-6 rc-text-align-auto app_child_cnt">
													
														<div class=" rc-text-center inline-block div-room-child-quantity">
															<span class="box-btn-round btn-less disabled_btn" id="children_less_0">-</span>
															<div class="form-search-div">									
																<span class="src-span" id="children_span_0">0</span>
																<input type="hidden" name="children" id="children_0" value="0"/>
															</div>
															<span class="box-btn-round btn-plus " id="children_more_0">+</span>
														</div>
													
													</div>
															
												</div>			
				
														
												<div class="rc-row children-row" id="room_0_children_append_container"><!--  START CHILDREN AGES   -->
	
												</div>	<!--  END CHILDREN AGES   -->
													
											</div><!-- END ROOM CONTAINER  -->
							
										
										</div>
										
										
										
										<div id="room_add_div" class="rc-text-right"> 
										<hr class="last-hr">
										<span id="room_add_span"><?php echo ($dictionary[$lang.'_add_room']); ?> +</span>
										</div>
										
										<div id="close-btn-div" class="rc-text-center">
											<button class="button btn btn-block  be-btn" id="close_dropdown" type="button" class="rc-text-center">
											
												<span class="rc-close-btn"><?php echo ($dictionary[$lang."_done"]); ?></span>
												
											</button>
										
										</div>
										
										
									</div>
								</div>						
							</div>


							<div class="rc-col-xs-12 rc-col-sm-6 rc-col-md-3 rc-col-lg-2 promotional-code-input">
							
								<div class="rc-input-group" id="promo_search_group">
								
									<span class="input-group-addon" id="calendar_search_span" ><i class="fa fa-tag src-icon" aria-hidden="true"></i></span>
									<input class="form-control" id="pin" name="pin" placeholder="<?php echo $dictionary[$lang."_promo_code"]; ?>"/>
									
								</div>
								
							</div>

							
							<div class="rc-col-xs-12 rc-col-sm-12 rc-col-md-12 rc-col-lg-2 rc-text-center">
							
								<button class="button btn btn-block  be-btn" type="button" id="btn-search">
									<i class="fa fa-search" aria-hidden="true"></i>
									
								</button>
							
							</div>
							 
						</div>
						
					</div>
				</div>
			</form>
		</div>

	<script>
	
	var openDropdownsOnTop=<?php echo ($openDropdownsOnTop=="true"?"true":"false")?>;
	var first_dow=<?php echo ($first_dow); ?>;
	var str_adult="<?php echo ($dictionary[$lang.'_adult']); ?>";
	var str_adults="<?php echo ($dictionary[$lang.'_adults']); ?>";
	var str_child="<?php echo ($dictionary[$lang.'_child']); ?>";
	var str_children="<?php echo ($dictionary[$lang.'_children']); ?>";
	var str_room="<?php echo ($dictionary[$lang.'_room']); ?>";
	var str_rooms="<?php echo ($dictionary[$lang.'_rooms']); ?>";
	var str_remove_room="<?php echo ($dictionary[$lang.'_remove_room']); ?>";
	var str_room_error="<?php echo ($dictionary[$lang.'_room_error']); ?>";
	var str_age="<?php echo ($dictionary[$lang.'_age']); ?>";
	var str_night="<?php echo ($dictionary[$lang.'_night']); ?>";
	var str_nights="<?php echo ($dictionary[$lang.'_nights']); ?>";

	var locale='<?php echo ($locale);?>';
	var color='<?php echo ($color);?>';
		if (color!=""){ 
		
		document.documentElement.style.setProperty('--blu-color', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-in-range-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-in-range-brightness', '1.2');
		document.documentElement.style.setProperty('--litepicker-day-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-prev-month-color-hover', '#'+color);
		document.documentElement.style.setProperty('--litepicker-button-next-month-color-hover', '#'+color);
		
		document.documentElement.style.setProperty('--litepicker-is-start-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-start-color-bg', '#'+color);
		document.documentElement.style.setProperty('--litepicker-is-end-color', '#ffffff');
		document.documentElement.style.setProperty('--litepicker-is-end-color-bg', '#'+color);
	}
	</script>
		
<?php
	
	$output_string=ob_get_contents();;
	ob_end_clean();
	return $output_string;
}
