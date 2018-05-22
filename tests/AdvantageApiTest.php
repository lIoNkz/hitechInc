<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdvantageApiTest extends TestCase
{
    use MakeAdvantageTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAdvantage()
    {
        $advantage = $this->fakeAdvantageData();
        $this->json('POST', '/api/v1/advantages', $advantage);

        $this->assertApiResponse($advantage);
    }

    /**
     * @test
     */
    public function testReadAdvantage()
    {
        $advantage = $this->makeAdvantage();
        $this->json('GET', '/api/v1/advantages/'.$advantage->id);

        $this->assertApiResponse($advantage->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAdvantage()
    {
        $advantage = $this->makeAdvantage();
        $editedAdvantage = $this->fakeAdvantageData();

        $this->json('PUT', '/api/v1/advantages/'.$advantage->id, $editedAdvantage);

        $this->assertApiResponse($editedAdvantage);
    }

    /**
     * @test
     */
    public function testDeleteAdvantage()
    {
        $advantage = $this->makeAdvantage();
        $this->json('DELETE', '/api/v1/advantages/'.$advantage->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/advantages/'.$advantage->id);

        $this->assertResponseStatus(404);
    }
}
