<?
class PDOConnect extends PDO
{
    // CONFIGURATION - ИЗМЕНЕНИЕ ДАННЫХ ДЛЯ ПОДКЛЮЧЕНИЯ К ОПРЕДЕЛЕННОЙ БД РАЗРЕШЕНО
    private const HOST = 'localhost';
    private const DB = 'podcasts_center';
    private const USER = 'root';
    private const PASSWORD = '';

    // СЛУЖЕБНЫЕ ПОЛЯ ДЛЯ СОПОСТАВЛЕНИЯ ДАННЫХ КОНСТАНТ И ОПЦИЙ ПОДКЛЮЧЕНИЯ К PDO
    protected $DSN;
    protected $OPD;

    // ГЛОБАЛЬНЫЙ ОБЪЕКТ PDO - РАБОТА С БД
    public $PDO;

    // ТО ЧТО СОЗДАСТ ЭКЗЕМПЛЯР КЛАССА (КОНСТРУКТОР)
    public function __construct()
    {
        $this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";";
        $this->OPD = [
            // РЕЖИМ ОТРАБОТКИ ОШИБОК
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // УСТАНОВКА РЕЖИМА ВЫБОРКИ ПО УМОЛЧАНИЮ
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        // УСПЕШНОЕ ПОДКЛЮЧЕНИЕ
        try {
            $this->PDO = new PDO($this->DSN, self::USER, self::PASSWORD, $this->OPD);
        }
        // СБОЙ - ВЫВОД ОШИБКИ
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
