<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(callback: function (Browser $browser): void {
            $browser->visit(url: '/')
                    ->assertSee(text: 'Modul 3')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type('email', value: 'admin@gmail.com')
                    ->type('password', value: 'password')
                    ->press(button: 'LOG IN');
        });
    }
}
