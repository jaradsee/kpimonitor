<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "quarter".
 *
 * @property int $QUARTER_ID
 * @property string $FISCAL_YEAR
 * @property string $QUARTER_NAME
 */
class Quarter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quarter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FISCAL_YEAR', 'QUARTER_NAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'QUARTER_ID' => 'Quarter  ID',
            'FISCAL_YEAR' => 'Fiscal  Year',
            'QUARTER_NAME' => 'Quarter  Name',
        ];
    }
}
