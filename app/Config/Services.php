<?php 
namespace Config;
use CodeIgniter\Config\BaseService;
use CodeIgniter\Validation\Validation;
use Config\Validation as ValidationConfig;
use  App\Libraries\MonologLogger; 
class Services extends BaseService
{
    public static function validation($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('validation');
        }
        // Chargement de la configuration de validation
        $config = new ValidationConfig();
        // Chargez un renderer (moteur de rendu de vue)
        $view = \Config\Services::renderer();
        // Passez le renderer en second argument du constructeur de Validation
        return new Validation($config, $view);
    }
    
}
