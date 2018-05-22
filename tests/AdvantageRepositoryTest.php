<?php

use App\Models\Advantage;
use App\Repositories\AdvantageRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdvantageRepositoryTest extends TestCase
{
    use MakeAdvantageTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AdvantageRepository
     */
    protected $advantageRepo;

    public function setUp()
    {
        parent::setUp();
        $this->advantageRepo = App::make(AdvantageRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAdvantage()
    {
        $advantage = $this->fakeAdvantageData();
        $createdAdvantage = $this->advantageRepo->create($advantage);
        $createdAdvantage = $createdAdvantage->toArray();
        $this->assertArrayHasKey('id', $createdAdvantage);
        $this->assertNotNull($createdAdvantage['id'], 'Created Advantage must have id specified');
        $this->assertNotNull(Advantage::find($createdAdvantage['id']), 'Advantage with given id must be in DB');
        $this->assertModelData($advantage, $createdAdvantage);
    }

    /**
     * @test read
     */
    public function testReadAdvantage()
    {
        $advantage = $this->makeAdvantage();
        $dbAdvantage = $this->advantageRepo->find($advantage->id);
        $dbAdvantage = $dbAdvantage->toArray();
        $this->assertModelData($advantage->toArray(), $dbAdvantage);
    }

    /**
     * @test update
     */
    public function testUpdateAdvantage()
    {
        $advantage = $this->makeAdvantage();
        $fakeAdvantage = $this->fakeAdvantageData();
        $updatedAdvantage = $this->advantageRepo->update($fakeAdvantage, $advantage->id);
        $this->assertModelData($fakeAdvantage, $updatedAdvantage->toArray());
        $dbAdvantage = $this->advantageRepo->find($advantage->id);
        $this->assertModelData($fakeAdvantage, $dbAdvantage->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAdvantage()
    {
        $advantage = $this->makeAdvantage();
        $resp = $this->advantageRepo->delete($advantage->id);
        $this->assertTrue($resp);
        $this->assertNull(Advantage::find($advantage->id), 'Advantage should not exist in DB');
    }
}
