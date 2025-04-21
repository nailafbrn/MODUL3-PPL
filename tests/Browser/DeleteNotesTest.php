<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group delete
     */
    public function testDeleteNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Email')
                    ->type('email', 'naila2@gmail.com')
                    ->type('password', '1202223023')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee('Notes')
                    ->clickLink('Notes')
                    ->pause(1000)
                    ->press('Delete')
                    ->assertPathIs('/notes');
        });
    }
}