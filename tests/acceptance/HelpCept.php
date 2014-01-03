<?php

$I = new WebGuy($scenario);
$I->wantTo('Get help');

$I->amOnPage('/help'); 
$I->see('Help');
$I->canSeeResponseCodeIs(200);