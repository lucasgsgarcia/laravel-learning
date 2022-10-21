<?php

namespace Tests\Feature;

use App\Http\Controllers\TesteController;
use App\Models\Teste;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTests extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function homeRouteIsAlive()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function ifTesteControllerIsSearchingByAuthorName()
    {
        $query = (new TesteController)->searchTestByAuthorName("");
        $this->assertNotEmpty($query);
    }

    /** @test */
    public function ifTesteControllerIsSearchingByTestTypeId()
    {
        $query = (new TesteController)->searchTestByTestTypeId(2);
        $this->assertNotEmpty($query);
    }
}
