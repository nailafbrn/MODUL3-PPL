<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MakeNotesTest extends DuskTestCase
{
    /**
     * @group notes
     */
    public function testUserCanMakeNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('email', 'naila1@gmail.com')
            ->type('password', '1202223023')
            ->press('LOG IN')
            ->pause(1000)
            ->assertPathIs('/dashboard')
            ->waitForText('Notes', 5)
            ->clickLink('Notes')
            ->waitForText('Create Note', 5)
            ->clickLink('Create Note')
            ->waitFor('input[name="title"]', 5)
            ->type('title', 'Tugas PPL')
            ->type('description', 'Membuat test code')
            ->press('CREATE')
            ->pause(1000)
            ->assertSee('Tugas PPL');
        });
    }
}
