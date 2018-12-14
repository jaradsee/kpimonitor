<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "typedocs".
 *
 * @property int $DOCS_ID
 * @property string $DOCS_NAME
 */
class Typedocs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'typedocs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DOCS_NAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DOCS_ID' => 'Docs  ID',
            'DOCS_NAME' => 'Docs  Name',
        ];
    }
}
