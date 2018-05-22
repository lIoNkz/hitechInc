<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAdvantageAPIRequest;
use App\Http\Requests\API\UpdateAdvantageAPIRequest;
use App\Models\Advantage;
use App\Repositories\AdvantageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AdvantageController
 * @package App\Http\Controllers\API
 */

class AdvantageAPIController extends AppBaseController
{
    /** @var  AdvantageRepository */
    private $advantageRepository;

    public function __construct(AdvantageRepository $advantageRepo)
    {
        $this->advantageRepository = $advantageRepo;
    }

    /**
     * Display a listing of the Advantage.
     * GET|HEAD /advantages
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->advantageRepository->pushCriteria(new RequestCriteria($request));
        $this->advantageRepository->pushCriteria(new LimitOffsetCriteria($request));
        $advantages = $this->advantageRepository->all();

        return $this->sendResponse($advantages->toArray(), 'Advantages retrieved successfully');
    }

    /**
     * Store a newly created Advantage in storage.
     * POST /advantages
     *
     * @param CreateAdvantageAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAdvantageAPIRequest $request)
    {
        $input = $request->all();

        $advantages = $this->advantageRepository->create($input);

        return $this->sendResponse($advantages->toArray(), 'Advantage saved successfully');
    }

    /**
     * Display the specified Advantage.
     * GET|HEAD /advantages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Advantage $advantage */
        $advantage = $this->advantageRepository->findWithoutFail($id);

        if (empty($advantage)) {
            return $this->sendError('Advantage not found');
        }

        return $this->sendResponse($advantage->toArray(), 'Advantage retrieved successfully');
    }

    /**
     * Update the specified Advantage in storage.
     * PUT/PATCH /advantages/{id}
     *
     * @param  int $id
     * @param UpdateAdvantageAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdvantageAPIRequest $request)
    {
        $input = $request->all();

        /** @var Advantage $advantage */
        $advantage = $this->advantageRepository->findWithoutFail($id);

        if (empty($advantage)) {
            return $this->sendError('Advantage not found');
        }

        $advantage = $this->advantageRepository->update($input, $id);

        return $this->sendResponse($advantage->toArray(), 'Advantage updated successfully');
    }

    /**
     * Remove the specified Advantage from storage.
     * DELETE /advantages/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Advantage $advantage */
        $advantage = $this->advantageRepository->findWithoutFail($id);

        if (empty($advantage)) {
            return $this->sendError('Advantage not found');
        }

        $advantage->delete();

        return $this->sendResponse($id, 'Advantage deleted successfully');
    }
}
