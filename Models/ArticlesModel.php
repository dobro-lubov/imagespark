<?php
namespace Models;
use Core\Model;

class articleModel extends Model
{
    protected $storageDirectoryPath = './data/articles/';


    protected function getAllArticles()
    {
        parent::getAll();

    }


    protected function getArticle(){

        parent::get();
    }


    public function validate($formInfo)
    {
        $errors = [];
        if (mb_strlen($formInfo['article_name']) < 5){

            $errors[] = 'Название статьи должно быть больше 5 символов';
        }
        if (mb_strlen($formInfo['text']) < 10){
            $errors[] = 'Текст должен быть больше 10 символов';
        }
        if (mb_strlen($formInfo['created_by']) < 5){
            $errors[] = 'Имя должно быть больше 5 символов';
        }

        return $errors;
    }


    public function create($formInfo)
    {
        parent::create($formInfo);
    }


    public function delete(){

        parent:: delete();

    }


    public function update($data){

        parent::update($data);
    }
}