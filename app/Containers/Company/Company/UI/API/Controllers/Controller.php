<?php

namespace App\Containers\Company\Company\UI\API\Controllers;

use App\Containers\Company\Company\UI\API\Requests\CreateCompanyRequest;
use App\Containers\Company\Company\UI\API\Requests\DeleteCompanyRequest;
use App\Containers\Company\Company\UI\API\Requests\GetAllCompaniesRequest;
use App\Containers\Company\Company\UI\API\Requests\FindCompanyByIdRequest;
use App\Containers\Company\Company\UI\API\Requests\UpdateCompanyRequest;
use App\Containers\Company\Company\UI\API\Transformers\CompanyTransformer;
use App\Containers\Company\Company\Actions\CreateCompanyAction;
use App\Containers\Company\Company\Actions\FindCompanyByIdAction;
use App\Containers\Company\Company\Actions\GetAllCompaniesAction;
use App\Containers\Company\Company\Actions\UpdateCompanyAction;
use App\Containers\Company\Company\Actions\DeleteCompanyAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createCompany(CreateCompanyRequest $request): JsonResponse
    {
        $company = app(CreateCompanyAction::class)->run($request);
        return $this->created($this->transform($company, CompanyTransformer::class));
    }

    public function findCompanyById(FindCompanyByIdRequest $request): array
    {
        $company = app(FindCompanyByIdAction::class)->run($request);
        return $this->transform($company, CompanyTransformer::class);
    }

    public function getAllCompanies(GetAllCompaniesRequest $request): array
    {
        $companies = app(GetAllCompaniesAction::class)->run($request);
        return $this->transform($companies, CompanyTransformer::class);
    }

    public function updateCompany(UpdateCompanyRequest $request): array
    {
        $company = app(UpdateCompanyAction::class)->run($request);
        return $this->transform($company, CompanyTransformer::class);
    }

    public function deleteCompany(DeleteCompanyRequest $request): JsonResponse
    {
        app(DeleteCompanyAction::class)->run($request);
        return $this->noContent();
    }
}
