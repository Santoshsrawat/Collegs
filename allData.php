<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap CDN link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <!-- main-section -->
    <main>
        <section class="alldata-section my-5">
            <div class="container p-0">
                <table class="table">
                    <thead>
                        <tr class="text-uppercase">
                            <th>id</th>
                            <th>student name</th>
                            <th> addres</th>
                            <th>student image</th>
                            <th>student phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'connection.php';


                        $query = "SELECT * FROM `student_data`";

                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['stu_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['stu_addres']; ?>
                                    </td>
                                    <td>
                                        <img src="student_images/<?php echo $row['stu_image']; ?>" alt="student image" width="100px" height="100px">
                                    </td>

                                    <td>
                                        <?php echo $row['stu_phone'] ?>
                                    </td>
                                    <td><a href="update.php?id=<?php echo $row['id'] ?>"
                                            class="btn btn-primary text-capitalize">update</a></td>
                                    <td><a href="delete.php?id=<?php echo $row['id'] ?>"
                                            class="btn btn-danger text-capitalize">delete</a></td>
                                </tr>

                            <?php }
                        } else {
                            echo "<tr>";
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td class=" fs-3 text-capitalize text-center">data no available....</td>';
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php
    include 'footer.php';
    ?>


    <!-- bootstrap JavaScript CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>