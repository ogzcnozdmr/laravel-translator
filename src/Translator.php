<?php

namespace Oguzcan;

use Google\Cloud\Translate\V2\TranslateClient;

class Translator
{
    private TranslateClient $trs;

    private $targetDirectoryOperator = '/';//\\
    private $sourcePrefix = '../lang/';

    private $source, $target;

    /**
     * @param string $googleKey
     * @param string $source
     * @param array $target
     */
    public function __construct(string $googleKey = '', string $source = 'tr', array $target = [])
    {
        $this->trs = new TranslateClient([
            'key' => $googleKey
        ]);
        $this->source = $source;
        if (is_string($target)) {
            $target = [$target];
        }
        $this->target = $target;
    }

    /**
     * Translateyi başlatır
     * @return void
     */
    public function get() : void
    {
        $sourcePath = "{$this->sourcePrefix}{$this->source}";
        $realSourcePath = realpath($sourcePath);
        foreach ($this->target as $targetValue) {
            $realTargetPath = $this->realTargetPath($realSourcePath, $targetValue);
            $result = array_reverse($this->getDirContents($sourcePath));
            //ana klasörü oluşturur
            if (!file_exists($realTargetPath)) {
                mkdir($realTargetPath);
            }
            //base pathleri alır
            foreach ($result as $key => $value) {
                $valueMainPath = str_replace($realSourcePath, '', $value);
                //klasör ise
                if (is_dir($value)) {
                    if (!file_exists($realTargetPath . $valueMainPath)) {
                        mkdir($realTargetPath . $valueMainPath);
                    }
                } else {
                    //dosyayı okuyup translate yapacak
                    $getData = require $value;
                    //dosyayı yoksa oluşturur
                    $file = fopen($realTargetPath . $valueMainPath, 'w');
                    $writeData = "<?php " . PHP_EOL . PHP_EOL . "return [" . PHP_EOL;
                    foreach ($getData as $dataKey => $dataValue) {
                        //Dil çevrimi yapar
                        $result = $this->trs->translate($dataValue, [
                            'source' => $this->source,
                            'target' => $targetValue
                        ]);
                        $writeData .= "    '$dataKey' => '" . $result['text'] . "'," . PHP_EOL;
                    }
                    $writeData .= '];';
                    fwrite($file, $writeData);
                    fclose($file);
                }
            }
        }
    }

    /**
     * Path'i oluşturur
     * @param string $realSourcePath
     * @param string $target
     * @return string
     */
    private function realTargetPath(string $realSourcePath, string $target)
    {
        $explode = explode($this->targetDirectoryOperator, $realSourcePath);
        array_pop($explode);
        array_push($explode, $target);
        return implode($this->targetDirectoryOperator, $explode);
    }

    /**
     * Dosyaları getirir
     * @param string $dir
     * @param array $results
     * @return array
     */
    public function getDirContents(string $dir, array &$results = [])
    {
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
     * @param bool die
     */
    private function pire($data, bool $die = true)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if ($die) {
            die();
        }
    }

    /**
     * Get Target Directory Operator
     * @return string
     */
    public function getTargetDirectoryOperator() {
        return $this->targetDirectoryOperator;
    }

    /**
     * Set Target Directory Operator
     * @param $value
     * @return void
     */
    public function setTargetDirectoryOperator($value) {
        $this->targetDirectoryOperator = $value;
    }

    /**
     * Get Source Prefix
     * @return string
     */
    public function getSourcePrefix() {
        return $this->sourcePrefix;
    }

    /**
     * Set Source Prefix
     * @param $value
     * @return void
     */
    public function setSourcePrefix($value) {
        $this->sourcePrefix = $value;
    }
}