<?php

$I = new WebGuy($scenario);
$I->wantTo('Edit my profile.');

$I->amOnPage('/login');

$I->fillField('email', 'test.user@gmail.com');
$I->fillField('password','testuser');
$I->click('#login input[type=submit]');	

$I->amOnPage("/users/1"); 
$I->seeResponseCodeIs(200);
$I->see('Test User');

$I->click('Edit profile'); 
$I->seeResponseCodeIs(200);

$I->fillField('#fuck', 'Test New');
$I->click('input[form=edit]');

$I->seeResponseCodeIs(200);
$I->see('Test New User');