<?php
namespace Models;
use Core\Model;

class articleModel extends Model
{
    protected $storageDirectoryPath = './data/articles/';

    protected $attributes = [
        'id' => '',
        'article' => '',
        'text' => '',
        'date' => '',
        'created_by' => '',
    ];


    public function getAll()
    {
        $dir = $this->storageDirectoryPath;
        return scandir($dir);
    }


    public function validateArticle($formInfo)
    {
        $errors = [];
        if (mb_strlen($formInfo['article']) < 5){
            $errors[] = 'Название статьи должно быть больше 5 символов';
        }
        if (mb_strlen($formInfo['text']) < 10){
            $errors[] = 'Текст должен быть больше 10 символов';
        }

        return $errors;
    }

    public function createArticle($formInfo)
    {
        parent::create($formInfo); // TODO: Change the autogenerated stub
        $fileName = $formInfo['id'];
        if (isset($formInfo['id'],$formInfo['article'], $formInfo['text'],$formInfo['date'],$formInfo['created_by'])){
            $this->attributes = parent::putJson($this->storageDirectoryPath . $fileName . '.json' , json_encode($formInfo, JSON_PRETTY_PRINT));
        }

    }
}