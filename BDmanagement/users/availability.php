<head>
    <title>Availability</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">


<style>
    /* Style for the dropdown */
    select.form-control {
        font-size: 16px;
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f9fa;
        color: #333;
        cursor: pointer;
    }

    select.form-control:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    button.btn-success {
        background-color:rgb(221, 65, 65);
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    button.btn-success:hover {
        background-color: rgb(219, 26, 26);
    }

    /* Style for the table */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th {
        background-color:#0d8b72;
        color: white;
        text-align: left;
        padding: 10px;
    }

    .table td {
        padding: 10px;
        text-align: left;
    }

    .table tr:nth-child(even) {
        background-color: #d6f5ed;
    }

    .table tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .bg-danger {
        background-color: #cde4df !important;
    }

    .bg-success {
        background-color: #d4edda !important;
    }

    .emphasize {
        font-weight: bold;
        color: #28a745;
        margin-left: 10px;
    }
</style>
</head>

<?php
$i=0;
if(isset($_POST['searchBtn'])){
    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    
    $bloodType = $_POST['blood_group'];
    $donors = $db->getDonorsByBloodType($bloodType);
}
$title = "Blood Availability";
$setAvailabilityActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form class="form-inline" role='form' method="post" action="availability.php">
                <label class="form-label">Select Blood Group: </label>
                <select name="blood_group" class="form-control">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <button type="submit" class="btn btn-success" name="searchBtn">Check Availability</button>
            </form>
            <br>
            <div class="form-group">
                <?php if(isset($donors[0])): ?>
                <label>Total number of donors with <?= $donors[0]['b_type']; ?> </label><div class="emphasize"><?= count($donors); ?> Donors</div>
                <table class="table table-condensed">
                    <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>D.O.B</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Blood Group</th>
                    </thead>
                    
                    <?php foreach($donors as $d): $i++;?>
                    
                    <tr class="<?php if($i%2==0){echo 'bg-danger';} else{echo 'bg-success';} ?>">
                        <td><a href="../profile.php?id=<?= $d['id']; ?>"><?= $d['fname'] ." ".$d['mname']." ".$d['lname']; ?></a></td>
                        <td><?= $d['sex']; ?></td>
                        <td><?= $d['bday']; ?></td>
                        <td><?= wordwrap($d['h_address'],26,'<br>' ); ?></td>
                        <td><?= $d['city']; ?></td>
                        <td><?= $d['b_type']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
