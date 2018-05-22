<?php

use Faker\Factory as Faker;
use App\Models\Advantage;
use App\Repositories\AdvantageRepository;

trait MakeAdvantageTrait
{
    /**
     * Create fake instance of Advantage and save it in database
     *
     * @param array $advantageFields
     * @return Advantage
     */
    public function makeAdvantage($advantageFields = [])
    {
        /** @var AdvantageRepository $advantageRepo */
        $advantageRepo = App::make(AdvantageRepository::class);
        $theme = $this->fakeAdvantageData($advantageFields);
        return $advantageRepo->create($theme);
    }

    /**
     * Get fake instance of Advantage
     *
     * @param array $advantageFields
     * @return Advantage
     */
    public function fakeAdvantage($advantageFields = [])
    {
        return new Advantage($this->fakeAdvantageData($advantageFields));
    }

    /**
     * Get fake data of Advantage
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAdvantageData($advantageFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'text' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $advantageFields);
    }
}
