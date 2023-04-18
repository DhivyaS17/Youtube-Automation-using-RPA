
<?php
//$conn= mysqli_connect("localhost","root","root","songs");
//$rows = mysqli_query($conn, "SELECT * FROM tamil ORDER BY this_week");
?>

<!DOCTYPE html>
<html>
    <head>
    
        <title>Tamil Songs</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

    </head>
    <body>


  <div class="container-fluid p-3 bg-dark text-white text-center">
<h1>Best of Tamil</h1>
</div>
      <div class="container">
    <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">This Week</th>
      <th scope="col">Song</th>
      <th scope="col">Artist</th>
      <th scope="col">Last Week</th>
    </tr>
  </thead>
  <tbody>
  <tr><td>1</td><td>Thai Kelavi</td><td>Thiruchitrambalam</td><td>2</td></tr>
  <tr><td>2</td><td>Life Of Pazham(From Thiruchitrambalam)</td><td>Anirudh Ravichander</td><td>4</td></tr>
  <tr><td>3</td><td>Ennai Vittu(From Love Today)</td><td>Yuvan Shankar Raja & Sid Sriram</td><td>1</td></tr>
  <tr><td>4</td><td>Kurumugil(From Sita Ramam)</td><td>Sai Vignesh & Vishal Chandrasekhar</td><td>10</td></tr>
  <tr><td>5</td><td>Alaikadal (From PS-1)</td><td>A.R.Rahman & Antara Nandy</td><td>5</td></tr>
  <tr><td>6</td><td>Pathala Pathala</td><td>Anirudh Ravichander & Kamal Haasan</td><td>3</td></tr>
  <tr><td>7</td><td>Arabic Kuthu - Halamathi Habibo</td><td>Anirudh Ravichander & Jonita Gandhi</td><td>7</td></tr>
  <tr><td>8</td><td>Private Party</td><td>Anirudh Ravichander & Jonita Gandhi</td><td>6</td></tr>
  <tr><td>9</td><td>Kanja Poovu Kannala (From Viruman)</td><td>Sid Sriram & Yuvan Shankar Raja</td><td>9</td></tr>
  <tr><td>10</td><td>Adiye (From Bachelor)</td><td>Dhibu Ninan Thomas & Kapil Kapilan</td><td>8</td></tr>
  </tbody>
</table>
      </div>    
</body>
</html>