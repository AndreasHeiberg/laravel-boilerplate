<?php

$I = new WebGuy($scenario);
$I->wantTo('View my profile and another profile.');

$I->amOnPage("/users/1"); 
$I->seeResponseCodeIs(200);
$I->see('Test User');

$I->amOnPage("/users/2"); 
$I->seeResponseCodeIs(200);
$I->see('Andreas Heiberg');