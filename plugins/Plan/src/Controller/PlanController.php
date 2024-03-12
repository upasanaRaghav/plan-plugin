<?php

namespace Plan\Controller;

use Plan\Controller\AppController;
use Cake\Validation\Validator;



class PlanController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel("PlanLevels");
        
    }

    public function index()
    {
        $plans = $this->PlanLevels->find("all", [
            "order" => ["id" => "desc"]
        ]);
        $this->set("planlevel", $plans);
    }

    public function create()
    {
        $this->set("title", "Plan Level");
    }

    public function delete($id)
    {
        $plan = $this->PlanLevels->get($id);

        if ($this->request->is(['post', 'delete'])) {
            // $this->autoRender = false;

            if ($this->request->getData('confirmation') === 'Yes') {
                if ($this->PlanLevels->delete($plan)) {
                    $this->Flash->success(__('This field inside Plan Level has been Deleted.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('This field inside Plan Level could not be deleted. Please, try again.'));
                }
            } else {
                return $this->redirect(['action' => 'index']);
            }
        }

        $this->set(compact('plan'));
    }

//     public function update()
//     {
//         $this->autoRender = false;
//         $form_data = $this->request->getData();
//         $plan = $this->PlanLevels->get((int)$form_data['planID']);
        
//         $plan->name = $form_data['name'];
//         $plan->level = (int)$form_data['level'];
       
//         // $plan = $this->PlanLevels->patchEntity($plan, $form_data, ['validate' => 'default']);

       
//         $validation = $plan->errors();
     
//         if (!empty($validation)) {
//             // $this->autoRender = false;

//             print_r($validation); 

//             $this->Flash->set($validation, [
//                 "element" => "plan_errors"
//             ]);

//             return $this->redirect(['action' => 'edit', $form_data["planID"]]);
//         }

      

//         else{
//             if ($this->request->is(['patch', 'post', 'put'])) {
//              if($this->PlanLevels->save($plan)) {
//                 $this->Flash->success(__('The Plan level has been edited.'));
//                 return $this->redirect(['action' => 'index']);
//             } else {
//                 $this->Flash->error(__('The plan level could not be edited. Please, try again.'));
//             }
//         }
//     }
// }
public function update()
{
    $this->autoRender = false;
    $form_data = $this->request->getData();
    $plan = $this->PlanLevels->get((int)$form_data['planID']);

    $this->PlanLevels->patchEntity($plan, $form_data);

    $validation = $plan->errors();

    if (!empty($validation)) {
        $this->Flash->set($validation, [
            "element" => "plan_errors"
        ]);

        return $this->redirect(['action' => 'edit', $form_data["planID"]]);
    }

    if ($this->PlanLevels->save($plan)) {
        $this->Flash->success(__('The Plan level has been edited.'));
        return $this->redirect(['action' => 'index']);
    } else {
        $this->Flash->error(__('The plan level could not be edited. Please, try again.'));
    }
}

    public function edit($id)
    {
        $id = (int)$id;
        $plan = $this->PlanLevels->get($id);
        $this->set("title", "edit Plan-level");
        $this->set("planlevel", $plan);
    }

    public function save()
    {
    
        $this->autoRender = false;
        if ($this->request->is('post')) {
        $plan = $this->PlanLevels->newEntity($this->request->getData());
       
        $validation = $plan->errors();
   
     
        //if errors are present
        if (!empty($validation)) {
                   

            $this->Flash->set($validation, [
                "element" => "plan_errors"
            ]);
            return $this->redirect(['action' => 'create']);
        }
        else{
        $form_data = $this->request->getData();
        $plan->name = $form_data['name'];
        $plan->level = $form_data['level'];
        // print_r($form_data); die();

       $this->PlanLevels->save($plan);
            $this->Flash->success(__('The Plan level has been added to the database.'));
            return $this->redirect(['action' => 'index']);
       
        }
    

}
    }




}

   
        
       