<?php

use App\Models\Textblock;
use App\Repositories\TextblockRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TextblockRepositoryTest extends TestCase
{
    use MakeTextblockTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TextblockRepository
     */
    protected $textblockRepo;

    public function setUp()
    {
        parent::setUp();
        $this->textblockRepo = App::make(TextblockRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateTextblock()
    {
        $textblock = $this->fakeTextblockData();
        $createdTextblock = $this->textblockRepo->create($textblock);
        $createdTextblock = $createdTextblock->toArray();
        $this->assertArrayHasKey('id', $createdTextblock);
        $this->assertNotNull($createdTextblock['id'], 'Created Textblock must have id specified');
        $this->assertNotNull(Textblock::find($createdTextblock['id']), 'Textblock with given id must be in DB');
        $this->assertModelData($textblock, $createdTextblock);
    }

    /**
     * @test read
     */
    public function testReadTextblock()
    {
        $textblock = $this->makeTextblock();
        $dbTextblock = $this->textblockRepo->find($textblock->id);
        $dbTextblock = $dbTextblock->toArray();
        $this->assertModelData($textblock->toArray(), $dbTextblock);
    }

    /**
     * @test update
     */
    public function testUpdateTextblock()
    {
        $textblock = $this->makeTextblock();
        $fakeTextblock = $this->fakeTextblockData();
        $updatedTextblock = $this->textblockRepo->update($fakeTextblock, $textblock->id);
        $this->assertModelData($fakeTextblock, $updatedTextblock->toArray());
        $dbTextblock = $this->textblockRepo->find($textblock->id);
        $this->assertModelData($fakeTextblock, $dbTextblock->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteTextblock()
    {
        $textblock = $this->makeTextblock();
        $resp = $this->textblockRepo->delete($textblock->id);
        $this->assertTrue($resp);
        $this->assertNull(Textblock::find($textblock->id), 'Textblock should not exist in DB');
    }
}
