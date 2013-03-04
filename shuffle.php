<?php

 //car strength
$strength = array("2","3","4","5","6","7","8","9","10","J","Q","K","A");
//suit of cards
$suit = array("C","D","H","S");

//inlcude class and create card deck
include("./card_deck.php");
$deck = new card_deck();

//add type with strength property and values from array
//and get id of type
$id = $deck->add_type("strength", $strength);

//add suit property to same type by providing id
$deck->add_type("suit", $suit, 1, $id);

//shuffle cards
$deck->shuffle();


//deal cards for 4 people, 2 cards for each
//echo "<p>Player 1: ";
$arr_player_1 = $deck->deal(2);
foreach($arr_player_1 as $key => $val)
{
	$arr_player_1[$key] = implode("", $val);
}
//echo implode(" ", $arr_player_1);
echo "</p>";

//echo "<p>Player 2: ";
$arr_player_2 = $deck->deal(2);
foreach($arr_player_2 as $key => $val)
{
	$arr_player_2[$key] = implode("", $val);
}
//echo implode(" ", $arr_player_2);
echo "</p>";

//echo "<p>Player 3: ";
$arr_player_3 = $deck->deal(2);
foreach($arr_player_3 as $key => $val)
{
	$arr_player_3[$key] = implode("", $val);
}
//echo implode(" ", $arr_player_3);
echo "</p>";

//echo "<p>Player 4: ";
$arr_player_4 = $deck->deal(2);
foreach($arr_player_4 as $key => $val)
{
	$arr_player_4[$key] = implode("", $val);
}
//echo implode(" ", $arr_player_4);
echo "<p>";

//deal flop, turn and river
//echo "<p>Flop: ";
$arr_flop = $deck->deal(3);
foreach($arr_flop as $key => $val)
{
	$arr_flop[$key] = implode("", $val);
}
//echo implode(" ", $arr_flop);
echo "<p>";

//echo "<p>Turn: ";
$arr2 = $deck->deal(1);
//echo implode("", current($arr2));
echo "</p>";

//echo "<p>River: ";
$arr1 = $deck->deal(1);
//echo implode("", current($arr1));
echo "</p>";

?>
