<?php

namespace Oguzcan;

use Google\Cloud\Translate\V2\TranslateClient;

class Translator{

    private TranslateClient $trs;

    private $source, $target;

    public function __construct($googleKey = '', $source = 'tr', $target = array()){
        $this->trs = new TranslateClient([
            'key' => $googleKey
        ]);
        $this->source = $source;
        if(is_string($target)){
            $target = array($target);
        }
        $this->target = $target;
    }

    public function get(){
        $sourcePath = "../resources/lang/{$this->source}";
        $realSourcePath = realpath($sourcePath);
        foreach($this->target as $targetValue){
            $realTargetPath = $this->realTargetPath($realSourcePath, $targetValue);
            $result = array_reverse($this->getDirContents($sourcePath));
            //ana klasörü oluşturur
            if (!file_exists($realTargetPath)){
                mkdir($realTargetPath);
            }
            //base pathleri alır
            foreach($result as $key => $value){
                $valueMainPath = str_replace($realSourcePath, '', $value);
                //klasör ise
                if(is_dir($value)){
                    if (!file_exists($realTargetPath.$valueMainPath)){
                        mkdir($realTargetPath.$valueMainPath);
                    }
                }else{
                    //dosyayı okuyup translate yapacak
                    $getData = require $value;
                    //dosyayı yoksa oluşturur
                    $file = fopen($realTargetPath.$valueMainPath,'w');
                    $writeData = "<?php ".PHP_EOL.PHP_EOL."return [".PHP_EOL;
                    foreach($getData as $dataKey => $dataValue){
                        //Dil çevrimi yapar
                        $result = $this->trs->translate($dataValue, [
                            'source' => $this->source,
                            'target' => $targetValue
                        ]);
                        $writeData .= "    '$dataKey' => '".$result['text']."',".PHP_EOL;
                    }
                    $writeData .= '];';
                    fwrite($file, $writeData);
                    fclose($file);
                }
            }
        }
    }

    private function realTargetPath($realSourcePath, $target, $operator = '\\'){
        $explode = explode($operator, $realSourcePath);
        array_pop($explode);
        array_push($explode, $target);
        return implode($operator, $explode);
    }

    /**
     * Dosyaları getirir
     * @param $dir
     * @param array $results
     * @return array|mixed
     */
    private function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = $path;
            } else if ($value != "." && $value != "..") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }

    /**
     * Ekrana yazdırır
     * @param $data
     */
    private function pire($data, $die = true){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if($die){
            die();
        }
    }



}