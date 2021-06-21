<?php
    //モデル（M）
    class Admin{
        //プロパティ
        public $id; //ID
        public $name; //名前
        public $account; //アカウント名
        public $password; //パスワード
        public $email; //メールアドレス
        public $created_at; //登録時間
        //コンストラクタ($nameから$name=''に変更。エラー対応で空文字を与えている)
        public function __construct($name='', $account='', $password='', $email=''){
            $this->name = $name;
            $this->account = $account;
            $this->password = $password;
            $this->email = $email;
        }
    }