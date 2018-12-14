<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "keykpi".
 *
 * @property int $keyk_id
 * @property int $kpi_id
 * @property string $kpi_name
 * @property string $target
 * @property string $result
 * @property string $successkey
 * @property int $year
 * @property int $qarter
 * @property int $user_key
 * @property int $position
 * @property string $Created_at
 * @property int $Crearted_by
 * @property string $Updated_at
 * @property int $Updated_by
 */
class Keykpi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keykpi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_id', 'year', 'qarter', 'user_key', 'position', 'Crearted_by', 'Updated_by'], 'integer'],
            [['Created_at', 'Updated_at'], 'safe'],
            [['kpi_name', 'target', 'result', 'successkey'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'keyk_id' => 'Keyk ID',
            'kpi_id' => 'Kpi ID',
            'kpi_name' => 'Kpi Name',
            'target' => 'Target',
            'result' => 'Result',
            'successkey' => 'Successkey',
            'year' => 'Year',
            'qarter' => 'Qarter',
            'user_key' => 'User Key',
            'position' => 'Position',
            'Created_at' => 'Created At',
            'Crearted_by' => 'Crearted By',
            'Updated_at' => 'Updated At',
            'Updated_by' => 'Updated By',
        ];
    }
}
