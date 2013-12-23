<?php

$I = new WebGuy($scenario);
$I->wantTo('Login to my account');

$I->amOnPage('/login');
$I->see('Log in');
$I->seeResponseCodeIs(200);

$I->fillField('email', 'test.user@gmail.com');
$I->fillField('password','testuser');
$I->click('Log in', '.form-actions');

$I->see('Welcome, Test!');
$I->seeResponseCodeIs(200);