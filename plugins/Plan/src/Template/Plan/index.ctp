<style>
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


.btn-danger {
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

.btn-danger {
    background-color: #ff5555; 
    color: #fff; 
}


.btn-danger:hover,
.btn-danger:focus {
    background-color: #ff3333; 
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
    background-color: #15F5BA;
    color: #fff;
}


.btn-edit:hover,
.btn-edit:focus {
    background-color: #74E291;
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
	font-size: 51px;
	line-height: 44px;
	letter-spacing: -2px;
	font-weight: bold;
}

</style>

<div class="row">
  <div class="primary">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 >Plan-Level</h1>
        <p> All the Levels present in Plan-Level Table is below</p>
        <?php
          echo $this->Html->link(
            "+ Add Level",
            "/plan/create",
            [
              "class" => "btn btn-edit pull-right",
              "style" => "margin-top: -25px",
            ]
          );
        ?>
      </div>
      <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>S.No.</th>
              <th>Name</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $count = 1;
              foreach ($planlevel as $key => $plan) {
          ?>
               <tr class="info">
                <td><?= $count++ ?></td>
                <td><?= $plan->name ?></td>
                <td><?= $plan->level ?></td>
                <td>
           
              
<?= $this->Html->link(
    "Edit",
    ["controller" => "Plan", "action" => "edit", $plan->id],
    [
        "class" => "btn btn-edit pull-right",
        "style" => "margin-left: 5px",
    ]
); ?>
                 <?= $this->Html->link(
    "Delete",
    ["controller" => "Plan", "action" => "delete", $plan->id],
    [
        "class" => "btn btn-danger pull-right",
        "style" => "margin-left: 5px",
    ]
); ?>
                </td>
              </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
