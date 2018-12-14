<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kpi".
 *
 * @property int $kpi_id
 * @property string $kpi_name
 * @property string $kpi_template
 * @property int $stratetgic
 * @property int $issues
 * @property int $goal
 * @property string $target
 * @property string $result
 * @property int $sucess
 * @property string $kpi
 * @property string $date_record
 * @property string $bud_year
 * @property string $project
 * @property string $owner
 * @property string $Created_by
 * @property string $Updated_by
 */
class Kpi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kpi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stratetgic', 'issues', 'goal', 'sucess'], 'integer'],
            [['date_record'], 'safe'],
            [['project'], 'string'],
            [['kpi_name', 'kpi_template', 'kpi'], 'string', 'max' => 500],
            [['target', 'result', 'owner', 'Created_by', 'Updated_by'], 'string', 'max' => 255],
            [['bud_year'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kpi_id' => 'Kpi ID',
            'kpi_name' => 'Kpi Name',
            'kpi_template' => 'Kpi Template',
            'stratetgic' => 'Stratetgic',
            'issues' => 'Issues',
            'goal' => 'Goal',
            'target' => 'Target',
            'result' => 'Result',
            'sucess' => 'Sucess',
            'kpi' => 'Kpi',
            'date_record' => 'Date Record',
            'bud_year' => 'Bud Year',
            'project' => 'Project',
            'owner' => 'Owner',
            'Created_by' => 'Created By',
            'Updated_by' => 'Updated By',
        ];
    }
}
