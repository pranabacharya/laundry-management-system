<script>
    function alertMsg(msg, classname){
        removeAlert();
        let div = document.createElement("div");
        div.className = "alert "+classname;
        div.innerText = msg;
        document.body.insertAdjacentElement("afterbegin", div);
        setTimeout(()=> {
            removeAlert();
        }, 3000)
    }
    const removeAlert = () => {
        if(document.querySelector(".alert")){
            document.querySelector(".alert").remove();
        }
    }
    <?php
    $status = getSession("status")??"";
        if($status){
            ?>
            alertMsg('<?= $status; ?>', "success");
            <?php
        }
        deleteSession("status");
    ?>
</script>
</body>
</html>