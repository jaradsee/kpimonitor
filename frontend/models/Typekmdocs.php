<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "typekmdocs".
 *
 * @property int $KMDOCS_ID
 * @property string $KMDOCS_NAME
 */
class Typekmdocs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'typekmdocs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KMDOCS_NAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KMDOCS_ID' => 'Kmdocs  ID',
            'KMDOCS_NAME' => 'Kmdocs  Name',
        ];
    }
}
