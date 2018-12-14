<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "typeteam".
 *
 * @property int $TEAM_ID
 * @property string $TEAM_NAME ประเภททีม/หน่วยงาน
 */
class Typeteam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'typeteam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TEAM_NAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TEAM_ID' => 'Team  ID',
            'TEAM_NAME' => 'Team  Name',
        ];
    }
}
