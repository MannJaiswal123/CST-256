<?php
class ProductBusinessService
{
 public function searchProducts($search)
    {
        MyLogger2::info("Enter ProductBusinessService.searchProducts()");
        
        // Call the connection:
        $db = new db_connector();
        $conn = $db->getConnection();
        
        // Call the product Data Service
        $jobData = new JobDataService($conn);

        // Check if the Search input text is empty. (This shouldn't happen due to validation rule)
        if ($search != "")
            $productResults = $productData->findProductsBySearch($search);
        else
            $productResults = $productData->findAllProducts();

        // Close the PDO connection.
        $conn = null;
        
        MyLogger2::info("Exit ProductBusinessService.searchProducts()");

        // Return the all product searched Results.
        return $jobResults;
    }
}