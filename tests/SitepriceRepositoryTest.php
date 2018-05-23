<?php

use App\Models\Siteprice;
use App\Repositories\SitepriceRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SitepriceRepositoryTest extends TestCase
{
    use MakeSitepriceTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SitepriceRepository
     */
    protected $sitepriceRepo;

    public function setUp()
    {
        parent::setUp();
        $this->sitepriceRepo = App::make(SitepriceRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateSiteprice()
    {
        $siteprice = $this->fakeSitepriceData();
        $createdSiteprice = $this->sitepriceRepo->create($siteprice);
        $createdSiteprice = $createdSiteprice->toArray();
        $this->assertArrayHasKey('id', $createdSiteprice);
        $this->assertNotNull($createdSiteprice['id'], 'Created Siteprice must have id specified');
        $this->assertNotNull(Siteprice::find($createdSiteprice['id']), 'Siteprice with given id must be in DB');
        $this->assertModelData($siteprice, $createdSiteprice);
    }

    /**
     * @test read
     */
    public function testReadSiteprice()
    {
        $siteprice = $this->makeSiteprice();
        $dbSiteprice = $this->sitepriceRepo->find($siteprice->id);
        $dbSiteprice = $dbSiteprice->toArray();
        $this->assertModelData($siteprice->toArray(), $dbSiteprice);
    }

    /**
     * @test update
     */
    public function testUpdateSiteprice()
    {
        $siteprice = $this->makeSiteprice();
        $fakeSiteprice = $this->fakeSitepriceData();
        $updatedSiteprice = $this->sitepriceRepo->update($fakeSiteprice, $siteprice->id);
        $this->assertModelData($fakeSiteprice, $updatedSiteprice->toArray());
        $dbSiteprice = $this->sitepriceRepo->find($siteprice->id);
        $this->assertModelData($fakeSiteprice, $dbSiteprice->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteSiteprice()
    {
        $siteprice = $this->makeSiteprice();
        $resp = $this->sitepriceRepo->delete($siteprice->id);
        $this->assertTrue($resp);
        $this->assertNull(Siteprice::find($siteprice->id), 'Siteprice should not exist in DB');
    }
}
