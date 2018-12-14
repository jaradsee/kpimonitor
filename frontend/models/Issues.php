<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "issues".
 *
 * @property int $ISSUES_ID
 * @property string $ISSUES_NAME
 */
class Issues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'issues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ISSUES_NAME'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ISSUES_ID' => 'Issues  ID',
            'ISSUES_NAME' => 'Issues  Name',
        ];
    }
}
