<?php


class ProductenController
{
    public $products;


    public function index()
    {
        $productModel = new ProductModel();
        $products=$productModel->all();
        require 'views/producten.view.php';
    }

    public function getProductImage()
    {
        if(isset($_GET['productId']) && is_numeric($_GET['productId']))
        {
            $productModel = new ProductModel();
            $productImage = $productModel->getImage($_GET['productId']);
            if($productImage)
            {
                header("Content-type: ".$productImage->filetype);
                echo $productImage->data;
            }
            else
            {
                http_response_code(404);
                echo "Image not available";
            }
        }
    }
}


