<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMetatagRequest;
use App\Http\Requests\UpdateMetatagRequest;
use App\Repositories\MetatagRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MetatagController extends AppBaseController
{
    /** @var  MetatagRepository */
    private $metatagRepository;

    public function __construct(MetatagRepository $metatagRepo)
    {
        $this->metatagRepository = $metatagRepo;
    }

    /**
     * Display a listing of the Metatag.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->metatagRepository->pushCriteria(new RequestCriteria($request));
        $metatags = $this->metatagRepository->all();

        return view('metatags.index')
            ->with('metatags', $metatags);
    }

    /**
     * Show the form for creating a new Metatag.
     *
     * @return Response
     */
    public function create()
    {
        return view('metatags.create');
    }

    /**
     * Store a newly created Metatag in storage.
     *
     * @param CreateMetatagRequest $request
     *
     * @return Response
     */
    public function store(CreateMetatagRequest $request)
    {
        $input = $request->all();

        $metatag = $this->metatagRepository->create($input);

        Flash::success('Metatag saved successfully.');

        return redirect(route('metatags.index'));
    }

    /**
     * Display the specified Metatag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $metatag = $this->metatagRepository->findWithoutFail($id);

        if (empty($metatag)) {
            Flash::error('Metatag not found');

            return redirect(route('metatags.index'));
        }

        return view('metatags.show')->with('metatag', $metatag);
    }

    /**
     * Show the form for editing the specified Metatag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $metatag = $this->metatagRepository->findWithoutFail($id);

        if (empty($metatag)) {
            Flash::error('Metatag not found');

            return redirect(route('metatags.index'));
        }

        return view('metatags.edit')->with('metatag', $metatag);
    }

    /**
     * Update the specified Metatag in storage.
     *
     * @param  int              $id
     * @param UpdateMetatagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMetatagRequest $request)
    {
        $metatag = $this->metatagRepository->findWithoutFail($id);

        if (empty($metatag)) {
            Flash::error('Metatag not found');

            return redirect(route('metatags.index'));
        }

        $metatag = $this->metatagRepository->update($request->all(), $id);

        Flash::success('Metatag updated successfully.');

        return redirect(route('metatags.index'));
    }

    /**
     * Remove the specified Metatag from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $metatag = $this->metatagRepository->findWithoutFail($id);

        if (empty($metatag)) {
            Flash::error('Metatag not found');

            return redirect(route('metatags.index'));
        }

        $this->metatagRepository->delete($id);

        Flash::success('Metatag deleted successfully.');

        return redirect(route('metatags.index'));
    }
}
