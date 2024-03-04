<?php

declare(strict_types=1);

namespace Domains\Users\People\Services\RESTful\Contracts;

use Core\Logic\Services\RestJson\Contracts\RestJsonQueryServiceContract;

/**
 * Interface ***`PersonRESTfulQueryServiceContract`***
 *
 * The `PersonRESTfulQueryServiceContract` interface is a contract that defines the methods
 * for a RESTful query service specific to Person resources.
 *
 * This interface extends the RestJsonQueryServiceContract interface, which provides
 * a set of common methods for performing RESTful queries on JSON-based resources.
 *
 * Implementing classes should provide the necessary implementation for each method
 * defined in this interface, which includes `querying`, `filtering`, `sorting`, `pagination`,
 * and other operations specific to Person resources.
 *
 * @package ***`\Domains\Users\People\Services\RESTful\Contracts`***
 */
interface PersonRESTfulQueryServiceContract extends RestJsonQueryServiceContract
{

}