<div class="nbutton d-flex justify-content-center mt-3">
   <button type="button" onclick="switchlistAll()" class="btn btn-secondary m-2" btn-lg btn-block">All</button>
   <button type="button" onclick="switchlist()" class="btn btn-secondary m-2" btn-lg btn-block">New</button>
</div>
<div class="col-lg offset-lg mt-3 rounded bg-light text-center "  id="all"  style="display:block">
   <table class="table">
       <thead>
           <tr class="btn-success">
               <th>ID</th>
               <th>User ID</th>
               <th>Damage</th>
               <th>Collect</th>
               <th>Date</th>
             
               <th>DELETE</th>
           </tr>
       </thead>
       <?php 

       include 'config.php';

       $sql= "SELECT * FROM servicing";

       $result= mysqli_query($conn,$sql);

       if($row=mysqli_num_rows($result)>0){
           while($row=mysqli_fetch_assoc($result)){
		   
           

       ?>
       <tbody>
           <tr>
            <td><?=$row['service_id']?></td>
            <td><?=$row['User_id']?></td>
            <td><?=$row['damage']?></td>
            <td><?=$row['Collect']?></td>
            <td><?=$row['date']?></td>
            <td><a href="ServiceDelete.php?id=<?=$row['service_id']?>" class="btn btn-danger">DELETE</a></td>
           </tr>
           <?php }
		} ?>
       </tbody>
   </table>

</div>

<div class="col-lg offset-lg mt-3 rounded bg-light text-center "  id="new"  style="display:none">
   <table class="table">
       <thead>
           <tr class="btn-success">
               <th>ID</th>
               <th>User ID</th>
               <th>Damage</th>
               <th>Collect</th>
               <th>Date</th>
             
               <th>DELETE</th>
           </tr>
       </thead>
       <?php 

       include 'config.php';
       $usertime = date('Y-m-d');

       $sql= "SELECT * FROM servicing  WHERE date = '$usertime'";

       $result= mysqli_query($conn,$sql);

       if($row=mysqli_num_rows($result)>0){
           while($row=mysqli_fetch_assoc($result)){
		   
           

       ?>
       <tbody>
           <tr class="bg-warning">
            <td><?=$row['service_id']?></td>
            <td><?=$row['User_id']?></td>
            <td><?=$row['damage']?></td>
            <td><?=$row['Collect']?></td>
            <td><?=$row['date']?></td>
            <td><a href="ServiceDelete.php?id=<?=$row['service_id']?>" class="btn btn-danger">DELETE</a></td>
           </tr>
           <?php }
		} ?>
       </tbody>
   </table>

</div>

    <script>
 
 function switchlist() {
    var x = document.getElementById("all");
    var y = document.getElementById("new");
    if (x.style.display === "block") {
        y.style.display = "block"
        x.style.display = "none";
    }
   
}
    function switchlistAll() {
    var x = document.getElementById("all");
    var y = document.getElementById("new");
    if (x.style.display === "none") {
        y.style.display = "none"
        x.style.display = "block";
    }
    }
  </script>