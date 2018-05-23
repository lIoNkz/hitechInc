<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSitepriceAPIRequest;
use App\Http\Requests\API\UpdateSitepriceAPIRequest;
use App\Models\Siteprice;
use App\Repositories\SitepriceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SitepriceController
 * @package App\Http\Controllers\API
 */

class SitepriceAPIController extends AppBaseController
{
    /** @var  SitepriceRepository */
    private $sitepriceRepository;

    public function __construct(SitepriceRepository $sitepriceRepo)
    {
        $this->sitepriceRepository = $sitepriceRepo;
    }

    /**
     * Display a listing of the Siteprice.
     * GET|HEAD /siteprices
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sitepriceRepository->pushCriteria(new RequestCriteria($request));
        $this->sitepriceRepository->pushCriteria(new LimitOffsetCriteria($request));
        $siteprices = $this->sitepriceRepository->all();

        return $this->sendResponse($siteprices->toArray(), 'Siteprices retrieved successfully');
    }

    /**
     * Store a newly created Siteprice in storage.
     * POST /siteprices
     *
     * @param CreateSitepriceAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSitepriceAPIRequest $request)
    {
        $input = $request->all();

        $siteprices = $this->sitepriceRepository->create($input);

        return $this->sendResponse($siteprices->toArray(), 'Siteprice saved successfully');
    }

    /**
     * Display the specified Siteprice.
     * GET|HEAD /siteprices/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Siteprice $siteprice */
        $siteprice = $this->sitepriceRepository->findWithoutFail($id);

        if (empty($siteprice)) {
            return $this->sendError('Siteprice not found');
        }

        return $this->sendResponse($siteprice->toArray(), 'Siteprice retrieved successfully');
    }

    /**
     * Update the specified Siteprice in storage.
     * PUT/PATCH /siteprices/{id}
     *
     * @param  int $id
     * @param UpdateSitepriceAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSitepriceAPIRequest $request)
    {
        $input = $request->all();

        /** @var Siteprice $siteprice */
        $siteprice = $this->sitepriceRepository->findWithoutFail($id);

        if (empty($siteprice)) {
            return $this->sendError('Siteprice not found');
        }

        $siteprice = $this->sitepriceRepository->update($input, $id);

        return $this->sendResponse($siteprice->toArray(), 'Siteprice updated successfully');
    }

    /**
     * Remove the specified Siteprice from storage.
     * DELETE /siteprices/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Siteprice $siteprice */
        $siteprice = $this->sitepriceRepository->findWithoutFail($id);

        if (empty($siteprice)) {
            return $this->sendError('Siteprice not found');
        }

        $siteprice->delete();

        return $this->sendResponse($id, 'Siteprice deleted successfully');
    }
}
