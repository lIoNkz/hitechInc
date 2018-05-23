<?php

use Faker\Factory as Faker;
use App\Models\Textblock;
use App\Repositories\TextblockRepository;

trait MakeTextblockTrait
{
    /**
     * Create fake instance of Textblock and save it in database
     *
     * @param array $textblockFields
     * @return Textblock
     */
    public function makeTextblock($textblockFields = [])
    {
        /** @var TextblockRepository $textblockRepo */
        $textblockRepo = App::make(TextblockRepository::class);
        $theme = $this->fakeTextblockData($textblockFields);
        return $textblockRepo->create($theme);
    }

    /**
     * Get fake instance of Textblock
     *
     * @param array $textblockFields
     * @return Textblock
     */
    public function fakeTextblock($textblockFields = [])
    {
        return new Textblock($this->fakeTextblockData($textblockFields));
    }

    /**
     * Get fake data of Textblock
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTextblockData($textblockFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'text' => $fake->text,
            'title' => $fake->word,
            'theme_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $textblockFields);
    }
}
