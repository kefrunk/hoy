<?php
class Texto extends CActiveRecord
{
    public $nombre;
	public $valor;
    
	
	public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'Texto';
    }
		
	
 
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'valor' => 'Valor',
            'nombre' => 'Nombre',
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
                                                                'nombre',
																'valor',
                                                                ),
                                                        ),
                                                ));
	
	}

	public function rules()
{
    return array(
        array('nombre, valor', 'required'),
        array('nombre', 'length', 'max'=>128), 
    );
}






	
}
