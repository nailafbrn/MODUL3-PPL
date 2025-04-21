<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * @group viewnotes
     */
    public function testUserCanNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/notes')
                ->type('email', 'naila2@gmail.com')
                ->type('password', '1202223023')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->visit('/notes')
                ->pause(1000)
                ->screenshot('notes-list')
                ->assertSee('Tugas PPL')
                ->assertSee('Membuat testing code')
                ->assertSee('Edit')
                ->assertSee('Delete');
        });
    }
}
