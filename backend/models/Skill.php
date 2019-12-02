<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skill".
 *
 * @property int $id
 * @property string $name
 * @property int $score
 * @property int $maxscore
 * @property string $chat_type
 * @property int $user_id
 * @property int $date_create
 * @property int $date_update
 * @property int $status
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['score', 'maxscore', 'user_id', 'date_create', 'date_update', 'status'], 'integer'],
            [['name', 'chat_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'score' => 'Score',
            'maxscore' => 'Maxscore',
            'chat_type' => 'Chat Type',
            'user_id' => 'User ID',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'status' => 'Status',
        ];
    }
}
