<?php

$I = new WebGuy($scenario);
$I->wantTo('Reset my password');

$I->amOnPage('/login');
$I->see('Forgot your password');
$I->seeResponseCodeIs(200);

$I->click('Forgot your password');
$I->seeResponseCodeIs(200);

$email = 'test.user@gmail.com';
$I->fillField('email', $email);
$I->click('Send');

$I->see('Log in');
$I->see('We have sent you an email with further information on how to reset your password.');
$I->seeResponseCodeIs(200);

// get the verfication url sent to the email
$token = $I->grabFromDatabase('auth_reminders', 'token', array('email' => $email));

$resetURL = "/reset-password?token={$token}&email={$email}";

$I->amOnPage($resetURL);
$I->fillField('password', 'newpassword');
$I->click('Reset password', '.form-actions');

$I->see('Your password was reset. Please log in.');
$I->fillField('email', $email);
$I->fillField('password', 'newpassword');
$I->click('#login input[type=submit]');

$I->see('Welcome, Test!');