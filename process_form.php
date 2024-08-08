<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customerDetails = [
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
    ];

    $serviceDetails = [
        'Activity' => $_POST['activity'],
        'Donor Type' => $_POST['donor_type'],
        'Demand' => $_POST['demand'],
        'Transformer' => $_POST['transformer'],
        'Pole No' => $_POST['pole_no'],
        'Payment Type' => $_POST['payment_type'],
        'Tax Exempt' => isset($_POST['tax_exempt']) ? 'Yes' : 'No'
    ];

    $meterDetails = [
        'Meter Serial Number' => $_POST['meter_serial'],
        'Poletop Box' => $_POST['poletop_box'],
        'Ready Board' => $_POST['ready_board'],
        'PC1' => $_POST['pc1'],
        'PC2' => $_POST['pc2'],
        'Dead End Clamp' => $_POST['dead_end_clamp'],
        'Length of the Cable' => $_POST['cable_length']
    ];

    $locationDetails = [
        'Longitude (X)' => $_POST['longitude'],
        'Latitude (Y)' => $_POST['latitude'],
        'Address' => $_POST['address'],
        'Country' => $_POST['country'],
        'Province' => $_POST['province'],
        'District' => $_POST['district'],
        'Zone' => $_POST['zone'],
        'Community' => $_POST['community'],
        'Street' => $_POST['street']
    ];

    $data = [
        'Customer Details' => $customerDetails,
        'Service Details' => $serviceDetails,
        'Meter Details' => $meterDetails,
        'Location Details' => $locationDetails
    ];

    $jsonData = json_encode($data);
    file_put_contents('submissions.txt', $jsonData . PHP_EOL, FILE_APPEND);

    header('Location: success.php');
    exit();
}
?>
