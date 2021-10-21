<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductUserAPIRequest;
use App\Http\Requests\API\UpdateProductUserAPIRequest;
use App\Models\ProductUser;
use App\Repositories\ProductUserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProductUserController
 * @package App\Http\Controllers\API
 */

class ProductUserAPIController extends AppBaseController
{
    /** @var  ProductUserRepository */
    private $productUserRepository;

    public function __construct(ProductUserRepository $productUserRepo)
    {
        $this->productUserRepository = $productUserRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/productUsers",
     *      summary="Get a listing of the ProductUsers.",
     *      tags={"ProductUser"},
     *      description="Get all ProductUsers",
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
     *                  @SWG\Items(ref="#/definitions/ProductUser")
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
        $productUsers = $this->productUserRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($productUsers->toArray(), 'Product Users retrieved successfully');
    }

    /**
     * @param CreateProductUserAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/productUsers",
     *      summary="Store a newly created ProductUser in storage",
     *      tags={"ProductUser"},
     *      description="Store ProductUser",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProductUser that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProductUser")
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
     *                  ref="#/definitions/ProductUser"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateProductUserAPIRequest $request)
    {
        $input = $request->all();

        $productUser = $this->productUserRepository->create($input);

        return $this->sendResponse($productUser->toArray(), 'Product User saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/productUsers/{id}",
     *      summary="Display the specified ProductUser",
     *      tags={"ProductUser"},
     *      description="Get ProductUser",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductUser",
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
     *                  ref="#/definitions/ProductUser"
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
        /** @var ProductUser $productUser */
        $productUser = $this->productUserRepository->find($id);

        if (empty($productUser)) {
            return $this->sendError('Product User not found');
        }

        return $this->sendResponse($productUser->toArray(), 'Product User retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateProductUserAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/productUsers/{id}",
     *      summary="Update the specified ProductUser in storage",
     *      tags={"ProductUser"},
     *      description="Update ProductUser",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductUser",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProductUser that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProductUser")
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
     *                  ref="#/definitions/ProductUser"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateProductUserAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductUser $productUser */
        $productUser = $this->productUserRepository->find($id);

        if (empty($productUser)) {
            return $this->sendError('Product User not found');
        }

        $productUser = $this->productUserRepository->update($input, $id);

        return $this->sendResponse($productUser->toArray(), 'ProductUser updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/productUsers/{id}",
     *      summary="Remove the specified ProductUser from storage",
     *      tags={"ProductUser"},
     *      description="Delete ProductUser",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductUser",
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
        /** @var ProductUser $productUser */
        $productUser = $this->productUserRepository->find($id);

        if (empty($productUser)) {
            return $this->sendError('Product User not found');
        }

        $productUser->delete();

        return $this->sendSuccess('Product User deleted successfully');
    }
}
