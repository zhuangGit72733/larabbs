<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('version', function () {
        return response('this is version v1');
    });
//    $api->resource('version2', function () {
//       return response('this is resource');
//    });
});

$api->version('v2', function ($api) {
    $api->get('version', function () {
        return response('this is version v2');
    });
});

//$api->group([
//    'middleware' => 'api.throttle',
//    'limit' => config('api.rate_limits.access.limit'),
//    'expires' => config('api.rate_limits.access.expires'),
//], function ($api) {
//    // 游客可以访问的接口
//
//    // 需要 token 验证的接口
//    $api->group(['middleware' => 'api.auth'], function ($api) {
//        // 当前登录用户信息
//        $api->get('user', 'UsersController@me')
//            ->name('api.user.show');
//    });
//});
//// 图片验证码
//$api->post('captchas', 'CaptchasController@store')
//    ->name('api.captchas.store');
//// 第三方登录
//$api->post('socials/{social_type}/authorizations', 'AuthorizationsController@socialStore')
//    ->name('api.socials.authorizations.store');
