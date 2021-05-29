<?php
    //モデル（M）
    class Parking{
        //プロパティ
        public $id; //ID
        public $parking_id; //駐車場No
        public $adress; //場所
        public $size; //サイズ
        public $price; //料金
        public $remarks; //備考/連絡事項
        public $created_at; //登録時間
        //コンストラクタ($nameから$name=''に変更。エラー対応で空文字を与えている)
        public function __construct($parking_id='', $adress='', $size='', $price='', $remarks=''){
            $this->parking_id = $parking_id;
            $this->adress = $adress;
            $this->size = $size;
            $this->price = $price;
            $this->remarks = $remarks;
        }
    }