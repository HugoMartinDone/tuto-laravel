<?php

use App\Models\User;

it('should register the user', function () {

    visit('/')->click('Register')
        ->fill('name', 'Jean Bigi')
        ->fill('email', 'test@jeanbigi.fr')
        ->fill('password', 'azerty123')
        ->press('@register-button')
        ->assertPathIs('/ideas');

    expect(User::where('email', 'test@jeanbigi.fr')->exists())->toBe(true);
    $this->assertAuthenticated();
});
