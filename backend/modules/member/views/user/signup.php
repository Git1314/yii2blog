<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\user */

$this->title = '新建会员';
$this->params['breadcrumbs'][] = ['label' => '会员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
