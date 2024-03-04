<?php

declare(strict_types=1);

namespace Domains\Users\Services\RESTful;

use Core\Logic\Services\Contracts\ReadWriteServiceContract;
use Core\Logic\Services\RestJson\RestJsonReadWriteService;
use Core\Utils\DataTransfertObjects\DTOInterface;
use Core\Utils\Exceptions\ServiceException;
use Core\Utils\Helpers\Responses\Json\JsonResponseTrait;
use Domains\People\Services\RESTful\PersonRESTfulReadWriteService;
use Domains\Users\Companies\Services\RESTful\Contracts\CompanyRESTfulReadWriteServiceContract;
use Domains\Users\People\Services\RESTful\Contracts\PersonRESTfulReadWriteServiceContract;
use Domains\Users\Services\RESTful\Contracts\UserRESTfulReadWriteServiceContract;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * The ***`UserRESTfulReadWriteService`*** class provides RESTful CRUD operations for the "User" resource.
 *
 * This service class extends the `RestJsonReadWriteService` class to handle the read and write operations for the "User" resource.
 * It implements the `UserRESTfulReadWriteServiceContract` interface that defines the contract for this service.
 * The class leverages the `JsonResponseTrait` to create consistent JSON responses with `success`, `error`, and `validation` error structures.
 *
 * @package ***`\Domains\Users\Services\RESTful`***
 */
class UserRESTfulReadWriteService extends RestJsonReadWriteService implements UserRESTfulReadWriteServiceContract
{
    /**
     * Constructor for the UserRESTfulReadWriteService class.
     *
     * @param ReadWriteServiceContract $readWriteService The query service instance to be used.
     */
    public function __construct(ReadWriteServiceContract $readWriteService)
    {
        parent::__construct($readWriteService);
    }


    /**
     * Create a new record.
     *
     * @param  \Core\Utils\DataTransfertObjects\DTOInterface $data The data for creating the record.
     * @return \Illuminate\Http\JsonResponse                 The JSON response indicating whether the create was successful or not.
     *
     * @throws \Core\Utils\Exceptions\ServiceException             If there is an error while creating the record.
     */
    public function create(DTOInterface $data): JsonResponse
    {
        // Begin the transaction
        DB::beginTransaction();

        try {

            $role = $this->readWriteService->create($data);
            //$this->grantAccess($role->id, $data);
            
            // Commit the transaction
            DB::commit();

            return JsonResponseTrait::success(
                message: 'Role created successfully',
                data: $role,
                status_code: Response::HTTP_CREATED
            );
        } catch (Throwable $exception) {
            // Rollback the transaction in case of an exception
            DB::rollBack();
            
            throw new ServiceException(message: $exception->getMessage(), previous: $exception);
        }
    }
}