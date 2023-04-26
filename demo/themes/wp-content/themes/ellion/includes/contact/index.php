<?php
require_once get_template_directory() . '/includes/contact/vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', get_template_directory() . '/includes/contact/vendor');
$mailLoader   = new SplClassLoader('SimpleMail', get_template_directory() . '/includes/contact/vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load(get_template_directory() . '/includes/contact/config/config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $phone   = stripslashes(trim($_POST['form-phone']));
	 $title = get_option('premiumwd_contact_mail');
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($name && $email && $emailIsValid && $subject && $message) {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $title);

        $body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html>
            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            </head>
            <body>
                <h1>{$subject}</h1>
                <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
                <p><strong>{$config->get('fields.phone')}:</strong> {$phone}</p>
                <p><strong>{$config->get('fields.message')}:</strong> {$message}</p>
            </body>
        </html>";

        $mail->setHtml($body);
        $mail->send();

        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?>
    <?php if(!empty($emailSent)): ?>
        <div class="columns nine">
            <div class="alert-success"><?php echo $config->get('messages.success'); ?></div>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="columns nine">
            <div class="alert-danger"><?php echo $config->get('messages.error'); ?></div>
        </div>
        <?php endif; ?>

    <div class="columns nine">
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded;" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="row">
               <div class="columns six">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?> *</label>
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
                <div class="columns six">
                <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?> *</label>
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                </div>
            </div>
            <div class="row">
               <div class="columns six">
                <label for="form-phone" class="col-lg-2 control-label"><?php echo $config->get('fields.phone'); ?></label>
                    <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                </div>
            	<div class="columns six">
                <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?> *</label>
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                </div>
            </div>
            <div class="row">
            <div class="columns twelve">
                <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?> *</label>
                    <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
            </div>
            </div>
            <div class="row">
					<div class="columns four">
                    <button type="submit" class="button medium black"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
            </div>
        </form>
    </div>
    <?php endif; ?>
    <!--<![endif]-->
    <script type="text/javascript" src="public/js/contact-form.js"></script>
