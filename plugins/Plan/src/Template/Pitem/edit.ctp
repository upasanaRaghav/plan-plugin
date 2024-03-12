<style>
 

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    margin:0;
}

html, body {

 

    background-color: #FFF6E9;
    /* overflow: hidden; */
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 20px;
    display: inline-block;
    width: 50%;
      min-width: 300px; /* Adjust the minimum width as needed */
      max-width: 600px; /* Adjust the maximum width as needed */
    border-radius: 100px;

}

p {
	font-family: Gill Sans, Verdana;
	font-size: 11px;
	line-height: 14px;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-weight: bold;
}
h1 {
  font-family: times, Times New Roman, times-roman, georgia, serif;
	color: #444;
	margin: 0;
	padding: 0px 0px 6px 0px;
	font-size: 56px;
	line-height: 100px;
	letter-spacing: -2px;
	font-weight: bold;
}

.btn-edit {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border: none;
    border-radius: 5px;
}


.btn-edit {
    background-color: #0D9276;
    color: #fff;
}


.btn-edit:hover,
.btn-edit:focus {
    background-color: #74E291;
}
.form-group {
    margin-bottom: 0px;
    margin-right: 50px;
    padding:3px;

  }

</style>
<div >
      <div class="panel-heading">
        <h1>Edit details</h1>
        <p> Edit the Levels present in Plan-Level Table</p>
    
        <?php
          echo $this->Html->link(
            "< Back",
            "/plan/allitem",
            [
              "class" => "btn btn-edit pull-right",
              "style" => "margin-top: -25px",
            ]
          );
        ?>
      </div>
      <div class="panel-body">
<?php
    echo $this->Form->create(
        null,
        [
            "url"=>["action"=>"update"],
            "class"=>"form-horizontal"
        ]
        );

?>
 <input type="hidden" value="<?php echo $PlanItems->id; ?>" name="planID"></div>
 
 <div class="form-group col-md-3">
<label for="Name" style="font-size: 20px; font-weight: bold;">Edit the caption:</label>

        <input type="text" class="form-content form-items " id="name" value="<?php echo $PlanItems->caption;?>" placeholder="Enter the Name" name="caption">
    </div>

    <div class="form-group col-md-3">
<label for="Name" style="font-size: 20px; font-weight: bold;">Edit the description:</label>

        <input type="text" class="form-content form-items " id="name" value="<?php echo $PlanItems->description;?>" placeholder="Enter the Name" name="description">
    </div>
     
  
  
  </div>

      <div class="form-group col-md-3">
        <label for="text" style="font-size: 20px; font-weight: bold;">Edit Start date:</label>

        <input type="date" class=" form-content form-items " id="start_date" value="<?php echo $PlanItems->start_date;?>" placeholder="Enter the start date" name="start_date">
    </div>
    
    
    <div class="form-group col-md-3">
        <label for="text" style="font-size: 20px; font-weight: bold;">Edit End Date:</label>

        <input type="date" class=" form-content form-items " id="end_date" value="<?php echo $PlanItems->end_date;?>" placeholder="Enter the End date" name="end_date">
    </div>
    <div class="form-group col-md-3">
            <?php
            echo $this->Form->input(
                'plan_id',
                [
                    'type' => 'select',
                    'options' => $planTableOptions,
                    'default' => $PlanItems->plan_id,
                    'class' => 'form-content form-items'
                ]
            );
            ?>
        </div>

        <div class="form-group col-md-3">
            <?php
            echo $this->Form->input(
                'plan_level_id',
                [
                    'type' => 'select',
                    'options' => $planLevelOptions,
                    'default' => $PlanItems->plan_level_id,
                    'class' => 'form-content form-items'
                ]
            );
            ?>
        </div>
        
      <div class="form-group col-md-3">
            <?php
            echo $this->Form->input(
                'parent_id',
                [
                    'type' => 'select',
                    'options' => $planParentOptions,
                    'default' => $PlanItems->id,
                    'class' => 'form-content form-items',
                    'label' => ''
                ]
            );
            ?>
        </div> 
        

        <div class="form-group col-md-12">
   
 </div> 
      
    <div class="form-button mt-3">
    <button type="submit" class="btn btn-edit">Submit</button>
    </div>
</form>
      </div>