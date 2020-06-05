<?php

namespace AccountManagement;

use AccountManagement\ACMSHelper;
use App\User;

trait ACMSLoginTrait
{
    public function syncLogin(Request $request)
    {
        $this->validate($request,[
            'username'=>'string',
            'password' => 'required|string',
        ]);
        
        $user=AccountManagement::getUser($request->username);
 
        if($user==null)
            return null;

        $this->syncAccount($user);

        return $request;
    }

    private function syncAccount($acms_user)
    {
        $acms_id=config('acms.acms_id');
        $app_id=config('acms.app_id');
        
        $app_user=User::where($app_id,$acms_user->{$acms_id})->first();
        
        if($app_user==null)
            $app_user=new User;

        # Sync the mapping fields
        $mapping=config('acms.mapping');

        foreach ($mapping as $key => $value) {
            if($value!=null)
            {
                $app_user->{$value}=$acms_user->{$key};
            }
        }

        # Sync the mapping fields
        $extra=config('acms.extra_mapping');

        foreach ($extra as $key => $value) {
            if($value!=null)
            {
                $app_user->{$value}=$acms_user->{$key};
            }
        }

        $app_user->save();

        return $app_user;
    }
}
