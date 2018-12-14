<?php

namespace frontend\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;

/**
 * This is the model class for table "Kmdocs".
 *
 * @property integer $id
 * @property string $ref
 * @property string $title
 * @property string $description
 * @property string $covenant
 * @property string $docs
 * @property string $upload_date
 * @property string $end_date
 * @property string $success_date
 * @property string $create_date
 */
class Kmdocs extends \yii\db\ActiveRecord
{
    const UPLOAD_FOLDER = 'Kmdocss';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Kmdocs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'],'required'],
            [['uploader'], 'string'],
            [['typeteam', 'typekmdocs'], 'integer'],
            [['upload_date', 'end_date', 'success_date', 'create_date','docs'], 'safe'],
            [['ref'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 255],
            [['covenant'],'file','maxFiles'=>1],
            [['docs'],'file','maxFiles'=>10,'skipOnEmpty'=>true]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ref' => 'หลายเลข referent สำหรับอัพโหลดไฟล์ ajax',
            'title' => 'ชื่องาน',
            'typeteam'=>'ประเภททีม/หน่วยงาน',
            'typeteamName'=>'ประเภททีม/หน่วยงาน',
            'typekmdocs'=>'ประเภทเอกสาร',            
            'typekmdocsName'=>'ประเภทเอกสาร',
            'uploader' => 'ผู้อัพโหลด',
            'covenant' => 'หนังสือนำส่ง/เอกสารขอขึ้นทะเบียน',
            'docs' => 'เอกสารประกอบ',
            'upload_date' => 'วันที่อัพโหลด',
            'end_date' => 'วันที่สิ้นสุดสัญญา',
            'success_date' => 'งานเสร็จวันที่',
            'create_date' => 'สร้างวันที่',
        ];
    }

    public static function getUploadPath(){
        return Yii::getAlias('@webroot').'/'.self::UPLOAD_FOLDER.'/';
    }

    public static function getUploadUrl(){
        return Url::base(true).'/'.self::UPLOAD_FOLDER.'/';
    }

    public function listDownloadFiles($type){
     $docs_file = '';
     if(in_array($type, ['docs','covenant'])){         
             $data = $type==='docs'?$this->docs:$this->covenant;
             $files = Json::decode($data);
            if(is_array($files)){
                 $docs_file ='<ul>';
                 foreach ($files as $key => $value) {
                    $docs_file .= '<li>'.Html::a($value,['/kmdocs/download','id'=>$this->id,'file'=>$key,'file_name'=>$value]).'</li>';
                 }
                 $docs_file .='</ul>';
            }
     }
     
     return $docs_file;
    }

    // Inverse Relations  & Virtual attribute

    public function getFullname(){
        return $this->title.$this->name.' '.$this->surname;
    }
    public function getTypekmdocss(){
        return @$this->hasOne(Typekmdocs::className(),['KMDOCS_ID'=>'typekmdocs']);
    }
    public function getTypekmdocsName(){
        return @$this->typekmdocss->KMDOCS_NAME;
    }
    public function getTypeteams(){
        return @$this->hasOne(Typeteam::className(),['TEAM_ID'=>'typeteam']);
    }
    public function getTypeteamName(){
        return @$this->typeteams->TEAM_NAME;
    }


    public function initialPreview($data,$field,$type='file'){
            $initial = [];
            $files = Json::decode($data);
            if(is_array($files)){
                 foreach ($files as $key => $value) {
                    if($type=='file'){
                        $initial[] = "<div class='file-preview-other'><h2><i class='glyphicon glyphicon-file'></i></h2></div>";
                    }elseif($type=='config'){
                        $initial[] = [
                            'caption'=> $value,
                            'width'  => '120px',
                            'url'    => Url::to(['/kmdocs/deletefile','id'=>$this->id,'fileName'=>$key,'field'=>$field]),
                            'key'    => $key
                        ];
                    }
                    else{
                        $initial[] = Html::img(self::getUploadUrl().$this->ref.'/'.$value,['class'=>'file-preview-image', 'alt'=>$model->file_name, 'title'=>$model->file_name]);
                    }
                 }
         }
        return $initial;
    }
}
