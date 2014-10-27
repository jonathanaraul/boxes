<?php

class AjaxController extends BaseController
{

    public function post_saveUbication()
    {

        $data = Input::all();
        var_dump($data);exit;

            //$object->save();
            return Response::json(array('eval' => true));

    }

}
