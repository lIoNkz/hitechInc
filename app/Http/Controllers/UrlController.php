<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUrlRequest;
use App\Http\Requests\UpdateUrlRequest;
use App\Repositories\UrlRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UrlController extends AppBaseController
{
    /** @var  UrlRepository */
    private $urlRepository;

    public function __construct(UrlRepository $urlRepo)
    {
        $this->urlRepository = $urlRepo;
    }

    /**
     * Display a listing of the Url.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->urlRepository->pushCriteria(new RequestCriteria($request));
        $urls = $this->urlRepository->all();

        return view('urls.index')
            ->with('urls', $urls);
    }

    /**
     * Show the form for creating a new Url.
     *
     * @return Response
     */
    public function create()
    {
        return view('urls.create');
    }

    /**
     * Store a newly created Url in storage.
     *
     * @param CreateUrlRequest $request
     *
     * @return Response
     */
    public function store(CreateUrlRequest $request)
    {
        $input = $request->all();

        $url = $this->urlRepository->create($input);

        Flash::success('Url saved successfully.');

        return redirect(route('urls.index'));
    }

    /**
     * Display the specified Url.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $url = $this->urlRepository->findWithoutFail($id);

        if (empty($url)) {
            Flash::error('Url not found');

            return redirect(route('urls.index'));
        }

        return view('urls.show')->with('url', $url);
    }

    /**
     * Show the form for editing the specified Url.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $url = $this->urlRepository->findWithoutFail($id);

        if (empty($url)) {
            Flash::error('Url not found');

            return redirect(route('urls.index'));
        }

        return view('urls.edit')->with('url', $url);
    }

    /**
     * Update the specified Url in storage.
     *
     * @param  int              $id
     * @param UpdateUrlRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUrlRequest $request)
    {
        $url = $this->urlRepository->findWithoutFail($id);

        if (empty($url)) {
            Flash::error('Url not found');

            return redirect(route('urls.index'));
        }

        $url = $this->urlRepository->update($request->all(), $id);

        Flash::success('Url updated successfully.');

        return redirect(route('urls.index'));
    }

    /**
     * Remove the specified Url from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $url = $this->urlRepository->findWithoutFail($id);

        if (empty($url)) {
            Flash::error('Url not found');

            return redirect(route('urls.index'));
        }

        $this->urlRepository->delete($id);

        Flash::success('Url deleted successfully.');

        return redirect(route('urls.index'));
    }
}
