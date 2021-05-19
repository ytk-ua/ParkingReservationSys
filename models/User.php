<?php
    //モデル（M）
    class User{
        //プロパティ
        public $name; //名前
        public $room_no; //部屋番号
        public $email; //メールアドレス
        public $tel; //電話番号
        public $user_id; //ユーザーID
        public $password; //パスワード
        public $created_at; //登録時間
        //コンストラクタ
        public function __construct($name='', $room_no='', $email='', $tel='', $user_id='', $password=''){
            $this->name = $name;
            $this->room_no = $room_no;
            $this->email = $email;
            $this->tel = $tel;
            $this->user_id = $user_id;
            $this->password = $password;
        }
    }