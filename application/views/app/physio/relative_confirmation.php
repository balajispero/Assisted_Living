<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Relative Confirmation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body{
    /*background: linear-gradient(to top right, #fc2c77 100%, #6c4079 100%);*/
   background: linear-gradient(to top right, #808080 100%, #808080 100%);
   /*background: green !important;*/
  }
  </style>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
      <div class="card-header bg-primary text-white text-center">
        <h4>Relative Agree</h4>
      </div>
      <div class="card-body">
        <form action="<?php echo base_url()?>app/relative_agree/conform" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="eval_no" value="<?php echo $this->uri->segment("4");?>"> <?php echo @$message;?>
          <div class="form-group">
            <label for="agree">Do you agree or not?</label><br>
            <div class="form-check">
              <input type="radio" id="agreeYes" class="form-check-input" checked="checked" name="agree" value="Yes">
              <label class="form-check-label" for="agreeYes">Yes</label>
            </div>
            <div class="form-check">
              <input type="radio" id="agreeNo" class="form-check-input" name="agree" value="No">
              <label class="form-check-label" for="agreeNo">No</label>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-block" name="btnSubmit">Submit</button><br>     
        </form>
      </div>
    </div>
  </div>
</body>
</html>
