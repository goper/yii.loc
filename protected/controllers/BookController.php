<?php

class BookController extends Controller {

    public function actionIndex() {
        $a = Book::model()->findByPk(3)->title;
        //print_r($a);
        $this->render('index', array('model' => $a));
        
    }

}

