<?php


class File
{
    public $fp;
    public $file;

    public function __construct($file) // имя файла
    {
        $this->file = $file;
        if(!is_writable($this->file)){
            echo "Файл {$this->file} недоступен для записи";
            exit;
        }
        $this->fp = fopen($this->file, 'a'); // открыть файл файл только для записи
    }

    public function __destruct()
    {
        fclose($this->fp);  // закрыть файл
    }

    public function write ($text) { // содержимое файла
        if(fwrite($this->fp, $text . PHP_EOL) === FALSE) { // записать строку c '\n'
            echo "Не возможно записать файл {$this->file}";
            exit;
        }
    }

}