<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnote
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Email')
                    ->type('email', 'naila2@gmail.com')
                    ->type('password', '1202223023')
                    ->press(button:'LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee('Notes')
                    ->clicklink('Notes')
                    ->clickLink('Edit') 
                    ->type('title', 'Praktikum PPL')
                    ->type('description', 'Automated Testing')
                    ->press(button:'UPDATE')
                    ->assertPathIs('/notes');

        });
    }
}