//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Cách thêm 1 repository đã được clone về vào Eclipse

Click chuột phải , chọn import -> Git -> Project from Git -> Next 
-> Existing local repository -> Add -> Brower... (Tìm tới folder git clone về) 
-> Finish -> Next -> Import as general project -> Next

↑

Nếu làm như trên thì từ giờ sẽ có thể trực tiếp quản lý bằng eclipse mà không cần 
phải thông qua command hay git bash

↑

Chọn File muốn commit và click chuột phải -> Team -> Commit -> Nhập messages 
-> Commit and Push -> OK
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

DAO (Data Access Objects – Các đối tượng truy xuất dữ liệu) là tập hợp bao gồm 
lớp các đối tượng có thể dùng để lập trình truy cập và xử lý dữ liệu trong các hệ CSDL.

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Fuelphp

B1: Tạo 1 projectPHP và paste toàn bộ code của fuelphp vào đó
B2: Thực thi việc test
Tên project: fulephp_test
URL: http://localhost/fuelphp_test/public/
Thực tế của đường dẫn trên:
http://localhost/fuelphp_test/public/index.php/welcome/index

FuelPHP入門 : http://qiita.com/yumura_shiho/items
FuelPHP開発入門_01: http://qiita.com/yumura_shiho/items/4f669ca10438342fb830
FuelPHP開発入門_02: http://qiita.com/yumura_shiho/items/eb07f130270cee27717c
FuelPHP開発入門_03: http://qiita.com/yumura_shiho/items/6650054e9f2911724e27
FuelPHP開発入門_04: http://qiita.com/yumura_shiho/items/397fcfb3b62b545494d8
FuelPHP開発入門_05: http://qiita.com/yumura_shiho/items/3999e66da8669ed5e0c2
FuelPHP開発入門_06: http://qiita.com/yumura_shiho/items/fd1b90168e4f27cd620a
FuelPHP開発入門_07: http://qiita.com/yumura_shiho/items/9fe0c09334a2870c107c
FuelPHP開発入門_08: http://qiita.com/yumura_shiho/items/1f505c4f9267dbf51974
FuelPHP開発入門_09: http://qiita.com/yumura_shiho/items/4b94a377e9f2cc3a0ca1

ざっくりFuelPHPの使い方
http://qiita.com/kazukichi/items/2a6e242091c5f485b976

FuelPHP フレームワーク超入門
B1: https://cloudear.jp/blog/?p=354
B2: https://cloudear.jp/blog/?p=400


http://blog.bot.vc/2013/01/fuelphp/

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Bài 1: Cấu trúc của 1 project fuelphp
Dưới đây là mô tả các tập tin được đề xuất trong fuelphp
+ fuel/: Thư mục thực thi mã PHP
+ public/ : Thưc mục có thể truy cập từ trình duyệt (images , js, css,..)
+ oil(File): Đây là file thực thi dòng lệnh command cho fuelphp 

Trong thư mục fuel/ thì ta cần quan tâm đến 3 thư mục quan trọng: 
+ + fuel/app/: Nơi thiết lập ứng dụng của mình (config, controller, model, view)
+ + fuel/core/:: Trung tâm mã nguồn của fuelphp, chứa các file core
+ + fuel/package/: Các thành phần mở rộng của Core
Đường dẫn đến 3 thư mục này đã được thiết lập trong public/index.php, nên có thể
dễ dàng thay đổi

Cuối cùng là phần quan trọng nhất, nơi để chúng ta có thể phát triển ứng dụng
với fuelphp
+ |―fuel/app/: Nơi thiết lập ứng dụng của mình 
+ |―――|―config: Nơi thiết lập cấu hình, chứa các tập tin config và routing
+ |―――|―classes: Nơi chứa các lớp cotroller , model , help , logic
+ |―――|―――|―controller: Nơi chứa các file điều khiển
+ |―――|―――|―model: Các model được xây dựng bởi ORM
+ |―――|―views: Nơi chứa view, template để hiển thị

Ngoài ra còn 2 số thư mục khác thì hiện tại chúng ta chưa cần quan tâm đến chúng
+ |―fuel/app
+ |―――|―config
+ |―――|―cache
+ |―――|―lang
+ |―――|―modules

Trình tự thực thi trong fuelphp khi tạo ra 1 ứng dụng
Khi người dùng truy cập đến với đường dẫn:
http://localhost/fuelphp17/public/
Như vậy nó đã được gọi đến public/index.php
Trong file này, nó đã khởi tạo đường dẫn tới các thư mục chính nằm trong fuel/
+ APPATH: fuel/app
+ PKGPATH: fuel/package
+ COREPATH: fuel/core
Tiếp theo nó khởi tạo cho ứng dụng bằng cách nạp tập tin fuel/app/bootstrap

Trình tự khởi tạo ứng dụng
+ Nạp lớp Autoloader trong COREPATH/bootstrap.php
+ Cấu hình các autoloader
+ Xác định môi trường (thử nghiệm, phát triển, tiền sản xuất,..)
Fuel::$env = (isset($_SERVER['FUEL_ENV']) ? $_SERVER['FUEL_ENV'] : Fuel::DEVELOPMENT);
↑
Môi trường phát triển của project này là DEVELOPMENT
+ Cuối cùng Fuel::init(config.php) sẽ khởi tạo ứng dụng theo môi trường và cấu hình 
file config.
+ + Trong file config nó sẽ thực hiện
+ + + Cấu hình profiling và bộ nhớ cache
+ + + Thiết lập múi giờ, mã hóa và địa phương
+ + + Cấu hình URL cơ sở
+ + + Dữ liệu lọc GPC (Get, Post và Cookie)
+ + + Gói đang hoạt động, các class , cấu hình và ngôn ngữ luôn tải
+ + + Thiết lập tìm đường routes

Xử lý thực thi và truy vấn
+ Dựa vào URL tìm đến controller tương ứng theo cách routes đã xác định
+ Tạo ra instance của controller
+ Gọi tới các method của mình trước
+ Thực thi và trả về response
+ Gọi tới phương thức sau
(Các bước này có thể lặp lại nhiều lần tùy theo truy vấn)


Một số cấu hình chung sử dụng trong file config.php
base_url: url cơ sở cho ứng dụng của bạn (được sử dụng để tạo ra các url)
profiling: Xác nhận có kích hoạt profiler hay không
caching: kích hoạt hay vô hiệu hóa bộ nhớ cache
errors.notice: Hiển thị error
language: Thiết lập ngôn ngữ chính của ứng dụng của bạn
language_fallback: Ngôn ngữ dự phòng
locale: Thiết lập địa phương cho PHP
encoding: Mã hóa cho ứng dụng
dafault_timezone: Thiết lập thời gian timezone cho ứng dụng
module_path: Mảng chứa các thư mục module

Tuy nhiên các cài đặt trong file config.php sẽ tùy thuộc vào môi trường phát triển
mà thay đổi.

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Bài 2: Tạo ứng dụng đầu tiên với fuelphp
Tạo 1 blog với fuelphp và cơ sở dữ liệu MySQL

B1: Kích hoạt gói auth và gói orm
Ta vào thư mục sau:
fuel/app/config/config.php
/**********************************/
/* Always Load                    */
/**********************************/
'always_load'  => array(
	'packages'  => array(
		'auth',	// Thêm vào
		'orm', 	// Bỏ comment ở phía trước
),

Giải thích 1 chút về 2 gói này:
ORM(Object Relational Mapping): Đây là 1 kỹ thuật chuyển đổi dữ liệu giữa các hệ thống
khác không phải là mô hình hướng đối tượng sang các đối tượng trong ngôn ngữ lập trình 
hướng đối tượng . Vì thế gói ORM ở đây là 1 gói giúp cho ta thực hiện cơ chế cho phép
người lập trình viên thao tác với database hoàn toàn tự nhiên thông qua các đối tượng,
mà không cần quan tâm đến loại database đang sử dụng
Auth(Authentication Package): Gói ứng dụng xác thực quyền truy cập


B2: Nhân tiện thì ta sẽ thay đổi 1 chút về biến mảng "whitelisted_classes" để có thể
truyền đối tượng validation tới view
'whitelisted_classes' => array(
	'Fuel\\Core\\Response',
	'Fuel\\Core\\View',
	'Fuel\\Core\\ViewModel',
	'Fuel\Core\Validation',	// Thêm vào
	'Closure',
),

B3: Thiết lập timezon cho ứng dụng (nên làm ngay khi config vì nếu không thì sau khi 
build sẽ báo lỗi)

'default_timezone'   => 'Asia/Tokyo', // Bỏ dấu comment và thêm vào timezone
Để lựa chọn timezone có thể tham khảo tại trang sau:
+ http://www.php.net/manual/en/timezones.php

+B4: Tạo DB
Sử dụng phpmyadmin hay php workbench đều ok
Nếu sử dụng workbench thì trước hết phải start mysql bằng command line
theo lệnh:
#mysql/bin>mysqld --standalone --comsole
Sau đó connect db localhost và create db có tên là: fuel_blog
Tạo 1 bảng messages như sau

CREATE TABLE messages (
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	name VARCHAR(255) NOT NULL ,
	message TEXT(1000) NOT NULL ,
	created_at INT(11) NOT NULL ,
	updated_at INT(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

+ B5: Thiết lập kết nối đến MySQL
Chú ý là ta sẽ ko động đến file db.php trong thư mục fuel/app/config/db.php
Do hiện tại đang phát triển trên môi trường development nên ta sẽ thiết lập
config với DB trong đó.
fuel/app/config/development/db.php
<?php
//...
return array(
  'default' => array(
    'connection' => array(
      'dsn' => 'mysql:host=localhost;dbname=fuel_blog', // Tên db: fuel_blog
      'username' => 'root', // Mặc định trong fuel là root
      'password' => 'cqv51191', // pass mình đặt trong mysql ở cty là : cqv51191
    ),
  ),
);


B5: Sử dụng scaffold để tạo code tự động trong fuelphp

#> php oil generate scaffold messages name:string message:text

(Chú ý là ta sẽ ko thể remove bằng lệnh những file đã tạo ra nên nếu ko chắc chắn thì ko nên 
sử dụng scaffold để tạo. Code tự động sinh đều được coi là mã bẩn vì dư thừa nhiều)
LOG:
C:\xampp\htdocs\fuelphp17>php oil generate scaffold messages name:string message:text
	Creating migration: C:\xampp\htdocs\fuelphp17\fuel\app\migrations/001_create_messages.php
	Creating model: C:\xampp\htdocs\fuelphp17\fuel\app\classes/model/message.php
	Creating controller: C:\xampp\htdocs\fuelphp17\fuel\app\classes/controller/messages.php
	Creating view: C:\xampp\htdocs\fuelphp17\fuel\app\views/messages/index.php
	Creating view: C:\xampp\htdocs\fuelphp17\fuel\app\views/messages/view.php
	Creating view: C:\xampp\htdocs\fuelphp17\fuel\app\views/messages/create.php
	Creating view: C:\xampp\htdocs\fuelphp17\fuel\app\views/messages/edit.php
	Creating view: C:\xampp\htdocs\fuelphp17\fuel\app\views/messages/_form.php
	Creating view: C:\xampp\htdocs\fuelphp17\fuel\app\views/template.php
C:\xampp\htdocs\fuelphp17>

Giờ ta sẽ lần lượt đi xem những file nào đã được tạo ra nhé.
+ migrations: Nó như 1 chương trình điều khiển các phiên bản cho csdl của bạn


B6: Thực thi

#> php oil refine migrate

LOG:

Uncaught exception Fuel\Core\Database_Exception: could not find driver
Callstack:
#0 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\database\pdo\connection.php(170): Fuel\Core\Database_PDO_Connection->connect()
#1 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\database\query.php(263): Fuel\Core\Database_PDO_Connection->query(1, 'SELECT * FROM `...', false)
#2 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\dbutil.php(587): Fuel\Core\Database_Query->execute(NULL)
#3 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\migrate.php(590): Fuel\Core\DBUtil::table_exists('migration')
#4 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\migrate.php(74): Fuel\Core\Migrate::table_version_check()
#5 [internal function]: Fuel\Core\Migrate::_init()
#6 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\autoloader.php(364): call_user_func('Migrate::_init')
#7 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\autoloader.php(247): Fuel\Core\Autoloader::init_class('Migrate')
#8 [internal function]: Fuel\Core\Autoloader::load('Migrate')
#9 C:\xampp\htdocs\fuelphp_test\fuel\core\tasks\migrate.php(206): spl_autoload_call('Migrate')
#10 C:\xampp\htdocs\fuelphp_test\fuel\core\tasks\migrate.php(151): Fuel\Tasks\Migrate::_run('default', 'app')
#11 C:\xampp\htdocs\fuelphp_test\fuel\core\base.php(428): Fuel\Tasks\Migrate->__call('run', Array)
#12 C:\xampp\htdocs\fuelphp_test\fuel\core\base.php(428): Fuel\Tasks\Migrate->run()
#13 C:\xampp\htdocs\fuelphp_test\fuel\packages\oil\classes\refine.php(106): call_fuel_func_array(Array, Array)
#14 [internal function]: Oil\Refine::run('migrate', Array)
#15 C:\xampp\htdocs\fuelphp_test\fuel\packages\oil\classes\command.php(125): call_user_func('Oil\\Refine::run', 'migrate', Array)
#16 C:\xampp\htdocs\fuelphp_test\oil(57): Oil\Command::init(Array)
#17 {main}

Previous exception:
Uncaught exception PDOException: could not find driver
Callstack:
#0 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\database\pdo\connection.php(98): PDO->__construct('mysql:host=loca...', 'root', 'root', Array)
#1 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\database\pdo\connection.php(170): Fuel\Core\Database_PDO_Connection->connect()
#2 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\database\query.php(263): Fuel\Core\Database_PDO_Connection->query(1, 'SELECT * FROM `...', false)
#3 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\dbutil.php(587): Fuel\Core\Database_Query->execute(NULL)
#4 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\migrate.php(590): Fuel\Core\DBUtil::table_exists('migration')
#5 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\migrate.php(74): Fuel\Core\Migrate::table_version_check()
#6 [internal function]: Fuel\Core\Migrate::_init()
#7 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\autoloader.php(364): call_user_func('Migrate::_init')
#8 C:\xampp\htdocs\fuelphp_test\fuel\core\classes\autoloader.php(247): Fuel\Core\Autoloader::init_class('Migrate')
#9 [internal function]: Fuel\Core\Autoloader::load('Migrate')
#10 C:\xampp\htdocs\fuelphp_test\fuel\core\tasks\migrate.php(206): spl_autoload_call('Migrate')
#11 C:\xampp\htdocs\fuelphp_test\fuel\core\tasks\migrate.php(151): Fuel\Tasks\Migrate::_run('default', 'app')
#12 C:\xampp\htdocs\fuelphp_test\fuel\core\base.php(428): Fuel\Tasks\Migrate->__call('run', Array)
#13 C:\xampp\htdocs\fuelphp_test\fuel\core\base.php(428): Fuel\Tasks\Migrate->run()
#14 C:\xampp\htdocs\fuelphp_test\fuel\packages\oil\classes\refine.php(106): call_fuel_func_array(Array, Array)
#15 [internal function]: Oil\Refine::run('migrate', Array)
#16 C:\xampp\htdocs\fuelphp_test\fuel\packages\oil\classes\command.php(125): call_user_func('Oil\\Refine::run', 'migrate', Array)
#17 C:\xampp\htdocs\fuelphp_test\oil(57): Oil\Command::init(Array)
#18 {main}


Tại sao lại lỗi ?
 + Tạo dữ liệu cho CSDL trên Workbench
 
CREATE SCHEMA `fuel_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

CREATE TABLE `fuel_blog`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `username` VARCHAR(45) NOT NULL COMMENT '',
  `password` VARCHAR(45) NOT NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `age` INT(11) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');
  
  INSERT INTO `fuel_blog`.`users` (`id`, `username`, `password`, `email`) VALUES ('1', 'vien', 'vien123', 'vienbk91@gmail.com');
INSERT INTO `fuel_blog`.`users` (`id`, `username`, `password`, `email`) VALUES ('2', 'long', 'long123', 'longbk91@gmailcom');

  
 + Kiểm tra connect DB (tham khảo: http://it-developer.info/?p=40)
Trong file welcome.php ta chỉnh sửa mã nguồn của action index,
thay vì gọi tới view thì ta sẽ xuất ra mảng kết quả thông qua query tới csdl
public function action_index()
	{
		$data = array();
		$data['name'] = "Chu Quang Vien";
		
		$viewdata = null;
		$query = DB::select()->from('messages');
		$viewdata = $query->execute();
		var_dump($viewdata);
		die();
		//return Response::forge(View::forge('welcome/index', $data));
	}
 
 + Sửa display cho hàm var_dump
Vào trong php\php.ini và bỏ ";" tại các dòng như dưới đây:
 [XDebug]
zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
;xdebug.profiler_append = 0
;xdebug.profiler_enable = 1
;xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "C:\xampp\tmp"
;xdebug.profiler_output_name = "cachegrind.out.%t-%s"
;xdebug.remote_enable = 0
;xdebug.remote_handler = "dbgp"
;xdebug.remote_host = "127.0.0.1"
xdebug.trace_output_dir = "C:\xampp\tmp"

 + Kết quả: http://localhost/fuelphp17/public/

object(Fuel\Core\Database_Result_Cached)[23]
  protected '_query' => string 'SELECT * FROM `users`' (length=21)
  protected '_result' => 
    array (size=2)
      0 => 
        array (size=5)
          'id' => string '1' (length=1)
          'username' => string 'vien' (length=4)
          'password' => string 'vien123' (length=7)
          'email' => string 'vienbk91@gmail.com' (length=18)
          'age' => null
      1 => 
        array (size=5)
          'id' => string '2' (length=1)
          'username' => string 'long' (length=4)
          'password' => string 'long123' (length=7)
          'email' => string 'longbk91@gmailcom' (length=17)
          'age' => null
  protected '_total_rows' => int 2
  protected '_current_row' => int 0
  protected '_as_object' => boolean false

Như vậy rõ ràng là đã kết nối được đến CSDL và query được.

