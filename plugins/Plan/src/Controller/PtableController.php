<?php

namespace Plan\Controller;

use Plan\Controller\AppController;

class PtableController extends AppController
{
    public function initialize()
    {

        parent::initialize();
        $this->loadModel("PlanTables");
    }

    public function index()
    {
        $plans = $this->PlanTables->find("all", [
            "order" => ["id" => "desc"]
        ]);
        $this->set("PlanTables", $plans);
    }

    public function create()
    {
        $this->set("title", "Create");
    }
    
    public function delete($id)
    {
        // $this->autoRender = false;
    
        $plan = $this->PlanTables->get($id);
    
        if ($this->request->is(['post', 'delete'])) {
            $this->autoRender = false;
    
            if ($this->request->getData('confirmation') === 'Yes') {
                if ($this->PlanTables->delete($plan)) {
                    $this->Flash->success(__('This field inside Plan Table has been Deleted.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('This field inside Plan Table could not be deleted. Please, try again.'));
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
        $plan = $this->PlanTables->get((int)$form_data['planID']);
    
        $plan->name = $form_data['name'];
        $plan->start_date = $form_data['start_date'];
        $plan->end_date = $form_data['end_date'];
        // $plan->is_active = (bool)$form_data['is_active'];
        $plan->is_active = isset($form_data['is_active']) ? 1 : 0;
        // print_r($form_data['is_active']);
        // print_r($this->request->data());
    
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->PlanTables->save($plan)) {
                $this->Flash->success(__('The Plan has been edited.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plan could not be edited. Please, try again.'));
            }
        }
    }
    
    public function edit($id)
    {
        $id = (int)$id;
        $plan = $this->PlanTables->get($id);
        // $plan = $this->PlanTables->get($id)->toArray();
        // $this->autorender = false;
        // print_r($plan);
        // echo"<br>";
        // echo"<br>";
        // foreach($plan as $key=>$value){
        //     echo $key." ".$value." "."<br>";
        // }
        $this->set("title", "edit Plan-level");
        $this->set("PlanTables", $plan);
    }
    
    public function save()
    {
        $this->autoRender = false;
        $plan = $this->PlanTables->newEntity($this->request->getData());
        $validation = $plan->errors();

        if (!empty($validation)) {
            print_r($validation);
            $this->Flash->set($validation, [
                "element" => "plan_error"
            ]);
        } else {
            $form_data = $this->request->getData();
            $plan->name = $form_data['name'];
            $plan->start_date = $form_data['start_date'];
            $plan->end_date = $form_data['end_date'];
            $plan->is_active = isset($form_data['is_active']) ? 1 : 0;
            // if ($this->PlanLevels->save($plan)) {
            //     $this->Flash->set("Plan has been successfully added to the database", [
            //         "element" => "plan_success"
            //     ]);
            // } else {
            //     $this->Flash->set("Failed to add plan to the database", [
            //         "element" => "plan_error"
            //     ]);
            // }
            if ($this->PlanTables->save($plan)) {
                $this->Flash->success(__('The Plan has been added to database.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Plan could not been added to database. Please, try again.'));
            }


        }

        // $this->redirect(["action" => "index"]);
    }
}

?>



