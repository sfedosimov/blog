<span>
    <span class="color-grey">Теги:</span>

    <?php
        $tags = [];
        foreach($model->listTags() as $id => $name) {
            $tags[] = \yii\helpers\Html::a($name, ['index', 'search_type' => 'tag', 'str' => $id], ['class' => 'tags']);
        }
        echo '<span class="label label-tags">' . implode('</span> <span class="label label-tags">', $tags) . '</span>';
    ?>
</span>