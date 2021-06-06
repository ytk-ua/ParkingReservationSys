<?php
    //モデル（M）
    class User{
        //プロパティ
        public $id; //ID
        public $name; //名前
        public $room_no; //部屋番号
        public $account; //アカウント名
        public $password; //パスワード
        public $email; //メールアドレス
        public $tel; //電話番号
        public $created_at; //登録時間
        //コンストラクタ($nameから$name=''に変更。エラー対応で空文字を与えている)
        public function __construct($name='', $room_no='', $account='', $password='', $email='', $tel=''){
            $this->name = $name;
            $this->room_no = $room_no;
            $this->account = $account;
            $this->password = $password;
            $this->email = $email;
            $this->tel = $tel;
        }
    }