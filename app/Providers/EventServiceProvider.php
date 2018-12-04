<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
//        'App\Events\Event' => [
//            'App\Listeners\EventListener',
            \SocialiteProviders\Manager\SocialiteWasCalled::class => [
                // add your listeners (aka providers) here
                'SocialiteProviders\Weixin\WeixinExtendSocialite@handle'
            ],
//        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //011xBXbA1sWJUb0GPwcA1dS0cA1xBXbd
       // 16_cdQsQB_O_h09vG3AMbRkPl1jOOSLjHk3wm1VWQQ6BEcg_C4pd-NZe6TBXsOyOqEndQi4R_jrCVADHUUebm2fQEcPdVPyEs4kCoorEsQdgwl4ALNan_P2DIMUJ2iXZnNSorO-IyD56ZoW5R8lDLBfAHAJRH
//        https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxaf2a4d4031ef0b87&redirect_uri=http://larabbs.test&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect
//        071GFEZN0Mbbe325PW0O0llNZN0GFEZa
//    https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxaf2a4d4031ef0b87&secret=d54cd6f0fd6311ac1646511daea81495&code=071GFEZN0Mbbe325PW0O0llNZN0GFEZa&grant_type=authorization_code
//   {"access_token":"16_GhB7RdW9l0JUVJCRgpL2emOTNTRV5i0lMKfVJy7VQvuma-H-okdzNcfbEpZlOC97LaQijaGpZEbWEc2H4LWgnw","expires_in":7200,"refresh_token":
//       "16_gMsp22EtGOAbRRqCq7mH2-iRfoPYVYYCjCAuec2yYPRQoLMJ1ln6o1-EKGeb68uIPUwGGmvWQhmwtMv72Af_qw",
//       "openid":"oK8KI1MWsslZ4T2vwFS2oOu4ezeg","scope":"snsapi_userinfo"}
//       https://api.weixin.qq.com/sns/userinfo?access_token=16_GhB7RdW9l0JUVJCRgpL2emOTNTRV5i0lMKfVJy7VQvuma-H-okdzNcfbEpZlOC97LaQijaGpZEbWEc2H4LWgnw&openid=oK8KI1MWsslZ4T2vwFS2oOu4ezeg&lang=zh_CN
//    $accessToken = '16_GhB7RdW9l0JUVJCRgpL2emOTNTRV5i0lMKfVJy7VQvuma-H-okdzNcfbEpZlOC97LaQijaGpZEbWEc2H4LWgnw';
//$openID = 'oK8KI1MWsslZ4T2vwFS2oOu4ezeg';
//$driver = Socialite::driver('weixin');
//$driver->setOpenId($openID);
//$oauthUser = $driver->userFromToken($accessToken);

//        $code = '061Jh1F21MAXCQ1T4gG21JubF21Jh1FY';
//        $driver = Socialite::driver('weixin');
//        $response = $driver->getAccessTokenResponse($code);
//        $driver->setOpenId($response['oK8KI1MWsslZ4T2vwFS2oOu4ezeg']);
//        $oauthUser = $driver->userFromToken($response['16_GhB7RdW9l0JUVJCRgpL2emOTNTRV5i0lMKfVJy7VQvuma-H-okdzNcfbEpZlOC97LaQijaGpZEbWEc2H4LWgnw']);
    }
}
