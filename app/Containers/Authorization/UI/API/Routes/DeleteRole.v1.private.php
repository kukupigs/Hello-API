<?php

/**
 * @apiGroup           RolePermission
 * @apiName            deleteRole
 * @api                {delete} /roles/:id Delete a Role
 * @apiDescription     Delete Role by ID
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated Role
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
{
    "message": "Role (manager) Deleted Successfully."
}
 */

$router->delete('roles/{id}', [
    'uses'       => 'Controller@deleteRole',
    'middleware' => [
        'api.auth',
    ],
]);
