<?php
declare(strict_types=1);

use Slim\App;
use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Application\Actions\Token\TokenAction;

return function (App $app) {
    $app->post('/token', TokenAction::class . ':handle');

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class . ':handle');
        $group->get('/{id}', ViewUserAction::class . ':handle');
    });
};
