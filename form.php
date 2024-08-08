<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Slider Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        html {
            height: 100%;
        }

        button.btn.btn-primary {
            margin-top: -33%;
            border-radius: 100%;
        }

        .container {
            max-width: 600px;
            margin: auto;
            width: 100%;
            margin-top: 11%;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 31px;
            position: relative;
        }

        .tab {
            display: none;
        }

        .tab.active {
            display: block;
            margin-top: -33%;
        }

        h2 {
            margin: 0 0 20px;
            padding: 0;
            margin-top: 13%;
            color: black;
            text-align: center;
        }

        .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            height: 2pc;
            padding: 10px 0;
            font-size: 16px;
            color: #545151;
            border: none;
            border-bottom: 1px solid #545151;
            outline: none;
            background: transparent;
        }

        .form-group label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #545151;
            pointer-events: none;
            transition: .5s;
        }

        .form-group input:focus ~ label,
        .form-group input:valid ~ label {
            top: -20px;
            left: 0;
            color: #545151;
            font-size: 12px;
        }

        .form-group.gender-group {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .form-group.gender-group label {
            position: static;
            pointer-events: auto;
        }

        .form-group.gender-group input {
            width: auto;
            height: auto;
            margin-left: 5px;
        }

        .submitted-data {
            margin-top: 20px;
            color: #000;
        }

        pre {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 5px;
        }

        .slider-icons {
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .slider-icons div {
            cursor: pointer;
            font-size: 24px;
            color: #007BFF;
            transition: color 0.3s, transform 0.3s;
        }

        .slider-icons div:hover {
            color: #03e9f4;
            transform: scale(1.2);
        }

        button.btn.btn-success {
            margin-left: 86%;
            margin-top: -49%;
            border-radius: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="POST" action="admin.php">
        <div class="tab-nav mb-4">
            <button class="btn btn-primary" type="button" onclick="prevTab()">
                <i class="bi bi-arrow-left"></i>
            </button>
            <button class="btn btn-primary" type="button" onclick="nextTab()">
                <i class="bi bi-arrow-right"></i>
            </button>
            <button class="btn btn-success" type="submit">
                <i class="bi bi-check"></i>
            </button>
        </div>

        <div class="tab active">
            <h2>Customer Details</h2>
            
            <div class="form-group">
                <input type="text" id="surname" name="surname" required>
                <label>Surname</label>
            </div>
            <div class="form-group">
                <input type="text" id="first_name" name="first_name" required>
                <label>First Name</label>
            </div>
            <div class="form-group">
                <input type="text" id="second_name" name="second_name" required>
                <label>Second Name</label>
            </div>
            <div class="form-group">
                <input type="text" id="document_type" name="document_type" required>
                <label>Document Type</label>
            </div>
            <div class="form-group">
                <input type="text" id="document_number" name="document_number" required>
                <label>Document Number</label>
            </div>
            <div class="form-group">
                <input type="date" id="dob" name="dob" required>
                <label></label>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="form-group">
                <input type="tel" id="phone1" name="phone1" required>
                <label>Phone 1</label>
            </div>
            <div class="form-group">
                <input type="tel" id="phone2" name="phone2">
                <label>Phone 2</label>
            </div>
            <div class="form-group gender-group">
                <label>Gender:</label>
                <label>
                    <input type="radio" name="gender" value="male" required> Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female" required> Female
                </label>
                <label>
                    <input type="radio" name="gender" value="other" required> Other
                </label>
            </div>
        </div>

        <div class="tab">
            <h2>Service</h2>
            <div class="form-group">
                <input type="text" id="activity" name="activity" required>
                <label>Activity</label>
            </div>
            <div class="form-group">
                <input type="text" id="donor_type" name="donor_type" required>
                <label>Donor Type</label>
            </div>
            <div class="form-group">
                <input type="text" id="demand" name="demand" required>
                <label>Demand</label>
            </div>
            <div class="form-group">
                <input type="text" id="transformer" name="transformer" required>
                <label>Transformer</label>
            </div>
            <div class="form-group">
                <input type="text" id="pole_no" name="pole_no" required>
                <label>Pole No</label>
            </div>
            <div class="form-group">
                <input type="text" id="payment_type" name="payment_type" required>
                <label>Payment Type</label>
            </div>
            <div class="form-group">
                <label>Tax Exempt</label>
                <input type="checkbox" name="tax_exempt">
            </div>
        </div>

        <div class="tab">
            <h2>Meter Details</h2>
            <div class="form-group">
                <input type="text" id="meter_serial" name="meter_serial" required>
                <label>Meter Serial Number</label>
            </div>
            <div class="form-group">
                <input type="text" id="poletop_box" name="poletop_box" required>
                <label>Poletop Box</label>
            </div>
            <div class="form-group">
                <input type="text" id="ready_board" name="ready_board" required>
                <label>Ready Board</label>
            </div>
            <div class="form-group">
                <input type="text" id="pc1" name="pc1" required>
                <label>PC1</label>
            </div>
            <div class="form-group">
                <input type="text" id="pc2" name="pc2" required>
                <label>PC2</label>
            </div>
            <div class="form-group">
                <input type="text" id="dead_end_clamp" name="dead_end_clamp" required>
                <label>Dead End Clamp</label>
            </div>
            <div class="form-group">
                <input type="text" id="cable_length" name="cable_length" required>
                <label>Length of the Cable</label>
            </div>
        </div>

        <div class="tab">
            <h2>Location</h2>
            <div class="form-group">
                <input type="text" id="longitude" name="longitude" required>
                <label>Longitude (X)</label>
            </div>
            <div class="form-group">
                <input type="text" id="latitude" name="latitude" required>
                <label>Latitude (Y)</label>
            </div>
            <div class="form-group">
                <input type="text" id="address" name="address" required>
                <label>Address</label>
            </div>
            <div class="form-group">
                <input type="text" id="country" name="country" required>
                <label>Country</label>
            </div>
            <div class="form-group">
                <input type="text" id="province" name="province" required>
                <label>Province</label>
            </div>
            <div class="form-group">
                <input type="text" id="district" name="district" required>
                <label>District</label>
            </div>
            <div class="form-group">
                <input type="text" id="zone" name="zone" required>
                <label>Zone</label>
            </div>
            <div class="form-group">
                <input type="text" id="community" name="community" required>
                <label>Community</label>
            </div>
            <div class="form-group">
                <input type="text" id="street" name="street" required>
                <label>Street</label>
            </div>
        </div>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'Customer Details' => [
            'Surname' => $_POST['surname'],
            'First Name' => $_POST['first_name'],
            'Second Name' => $_POST['second_name'],
            'Document Type' => $_POST['document_type'],
            'Document Number' => $_POST['document_number'],
            'Date of Birth' => $_POST['dob'],
            'Email' => $_POST['email'],
            'Phone 1' => $_POST['phone1'],
            'Phone 2' => $_POST['phone2'],
            'Gender' => $_POST['gender']
        ],
        'Service Details' => [
            'Activity' => $_POST['activity'],
            'Donor Type' => $_POST['donor_type'],
            'Demand' => $_POST['demand'],
            'Transformer' => $_POST['transformer'],
            'Pole No' => $_POST['pole_no'],
            'Payment Type' => $_POST['payment_type'],
            'Tax Exempt' => isset($_POST['tax_exempt']) ? 'Yes' : 'No'
        ],
        'Meter Details' => [
            'Meter Serial Number' => $_POST['meter_serial'],
            'Poletop Box' => $_POST['poletop_box'],
            'Ready Board' => $_POST['ready_board'],
            'PC1' => $_POST['pc1'],
            'PC2' => $_POST['pc2'],
            'Dead End Clamp' => $_POST['dead_end_clamp'],
            'Length of the Cable' => $_POST['cable_length']
        ],
        'Location Details' => [
            'Longitude (X)' => $_POST['longitude'],
            'Latitude (Y)' => $_POST['latitude'],
            'Height' => $_POST['height'],
            'Floor' => $_POST['floor'],
            'Nearest Road' => $_POST['nearest_road'],
            'House Number' => $_POST['house_no'],
            'Area Type' => $_POST['area_type']
        ]
    ];

    $jsonData = json_encode($data) . PHP_EOL;
    file_put_contents('submissions.txt', $jsonData, FILE_APPEND);
}
?>
</div>

<div class="slider-icons">
    <div onclick="showTab(0)"><i class="bi bi-person"></i></div>
    <div onclick="showTab(1)"><i class="bi bi-gear"></i></div>
    <div onclick="showTab(2)"><i class="bi bi-grid"></i></div>
    <div onclick="showTab(3)"><i class="bi bi-geo-alt"></i></div>

</div>

<script>
    let currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach((tab, index) => {
            tab.classList.toggle('active', index === n);
        });
        currentTab = n;
    }

    function nextTab() {
        const tabs = document.querySelectorAll('.tab');
        if (currentTab < tabs.length - 1) {
            currentTab++;
            showTab(currentTab);
        }
    }

    function prevTab() {
        if (currentTab > 0) {
            currentTab--;
            showTab(currentTab);
        }
    }
</script>

</body>
</html>
