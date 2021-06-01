<?php
    //外部ファイルの読み込み
    require_once 'models/Reserve.php';
    //DAO(Database Access Object)
    class ReserveDAO{
        //データベースに接続するメソッド
        private static function get_connection(){
        // 接続オプション設定
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            // データベース(rsv_sys)を操作する万能の神様誕生(PDO:PHP Database Object)
            $pdo = new PDO('mysql:host=localhost;dbname=rsv_sys', 'root', '', $options);
            // 神様、はいあげる
            return $pdo;
        }
        //データベースを切断するメソッド
        private static function close_connection($pdo, $stmt){
            $pdo = null;
            $stmt = null;
        }
        //データベースから全予約登録情報を取得するメソッド
        public static function get_all_reserves(){
       // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行
                $stmt = $pdo->query('SELECT * FROM reserves');
                // Fetch ModeをReserveクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Reserve');
                // SELECT文の結果を Reserveクラスのインスタンス配列に格納。Fetch->抜き出せの意。
                $reserves = $stmt->fetchAll();
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成したユーザー一覧、はいあげる
            return $reserves;     
        }
       //データーベースに新しい予約情報を登録するメソッド
        public static function insert($reserve){
            // 例外処理
            try{
                // データベースに接続して万能の神様誕生
                $pdo = self::get_connection();
                // 具体的な値はあいまいにしたまま INSERT文の実行準備
                $stmt = $pdo->prepare('INSERT INTO reserves(user_mul, start_date, start_time, end_date, end_time, parking_mul, parking_id, room_no, email, tel, remarks) VALUES(:user_mul, :start_date, :start_time, :end_date, :end_time, :parking_mul, :parking_id, :room_no, :email, :tel, :remarks)');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':user_mul', $reserve->user_mul, PDO::PARAM_INT);
                $stmt->bindValue(':start_date', $reserve->start_date, PDO::PARAM_STR);
                $stmt->bindValue(':start_time', $reserve->start_time, PDO::PARAM_STR);
                $stmt->bindValue(':end_date', $reserve->end_date, PDO::PARAM_STR);
                $stmt->bindValue(':end_time', $reserve->end_time, PDO::PARAM_STR);
                $stmt->bindValue(':parking_mul', $reserve->parking_mul, PDO::PARAM_INT);
                $stmt->bindValue(':parking_id', $reserve->parking_id, PDO::PARAM_STR);
                $stmt->bindValue(':room_no', $reserve->room_no, PDO::PARAM_INT);
                $stmt->bindValue(':email', $reserve->email, PDO::PARAM_STR);
                $stmt->bindValue(':tel', $reserve->tel, PDO::PARAM_INT);
                $stmt->bindValue(':remarks', $reserve->remarks, PDO::PARAM_STR);

                // INSERT文本番実行
                $stmt->execute();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
        }
        
        //id番目の予約登録情報を取得するメソッド
        public static function find($id){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行準備
                $stmt = $pdo->prepare('SELECT * FROM reserves WHERE id=:id');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                // SELECT文本番実行
                $stmt->execute();                
                
                // Fetch ModeをResereveクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Reserve');
                // SELECT文の結果を Userクラスのインスタンスに格納。Fetch->抜き出せの意。
                $reserve = $stmt->fetch();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成したユーザー、はいあげる
            return $reserve;             
        }

        //user_mul番目のユーザーの予約登録情報を全て取得するメソッド
        public static function find2($user_mul){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行準備
                $stmt = $pdo->prepare('SELECT * FROM reserves WHERE user_mul=:user_mul');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':user_mul', $user_mul, PDO::PARAM_INT);
                // SELECT文本番実行
                $stmt->execute();                
                
                // Fetch ModeをResereveクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Reserve');
                // SELECT文の結果を Reserveクラスのインスタンスに格納。Fetch->抜き出せの意。
                $reserves = $stmt->fetchAll();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成した予約情報、はいあげる
            return $reserves;             
        }
        
        //$id番目のユーザー情報を更新
        public static function update($user, $id){
            // 例外処理
            try{
                // データベースに接続して万能の神様誕生
                $pdo = self::get_connection();
                // 具体的な値はあいまいにしたまま UPDATE文の実行準備
                $stmt = $pdo->prepare('UPDATE users SET name=:name, user_id=:user_id, email=:email, password=:password WHERE id=:id');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':name', $user->name, PDO::PARAM_STR);
                $stmt->bindValue(':user_id', $user->user_id, PDO::PARAM_STR);
                $stmt->bindValue(':email', $user->email, PDO::PARAM_STR);
                $stmt->bindValue(':password', $user->password, PDO::PARAM_STR);
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                
                // UPDATE文本番実行
                $stmt->execute();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
        }
        
        //id番目のユーザーを削除
        public static function delete($id){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // DELETE文実行準備
                $stmt = $pdo->prepare('DELETE FROM users WHERE id=:id');
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
                //データベースからキーワード検索するメソッド
        public static function search($keyword){
       // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行準備
                $stmt = $pdo->prepare('SELECT * FROM users WHERE name LIKE :name');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':name', '%' . $keyword . '%', PDO::PARAM_STR);
                // SELECT文本番実行
                $stmt->execute();                
                // Fetch ModeをUserクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
                // SELECT文の結果を Userクラスのインスタンス配列に格納。Fetch->抜き出せの意。
                $users = $stmt->fetchAll();
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成したユーザー一覧、はいあげる
            return $users;     
        }
        
        //user_id, passwordをもらってその人をDBから探し出す
        public static function check($user_id, $password){
          // 例外処理:tryブロック。try chatch最後はcatchで終わる。
            try{
                // データベースに接続して万能の神様誕生。
                $pdo = self::get_connection();
                // SELECT文実行準備
                $stmt = $pdo->prepare('SELECT * FROM users WHERE user_id=:user_id AND password=:password');
                // バインド処理（あいまいだった値を具体的な値で穴埋めする）
                $stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
                $stmt->bindValue(':password', $password, PDO::PARAM_STR);
                // SELECT文本番実行
                $stmt->execute();                
                
                // Fetch ModeをUserクラスに設定。マッピング。PHPで使いやすい様に書き換える。
                $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
                // SELECT文の結果を Userクラスのインスタンスに格納。Fetch->抜き出せの意。
                $user = $stmt->fetch();
                
            }catch(PDOException $e){
            }finally{
                // 後処理
                self::close_connection($pdo, $stmt);
            }
            // 完成したユーザー、はいあげる
            return $user;             
        }
        
    }