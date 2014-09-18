<?php
$con=mysqli_connect("127.0.0.1","root","","world");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$name= mysqli_real_escape_string($con, $_GET['name']);

$result = mysqli_query($con,"SELECT * FROM item_template WHERE entry = '45472'");

echo '<center>
<div class="itemtooltip">
<img src="http://wow-v.com/images/icons/INV_GAUNTLETS_85.png" width="64" height="64" border="0" class="icon">
<div class="tooltip">
<table width="265" border="0" cellpadding="0" cellspacing="1" valign="middle" align="center">
  <tbody>';

while($row = mysqli_fetch_array($result)) {
$quality = $row['Quality'];
$bonding = $row['bonding'];
$unique = $row['maxcount'];
$class = $row['class'];
$subclass = $row['subclass'];
$type = array($class, $subclass);
$invtype = $row['InventoryType'];
$armor = $row['armor'];
$block = $row['block'];
$stattype1 = $row['stat_type1'];
$statvalue1 = $row['stat_value1'];
$stattype2 = $row['stat_type2'];
$statvalue1 = $row['stat_value1'];
$stattype3 = $row['stat_type3'];
$statvalue1 = $row['stat_value1'];
$stattype4 = $row['stat_type4'];
$statvalue1 = $row['stat_value1'];
$stattype5 = $row['stat_type5'];
$statvalue1 = $row['stat_value1'];
$stattype6 = $row['stat_type6'];
$statvalue1 = $row['stat_value1'];
$stattype7 = $row['stat_type7'];
$statvalue1 = $row['stat_value1'];
$stattype8 = $row['stat_type8'];
$statvalue1 = $row['stat_value1'];
$stattype9 = $row['stat_type9'];
$statvalue1 = $row['stat_value1'];
$stattype10 = $row['stat_type10'];
$statvalue1 = $row['stat_value1'];
$socket1 = $row['socketColor_1'];
$socket2 = $row['socketColor_2'];
$socket3 = $row['socketColor_3'];

  echo "<tr>";
  switch ($quality) {
  case "0":
		echo "<td><span class='quality-poor'>" . $row['name'] . "</span></td>";
		break;
  case "1":
		echo "<td><span class='quality-common'>" . $row['name'] . "</span></td>";
		break;
  case "2":
		echo "<td><span class='quality-uncommon'>" . $row['name'] . "</span></td>";
		break;
  case "3":
		echo "<td><span class='quality-rare'>" . $row['name'] . "</span></td>";
		break;
  case "4":
		echo "<td><span class='quality-epic'>" . $row['name'] . "</span></td>";
		break;
  case "5":
		echo "<td><span class='quality-legendary'>" . $row['name'] . "</span></td>";
		break;
  case "6":
		echo "<td><span class='quality-artifact'>" . $row['name'] . "</span></td>";
		break;
  case "7":
		echo "<td><span class='quality-red'>" . $row['name'] . "</span></td>";
		break;
  }
  echo "</tr>";
  echo "<tr>";
  echo "<tr>";
  switch ($bonding) {
  case "1":
		echo "<td class='item-white'>Binds when Picked up</td>";
		break;
  case "2":
		echo "<td class='item-white'>Binds when Equipped</td>";
		break;
  case "3":
		echo "<td class='item-white'>Binds when used</td>";
		break;
  case "4":
		echo "<td class='item-white'>Quest item</td>";
		break;
  case "5":
		echo "<td class='item-white'>Quest item1</td>";
		break;
  }
  echo "</tr>";
  echo "<tr>";
    switch ($unique) {
  case "1":
		echo "<td class='item-white'>Unique (" . $row['maxcount'] . ")</td>";
		break;
  case "2":
		echo "<td class='item-white'>Unique (" . $row['maxcount'] . ")</td>";
		break;
  case "3":
		echo "<td class='item-white'>Unique (" . $row['maxcount'] . ")</td>";
		break;
	default:
		echo "";
  }
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>";
  echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'>";
  echo "<tbody>";
  echo "<tr>";
  
  switch ($invtype) {
		case "0":
			echo "<td align='left' class='item-white'>Non equipable</td>";
			break;
		case "1":
			echo "<td align='left' class='item-white'>Head</td>";
			break;
		case "2":
			echo "<td align='left' class='item-white'>Neck</td>";
			break;
		case "3":
			echo "<td align='left' class='item-white'>Shoulder</td>";
			break;
		case "4":
			echo "<td align='left' class='item-white'>Shirt</td>";
			break;
		case "5":
			echo "<td align='left' class='item-white'>Chest</td>";
			break;
		case "6":
			echo "<td align='left' class='item-white'>Waist</td>";
			break;
		case "7":
			echo "<td align='left' class='item-white'>Legs</td>";
			break;
		case "8":
			echo "<td align='left' class='item-white'>Feet</td>";
			break;
		case "9":
			echo "<td align='left' class='item-white'>Wrist</td>";
			break;
		case "10":
			echo "<td align='left' class='item-white'>Hands</td>";
			break;
		case "11":
			echo "<td align='left' class='item-white'>Finger</td>";
			break;
		case "12":
			echo "<td align='left' class='item-white'>Trinket</td>";
			break;
		case "13":
			echo "<td align='left' class='item-white'>Weapon</td>";
			break;
		case "14":
			echo "<td align='left' class='item-white'>Shield</td>";
			break;
		case "15":
			echo "<td align='left' class='item-white'>Bow</td>";
			break;
		case "16":
			echo "<td align='left' class='item-white'>back</td>";
			break;
		case "17":
			echo "<td align='left' class='item-white'>Two Hand</td>";
			break;
		case "18":
			echo "<td align='left' class='item-white'>Bag</td>";
			break;
		case "19":
			echo "<td align='left' class='item-white'>Tabard</td>";
			break;
		case "20":
			echo "<td align='left' class='item-white'>Robe</td>";
			break;
		case "21":
			echo "<td align='left' class='item-white'>Main Hand</td>";
			break;
		case "22":
			echo "<td align='left' class='item-white'>Off Hand</td>";
			break;
		case "23":
			echo "<td align='left' class='item-white'>Held in Off Hand</td>";
			break;
		case "24":
			echo "<td align='left' class='item-white'>Ammo</td>";
			break;
		case "25":
			echo "<td align='left' class='item-white'>Thrown</td>";
			break;
		case "26":
			echo "<td align='left' class='item-white'>Wand/Gun</td>";
			break;
		case "27":
			echo "<td align='left' class='item-white'>Quiver</td>";
			break;
		case "28":
			echo "<td align='left' class='item-white'>Relic</td>";
			break;
  }
  
  switch ($type ) {
    case array("0", "0"):
        echo "<td align='right' class='item-white'>Consumable</td>";
		break;
    case array("0", "1"):
        echo "<td align='right' class='item-white'>Potion</td>";
		break;
    case array("0", "2"):
        echo "<td align='right' class='item-white'>Elixir</td>";
		break;
    case array("0", "3"):
        echo "<td align='right' class='item-white'>Flask</td>";
		break;
    case array("0", "4"):
        echo "<td align='right' class='item-white'>Scroll</td>";
		break;
    case array("0", "5"):
        echo "<td align='right' class='item-white'>Food & Drink</td>";
		break;
    case array("0", "6"):
        echo "<td align='right' class='item-white'>Item Enhancement</td>";
		break;
    case array("0", "7"):
        echo "<td align='right' class='item-white'>Bandage</td>";
		break;
    case array("0", "8"):
        echo "<td align='right' class='item-white'>Other</td>";
		break;
    case array("1", "0"):
        echo "<td align='right' class='item-white'>Bag</td>";
		break;
    case array("1", "1"):
        echo "<td align='right' class='item-white'>Soul Bag</td>";
		break;
    case array("1", "2"):
        echo "<td align='right' class='item-white'>Herb Bag</td>";
		break;
    case array("1", "3"):
        echo "<td align='right' class='item-white'>Enchanting Bag</td>";
		break;
    case array("1", "4"):
        echo "<td align='right' class='item-white'>Engineering Bag</td>";
		break;
    case array("1", "5"):
        echo "<td align='right' class='item-white'>Gem Bag</td>";
		break;
    case array("1", "6"):
        echo "<td align='right' class='item-white'>Mining Bag</td>";
		break;
    case array("1", "7"):
        echo "<td align='right' class='item-white'>Leatherworking Bag</td>";
		break;
    case array("1", "8"):
        echo "<td align='right' class='item-white'>Inscription Bag</td>";
		break;	
    case array("2", "0"):
        echo "<td align='right' class='item-white'>Axe</td>";
		break;
    case array("2", "1"):
        echo "<td align='right' class='item-white'>Axe</td>";
		break;
    case array("2", "2"):
        echo "<td align='right' class='item-white'>Bow</td>";
		break;
    case array("2", "3"):
        echo "<td align='right' class='item-white'>Gun</td>";
		break;
    case array("2", "4"):
        echo "<td align='right' class='item-white'>Mace</td>";
		break;
    case array("2", "5"):
        echo "<td align='right' class='item-white'>Mace</td>";
		break;
    case array("2", "6"):
        echo "<td align='right' class='item-white'>Polearm</td>";
		break;
    case array("2", "7"):
        echo "<td align='right' class='item-white'>Sword</td>";
		break;
    case array("2", "8"):
        echo "<td align='right' class='item-white'>Sword</td>";
		break;
    case array("2", "9"):
        echo "<td align='right' class='item-white'>Absolete</td>";
		break;
    case array("2", "10"):
        echo "<td align='right' class='item-white'>Staff</td>";
		break;
    case array("2", "11"):
        echo "<td align='right' class='item-white'>Exotic</td>";
		break;
    case array("2", "12"):
        echo "<td align='right' class='item-white'>Exotic</td>";
		break;
    case array("2", "13"):
        echo "<td align='right' class='item-white'>Fist Weapon</td>";
		break;
    case array("2", "14"):
        echo "<td align='right' class='item-white'>Miscellaneous</td>";
		break;
    case array("2", "15"):
        echo "<td align='right' class='item-white'>Dagger</td>";
		break;
    case array("2", "16"):
        echo "<td align='right' class='item-white'>Thrown</td>";
		break;
    case array("2", "17"):
        echo "<td align='right' class='item-white'>Spear</td>";
		break;
    case array("2", "18"):
        echo "<td align='right' class='item-white'>Crossbow</td>";
		break;
    case array("2", "19"):
        echo "<td align='right' class='item-white'>Wand</td>";
		break;
    case array("2", "20"):
        echo "<td align='right' class='item-white'>Fishing Pole</td>";
		break;
    case array("3", "0"):
        echo "<td align='right' class='item-white'>Red</td>";
		break;
    case array("3", "1"):
        echo "<td align='right' class='item-white'>Blue</td>";
		break;
    case array("3", "2"):
        echo "<td align='right' class='item-white'>Yellow</td>";
		break;
    case array("3", "3"):
        echo "<td align='right' class='item-white'>Purple</td>";
		break;
    case array("3", "4"):
        echo "<td align='right' class='item-white'>Green</td>";
		break;
    case array("3", "5"):
        echo "<td align='right' class='item-white'>Orange</td>";
		break;
    case array("3", "6"):
        echo "<td align='right' class='item-white'>Meta</td>";
		break;
    case array("3", "7"):
        echo "<td align='right' class='item-white'>Simple</td>";
		break;
    case array("3", "8"):
        echo "<td align='right' class='item-white'>Prismatic</td>";
		break;
    case array("4", "0"):
        echo "<td align='right' class='item-white'>Miscellaneous</td>";
		break;
    case array("4", "1"):
        echo "<td align='right' class='item-white'>Cloth</td>";
		break;
    case array("4", "2"):
        echo "<td align='right' class='item-white'>Leather</td>";
		break;
    case array("4", "3"):
        echo "<td align='right' class='item-white'>Mail</td>";
		break;
    case array("4", "4"):
        echo "<td align='right' class='item-white'>Plate</td>";
		break;
    case array("4", "5"):
        echo "<td align='right' class='item-white'>Buckler(OBSOLETE)</td>";
		break;
    case array("4", "6"):
        echo "<td align='right' class='item-white'>Shield</td>";
		break;
    case array("4", "7"):
        echo "<td align='right' class='item-white'>Libram</td>";
		break;
    case array("4", "8"):
        echo "<td align='right' class='item-white'>Idol</td>";
		break;
    case array("4", "7"):
        echo "<td align='right' class='item-white'>Totem</td>";
		break;
    case array("4", "8"):
        echo "<td align='right' class='item-white'>Sigil</td>";
		break;
  }
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "<tr>";
if ($row['armor'] >= 1) {
  echo "<td class='item-white'>" . intval($row['armor']) . " Armor</td>";
  } else {
  echo "";
  }
  echo "</tr>";
  echo "<tr>";
if ($row['block'] >= 1) {
  echo "<td class='item-white'>" . intval($row['block']) . " Block</td>";
  } else {
  echo "";
  } 
  echo "</tr>";
  echo "<tr>";
  
 switch ($stattype1) {
	case "1":
		echo "<td class='item-white'>+" . $row['stat_value1'] . " Health</td>";
		break;
	case "3":
		echo "<td class='item-white'>+" . $row['stat_value1'] . " Agility</td>";
		break;
	case "4":
		echo "<td class='item-white'>+" . $row['stat_value1'] . " Strength</td>";
		break;
	case "5":
		echo "<td class='item-white'>+" . $row['stat_value1'] . " Intellect</td>";
		break;
	case "6":
		echo "<td class='item-white'>+" . $row['stat_value1'] . " Spirit</td>";
		break;
	case "7":
		echo "<td class='item-white'>+" . $row['stat_value1'] . " Stamina</td>";
		break;
	default:
		echo "";
 }
  echo "</tr>";
  echo "<tr>";
 switch ($stattype2) {
	case "1":
		echo "<td class='item-white'>+" . $row['stat_value2'] . " Health</td>";
		break;
	case "3":
		echo "<td class='item-white'>+" . $row['stat_value2'] . " Agility</td>";
		break;
	case "4":
		echo "<td class='item-white'>+" . $row['stat_value2'] . " Strength</td>";
		break;
	case "5":
		echo "<td class='item-white'>+" . $row['stat_value2'] . " Intellect</td>";
		break;
	case "6":
		echo "<td class='item-white'>+" . $row['stat_value2'] . " Spirit</td>";
		break;
	case "7":
		echo "<td class='item-white'>+" . $row['stat_value2'] . " Stamina</td>";
		break;
	default:
		echo "";
 }
  echo "</tr>";
  echo "<tr>";
  switch ($stattype3) {
	case "1":
		echo "<td class='item-white'>+" . $row['stat_value3'] . " Health</td>";
		break;
	case "3":
		echo "<td class='item-white'>+" . $row['stat_value3'] . " Agility</td>";
		break;
	case "4":
		echo "<td class='item-white'>+" . $row['stat_value3'] . " Strength</td>";
		break;
	case "5":
		echo "<td class='item-white'>+" . $row['stat_value3'] . " Intellect</td>";
		break;
	case "6":
		echo "<td class='item-white'>+" . $row['stat_value3'] . " Spirit</td>";
		break;
	case "7":
		echo "<td class='item-white'>+" . $row['stat_value3'] . " Stamina</td>";
		break;
	default:
		echo "";
 }
  echo "</tr>";
  echo "<tr>";
  switch ($stattype4) {
	case "1":
		echo "<td class='item-white'>+" . $row['stat_value4'] . " Health</td>";
		break;
	case "3":
		echo "<td class='item-white'>+" . $row['stat_value4'] . " Agility</td>";
		break;
	case "4":
		echo "<td class='item-white'>+" . $row['stat_value4'] . " Strength</td>";
		break;
	case "5":
		echo "<td class='item-white'>+" . $row['stat_value4'] . " Intellect</td>";
		break;
	case "6":
		echo "<td class='item-white'>+" . $row['stat_value4'] . " Spirit</td>";
		break;
	case "7":
		echo "<td class='item-white'>+" . $row['stat_value4'] . " Stamina</td>";
		break;
	default:
		echo "";
 }
  echo "</tr>";
  echo "<tr>";
  switch ($stattype5) {
	case "1":
		echo "<td class='item-white'>+" . $row['stat_value5'] . " Health</td>";
		break;
	case "3":
		echo "<td class='item-white'>+" . $row['stat_value5'] . " Agility</td>";
		break;
	case "4":
		echo "<td class='item-white'>+" . $row['stat_value5'] . " Strength</td>";
		break;
	case "5":
		echo "<td class='item-white'>+" . $row['stat_value5'] . " Intellect</td>";
		break;
	case "6":
		echo "<td class='item-white'>+" . $row['stat_value5'] . " Spirit</td>";
		break;
	case "7":
		echo "<td class='item-white'>+" . $row['stat_value5'] . " Stamina</td>";
		break;
	default:
		echo "";
 }
  echo "</tr>";
  echo "<tr>";
  switch ($stattype6) {
	case "1":
		echo "<td class='item-white'>+" . $row['stat_value6'] . " Health</td>";
		break;
	case "3":
		echo "<td class='item-white'>+" . $row['stat_value6'] . " Agility</td>";
		break;
	case "4":
		echo "<td class='item-white'>+" . $row['stat_value6'] . " Strength</td>";
		break;
	case "5":
		echo "<td class='item-white'>+" . $row['stat_value6'] . " Intellect</td>";
		break;
	case "6":
		echo "<td class='item-white'>+" . $row['stat_value6'] . " Spirit</td>";
		break;
	case "7":
		echo "<td class='item-white'>+" . $row['stat_value6'] . " Stamina</td>";
		break;
	default:
		echo "";
 }
  echo "</tr>";
  echo "<tr>";
    switch ($socket1) {
	case "1":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/metasocket.png'> Meta Socket</td>";
		break;
	case "2":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/redsocket.png'> Red Socket</td>";
		break;
	case "4":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/yellowsocket.png'> Yellow Socket</td>";
		break;
	case "8":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/bluesocket.png'> Blue Socket</td>";
		break;
	default:
		echo "";
	}
  echo "</tr>";
  echo "<tr>";
    switch ($socket2) {
	case "1":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/metasocket.png'> Meta Socket</td>";
		break;
	case "2":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/redsocket.png'> Red Socket</td>";
		break;
	case "4":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/yellowsocket.png'> Yellow Socket</td>";
		break;
	case "8":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/bluesocket.png'> Blue Socket</td>";
		break;
	default:
		echo "";
	}
  echo "</tr>";
  echo "<tr>";
    switch ($socket3) {
	case "1":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/metasocket.png'> Meta Socket</td>";
		break;
	case "2":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/redsocket.png'> Red Socket</td>";
		break;
	case "4":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/yellowsocket.png'> Yellow Socket</td>";
		break;
	case "8":
		echo "<td><img class='img-bottom' src='http://wow-v.com/images/bluesocket.png'> Blue Socket</td>";
		break;
	default:
		echo "";
	}
  echo "</tr>";
  echo "<tr>";
  echo "<td>Socket Bonus: +2 Intellect</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>+123 to All Resistances</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>Durability 123 / 123</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>Race: Troll, Undead, Orc</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>Class: Mage, Priest, Paladin</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>Requires Level 80</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>Requires Alliance Vanguard - Revered</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>Requires Leatherworking (123)</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-white'>Requires Master Hammersmith</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Increases your expertise rating by +12331</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Increases your expertise rating by +12331</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Increases your expertise rating by +12331</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Increases resilience by +12331</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Increases block value by +12331</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Increases spell penetration by +12331</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Increases attack power by +12331</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: Restores +12331 mana per 5 Sec</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: <a href='http://wotlk.wowhead.com/?spell=7600' target='_blank'>Increases your critical strike rating by 56.</a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: <a href='http://wotlk.wowhead.com/?spell=9331' target='_blank'> Increases attack power by 20. </a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: <a href='http://wotlk.wowhead.com/?spell=14049' target='_blank'>Increases attack power by 40. </a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: <a href='http://wotlk.wowhead.com/?spell=15820' target='_blank'>Increases attack power by 70. </a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-green'>Equip: <a href='http://wotlk.wowhead.com/?spell=28735' target='_blank'>Increases attack power by 100. </a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-yellow-set'><a href='http://www.wowhead.com/?itemset=383' target='_blank'>Warlord's Battlegear (0/?)</a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-grey-set'>(2) Set: <a href='http://wotlk.wowhead.com/?spell=41887' target='_blank'>+20 Stamina. </a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-grey-set'>(3) Set: <a href='http://wotlk.wowhead.com/?spell=22738' target='_blank'>Reduces the cooldown of your Intercept ability by 5 sec. </a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-grey-set'>(6) Set: <a href='http://wotlk.wowhead.com/?spell=41888' target='_blank'>Increases attack power by 40. </a></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td class='item-yellow'>'testing'</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Item Level: 255</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Buy Price: 300<img class='img-bottom' src='http://wow-v.com/images/gold.gif'> 23<img class='img-bottom' src='http://wow-v.com/images/silver.gif'> 21<img class='img-bottom' src='http://wow-v.com/images/copper.gif'></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Sell Price: 300<img class='img-bottom' src='http://wow-v.com/images/gold.gif'> 23<img class='img-bottom' src='http://wow-v.com/images/silver.gif'> 21<img class='img-bottom' src='http://wow-v.com/images/copper.gif'></td>";
  echo "</tr>";
}

echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
echo "</center>";

mysqli_close($con);
?>