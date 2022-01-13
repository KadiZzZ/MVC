<?php

class NewsController {
	public function actionIndex()
		{
			echo "список новостей";
            return true;
		}

    public function actionView($category, $id)
    {
        echo '<br>' . $category;
        echo '<br>' . $id;
        return true;

    }
		
}

?>