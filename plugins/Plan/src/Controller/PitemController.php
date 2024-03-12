<?php

namespace Plan\Controller;

use Plan\Controller\AppController;


class PitemController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel("Plan.PlanItems");
        $this->loadModel("Plan.PlanTables"); 
        $this->loadModel("Plan.PlanLevels"); 
    }

    public function index()
{
    $plans = $this->PlanItems->find('all', [
        "order" => ["PlanItems.id" => "desc"]
    ])->contain(['PlanLevels', 'PlanTables', 'ParentItems']);

    $this->set(compact('plans'));
}

    
    
    public function create($id = 0)
{
    $this->set("title", "Create");

    // $planTableOptions = $this->PlanTables->find('list', [
    //     'keyField' => 'id',
    //     'valueField' => 'name',
    // ])->toArray();

    // // Fetching data from PlanLevels table
    // $planLevelOptions = $this->PlanLevels->find('list', [
    //     'keyField' => 'id',
    //     'valueField' => 'name',
    // ])->toArray();


        $planTableOptions = $this->PlanItems->PlanTables->find('list', ['limit' => 200]);
        $planLevelOptions = $this->PlanItems->PlanLevels->find('list', ['limit' => 200]);
        $planParentOptions = $this->PlanItems->ParentItems->find('list', [   
       'keyField' => 'id',
        'valueField' => function ($item) {
            return $item['id'].' - '.$item['caption'];
        },
        ])->toArray();

    $this->set(compact('planTableOptions', 'planLevelOptions', 'planParentOptions'));

}

    public function delete($id)
{
    $plan = $this->PlanItems->get($id);

    if ($this->request->is(['post', 'delete'])) {
        $this->autoRender = false;

        if ($this->request->getData('confirmation') === 'Yes') {
            if ($this->PlanItems->delete($plan)) {
                $this->Flash->success(__('This field inside Plan item has been Deleted.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('This field inside Plan item could not be deleted. Please, try again.'));
            }
        } else {
            return $this->redirect(['action' => 'index']);
        }
    }

    $this->set(compact('plan'));

}

   
    public function update()
    {
        $this->autoRender = false;
        $form_data = $this->request->getData();
        $plan = $this->PlanItems->get((int)$form_data['planID']);
    
        $plan->caption = $form_data['caption'];
        $plan->description = $form_data['description'];
        $plan->start_date = $form_data['start_date'];
        $plan->end_date = $form_data['end_date'];
        $plan->plan_id = $form_data['plan_id'];
        $plan->plan_level_id = $form_data['plan_level_id'];
        $plan->parent_id = $form_data['parent_id'];
        // $plan->is_active = (bool)$form_data['is_active'];

        print_r($this->request->data());
    
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->PlanItems->save($plan)) {
                $this->Flash->success(__('The Plan item has been edited.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plan item could not be edited. Please, try again.'));
            }
        }

    }
    
    public function edit($id=0)
    {
        $id = (int)$id;
        $plan = $this->PlanItems->get($id);
        $this->set("title", "edit Plan-level");
        $this->set("PlanItems", $plan);

            // $planTableOptions = $this->PlanTables->find('list', [
            //     'keyField' => 'id',
            //     'valueField' => 'name',
            // ])->toArray();
       
            // $planLevelOptions = $this->PlanLevels->find('list', [
            //     'keyField' => 'id',
            //     'valueField' => 'name',
            // ])->toArray();
        
            // $planParentOptions = $this->PlanItems->find('list', [
            //     'keyField' => 'id',
            //     'valueField' => function ($item) {
            //         return $item['id'].' - '.$item['caption'];
            //     },

            // ])->toArray();
        
         
            $planTableOptions = $this->PlanItems->PlanTables->find('list', ['limit' => 200]);
            $planLevelOptions = $this->PlanItems->PlanLevels->find('list', ['limit' => 200]);
            $planParentOptions = $this->PlanItems->ParentItems->find('list', [   
                'keyField' => 'id',
                 'valueField' => function ($item) {
                     return $item['id'].' - '.$item['caption'];
                 },
                 ])->toArray();

         
            $this->set(compact('planTableOptions', 'planLevelOptions', 'planParentOptions'));

        }


     
    // public function save()
    // {
    //     $this->autoRender = false;
    //     $plan = $this->PlanItems->newEntity($this->request->getData());
    //     $validation = $plan->errors();

    //     if (!empty($validation)) {
    //         print_r($validation);
    //         $this->Flash->set($validation, [
    //             "element" => "plan_error"
    //         ]);
    //     } else {
    //         $form_data = $this->request->getData();
    //         $plan->caption = $form_data['caption'];
    //         $plan->description = $form_data['description'];
    //         $plan->start_date = $form_data['start_date'];
    //         $plan->end_date = $form_data['end_date'];
    //         $plan->plan_id = $form_data['plan_id'];
    //         $plan->plan_level_id  = $form_data['plan_level_id'];

    //         // if ($this->PlanLevels->save($plan)) {
    //         //     $this->Flash->set("Plan has been successfully added to the database", [
    //         //         "element" => "plan_success"
    //         //     ]);
    //         // } else {
    //         //     $this->Flash->set("Failed to add plan to the database", [
    //         //         "element" => "plan_error"
    //         //     ]);
    //         // }
    //         if ($this->PlanItems->save($plan)) {
    //             $this->Flash->success(__('The Data has been added to database.'));
    //             return $this->redirect(['action' => 'index']);
    //         } else {
    //             $this->Flash->error(__('The data could not been added to database. Please, try again.'));
    //         }


    //     }

    //     // $this->redirect(["action" => "index"]);
    // }
    public function save()
{
    $this->autoRender = false;
    $plan = $this->PlanItems->newEntity($this->request->getData());
    $validation = $plan->errors();

    if (!empty($validation)) {
        // Handle validation errors
        $this->Flash->set($validation, [
            "element" => "plan_error"
        ]);
    } else {
        $form_data = $this->request->getData();
        $plan->caption = $form_data['caption'];
        $plan->description = $form_data['description'];
        $plan->start_date = $form_data['start_date'];
        $plan->end_date = $form_data['end_date'];
        $plan->plan_id = $form_data['plan_id'];
        $plan->plan_level_id  = $form_data['plan_level_id'];
        $plan->parent_id  = $form_data['parent_id'];


        if ($this->PlanItems->save($plan)) {
            // Entity saved successfully
            $this->Flash->success(__('The Data has been added to the database.'));
            return $this->redirect(['action' => 'index']);
        } else {
            // Save operation failed
            $this->Flash->error(__('The data could not be added to the database. Please, try again.'));
        }
    }
}

}

?>



