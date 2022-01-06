<?php
require 'models/providerModel.php';
class ProviderController
{
    public function displayAllProviders($pdo)
    {
        $providers = new Providers($pdo);
        $list = $providers->getAllProviders();
        require 'views/provider.php';
    }
    public function displayProvider($pdo)
    {
        $id = $_GET['id'];
        $provider = new Providers($pdo);
        $list = $provider->getProvider($id);
        require 'views/singleSupplier.php';
    }
}
