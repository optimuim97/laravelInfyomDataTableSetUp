<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductSpecificationRequest;
use App\Http\Requests\UpdateProductSpecificationRequest;
use App\Repositories\ProductSpecificationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductSpecificationController extends AppBaseController
{
    /** @var  ProductSpecificationRepository */
    private $productSpecificationRepository;

    public function __construct(ProductSpecificationRepository $productSpecificationRepo)
    {
        $this->productSpecificationRepository = $productSpecificationRepo;
    }

    /**
     * Display a listing of the ProductSpecification.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productSpecifications = $this->productSpecificationRepository->all();

        return view('product_specifications.index')
            ->with('productSpecifications', $productSpecifications);
    }

    /**
     * Show the form for creating a new ProductSpecification.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_specifications.create');
    }

    /**
     * Store a newly created ProductSpecification in storage.
     *
     * @param CreateProductSpecificationRequest $request
     *
     * @return Response
     */
    public function store(CreateProductSpecificationRequest $request)
    {
        $input = $request->all();

        $productSpecification = $this->productSpecificationRepository->create($input);

        Flash::success('Product Specification saved successfully.');

        return redirect(route('productSpecifications.index'));
    }

    /**
     * Display the specified ProductSpecification.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productSpecification = $this->productSpecificationRepository->find($id);

        if (empty($productSpecification)) {
            Flash::error('Product Specification not found');

            return redirect(route('productSpecifications.index'));
        }

        return view('product_specifications.show')->with('productSpecification', $productSpecification);
    }

    /**
     * Show the form for editing the specified ProductSpecification.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productSpecification = $this->productSpecificationRepository->find($id);

        if (empty($productSpecification)) {
            Flash::error('Product Specification not found');

            return redirect(route('productSpecifications.index'));
        }

        return view('product_specifications.edit')->with('productSpecification', $productSpecification);
    }

    /**
     * Update the specified ProductSpecification in storage.
     *
     * @param int $id
     * @param UpdateProductSpecificationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductSpecificationRequest $request)
    {
        $productSpecification = $this->productSpecificationRepository->find($id);

        if (empty($productSpecification)) {
            Flash::error('Product Specification not found');

            return redirect(route('productSpecifications.index'));
        }

        $productSpecification = $this->productSpecificationRepository->update($request->all(), $id);

        Flash::success('Product Specification updated successfully.');

        return redirect(route('productSpecifications.index'));
    }

    /**
     * Remove the specified ProductSpecification from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productSpecification = $this->productSpecificationRepository->find($id);

        if (empty($productSpecification)) {
            Flash::error('Product Specification not found');

            return redirect(route('productSpecifications.index'));
        }

        $this->productSpecificationRepository->delete($id);

        Flash::success('Product Specification deleted successfully.');

        return redirect(route('productSpecifications.index'));
    }
}
