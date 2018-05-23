<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SitepriceApiTest extends TestCase
{
    use MakeSitepriceTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateSiteprice()
    {
        $siteprice = $this->fakeSitepriceData();
        $this->json('POST', '/api/v1/siteprices', $siteprice);

        $this->assertApiResponse($siteprice);
    }

    /**
     * @test
     */
    public function testReadSiteprice()
    {
        $siteprice = $this->makeSiteprice();
        $this->json('GET', '/api/v1/siteprices/'.$siteprice->id);

        $this->assertApiResponse($siteprice->toArray());
    }

    /**
     * @test
     */
    public function testUpdateSiteprice()
    {
        $siteprice = $this->makeSiteprice();
        $editedSiteprice = $this->fakeSitepriceData();

        $this->json('PUT', '/api/v1/siteprices/'.$siteprice->id, $editedSiteprice);

        $this->assertApiResponse($editedSiteprice);
    }

    /**
     * @test
     */
    public function testDeleteSiteprice()
    {
        $siteprice = $this->makeSiteprice();
        $this->json('DELETE', '/api/v1/siteprices/'.$siteprice->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/siteprices/'.$siteprice->id);

        $this->assertResponseStatus(404);
    }
}
