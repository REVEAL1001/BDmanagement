<style>
    .table-container {
        margin: 20px auto;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }

    .custom-table th {
        background-color: #0d8b72; /* Theme color */
        color: white;
        text-align: left;
        padding: 10px;
        font-size: 16px;
    }

    .custom-table td {
        padding: 10px;
        text-align: left;
        font-size: 14px;
    }

    .custom-table tr:nth-child(odd) {
        background-color: #f9f9f9; /* Light background for odd rows */
    }

    .custom-table tr:nth-child(even) {
        background-color: #d6f5ed; /* Theme color background for even rows */
    }

    .custom-table tr {
        border-bottom: 1px solid #ddd;
    }

    .custom-table tr:last-child {
        border-bottom: none;
    }

    .custom-table tr:hover {
        background-color: #cde4df; /* Hover effect */
    }

    .table-row {
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if (isset($users)): $i = 0; ?>
            <div class="table-container">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>D.O.B</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $u): $i++; ?>
                        <tr class="table-row">
                            <td><?= $u['first_name'] . " " . $u['last_name']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['dob']; ?></td>
                            <td><?= $u['gender']; ?></td>
                            <td><?= $u['b_type']; ?></td>
                            <td><?= wordwrap($u['address'], 26, '<br>'); ?></td>
                            <td><?= $u['city']; ?></td>
                            <td><?= $u['mobile']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
