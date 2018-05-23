<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTextblockAPIRequest;
use App\Http\Requests\API\UpdateTextblockAPIRequest;
use App\Models\Textblock;
use App\Repositories\TextblockRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TextblockController
 * @package App\Http\Controllers\API
 */

class TextblockAPIController extends AppBaseController
{
    /** @var  TextblockRepository */
    private $textblockRepository;

    public function __construct(TextblockRepository $textblockRepo)
    {
        $this->textblockRepository = $textblockRepo;
    }

    /**
     * Display a listing of the Textblock.
     * GET|HEAD /textblocks
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->textblockRepository->pushCriteria(new RequestCriteria($request));
        $this->textblockRepository->pushCriteria(new LimitOffsetCriteria($request));
        $textblocks = $this->textblockRepository->all();

        return $this->sendResponse($textblocks->toArray(), 'Textblocks retrieved successfully');
    }

    /**
     * Store a newly created Textblock in storage.
     * POST /textblocks
     *
     * @param CreateTextblockAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTextblockAPIRequest $request)
    {
        $input = $request->all();

        $textblocks = $this->textblockRepository->create($input);

        return $this->sendResponse($textblocks->toArray(), 'Textblock saved successfully');
    }

    /**
     * Display the specified Textblock.
     * GET|HEAD /textblocks/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Textblock $textblock */
        $textblock = $this->textblockRepository->findWithoutFail($id);

        if (empty($textblock)) {
            return $this->sendError('Textblock not found');
        }

        return $this->sendResponse($textblock->toArray(), 'Textblock retrieved successfully');
    }

    /**
     * Update the specified Textblock in storage.
     * PUT/PATCH /textblocks/{id}
     *
     * @param  int $id
     * @param UpdateTextblockAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextblockAPIRequest $request)
    {
        $input = $request->all();

        /** @var Textblock $textblock */
        $textblock = $this->textblockRepository->findWithoutFail($id);

        if (empty($textblock)) {
            return $this->sendError('Textblock not found');
        }

        $textblock = $this->textblockRepository->update($input, $id);

        return $this->sendResponse($textblock->toArray(), 'Textblock updated successfully');
    }

    /**
     * Remove the specified Textblock from storage.
     * DELETE /textblocks/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Textblock $textblock */
        $textblock = $this->textblockRepository->findWithoutFail($id);

        if (empty($textblock)) {
            return $this->sendError('Textblock not found');
        }

        $textblock->delete();

        return $this->sendResponse($id, 'Textblock deleted successfully');
    }
}
