<?php
    //モデル（M）
    class Notice{
        //プロパティ
        public $id; //ID
        public $regist_date; //登録日
        public $title; //タイトル
        public $overview; //概要
        public $link_url; //リンクURL
        public $image; //画像ファイルの名前
        public $created_at; //登録時間
        //コンストラクタ
        public function __construct($regist_date='', $title='', $overview='', $link_url='', $image=''){
            $this->regist_date = $regist_date;
            $this->title = $title;
            $this->overview = $overview;
            $this->link_url = $link_url;
            $this->image = $image;
        }
    }