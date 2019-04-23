<?php
namespace app\views\good;

use app\models\Good;
use yii\bootstrap\ActiveForm;
use yii\debug\models\timeline\DataProvider;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\data\DataProviderInterface;
use yii\helpers;



$this->title = 'Товары';
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="row">



    <div class="col-md-12">
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    'id',
                    'category_id',
                    'title',
                    'price',
                    'amount',
                    'description:text',
                    'status',
                    ['class' => 'yii\grid\ActionColumn']
                    ]

        ])
        ?>
    </div>

    <?= Html::a('Добавить новый товар', '/good/create', ['class'=>'btn btn-lg btn-primary']); ?>

</div>