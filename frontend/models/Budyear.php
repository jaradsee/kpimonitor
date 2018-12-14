<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "budyear".
 *
 * @property int $BUDYEAR_ID
 * @property string $BUDYEAR_NAME
 */
class Budyear extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'budyear';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BUDYEAR_NAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BUDYEAR_ID' => 'Budyear  ID',
            'BUDYEAR_NAME' => 'Budyear  Name',
        ];
    }
}
