

<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="/css/main.css">
    <style>
     html {
	box-sizing: border-box;
}
*, *:before, *:after {
	box-sizing: inherit;
}
.btn-success {
        margin: 8px;
}
.btn-danger {
        margin: 8px;
}

.formrow {
	overflow:hidden;
	position:relative;
	max-width:300px;
	margin:auto;
	padding:10px;
	background:#f9f9f9;
}

.book-1{
     
        background-color: #fdf6ed;
   
}
.checklabel {
	display:block;
	width:100%;
	border:2px solid #000;
	background:#f2f2f2;
	border-radius:2px;
	text-align:center;
	padding:10px 3em;
	font-size:1.2rem;
	box-shadow:0 0 5px 5px rgba(0,0,0,0.2);
}
.checklabel:hover {
	background:#ddd;
}
.checkbox {
	position:absolute;
	right:10px;
	top:15px;
	width: 2.2em;
	height: 2.2em;
	-webkit-appearance: none;
	-moz-appearance: none;
	-ms-appearance: none;
	appearance: none;
	border:none;
	padding:0;
	border-radius:0;
	vertical-align: middle;
	background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='512px' height='512px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve'%3e%3cpath d='M448,71.9c-17.3-13.4-41.5-9.3-54.1,9.1L214,344.2l-99.1-107.3c-14.6-16.6-39.1-17.4-54.7-1.8 c-15.6,15.5-16.4,41.6-1.7,58.1c0,0,120.4,133.6,137.7,147c17.3,13.4,41.5,9.3,54.1-9.1l206.3-301.7 C469.2,110.9,465.3,85.2,448,71.9z'/%3e%3c/svg%3e");
	background-repeat:no-repeat;
	background-size:cover;
	background-color:transparent;
	background-position:-10em -10em;
	transition:.3s ease;
	outline:0;
}
.checkbox:focus + label{
	border-color:blue;
} 
.checkbox:active + label {
	background-color: #ddd;
}
.checkbox:checked {
	background-position: 0 0;
}



input,
textarea {
  border: 1px solid #eeeeee;
  box-sizing: border-box;
  margin: 0;
  outline: none;
  padding: 10px;
}

input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group {
  clear: both;
  margin: 15px 0;
  position: relative;
}

.input-group input[type='button'] {
  background-color: #eeeeee;
  min-width: 38px;
  width: auto;
  transition: all 300ms ease;
}

.input-group .button-minus,
.input-group .button-plus {
  font-weight: bold;
  height: 38px;
  padding: 0;
  width: 38px;
  position: relative;
}

.input-group .quantity-field {
  position: relative;
  height: 38px;
  left: -6px;
  text-align: center;
  width: 62px;
  display: inline-block;
  font-size: 13px;
  margin: 0 0 5px;
  resize: vertical;
}

.button-plus {
  left: -13px;
}

input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
}


    </style>

  </head>

  <body>
  @include('header');
      <section class="book-1">
    <div class="container">
              <center><h3> </h3></center>
        <h1 class="text-center">Book for Date: </h1><hr>
        <div class="row">
<div class="col-md-12">
   
</div>

<div class="col-md-2">
    <div class="form-group">
  
</div>
    </div>
    </section>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  
                    <h4 class="modal-title">Booking for: <span id="slot"></span></h4>
                     <button type="button" class="close text-danger" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input required type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input required  type="text" class="form-control" name="mobile">
                                </div>
                                 <div class="form-group">
                                    <label for="">Email</label>
                                    <input required  type="email" class="form-control" name="email">
                                </div>
                                
                                 <div class="row">
                                      <div class="col-sm">
                                 <div class="form-group">
                                    <label for="">Number of slot book </label>
                                    <div class="input-group">
                                      <input type="button" value="-" class="button-minus" data-field="quantity">
                                      <input type="number" step="1" max="" min="1" value="1" name="quantity" class="quantity-field">
                                      <input type="button" value="+" class="button-plus" data-field="quantity">
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm">
                                    <p class="text-warning m-2 p-2"> 
                                    <h4 id="qty" ></h4>
                                    </p>
                                    </div>
                                </div>
                                <div class="form-group pull-right">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
@include('footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
    window.onload = function () {
        var tblFruits = document.getElementById("tblFruits");
        var chks = tblFruits.getElementsByTagName("INPUT");
        for (var i = 0; i < chks.length; i++) {
            chks[i].onclick = function () {
                for (var i = 0; i < chks.length; i++) {
                    if (chks[i] != this && this.checked) {
                        chks[i].checked = false;
                    }
                }
            };
        }
    };
</script>
<script>
$(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
   
    
});
</script>

    <script>
        function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});


    </script>
    

  </body>

</html>




