<?php
    //外部ファイルの読み込み
    require_once 'models/Contact.php';
    require_once 'daos/DAO.php';
    //DAO(Database Access Object)
    class ContactDAO extends DAO{
        //データベースから全問い合わせ情報をidの降順で取得するメソッド
        public static function get_all_contacts(){
       // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行
                $stmt = $pdo->query('SELECT * FROM contacts order by id desc');
                // Fetch ModeをUserクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Contact');
                // SELECT文の結果を Userクラスのインスタンス配列に格納。Fetch->抜き出せの意。
                $contacts = $stmt->fetchAll();
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成した問い合わせ一覧、はいあげる
            return $contacts;     
        }

       //データーベースに新しい問い合わせを登録するメソッド
        public static function insert($contact){
            // 例外処理
            try{
                // データベースに接続して万能の神様誕生
                $pdo = self::get_connection();
                // 具体的な値はあいまいにしたまま INSERT文の実行準備
                $stmt = $pdo->prepare('INSERT INTO contacts(user_id, name, email, tel, subject, body) VALUES(:user_id, :name, :email, :tel, :subject, :body)');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':user_id', $contact->user_id, PDO::PARAM_INT);
                $stmt->bindValue(':name', $contact->name, PDO::PARAM_STR);
                $stmt->bindValue(':email', $contact->email, PDO::PARAM_STR);
                $stmt->bindValue(':tel', $contact->tel, PDO::PARAM_STR);
                $stmt->bindValue(':subject', $contact->subject, PDO::PARAM_STR);
                $stmt->bindValue(':body', $contact->body, PDO::PARAM_STR);
                
                // INSERT文本番実行
                $stmt->execute();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
        }
        
        //id番目の問い合わせを取得するメソッド
        public static function find($id){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行準備
                $stmt = $pdo->prepare('SELECT * FROM contacts WHERE id=:id');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                // SELECT文本番実行
                $stmt->execute();                
                
                // Fetch ModeをUserクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Contact');
                // SELECT文の結果を Userクラスのインスタンスに格納。Fetch->抜き出せの意。
                $contact = $stmt->fetch();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成した問い合わせ、はいあげる
            return $contact;             
        }
        
        //id番目の問い合わせを削除
        public static function delete($id){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // DELETE文実行準備
                $stmt = $pdo->prepare('DELETE FROM contacts WHERE id=:id');
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