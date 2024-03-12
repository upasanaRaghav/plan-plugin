<style>
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
            "/plan",
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
 <input type="hidden" value="<?php echo $planlevel->id; ?>" name="planID"></div>
 
 <!-- <div class="col-md-12">
 <label for="Name">Name:</label> -->
<!-- <label for="Name" style="font-size: 20px; font-weight: bold;">Edit the Name:</label>

        <input type="text" class="form-control form-content form-items " id="name" value="<?php echo $planlevel->name;?>" placeholder="Enter the Name" name="name">
    </div> -->
      <!-- </div>  -->

      <div class="col-md-12">
            <label for="Name" style="font-size: 20px; font-weight: bold;">Edit the Name:</label>
            <?php
            echo $this->Form->text('name', [
                'class' => 'form-control form-content form-items',
                'value' => $planlevel->name,
                'placeholder' => 'Enter the Name',
                'required' => true,
                'minlength' => 2,
                'title' => 'Please enter at least 2 characters for the Level Name',
                'pattern' => '.{2,}',
                'message' => 'Please enter at least 2 characters for the Level Name',
            ]);
            ?>
        </div>

      <!-- <div class="form-group col-md-12"> -->
        <!-- <label for="text">Level</label> -->
        <!-- <label for="text" style="font-size: 20px; font-weight: bold;">Edit Level:</label>

        <input type="text" class="form-control form-content form-items " id="level" value="<?php echo $planlevel->level;?>" placeholder="Enter the Level's Name" name="level">
    </div> -->
    <div class="form-group col-md-12">
            <label for="text" style="font-size: 20px; font-weight: bold;">Edit Level:</label>
            <?php
            echo $this->Form->number('level', [
                'class' => 'form-control form-content form-items',
                'value' => $planlevel->level,
                'placeholder' => 'Enter the Level\'s Name',
                'required' => true,
                'min' => 1,
                'max' => 100,
                'title' => 'Please enter a level between 1 and 100',
            ]);
            ?>
        </div>

    <div class="form-button mt-3">
    <button type="submit" class="btn btn-edit">Submit</button>
    </div>
</form>
