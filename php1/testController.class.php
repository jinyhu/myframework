<?php 

class testController{

	function display(){
        
        $model=new testModel();
       $data=$model->getdata();
       $view=new testView();
       $view->show($data);


	}

}














 ?>