<?php
    //モデル（M）
    class Parking{
        //プロパティ
        public $id; //ID
        public $parking_name; //駐車場名
        public $price; //料金
        public $address; //住所
        public $size; //サイズ
        public $remarks; //備考/連絡事項
        public $created_at; //登録時間
        //コンストラクタ($nameから$name=''に変更。エラー対応で空文字を与えている)
        public function __construct($parking_name='', $price='', $address='', $size='', $remarks=''){
            $this->parking_name = $parking_name;
            $this->price = $price;
            $this->address = $address;
            $this->size = $size;
            $this->remarks = $remarks;
        }
    }