<?php


use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$this->title = 'Товары';

$message = 'Товары';
?>

<?= Html::encode($message) ?>

<table>
    <thead>
        <tr>
            <td> id </td>
            <td> title </td>
            <td> price </td>
            <td> description </td>
            <td> category_id </td>
            <td> status </td>
            <td> created_at </td>
            <td> updated_at </td>
            <td> CRUD </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($goods as $good): ?>
    <tr>
        <td> <?= $good->id ?> </td>
        <td> <?= $good->title ?> </td>
        <td> <?= $good->price ?> </td>
        <td> <?= $good->description ?> </td>
        <td> <?= $good->category_id ?> </td>
        <td> <?= $good->status ?> </td>
        <td> <?= $good->created_at ?> </td>
        <td> <?= $good->updated_at ?> </td>
    </tr>
        <?php endforeach ?>
    </tbody>
</table>