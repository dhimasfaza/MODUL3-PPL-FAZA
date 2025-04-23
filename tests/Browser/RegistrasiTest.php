<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test register functionality.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit('/')
                ->assertSee('Modul 3')
                ->clickLink('Register')
                ->assertPathIs('/register')
                ->type('name', 'Admin User')
                ->type('email', 'admin@gmail.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('REGISTER');
        });
    }
}
