<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stratetgic".
 *
 * @property int $STRAT_ID
 * @property string $STRAT_NAME
 */
class Stratetgic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stratetgic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STRAT_NAME'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'STRAT_ID' => 'Strat  ID',
            'STRAT_NAME' => 'Strat  Name',
        ];
    }
}
