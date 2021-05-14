# mia-add-mezzio

1. Incluir libreria:
```bash
composer require agencycoda/mia-ad-mezzio
```
2. Incluir rutas:
```php
$app->route('/mia-ad/fetch/{id}', [\Mia\Ad\Handler\FetchHandler::class], ['GET', 'OPTIONS', 'HEAD'], 'mia_ad.fetch');
$app->route('/mia-ad/fetch-slug/{slug}', [\Mia\Ad\Handler\FetchSlugHandler::class], ['GET', 'OPTIONS', 'HEAD'], 'mia_legal.fetch-slug');
$app->route('/mia-ad/list', [\Mia\Ad\Handler\ListHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_ad.list');
$app->route('/mia-ad/remove/{id}', [\Mia\Auth\Handler\AuthHandler::class, new \Mia\Auth\Middleware\MiaRoleAuthMiddleware([MIAUser::ROLE_ADMIN]), \Mia\Ad\Handler\RemoveHandler::class], ['GET', 'DELETE', 'OPTIONS', 'HEAD'], 'mia_ad.remove');
$app->route('/mia-ad/save', [\Mia\Auth\Handler\AuthHandler::class, new \Mia\Auth\Middleware\MiaRoleAuthMiddleware([MIAUser::ROLE_ADMIN]), \Mia\Ad\Handler\SaveHandler::class], ['POST', 'OPTIONS', 'HEAD'], 'mia_ad.save');
```