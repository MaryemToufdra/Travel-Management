<?php
namespace App\Models;
use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'description', 'date', 'category_id'
    ];

    public function getAllActivitiesWithCategory()
    {
        // Requête pour récupérer les activités avec les catégories
        $builder = $this->builder();
        $builder->select('activities.*, categories.name as category_name');
        $builder->join('categories', 'categories.id = activities.category_id', 'left');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
?>