<?php
    //モデル（M）
    class User{
        //プロパティ
        public $id; //ID
        public $name; //名前
        public $user_id; //ユーザーID
        public $email; //メールアドレス
        public $password; //パスワード
        public $created_at; //登録時間
        //コンストラクタ($nameから$name=''に変更。エラー対応で空文字を与えている)
        public function __construct($name='', $user_id='', $email='', $password=''){
            $this->name = $name;
            $this->user_id = $user_id;
            $this->email = $email;
            $this->password = $password;
        }
    }