<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * @group register
     */
    public function testUserCanRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/register')
                    ->screenshot('before-filling')
                    ->type('name', 'Naila')
                    ->type('email', 'naila2@gmail.com')
                    ->type('password', '1202223023')
                    ->type('password_confirmation', '1202223023')
                    ->press('REGISTER')
                    ->pause(1000)
                    ->screenshot('after-register')
                    ->assertPathIs('/dashboard');
        });
    }
}
