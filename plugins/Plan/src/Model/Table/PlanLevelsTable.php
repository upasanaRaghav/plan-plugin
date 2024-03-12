<?php
namespace Plan\Model\Table;

use Cake\ORM\Table;

class PlanLevelsTable extends Table
{
    public function initialize(array $config){
     parent::initialize($config);

        $this->setTable('plan_levels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('PlanItems', [
            'className' => 'Plan.PlanItems',
        ]);
    }
}

        // $this->hasMany('PlanItems')
        // ->s'etForeignKey([
        // 'plan_level_id'
        // ])
        // ->setBindingKey([
        // 'id
        // ]);
    

?>