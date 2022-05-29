<?php

class delete{



    public function delete(){
        if(isset($_POST['delete'])){
            if(isset($_POST['value'])){
                foreach ($_POST['value'] as $value) {
                    $to_delete = $value ;
                    $manager = new ProductManager();
                    $manager->delete($to_delete);
            }
            
            }
            else{
                header('Location:'.HOST);
            }
        }else{
            header('Location:'.HOST);
        }
       header('Location:'.HOST);
        
    }

}