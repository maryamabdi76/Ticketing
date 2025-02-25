<!DOCTYPE html>

<html lang="en">
<head>
<title>Laravel DataTable - Tuts Make</title>

<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
            <br><br><br>
            <table class="table table-bordered table-hover" id="laravel_datatable">
               <thead>
                  <tr>
                    <th>آیدی</th>
                    <th>نام و نام خانوادگی</th>
                    <th>نام کاربری</th>
                    <th>تلفن همراه</th>
                    <th>ایمیل</th>
                    <th>جنسیت</th>
                    <th>تاریخ عضویت</th>
                  </tr>
               </thead>
            </table>
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({

           processing: true,
           serverSide: true,
           dataType:'POST',
           ajax: "<?php echo e(Route('admin.users.alluserdatatables')); ?>",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'username', name: 'username' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'gender', name: 'gender' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },

                 ]
        });
     });
  </script>
   </body>
</html>

<?php /**PATH C:\My Projects\Ticketing\resources\views\admin\users\users.blade.php ENDPATH**/ ?>