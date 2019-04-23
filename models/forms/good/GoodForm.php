<?php

namespace app\models\forms\good;

use app\models\Good;
use yii\web\UploadedFile;

class GoodForm  extends Good
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
}