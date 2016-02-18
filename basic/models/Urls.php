<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "urls".
 *
 * @property integer $id
 * @property string $original_url
 * @property integer $red_count
 */
class Urls extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urls';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['original_url', 'red_count'], 'required'],
            [['red_count'], 'integer'],
            [['original_url'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'original_url' => 'Original Url',
            'red_count' => 'Red Count',
        ];
    }
}
