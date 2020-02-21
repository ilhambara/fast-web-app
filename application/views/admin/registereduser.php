<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">

            <div class="scroll">
                <table class="table table-hover mb-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role Id</th>
                            <th scope="col">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($regUser as $ru) :  ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $ru['name']; ?></td>
                                <td><?= $ru['email']; ?></td>
                                <td><?= $ru['role_id']; ?></td>
                                <td><?= $ru['is_active']; ?></td>
                                <td>

                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                <style>
                    .scroll {
                        width: 100%;
                        height: 100%;
                        overflow: scroll;
                    }
                </style>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->