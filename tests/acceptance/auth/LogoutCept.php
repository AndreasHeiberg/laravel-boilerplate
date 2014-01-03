<?php

$I = new WebGuy($scenario);
$I->wantTo('Logout');

$I->amOnPage('/logout');
$I->seeResponseCodeIs(200);
$I->see('See you next time.');