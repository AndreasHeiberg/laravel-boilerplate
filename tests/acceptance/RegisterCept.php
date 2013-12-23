<?php

$I = new WebGuy($scenario);
$I->wantTo('Register a new account');

$I->amOnPage('/register');
$I->see('Register');
$I->seeResponseCodeIs(200);

$email = 'test.user2@gmail.com';
$I->fillField('first_name', 'Test');
$I->fillField('last_name','User2');
$I->fillField('email', $email);
$I->fillField('password','testuser2');
$I->click('Register', '.form-actions');

$I->see('Log in');
$I->see('A verification email has been sent');
$I->seeResponseCodeIs(200);

// // get the verfication url sent to the email
$token = $I->grabFromDatabase('auth_reminders', 'token', array('email' => $email));

$verficationURL = "/verify-email?token={$token}&email={$email}";

$I->amOnPage($verficationURL);
$I->see('Your email has been verified.');