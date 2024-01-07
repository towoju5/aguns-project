<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Management</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <?php
    // is admin logged In
    // if(!session_id() || !isset($_SESSION['userAdmin'])) header("Location: ../");
    // Include the CRUD functions file
    require_once('../crud_functions.php');

    // Handle form submissions
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['add'])) {
            $cardName = $_POST['card_name'];
            $cardNumberLength = $_POST['card_number_length'];

            // Handle file upload
            $cardLogo = uploadFile('card_logo');

            if ($cardLogo !== false && addCard($cardName, $cardLogo, $cardNumberLength)) {
                echo "<span class='text-center bg-red-600 p-3'>Card added successfully!</span>";
                header("Location: ./admin");
            } else {
                echo "Error adding card.";
            }
        } elseif (isset($_POST['update'])) {
            $id = $_POST['id'];
            $cardName = $_POST['card_name'];
            $cardNumberLength = $_POST['card_number_length'];

            // Handle file upload
            $cardLogo = uploadFile('card_logo');

            if ($cardLogo !== false && updateCard($id, $cardName, $cardLogo, $cardNumberLength)) {
                echo "Card updated successfully!";
            } else {
                echo "Error updating card.";
            }
        } elseif (isset($_POST['delete'])) {
            $id = $_POST['id'];

            if (deleteCard($id)) {
                echo "Card deleted successfully!";
            } else {
                echo "Error deleting card.";
            }
        }
    }

    // Function to handle file upload
    function uploadFile($inputName)
    {
        if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
            $tempFile = $_FILES[$inputName]['tmp_name'];
            $uploadDir = '../uploads/';  // Change this to your desired upload directory
            $uploadFile = $uploadDir . basename($_FILES[$inputName]['name']);

            if (move_uploaded_file($tempFile, $uploadFile)) {
                return $uploadFile;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    ?>

    <?php require_once('../nav.php') ?>

    <div class="container mx-auto mt-8 p-8 bg-white rounded shadow-lg">

        <h2 class="text-2xl font-semibold mb-4">Card Management</h2>

        <!-- Add Card Form -->
        <form method="post" enctype="multipart/form-data" class="mb-8">
            <div class="mb-4">
                <label for="card_name" class="block text-sm font-medium text-gray-600">Card Name:</label>
                <input type="text" name="card_name" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="card_logo" class="block text-sm font-medium text-gray-600">Card Logo (Image):</label>
                <input type="file" name="card_logo" accept="image/*" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="card_number_length" class="block text-sm font-medium text-gray-600">Card Number Length:</label>
                <input type="number" name="card_number_length" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <button type="submit" name="add" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Add Card
            </button>
        </form>

        <!-- List of Cards -->
        <h3 class="text-xl font-semibold mb-4">Card List</h3>
        <ul>
            <?php
            $cards = getAllCards();



            echo "<table class='mb-2 p-2 bg-gray-200 rounded-md w-full'><tbody>";
            foreach ($cards as $card) {
                echo "<tr class='gap-4 p-4'>
                <td class='text-lg font-semibold'>{$card['card_name']}</td> - 
                <td><img src='{$card['card_logo']}' alt='{$card['card_logo']}' class='w-10'></td> - 
                <td>{$card['card_number_length']}</td>
                <td><form method='post' class='inline ml-2'>
                    <input type='hidden' name='id' value='{$card['id']}'>
                    <button type='submit' name='delete'
                        class='text-red-500 hover:text-red-700 focus:outline-none'>
                        Delete
                    </button>
                </form>
                <a href='edit_card.php?id={$card['id']}' class='text-blue-500 ml-2'>Edit</a>
                </td>
            </tr>";
            }
            ?>
            </tbody>
            </table>

    </div>

</body>

</html>