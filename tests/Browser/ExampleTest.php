<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testLogin()
    {
        $user = factory(\LDAP\User::class)->make();
        $user->save();

        $this->visit('/login')
        ->type($user->email,'email')
        ->type($user->password,'password')
        ->press('ingresar');

         $this->seePageIs('/');
    }
}
