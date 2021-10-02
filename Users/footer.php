<?php
    if(isset($_SESSION['Email']))
    {
?>

<footer class="panel panel-default sticky-footer" style="width:100%; position: absolute;">
  <div class="panel-footer">
      <div class="container-fluid">
        <div class="text-center">
          <small>Copyright &copy; YourToDo  <?php echo date('Y'); ?></small>
        </div>
      </div>
  </div>
</footer>
<?php 
}
else{
    header('location: ../index.php');
}
?>

</body>
</html>