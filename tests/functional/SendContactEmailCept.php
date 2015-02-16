<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Send a contact from the home page');

$I->am('Guest');

$I->amOnPage('/');

$I->fillField('name', 'Nathan Isaac');
$I->fillField('company', 'Walla Walla University');
$I->fillField('phone', '5555555663');
$I->fillField('email', 'email@email.com');
$I->fillField('subject', 'This is a fun subject');
$I->fillField('message', 'This is my long message.');

$I->click('Send');

$I->see('Your message has been sent');