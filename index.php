<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--bootstrab-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!--fontawesome-->
  <link rel="stylesheet" href="css/fontawesome-free-5.12.0-web/css/all.min.css" />

  <!--min css-->
  <link rel="stylesheet" href="css/min.css" />

  <title>Purchase</title>
</head>

<body>
  <!--title-->
  <div class="container">
    <div class="row r1">
      <div class="col-xl"><span class="title">Welcome Page Purchase</span></div>
    </div>
  </div>
  <!--end title-->

  <form method="POST" class="form-horizontal f1">

    <!-- input 1-->
    <div class="form-group">
      <label class="control-label col-sm-2">Name Supplier :</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" name="" id="n_supplier">
      </div>
    </div>
    <!-- input 2-->
    <div class="form-group">
      <label class="control-label col-sm-2">Products:</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" name="" id="product">
      </div>
    </div>


    <!-- input 3-->
    <div class="form-group">
      <label class="control-label col-sm-2">Price:</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" name="" id="price">
      </div>
    </div>

    <!-- input 4-->
    <div class="form-group">
      <label class="control-label col-sm-2">Qouantity:</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" name="" id="qount">
      </div>
    </div>

    <input name="click" class="btn btn-primary" type="button" value="ADD" id="click">

  </form>


  <!--button setting-->

  <button class="btn btn-primary open_setting" id="o_setting">settings</button>



  <!--box setting-->
  <div class="box_satting">
    <span class="close-1">X </span>

    <div class="row"> <button id='show_p' onclick="get()">Show purchases </button></div>
    <div class="row"><button id="del_o" onclick="showdel()">Delete an operation </button></div>
    <div class="row"><button id='mod_o' onclick="showdel()"> Modify an operation </button></div>

  </div>

  <!--emd box setting-->

  <!-- end box setting-->

  <!--  table data praches  -->
  <div class="container box_table">
    <table class="table table-dark">
      <thead class="th_scroll">
        <tr>
          <th scope="col">supplier-name</th>
          <th scope="col">product-name</th>
          <th scope="col">price</th>
          <th scope="col">quantityt</th>
          <th scope="col">date-time</th>
        </tr>
      </thead>
      <tbody id="data">


      </tbody>
    </table>
  </div>

  <!--  end table data praches  -->

  <!--box delete-->


  <div class="box_delete">
    <span class="close_delete_1">X</span>
    <div class="container">
      <label class="lab-del">Please Select Date : </label>

      <select id="sel_dat_1">
      </select>
      <button class=" btn btn-primary btn_del_1" id="btn_del_d" onclick="deldatal()">Delete</button>

    </div>
  </div>

  <!--end box delete -->


  <!--box-update-->

  <div class="box_update">

    <span class="close_update_1">X</span>
    <div class="container">

      <h1 class="title_update_2">modify an operation </h1>
      <label class='lab_update_2'>Please Select dateTime :</label>
      <select class="sel_update_2" id="sel_update_3" onchange="update()">

      </select><br><br>

      <div class="lab_left_1">

        <label class="lab_update_3">Name Supplier :</label><br>
        <input type="text" id='inp_update_1'><br><br>

        <label class="lab_update_4">Products: :</label><br>
        <input type="text" id='inp_update_2'>

      </div>

      <div class="lab_right_1">

        <label class="lab_update_3">Price :</label><br>
        <input type="text" id='inp_update_3'><br><br>

        <label class="lab_update_4">Qouantity :</label><br>
        <input type="text" id='inp_update_4'>

      </div>

      <button class="btn btn-primary btn_update_1" id="btn_update_3" onclick="postupdatedata()">Update</button>

    </div>

  </div>

  <!--end box update-->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/min.js"></script>

</body>

</html>