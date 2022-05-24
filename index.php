<?php
  // interface iFile
	// {
  //   public function __construct($filePath);
		
	// 	public function getPath(); // путь к файлу
	// 	public function getDir();  // папка файла
	// 	public function getName(); // имя файла
	// 	public function getExt();  // расширение файла
	// 	public function getSize(); // размер файла
		
	// 	public function getText();          // получает текст файла
	// 	public function setText($text); 
  //   // устанавливает текст файла 
	// 	public function appendText($text); 
  //   // добавляет текст в конец файла 
		
	// 	public function copy($copyPath); 
  //   // копирует файл 
	// 	public function delete();           // удаляет файл
	// 	public function rename($newName); 
  //   // переименовывает файл 
	// 	public function replace($newPath); 
  //   // перемещает файл 
	// }
  // class File implements iFile{
  //   private $filePath;
  //   public function __construct($filePath){
  //     $this->filePath = $filePath;
  //   }
  //   public function getPath(){
  //     return $this->filePath;
  //   }
  //   public function getDir(){
  //     return 0;
  //   }
  //     public function getName(){
        
  //     }
  //   }
class Tag {
  private $name;
  private $attrs;
  public function __construct($name,$attrs){
    $this->name = $name;
    $this->attrs = $attrs;
  }
  public function openTag(){
    $name = $this->name;
    $attrsStr = $this->getAttrsStr($this->attrs);
    return "<$name$attrsStr>";
  }
  public function getAttrsStr($attrs){
    foreach($attrs as $name => $value){
      return "$name = " . "$value";
    }
  }
  public function closeTag(){
    $name = $this->name;
    return "</$name>";
  }
}
$header = new Tag('input', ['id' => 'test', 
'class' => 'eee bbb']);
var_dump($header);
  ?>   

