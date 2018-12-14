<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kpi_input".
 *
 * @property int $KPI_ID
 * @property string $KPI_NAME
 * @property string $KPI_TEMPLATE
 * @property int $STRATEGIC
 * @property int $ISSUES
 * @property int $GOAL
 * @property string $TARGET
 * @property string $RESULT
 * @property int $SUCESS
 * @property string $KPI
 * @property string $DATE_RECORD
 * @property string $BUD_YEAR
 * @property string $PROJECT
 * @property string $OWNER
 * @property string $Created_by
 * @property string $Updated_by
 */
class KpiInput extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kpi_input';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STRATEGIC', 'ISSUES', 'GOAL', 'SUCESS'], 'integer'],
            [['DATE_RECORD'], 'safe'],
            [['PROJECT'], 'string'],
            [['KPI_NAME', 'KPI_TEMPLATE', 'KPI'], 'string', 'max' => 500],
            [['TARGET', 'RESULT', 'OWNER', 'Created_by', 'Updated_by'], 'string', 'max' => 255],
            [['BUD_YEAR'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KPI_ID' => 'Kpi  ID',
            'KPI_NAME' => 'Kpi  Name',
            'KPI_TEMPLATE' => 'Kpi  Template',
            'STRATEGIC' => 'Strategic',
            'ISSUES' => 'Issues',
            'GOAL' => 'Goal',
            'TARGET' => 'Target',
            'RESULT' => 'Result',
            'SUCESS' => 'Sucess',
            'KPI' => 'Kpi',
            'DATE_RECORD' => 'Date  Record',
            'BUD_YEAR' => 'Bud  Year',
            'PROJECT' => 'Project',
            'OWNER' => 'Owner',
            'Created_by' => 'Created By',
            'Updated_by' => 'Updated By',
        ];
    }
}
