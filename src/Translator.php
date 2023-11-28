<?php

namespace Oguzcan;

use Google\Cloud\Translate\V2\TranslateClient;

class Translator
{
    private TranslateClient $trs;

    private string $targetDirectoryOperator = '/';//\\
    private string $sourcePrefix = '/';

    private string $jsSourcePath = '/';
    private bool $jsLanguageCreator = false;

    private array $translate = [];

    private string $source;
    private array $target;

    private string $sourcePath;
    private string $realSourcePath;

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
        $this->createPaths();
    }

    /**
     * Translateyi başlatır
     * @return void
     */
    public function start() : void
    {
        /*
         * Pathları oluşturur
         */
        foreach ($this->target as $targetValue) {
            $realTargetPath = $this->realTargetPath($this->realSourcePath, $targetValue);
            $result = array_reverse($this->getDirContents($this->sourcePath));
            //ana klasörü oluşturur
            if (!file_exists($realTargetPath)) {
                mkdir($realTargetPath);
            }
            //base pathleri alır
            foreach ($result as $key => $value) {
                $valueMainPath = str_replace($this->realSourcePath, '', $value);
                //klasör ise
                if (is_dir($value)) {
                    if (!file_exists($realTargetPath . $valueMainPath)) {
                        mkdir($realTargetPath . $valueMainPath);
                    }
                } else {
                    //dosyayı okuyup translate yapacak
                    $getData = require $value;
                    $writeData = "<?php " . PHP_EOL . PHP_EOL . "return [" . PHP_EOL;
                    foreach ($getData as $dataKey => $dataValue) {
                        /*
                         * __create language text
                         */
                        $result = $this->trs->translate($dataValue, [
                            'source' => $this->source,
                            'target' => $targetValue
                        ]);
                        if ($this->jsLanguageCreator) {
                            $targetValuePrefix = str_replace(
                                $this->targetDirectoryOperator,
                                '.',
                                substr(
                                    ltrim($valueMainPath, $this->targetDirectoryOperator),
                                    0,
                                    -4
                                )
                            );
                            $this->translate[$targetValue]["{$targetValuePrefix}.{$dataKey}"] = $result['text'];
                            $this->translate[$this->source]["{$targetValuePrefix}.{$dataKey}"] = $result['text'];
                        }
                        $writeData .= "    '$dataKey' => '" . $result['text'] . "'," . PHP_EOL;
                    }
                    $writeData .= '];';
                    $this->fileWrite("{$realTargetPath}{$valueMainPath}", $writeData);
                }
            }
        }
        if ($this->jsLanguageCreator) {
            if (!file_exists($this->jsSourcePath)) {
                mkdir($this->jsSourcePath);
            }
            foreach ($this->translate as $key => $value) {
                $this->fileWrite("{$this->jsSourcePath}{$key}.lang.js", 'window.language = ' . json_encode($value) . ';');
            }
        }
    }

    /**
     * File Write
     * @param string $path
     * @param string $content
     * @param string $mode
     * @return void
     */
    private function fileWrite(string $path, string $content, string $mode = 'w') {
        /*
         * Dosya yoksa oluşturur
         */
        $file = fopen($path, $mode);
        fwrite($file, $content);
        fclose($file);
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
        $explode[] = $target;
        return implode($this->targetDirectoryOperator, $explode);
    }

    /**
     * Pathları oluşturur
     * @return void
     */
    private function createPaths() {
        $this->sourcePath = "{$this->sourcePrefix}{$this->source}";
        $this->realSourcePath = realpath($this->sourcePath);
    }

    /**
     * Dosyaları getirir
     * @param null|string $dir
     * @param array $results
     * @return array
     */
    public function getDirContents(?string $dir = null, array &$results = []) : array {
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
    public function getTargetDirectoryOperator() : string {
        return $this->targetDirectoryOperator;
    }

    /**
     * Set Target Directory Operator
     * @param string $value
     * @return void
     */
    public function setTargetDirectoryOperator(string $value) {
        $this->targetDirectoryOperator = $value;
    }

    /**
     * Get Source Prefix
     * @return string
     */
    public function getSourcePath() : string {
        return $this->sourcePrefix;
    }

    /**
     * Set Source Prefix
     * @param string $value
     * @return void
     */
    public function setSourcePath(string $value) {
        $this->sourcePrefix = rtrim($value, $this->targetDirectoryOperator).$this->targetDirectoryOperator;
        $this->createPaths();
    }

    /**
     * Get JS Source Path
     * @return string
     */
    public function getJsSourcePath() : string {
        return $this->jsSourcePath;
    }

    /**
     * Set JS Source Path
     * @param string $value
     * @return void
     */
    public function setJsSourcePath(string $value) {
        $this->jsSourcePath = rtrim($value, $this->targetDirectoryOperator).$this->targetDirectoryOperator;
    }

    /**
     * Get JS Language Creator
     * @return string
     */
    public function getJsLanguageCreator() : string {
        return $this->jsLanguageCreator;
    }

    /**
     * Set JS Language Creator
     * @param bool $value
     * @return void
     */
    public function setJsLanguageCreator(bool $value) {
        /**
         * Js için diziyi oluşturur
         */
        if ($value) {
            foreach ($this->target as $t) {
                $this->translate[$t] = [];
            }
            $this->translate[$this->source] = [];
        }
        $this->jsLanguageCreator = $value;
    }
}