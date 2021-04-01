<?php

namespace app\models;
use yii\web\IdentityInterface;

use Yii;

/**
 * This is the model class for table "tb_admin".
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $username
 * @property string $password
 */
class Admin extends \yii\db\ActiveRecord implements IdentityInterface 
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'email', 'username', 'password'], 'required'],
            [['fullname', 'email', 'username', 'password', 'authkey'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

   
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        // mencari user berdasarkan ID dan yg dicari hanya 1
        $user = Admin::findOne($id);

        if ($user != null) {
            return $user;
        }else{
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
      // mencari user berdasarkan accesToken dan yang dicari hanya 1
      $user = Admin::find()->where(['accessToken' => $token])->one();

      if ($user != null) {
            return $user;
        }else{
            return null;
        }
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
      // mencari user berdasarkan username dan yang dicari haya 1
        $user = Admin::find()->where(['username' => $username])->one();

        if ($user != null) {
            return $user;
        }else{
            return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

}
