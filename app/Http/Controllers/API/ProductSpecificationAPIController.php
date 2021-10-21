<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductSpecificationAPIRequest;
use App\Http\Requests\API\UpdateProductSpecificationAPIRequest;
use App\Models\ProductSpecification;
use App\Repositories\ProductSpecificationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProductSpecificationController
 * @package App\Http\Controllers\API
 */

class ProductSpecificationAPIController extends AppBaseController
{
    /** @var  ProductSpecificationRepository */
    private $productSpecificationRepository;

    public function __construct(ProductSpecificationRepository $productSpecificationRepo)
    {
        $this->productSpecificationRepository = $productSpecificationRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/productSpecifications",
     *      summary="Get a listing of the ProductSpecifications.",
     *      tags={"ProductSpecification"},
     *      description="Get all ProductSpecifications",
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
     *                  @SWG\Items(ref="#/definitions/ProductSpecification")
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
        $productSpecifications = $this->productSpecificationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($productSpecifications->toArray(), 'Product Specifications retrieved successfully');
    }

    /**
     * @param CreateProductSpecificationAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/productSpecifications",
     *      summary="Store a newly created ProductSpecification in storage",
     *      tags={"ProductSpecification"},
     *      description="Store ProductSpecification",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProductSpecification that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProductSpecification")
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
     *                  ref="#/definitions/ProductSpecification"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateProductSpecificationAPIRequest $request)
    {
        $input = $request->all();

        $productSpecification = $this->productSpecificationRepository->create($input);

        return $this->sendResponse($productSpecification->toArray(), 'Product Specification saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/productSpecifications/{id}",
     *      summary="Display the specified ProductSpecification",
     *      tags={"ProductSpecification"},
     *      description="Get ProductSpecification",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductSpecification",
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
     *                  ref="#/definitions/ProductSpecification"
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
        /** @var ProductSpecification $productSpecification */
        $productSpecification = $this->productSpecificationRepository->find($id);

        if (empty($productSpecification)) {
            return $this->sendError('Product Specification not found');
        }

        return $this->sendResponse($productSpecification->toArray(), 'Product Specification retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateProductSpecificationAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/productSpecifications/{id}",
     *      summary="Update the specified ProductSpecification in storage",
     *      tags={"ProductSpecification"},
     *      description="Update ProductSpecification",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductSpecification",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProductSpecification that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProductSpecification")
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
     *                  ref="#/definitions/ProductSpecification"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateProductSpecificationAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductSpecification $productSpecification */
        $productSpecification = $this->productSpecificationRepository->find($id);

        if (empty($productSpecification)) {
            return $this->sendError('Product Specification not found');
        }

        $productSpecification = $this->productSpecificationRepository->update($input, $id);

        return $this->sendResponse($productSpecification->toArray(), 'ProductSpecification updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/productSpecifications/{id}",
     *      summary="Remove the specified ProductSpecification from storage",
     *      tags={"ProductSpecification"},
     *      description="Delete ProductSpecification",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductSpecification",
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
        /** @var ProductSpecification $productSpecification */
        $productSpecification = $this->productSpecificationRepository->find($id);

        if (empty($productSpecification)) {
            return $this->sendError('Product Specification not found');
        }

        $productSpecification->delete();

        return $this->sendSuccess('Product Specification deleted successfully');
    }
}
