<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNeedRequest;
use App\Http\Requests\UpdateNeedRequest;
use App\Repositories\NeedRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NeedController extends AppBaseController
{
    /** @var  NeedRepository */
    private $needRepository;

    public function __construct(NeedRepository $needRepo)
    {
        $this->needRepository = $needRepo;
    }

    /**
     * Display a listing of the Need.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $needs = $this->needRepository->all();

        return view('needs.index')
            ->with('needs', $needs);
    }

    /**
     * Show the form for creating a new Need.
     *
     * @return Response
     */
    public function create()
    {
        return view('needs.create');
    }

    /**
     * Store a newly created Need in storage.
     *
     * @param CreateNeedRequest $request
     *
     * @return Response
     */
    public function store(CreateNeedRequest $request)
    {
        $input = $request->all();

        $need = $this->needRepository->create($input);

        Flash::success('Need saved successfully.');

        return redirect(route('needs.index'));
    }

    /**
     * Display the specified Need.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $need = $this->needRepository->find($id);

        if (empty($need)) {
            Flash::error('Need not found');

            return redirect(route('needs.index'));
        }

        return view('needs.show')->with('need', $need);
    }

    /**
     * Show the form for editing the specified Need.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $need = $this->needRepository->find($id);

        if (empty($need)) {
            Flash::error('Need not found');

            return redirect(route('needs.index'));
        }

        return view('needs.edit')->with('need', $need);
    }

    /**
     * Update the specified Need in storage.
     *
     * @param int $id
     * @param UpdateNeedRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNeedRequest $request)
    {
        $need = $this->needRepository->find($id);

        if (empty($need)) {
            Flash::error('Need not found');

            return redirect(route('needs.index'));
        }

        $need = $this->needRepository->update($request->all(), $id);

        Flash::success('Need updated successfully.');

        return redirect(route('needs.index'));
    }

    /**
     * Remove the specified Need from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $need = $this->needRepository->find($id);

        if (empty($need)) {
            Flash::error('Need not found');

            return redirect(route('needs.index'));
        }

        $this->needRepository->delete($id);

        Flash::success('Need deleted successfully.');

        return redirect(route('needs.index'));
    }
}
