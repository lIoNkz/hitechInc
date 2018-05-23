<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSitepriceRequest;
use App\Http\Requests\UpdateSitepriceRequest;
use App\Repositories\SitepriceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SitepriceController extends AppBaseController
{
    /** @var  SitepriceRepository */
    private $sitepriceRepository;

    public function __construct(SitepriceRepository $sitepriceRepo)
    {
        $this->sitepriceRepository = $sitepriceRepo;
    }

    /**
     * Display a listing of the Siteprice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sitepriceRepository->pushCriteria(new RequestCriteria($request));
        $siteprices = $this->sitepriceRepository->all();

        return view('siteprices.index')
            ->with('siteprices', $siteprices);
    }

    /**
     * Show the form for creating a new Siteprice.
     *
     * @return Response
     */
    public function create()
    {
        return view('siteprices.create');
    }

    /**
     * Store a newly created Siteprice in storage.
     *
     * @param CreateSitepriceRequest $request
     *
     * @return Response
     */
    public function store(CreateSitepriceRequest $request)
    {
        $input = $request->all();

        $siteprice = $this->sitepriceRepository->create($input);

        Flash::success('Siteprice saved successfully.');

        return redirect(route('siteprices.index'));
    }

    /**
     * Display the specified Siteprice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $siteprice = $this->sitepriceRepository->findWithoutFail($id);

        if (empty($siteprice)) {
            Flash::error('Siteprice not found');

            return redirect(route('siteprices.index'));
        }

        return view('siteprices.show')->with('siteprice', $siteprice);
    }

    /**
     * Show the form for editing the specified Siteprice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $siteprice = $this->sitepriceRepository->findWithoutFail($id);

        if (empty($siteprice)) {
            Flash::error('Siteprice not found');

            return redirect(route('siteprices.index'));
        }

        return view('siteprices.edit')->with('siteprice', $siteprice);
    }

    /**
     * Update the specified Siteprice in storage.
     *
     * @param  int              $id
     * @param UpdateSitepriceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSitepriceRequest $request)
    {
        $siteprice = $this->sitepriceRepository->findWithoutFail($id);

        if (empty($siteprice)) {
            Flash::error('Siteprice not found');

            return redirect(route('siteprices.index'));
        }

        $siteprice = $this->sitepriceRepository->update($request->all(), $id);

        Flash::success('Siteprice updated successfully.');

        return redirect(route('siteprices.index'));
    }

    /**
     * Remove the specified Siteprice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $siteprice = $this->sitepriceRepository->findWithoutFail($id);

        if (empty($siteprice)) {
            Flash::error('Siteprice not found');

            return redirect(route('siteprices.index'));
        }

        $this->sitepriceRepository->delete($id);

        Flash::success('Siteprice deleted successfully.');

        return redirect(route('siteprices.index'));
    }
}
