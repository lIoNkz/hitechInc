<?php

use Faker\Factory as Faker;
use App\Models\Siteprice;
use App\Repositories\SitepriceRepository;

trait MakeSitepriceTrait
{
    /**
     * Create fake instance of Siteprice and save it in database
     *
     * @param array $sitepriceFields
     * @return Siteprice
     */
    public function makeSiteprice($sitepriceFields = [])
    {
        /** @var SitepriceRepository $sitepriceRepo */
        $sitepriceRepo = App::make(SitepriceRepository::class);
        $theme = $this->fakeSitepriceData($sitepriceFields);
        return $sitepriceRepo->create($theme);
    }

    /**
     * Get fake instance of Siteprice
     *
     * @param array $sitepriceFields
     * @return Siteprice
     */
    public function fakeSiteprice($sitepriceFields = [])
    {
        return new Siteprice($this->fakeSitepriceData($sitepriceFields));
    }

    /**
     * Get fake data of Siteprice
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSitepriceData($sitepriceFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'price' => $fake->word,
            'old_price' => $fake->word,
            'info' => $fake->text,
            'image' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $sitepriceFields);
    }
}
