<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type=text/css href="styles/styles.css" />
	    <?php include "google-fonts.php" ?>
	    <title>FAQ</title>
    </head>

<body>

<?php require '0-header_account.php'; ?>

<article>
    <div class='title_block'>
        <h1 class='no_pad no_margin'>FAQ</h1>
    </div>
    <p class='sticky_nav sans-serif'>
        <a href='#top'>Top</a>
        <a href='#shipping'>Shipping</a>
        <a href='#returns'>Returns</a>
        <a href='#payment'>Payment</a>
        <a href='#cs'>Customer Support</a>
		<a href='#insurance'>Insurance</a>
		<a href='#privacy'>Privacy</a>
    </p>
	<div id="faq">
		<div class="faq_item" id='shipping'>
			<h2 class="faq_question">What is your shipping policy?</h2>
			<p class="faq_answer">We offer free shipping on all orders over PHP 2000. Orders under PHP 2000 will have a shipping fee of PHP 100. Shipping times vary depending on your location, but most orders arrive within 3-5 business days.</p>
		</div>

		<div class="faq_item" id='returns'>
			<h2 class="faq_question">What is your return policy?</h2>
			<p class="faq_answer">We accept returns within 30 days of purchase. All items must be returned in their original condition and packaging. To return an item, please contact us at (XXX) XXX-XXXX for a return authorization number.</p>
		</div>

		<div class="faq_item" id='payment'>
			<h2 class="faq_question">What forms of payment do you accept?</h2>
			<p class="faq_answer">We accept all major credit cards, as well as PayPal and GCash.</p>
		</div>

		<div class="faq_item" id='cs'>
			<h2 class="faq_question">How do I contact customer support?</h2>
			<p class="faq_answer">You can contact customer support by phone at (02)8542-0699, by email at luxuriajewelryshop@gmail.com</p>
		</div>

		<div class="faq_item" id='insurance'>
			<h2 class="faq_question">What happens if my order is damaged or lost in transit?</h2>
			<p class="faq_answer">Please contact us immediately if your order is damaged or lost in transit. We will work with you to resolve the issue as quickly as possible.</p>
		</div>

		<div class="faq_item" id='privacy'>
			<h2 class="faq_question">What is your privacy policy?</h2>
			<p class="faq_answer">We respect your privacy and will never share your personal information with third parties without your consent. You can view our full privacy policy here</p>
		</div>
	</div>
</article>

<?php require '0-footer.php'; ?>

</body>
</html>

