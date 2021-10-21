<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNeedAPIRequest;
use App\Http\Requests\API\UpdateNeedAPIRequest;
use App\Models\Need;
use App\Repositories\NeedRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class NeedController
 * @package App\Http\Controllers\API
 */

class NeedAPIController extends AppBaseController
{
    /** @var  NeedRepository */
    private $needRepository;

    public function __construct(NeedRepository $needRepo)
    {
        $this->needRepository = $needRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/needs",
     *      summary="Get a listing of the Needs.",
     *      tags={"Need"},
     *      description="Get all Needs",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Need")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $needs = $this->needRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($needs->toArray(), 'Needs retrieved successfully');
    }

    /**
     * @param CreateNeedAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/needs",
     *      summary="Store a newly created Need in storage",
     *      tags={"Need"},
     *      description="Store Need",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Need that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Need")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Need"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateNeedAPIRequest $request)
    {
        $input = $request->all();

        $need = $this->needRepository->create($input);

        return $this->sendResponse($need->toArray(), 'Need saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/needs/{id}",
     *      summary="Display the specified Need",
     *      tags={"Need"},
     *      description="Get Need",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Need",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Need"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Need $need */
        $need = $this->needRepository->find($id);

        if (empty($need)) {
            return $this->sendError('Need not found');
        }

        return $this->sendResponse($need->toArray(), 'Need retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateNeedAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/needs/{id}",
     *      summary="Update the specified Need in storage",
     *      tags={"Need"},
     *      description="Update Need",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Need",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Need that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Need")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Need"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateNeedAPIRequest $request)
    {
        $input = $request->all();

        /** @var Need $need */
        $need = $this->needRepository->find($id);

        if (empty($need)) {
            return $this->sendError('Need not found');
        }

        $need = $this->needRepository->update($input, $id);

        return $this->sendResponse($need->toArray(), 'Need updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/needs/{id}",
     *      summary="Remove the specified Need from storage",
     *      tags={"Need"},
     *      description="Delete Need",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Need",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Need $need */
        $need = $this->needRepository->find($id);

        if (empty($need)) {
            return $this->sendError('Need not found');
        }

        $need->delete();

        return $this->sendSuccess('Need deleted successfully');
    }
}
