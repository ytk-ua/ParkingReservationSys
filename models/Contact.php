<?php
    //モデル（M）
    class Contact{
        //プロパティ
        public $id; //ID
        public $user_id; //ユーザーID
        public $name; //名前
        public $email; //メールアドレス
        public $email_check; //メールアドレス（確認用）
        public $tel; //電話番号
        public $subject; //件名
        public $body; //本文
        public $created_at; //登録時間
        //コンストラクタ($nameから$name=''に変更。エラー対応で空文字を与えている)
        public function __construct($user_id='', $name='', $email='', $tel='', $subject='', $body=''){
            $this->user_id = $user_id;
            $this->name = $name;
            $this->email = $email;
            $this->tel = $tel;
            $this->subject = $subject;
            $this->body = $body;
        }
    }