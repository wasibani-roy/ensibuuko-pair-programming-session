<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetTransactions extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Example()
    {
        $this->assertTrue(true);
    }
    public function test_GetTransactions(){
        $this->get('/transactions')->assertStatus(200);
        $this->assertTrue(false);
    }
}
