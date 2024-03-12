<?php
namespace Plan\Model\Table;

use Cake\ORM\Table;

class PlanItemsTable extends Table
{
 
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('plan_items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('PlanTables', [ 
            'joinType' => 'INNER',
            'foreignKey' => 'plan_id',
            'className' => 'Plan.PlanTables',
        ]);
        $this->belongsTo('PlanLevels', [
            'foreignKey' => 'plan_level_id',
            'className' => 'Plan.PlanLevels',
        ]);
        
        $this->belongsTo('ParentItems', [
            'foreignKey' => 'parent_id',
            'className' => 'Plan.PlanItems',
        ]);
      
    }   
    }

?>