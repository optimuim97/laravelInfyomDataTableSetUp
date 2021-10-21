<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountTypeRequest;
use App\Http\Requests\UpdateAccountTypeRequest;
use App\Repositories\AccountTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AccountTypeController extends AppBaseController
{
    /** @var  AccountTypeRepository */
    private $accountTypeRepository;

    public function __construct(AccountTypeRepository $accountTypeRepo)
    {
        $this->accountTypeRepository = $accountTypeRepo;
    }

    /**
     * Display a listing of the AccountType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $accountTypes = $this->accountTypeRepository->all();

        return view('account_types.index')
            ->with('accountTypes', $accountTypes);
    }

    /**
     * Show the form for creating a new AccountType.
     *
     * @return Response
     */
    public function create()
    {
        return view('account_types.create');
    }

    /**
     * Store a newly created AccountType in storage.
     *
     * @param CreateAccountTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateAccountTypeRequest $request)
    {
        $input = $request->all();

        $accountType = $this->accountTypeRepository->create($input);

        Flash::success('Account Type saved successfully.');

        return redirect(route('accountTypes.index'));
    }

    /**
     * Display the specified AccountType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $accountType = $this->accountTypeRepository->find($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }

        return view('account_types.show')->with('accountType', $accountType);
    }

    /**
     * Show the form for editing the specified AccountType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $accountType = $this->accountTypeRepository->find($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }

        return view('account_types.edit')->with('accountType', $accountType);
    }

    /**
     * Update the specified AccountType in storage.
     *
     * @param int $id
     * @param UpdateAccountTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAccountTypeRequest $request)
    {
        $accountType = $this->accountTypeRepository->find($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }

        $accountType = $this->accountTypeRepository->update($request->all(), $id);

        Flash::success('Account Type updated successfully.');

        return redirect(route('accountTypes.index'));
    }

    /**
     * Remove the specified AccountType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $accountType = $this->accountTypeRepository->find($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }

        $this->accountTypeRepository->delete($id);

        Flash::success('Account Type deleted successfully.');

        return redirect(route('accountTypes.index'));
    }
}
