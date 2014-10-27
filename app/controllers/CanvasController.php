<?php

class CanvasController extends BaseController {



    /**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function getIndex()
    {
        $boxes = Box::where('user_id' , '=', Auth::user()->id)->get();

        return View::make('site/canvas/index', array('boxes'=>$boxes));
    }

    public function postSaveUbication()
    {

        $data = Input::all();
        $json = json_decode($data["Json"], true);
        $data = $json[0];

        $box = Box::where('number' , '=', $data['number'])->first();
        if($box==null) $box = new Box;

        $box->number=$data['number'];
        $box->rotation=$data['rotation'];
        $box->width=$data['width'];
        $box->height=$data['height'];
        $box->fill=$data['fill'];
        $box->stroke=$data['stroke'];
        $box->stroke_width=$data['strokeWidth'];
        $box->draggable=$data['draggable'];
        $box->x=$data['position']['x'];
        $box->y=$data['position']['y'];
        $box->user_id=Auth::user()->id;
        $box->save();

        return Response::json(array('eval' => true));

    }

}
