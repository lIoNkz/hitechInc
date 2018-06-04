<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBreadcrumbRequest;
use App\Http\Requests\UpdateBreadcrumbRequest;
use App\Repositories\BreadcrumbRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BreadcrumbController extends AppBaseController
{
    /** @var  BreadcrumbRepository */
    private $breadcrumbRepository;

    public function __construct(BreadcrumbRepository $breadcrumbRepo)
    {
        $this->breadcrumbRepository = $breadcrumbRepo;
    }

    /**
     * Display a listing of the Breadcrumb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->breadcrumbRepository->pushCriteria(new RequestCriteria($request));
        $breadcrumbs = $this->breadcrumbRepository->all();

        return view('breadcrumbs.index')
            ->with('breadcrumbs', $breadcrumbs);
    }

    /**
     * Show the form for creating a new Breadcrumb.
     *
     * @return Response
     */
    public function create()
    {
        return view('breadcrumbs.create');
    }

    /**
     * Store a newly created Breadcrumb in storage.
     *
     * @param CreateBreadcrumbRequest $request
     *
     * @return Response
     */
    public function store(CreateBreadcrumbRequest $request)
    {
        $input = $request->all();

        $breadcrumb = $this->breadcrumbRepository->create($input);

        Flash::success('Breadcrumb saved successfully.');

        return redirect(route('breadcrumbs.index'));
    }

    /**
     * Display the specified Breadcrumb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $breadcrumb = $this->breadcrumbRepository->findWithoutFail($id);

        if (empty($breadcrumb)) {
            Flash::error('Breadcrumb not found');

            return redirect(route('breadcrumbs.index'));
        }

        return view('breadcrumbs.show')->with('breadcrumb', $breadcrumb);
    }

    /**
     * Show the form for editing the specified Breadcrumb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $breadcrumb = $this->breadcrumbRepository->findWithoutFail($id);

        if (empty($breadcrumb)) {
            Flash::error('Breadcrumb not found');

            return redirect(route('breadcrumbs.index'));
        }

        return view('breadcrumbs.edit')->with('breadcrumb', $breadcrumb);
    }

    /**
     * Update the specified Breadcrumb in storage.
     *
     * @param  int              $id
     * @param UpdateBreadcrumbRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBreadcrumbRequest $request)
    {
        $breadcrumb = $this->breadcrumbRepository->findWithoutFail($id);

        if (empty($breadcrumb)) {
            Flash::error('Breadcrumb not found');

            return redirect(route('breadcrumbs.index'));
        }

        $breadcrumb = $this->breadcrumbRepository->update($request->all(), $id);

        Flash::success('Breadcrumb updated successfully.');

        return redirect(route('breadcrumbs.index'));
    }

    /**
     * Remove the specified Breadcrumb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $breadcrumb = $this->breadcrumbRepository->findWithoutFail($id);

        if (empty($breadcrumb)) {
            Flash::error('Breadcrumb not found');

            return redirect(route('breadcrumbs.index'));
        }

        $this->breadcrumbRepository->delete($id);

        Flash::success('Breadcrumb deleted successfully.');

        return redirect(route('breadcrumbs.index'));
    }
}
