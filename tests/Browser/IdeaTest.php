<?php

use App\Models\User;

it('shows all ideas', function () {
    $this->actingAs($user = User::factory()->create());
    $user->ideas()->create([
        'description' => 'Description test'
    ]);
    $user->ideas()->create([
        'description' => 'Test de description 2'
    ]);

    visit('/ideas')->assertSee('Description test')
        ->assertSee('Test de description 2');
});

it('shows a single idea', function () {

});

it('shows an edit form to update an idea', function () {

});
