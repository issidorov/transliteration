<?php

use issidorov\transliteration\Translit;

class MainTest extends \PHPUnit\Framework\TestCase
{
    public function testText()
    {
        $this->assertEquals(Translit::text('Высокое дерево'), 'Vysokoe derevo');
    }

    public function testFilename()
    {
        $this->assertEquals(Translit::filename(' Дерево  версия 3 ...  .pdf'), 'Derevo-versiia-3.pdf');
    }
}