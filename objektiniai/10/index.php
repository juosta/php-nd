<?php

require __DIR__ . '/Tenisininkas.php';

$zaidejas1 = Tenisininkas::getZaidejas('Jonas');
$zaidejas2 = Tenisininkas::getZaidejas('Petras');

_d( $zaidejas1->arTuriKamuoliuka(),"pradzia 1");

_d( $zaidejas2->arTuriKamuoliuka(),"pradzia 2");


Tenisininkas::zaidimoPradzia();

_d( $zaidejas1->arTuriKamuoliuka(), "po starto 1");

_d( $zaidejas2->arTuriKamuoliuka(), "po starto 2");


$zaidejas1->perduotiKamuoliuka();
//stats
_d( $zaidejas1->arTuriKamuoliuka(), "po pirmo perdavimo 1");

_d( $zaidejas2->arTuriKamuoliuka(),  "po pirmo perdavimo 2");


$zaidejas2->perduotiKamuoliuka();

//stats
_d( $zaidejas1->arTuriKamuoliuka(),  "po antro perdavimo 1");

_d( $zaidejas2->arTuriKamuoliuka(),"po antro perdavimo 2");
