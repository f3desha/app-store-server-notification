<?php

namespace OOP\App\Mix\SampleOne;

class ZipReader implements ReaderBehavior
{
    /**
     * @var string
     */
    private string $zipFilePath;

    public function __construct($filePath)
    {
        $this->zipFilePath = $filePath;
    }

    public function read(): string
    {
        $zip = new \ZipArchive();
        if ($zip->open($this->zipFilePath) === true) {
            $result = $zip->extractTo(__DIR__);
            $zip->close();
            echo "Unzipped Process Successful!\n";
        } else {
            echo "Unzipped Process failed\n";
        }
        //read file
        $text = file_get_contents(__DIR__ . '\UnzippedText.txt');
        unlink(__DIR__ . '\UnzippedText.txt');
        return $text;
    }
}
