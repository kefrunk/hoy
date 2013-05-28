<?php
class Imagen extends CActiveRecord
{
    public $image;
	public $description;
    
	
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'Imagen';
    }
		
	
 
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'description' => 'Descripcion',
            'image' => 'Imagen',
        );
    }
	
	
	
	public function search()
	{
                $criteria=new CDbCriteria;

                return new CActiveDataProvider(get_class($this), array(
                                'criteria'=>$criteria,
                                'pagination'=>array(
                                                'pageSize'=>Yii::app()->params['pageSize'],
                                                'pageVar'=>'page',
                                                ),
                                'sort'=>array(
                                                'defaultOrder'=>'id',
                                                'sortVar'=>'sort',
                                                'attributes'=>array(
                                                                'id',
                                                                'image',
																'description',
                                                                ),
                                                        ),
                                                ));
	
	}
	
 
    public function rules()
    {
        return array(
            array('image', 'file', 'types'=>'jpg, gif, png, jpeg'),
			
        );
    }
	
	
	public function behaviors()
    {
        return array(
            'galleria' => array(
                'class' => 'application.extensions.galleria.GalleriaBehavior',
                'image' => 'image', //required, will be image name of src
                'imagePrefix' => 'id',//optional, not required
                'description' => 'description',//optional, not required
            ),
        );
    }
	
	
}
