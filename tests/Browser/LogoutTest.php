<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testUserCanLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000//')
            ->assertSee('Enterprise')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->type('email', 'naila2@gmail.com')
            ->type('password', '1202223023')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->press('test')
            ->clickLink('Log Out');
        });
    }
}
