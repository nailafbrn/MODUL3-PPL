<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * @group login
     */
    public function testUserCanRLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->screenshot('login')
                    ->type('email', 'naila2@gmail.com')
                    ->type('password', '1202223023')
                    ->press('LOG IN')
                    ->pause(1000)
                    ->screenshot('after-make-notes')
                    ->assertPathIs('/dashboard');
        });
    }
}
