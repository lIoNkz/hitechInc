<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TextblockApiTest extends TestCase
{
    use MakeTextblockTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateTextblock()
    {
        $textblock = $this->fakeTextblockData();
        $this->json('POST', '/api/v1/textblocks', $textblock);

        $this->assertApiResponse($textblock);
    }

    /**
     * @test
     */
    public function testReadTextblock()
    {
        $textblock = $this->makeTextblock();
        $this->json('GET', '/api/v1/textblocks/'.$textblock->id);

        $this->assertApiResponse($textblock->toArray());
    }

    /**
     * @test
     */
    public function testUpdateTextblock()
    {
        $textblock = $this->makeTextblock();
        $editedTextblock = $this->fakeTextblockData();

        $this->json('PUT', '/api/v1/textblocks/'.$textblock->id, $editedTextblock);

        $this->assertApiResponse($editedTextblock);
    }

    /**
     * @test
     */
    public function testDeleteTextblock()
    {
        $textblock = $this->makeTextblock();
        $this->json('DELETE', '/api/v1/textblocks/'.$textblock->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/textblocks/'.$textblock->id);

        $this->assertResponseStatus(404);
    }
}
