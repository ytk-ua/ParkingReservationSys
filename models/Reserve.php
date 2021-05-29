<?php
    //モデル（M）
    class User{
        //プロパティ
        public $id; //ID
        public $user_mul; //ユーザーMUL
        public $start_date; //予約開始日
        public $start_time; //予約開始日
        public $end_date; //予約終了日
        public $end_time; //予約終了時間
        public $parking_mul; //駐車場MUL
        public $parking_id; //駐車場ID
        public $room_no; //部屋番号
        public $email; //メールアドレス
        public $tel; //緊急連絡先(電話番号)
        public $remarks; //備考/連絡事項
        public $created_at; //登録時間
        
        //コンストラクタ($nameから$name=''に変更。エラー対応で空文字を与えている)
        public function __construct($user_mul='', $start_date='', $start_time='', $end_date='', $end_time='', $parking_mul=''){
            $this->user_mul = $user_mul;
            $this->start_date = $start_date;
            $this->start_time = $start_time;
            $this->end_date = $end_date;
            $this->end_time = $end_time;
            $this->parking_mul = $parking_mul;
        }
    }