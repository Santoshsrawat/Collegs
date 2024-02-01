<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap CDN link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- style start here -->
    <style>
        .add-student-section {
            margin-block: 20px;
            height: 75vh;
            width: 50%;
        }
    </style>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>


    <!-- main-section -->
    <main class="d-flex justify-content-center align-item-center">
        <!-- add new student -->
        <section class="add-student-section px-4">
            <h2 class="text-center text-capitalize mb-5 mt-4">add new student</h2>
            <form action="dataInsert.php" enctype="multipart/form-data" method="post" class="text-capitalize" id="form">
                <div class="mb-3">
                    <input type="file" class="" name="stuImage">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">name</label>
                    <input type="text" class="form-control" id="nameField" name="stuName" placeholder="Enter Your Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">address</label>
                    <input type="text" class="form-control" id="addresField" name="stuAddres" placeholder="Enter Your Address">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">phone</label>
                    <input type="tel" class="form-control" id="phoneField" name="stuPhone"
                        placeholder="Your Phone Number">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" id="btn" value="submit">
                </div>

            </form>
        </section>
    </main>

    <?php
    include 'footer.php';
    ?>


    <!-- bootstrap JavaScript CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- custom javascript -->
    <script>
        "use strict";

        let form = document.querySelector("#form");
        let nameField = document.querySelector("#nameField");
        let addresField = document.querySelector("#addresField");
        let phoneField = document.querySelector("#phoneField");


        form.addEventListener('submit', (event) => {
            let nameFieldVal = nameField.value.trim();
            let addresFieldVal = addresField.value.trim();
            let phoneFieldVal = phoneField.value.trim();

            if(nameFieldVal.length==0){
                alert("enter the name");
                event.preventDefault();
                return false;
            }else if(addresFieldVal.length==0){
                alert("enter the addres");
                event.preventDefault();
                return false;
            }else if(phoneFieldVal.length==0){
                alert("enter the phone number");
                event.preventDefault();
                return false;
            }
            return true;
        });


        // here name restriction start..
        nameField.addEventListener('keypress',(event)=>{
            let keycode=event.keyCode;

            if(keycode>=65&&keycode<=90||keycode>=97&&keycode<=122||keycode==32){
                return true;
            }else{
                event.preventDefault();
            }
        });


         // here phone restriction start..
         phoneField.addEventListener('keypress',(event)=>{
            let keycode=event.keyCode;

            if(keycode>=48&&keycode<=57&&phoneField.value.length<10){
                return true;
            }else{
                event.preventDefault();
            }
        });


         // here addres restriction start..
         addresField.addEventListener('keypress',(event)=>{

            if(addresField.value.length<50){
                return true;
            }else{
                event.preventDefault();
            }
        });

    </script>
</body>

</html>