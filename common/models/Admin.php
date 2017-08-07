<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property string $id
 * @property string $username
 * @property string $nickname
 * @property string $password
 * @property string $email
 * @property string $profile
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nickname', 'password', 'email', 'profile'], 'required'],
            [['profile'], 'string'],
            [['username', 'nickname', 'password'], 'string', 'max' => 128],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nickname' => 'Nickname',
            'password' => 'Password',
            'email' => 'Email',
            'profile' => 'Profile',
        ];
    }
}
