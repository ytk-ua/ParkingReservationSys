<?php
    //外部ファイルの読み込み
    require_once 'models/Notice.php';
    require_once 'daos/DAO.php';
    //DAO(Database Access Object)
    class NoticeDAO extends DAO{
        //データベースから全お知らせ情報を登録日の降順（新着順に並べる）で取得するメソッド
        public static function get_all_notices(){
       // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行
                $stmt = $pdo->query('SELECT * FROM notices order by regist_date desc');
                // Fetch ModeをUserクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Notice');
                // SELECT文の結果を Userクラスのインスタンス配列に格納。Fetch->抜き出せの意。
                $notices = $stmt->fetchAll();
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成したお知らせ情報一覧、はいあげる
            return $notices;     
        }
       //データーベースに新しいお知らせ情報を登録するメソッド
        public static function insert($notice){
            // 例外処理
            try{
                // データベースに接続して万能の神様誕生
                $pdo = self::get_connection();
                // 具体的な値はあいまいにしたまま INSERT文の実行準備
                $stmt = $pdo->prepare('INSERT INTO notices(regist_date, title, overview, link_url, image) VALUES(:regist_date, :title, :overview, :link_url, :image)');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':regist_date', $notice->regist_date, PDO::PARAM_STR);
                $stmt->bindValue(':title', $notice->title, PDO::PARAM_STR);
                $stmt->bindValue(':overview', $notice->overview, PDO::PARAM_STR);
                $stmt->bindValue(':link_url', $notice->link_url, PDO::PARAM_STR);
                $stmt->bindValue(':image', $notice->image, PDO::PARAM_STR);

                // INSERT文本番実行
                $stmt->execute();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
        }
        
        //id番目のお知らせ情報を取得するメソッド
        public static function find($id){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行準備
                $stmt = $pdo->prepare('SELECT * FROM notices WHERE id=:id');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                // SELECT文本番実行
                $stmt->execute();                
                
                // Fetch ModeをUserクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Notice');
                // SELECT文の結果を Userクラスのインスタンスに格納。Fetch->抜き出せの意。
                $notice = $stmt->fetch();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成したお知らせ情報、はいあげる
            return $notice;             
        }
        
        //既存の$noticeのお知らせ情報を更新
        public static function update($notice){
            // 例外処理
            try{
                // データベースに接続して万能の神様誕生
                $pdo = self::get_connection();
                // 具体的な値はあいまいにしたまま UPDATE文の実行準備
                $stmt = $pdo->prepare('UPDATE notices SET regist_date=:regist_date, title=:title, overview=:overview, link_url=:link_url, image=:image WHERE id=:id');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':regist_date', $notice->regist_date, PDO::PARAM_STR);
                $stmt->bindValue(':title', $notice->title, PDO::PARAM_STR);
                $stmt->bindValue(':overview', $notice->overview, PDO::PARAM_STR);
                $stmt->bindValue(':link_url', $notice->link_url, PDO::PARAM_STR);
                $stmt->bindValue(':image', $notice->image, PDO::PARAM_STR);
                $stmt->bindValue(':id', $notice->id, PDO::PARAM_INT);
                // UPDATE文本番実行
                $stmt->execute();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
        }
        
        //id番目のお知らせ情報を削除
        public static function delete($id){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // DELETE文実行準備
                $stmt = $pdo->prepare('DELETE FROM notices WHERE id=:id');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                // DELETE文本番実行
                $stmt->execute();                
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
        }
        
    }