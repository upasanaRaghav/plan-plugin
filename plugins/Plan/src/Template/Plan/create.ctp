<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
    background-color: #211951;
    overflow: hidden;
}


.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      /* align-items: center;
      text-align: center; */
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
   
    display: flex;
 
    justify-content: center;

    align-items: center;
    margin-left: 50px;
    padding: 80px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color: #15F5BA;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #74E291;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}


</style>
<!-- <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Enter the Plan details</h3> -->


        <!-- <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Your Plan</h3>
                        <p>Fill in the data below.</p> -->
    
    <?php
          // echo $this->Html->link(
          //   "< Back",
          //   "/plan",
          //   [
          //     "class" => "btn btn-success pull-right",
          //     "style" => "margin-top: -25px",
          //   ]
          // );
        ?>
<!--      
    </div>
      <div class="panel-body"> -->

<?php

    // echo $this->Form->create(
    //     null,
    //     [
    //         "url"=>["action"=>"save"],
    //         "type"=>"file",
    //         "class"=>"form-horizontal"
    //     ]
    //     );

?>
    <!-- <div class="form-group ">
        <label for="name">
          Name:</label>
        <input type="text" class="form-control,.form-items .form-content" id="name" placeholder="Enter the name" name="name">
    </div> -->

    <!-- <div class="col-md-12">
    <label for="name">Name:</label>
    <input class="form-control .form-items form-content" type="text" id="name" placeholder="Enter the Name" name="name">

       </div> -->


    <!-- <div class="form-group col-md-12">
        <label for="Level">Level:</label>
        <input type="text" class="form-control .form-items .form-content" id="level" placeholder="Enter the Level" name="level">
    </div> -->


    <!-- <div class="col-md-12">
    <input list="levelOptions" class="form-select mt-3 form-control form-items form-content" id="level" placeholder="Enter the Level" name="level">
    <datalist id="levelOptions">
        <option value="1">
        <option value="2">
        <option value="3">
        <option value="4">
        <option value="4">
    
    </datalist>
      </div> -->

   <!-- <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" placeholder="Enter description" name="description"></textarea>
    </div> -->
    <!-- <div class="form-button mt-3">
    <button type="submit" class=" btn btn-primary">Submit</button>
    </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </div> -->

  <div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Register Your Plan</h3>
                    <p>Fill in the data below.</p>
    
                    <?php
                    echo $this->Html->link(
                        "< Back",
                        "/plan",
                        [
                            "class" => "btn btn-primary btn-primary:hover pull-right",
                            "style" => "margin-top: -25px; color:white; font-size:20px;" 
                         
                            
                        ]
                    );
                    ?>
                </div>

                <div class="panel-body">
                    <?php
                    echo $this->Form->create(
                        null,
                        [
                            "url" => ["action" => "save"],
                            "type" => "file",
                            "class" => "form-horizontal"
                        ]
                    );
                    ?>

                    <!-- <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control form-items form-content" id="name" placeholder="Enter the name" name="name">
                    </div> -->

                    <!-- <div class="form-group col-md-12">
                    <label for="name" style="font-size: 20px; font-weight: bold;">Enter the Name:</label>
                        <input class="form-control form-items form-content" type="text" id="name" placeholder="Enter the Name" name="name">
                    </div>   -->
                    <?php
echo $this->Form->control('name', [
    'label' => 'Enter the Level Name:',
    'class' => 'form-control form-items form-content',
    'required' => true,
    'type' => 'text',
    'minlength' => 2,  
    'title' => 'Please enter at least 2 characters for the Level Name',
    'pattern' => '.{2,}', 
    'message' => 'Please enter at least 2 characters for the Level Name',
]);
?>


                    <!-- <div class="form-group col-md-12">
                    <label for="Level" style="font-size: 20px; font-weight: bold;">Choose Level:</label>
                        <input type="text" class="form-control form-items form-content" id="level" placeholder="Enter the Level" name="level">
                    </div>   -->


<?php
echo $this->Form->input('level', [
    'label' => 'Choose Level:',
    'class' => 'form-group col-md-12 form-control form-items form-content ',
    'required' => true,
    'type' => 'number',
    'min' => 0,
    'max' => 100, 
    'style' => 'height: 0px;', 

]);

?>
                    <div class="form-button mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
