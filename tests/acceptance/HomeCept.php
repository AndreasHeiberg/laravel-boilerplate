<?php

$I = new WebGuy($scenario);
$I->wantTo('Read about the product');

$I->amOnPage('/'); 
$I->see('Home');
$I->canSeeResponseCodeIs(200);

$I->amOnPage('/overview'); 
$I->see('Overview');
$I->canSeeResponseCodeIs(200);

$I->amOnPage('/getting-started'); 
$I->see('Getting started');
$I->canSeeResponseCodeIs(200);

$I->amOnPage('/pricing'); 
$I->see('Pricing');
$I->canSeeResponseCodeIs(200);

$I->amOnPage('/about'); 
$I->see('About');
$I->canSeeResponseCodeIs(200);