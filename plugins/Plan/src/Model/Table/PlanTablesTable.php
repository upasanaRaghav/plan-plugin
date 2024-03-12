<?php
namespace Plan\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PlanTablesTable extends Table
{
    public function initialize(array $config){
    parent::initialize($config);

        $this->setTable('plan_tables');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('PlanItems', [
            'className' => 'Plan.PlanItems',
        ]);
        
    }
}

?>