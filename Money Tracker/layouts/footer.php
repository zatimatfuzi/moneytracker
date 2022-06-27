<script>
    if( <?php echo $_SESSION['notify'] ?> == "1"){
            $.notify({
                message: '<b>Successfully Login !!</b>',
            },{
                type: 'success',
                allow_dismiss: false
            });
    } 
     
    if( <?php echo $_SESSION['notify'] ?> == "2"){
            $.notify({
                message: '<b>Successfully Add Transaction !!</b>',
            },{
                type: 'success',
                allow_dismiss: false
            });
    } 
    
    if( <?php echo $_SESSION['notify'] ?> == "3"){
            $.notify({
                message: '<b>Successfully Delete Transaction !!</b>',
            },{
                type: 'success',
                allow_dismiss: false
            }); 
    } 

    if( <?php echo $_SESSION['notify'] ?> == "4"){
            $.notify({
                message: '<b>Successfully Update User !!</b>',
            },{
                type: 'success',
                allow_dismiss: false
            }); 
    } 

    if( <?php echo $_SESSION['notify'] ?> == "5"){
            $.notify({
                message: '<b>Update User Failed !!</b>',
            },{
                type: 'danger',
                allow_dismiss: false
            }); 
    } 

    if( <?php echo $_SESSION['notify'] ?> == "6"){
            $.notify({
                message: '<b>Successfully Change Password !!</b>',
            },{
                type: 'success',
                allow_dismiss: false
            }); 
    } 

    if( <?php echo $_SESSION['notify'] ?> == "7"){
            $.notify({
                message: '<b>Successfully Registered !!</b>',
            },{
                type: 'success',
                allow_dismiss: false
            });
    } 
    <?php $_SESSION['notify'] =  "0"; ?>
</script>
</body>
</html>