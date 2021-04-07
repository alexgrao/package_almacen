<?php

class BaseModel extends Eloquent {

    public static function boot()
    {

        parent::boot();

        static::creating(function($model)
        {
            $user = Auth::user();
            if ($user)
            {
              $model->created_by = $user->id;
              $model->updated_by = $user->id;
            }else{
              $model->created_by = null;
              $model->updated_by = null;
            }
        });

        static::updating(function($model)
        {
            $user = Auth::user();
            if ($user)
            {
              $model->updated_by= $user->id;
            }else{
              $model->updated_by = null;
            }
        });

    }

}
