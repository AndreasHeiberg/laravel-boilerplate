<?php

$I = new WebGuy($scenario);
$I->wantTo('Login to my account');

$I->amOnPage('/login');
$I->see('Log in');
$I->seeResponseCodeIs(200);

$I->fillField('email', 'test.user@gmail.com');
$I->fillField('password','testuser');
$I->click('#login input[type=submit]');

$I->seeResponseCodeIs(200);
$I->see('Welcome, Test!');