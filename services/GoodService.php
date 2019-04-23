<?php
/**
 * Created by PhpStorm.
 * User: cay
 * Date: 19.04.2019
 * Time: 7:49
 */

namespace app\services;


use app\models\forms\good\GoodForm;
use app\models\Good;

class GoodService
{
    public function create(GoodForm $form)
    {


        /*        $good = new Good();
        $good->title = $form->title;
        $good->price = $form->price;
        $good->description = $form->description;
        $good->category_id = $form->category_id;
        $good->status= $form->status;

        return $good->save();
        */
        return $form->save();
    }

    public function update(GoodForm $form)
    {
        return $form->save();
    }
    public function view(GoodForm $form)
    {
        return $form ;
    }
    public function delete(GoodForm $form)
    {
        return $form->delete();
        //return $form->save();
    }

}